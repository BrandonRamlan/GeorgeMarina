<?php

// var_dump($_POST);exit();

 include("./connect_db.php");
 include("./functions.php");


 $date = sanitize($_POST["date"]);
 $time = sanitize($_POST["time"]);
 $max_persons = sanitize($_POST["max_persons"]);
 $message = sanitize($_POST["message"]);
 $email = $_SESSION["email"];
 


 $sql = "SELECT `id`
         FROM `tafel`
         WHERE NOT EXISTS (SELECT *
                          FROM `reservering`
                          WHERE `datum` ='$date'
                          AND   `tijd`  ='$time'
                          AND   `reservering`.`tafel` = `tafel`.`id`)
         AND   `tafel`.`max_aantal_personen` = $max_persons";
        
//  echo $sql;exit();
 $result = mysqli_query($conn,$sql);

 $record = mysqli_fetch_assoc($result);

 if ($record != NULL) {
    $tabel_id = $record['id'];             

    $sql =  "INSERT INTO `reservering` (`datum`,
                                        `tijd`, 
                                        `tafel`, 
                                        `max_aantal_personen`, 
                                        `message`,
                                        `email_klant`) 
                VALUES                 ('$date', 
                                        '$time', 
                                        '$tabel_id',
                                        '$max_persons',
                                        '$message',
                                        '$email')";
        // echo $sql;exit();
    $result = mysqli_query($conn,$sql);

  

    if ($result) {
        $id = mysqli_insert_id($conn);
        
        $to = $email;
        $subject = "reservation voor uw account van http://www.desg.com/";
        include("./reservation_email.php");

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: admin@Georgemarine.com\r\n";
        $headers .= "Cc: docent@georgemarine.com\r\n";
        $headers .= "Pcc: begeleidert@georgemarine.com";

        mail($to, $subject, $message, $headers);

        header("Location: ./index.php?content=message&alert=reservation_success");
    }
} else {
        header("Location: ./index.php?content=message&alert=reservation_error");
}


    
 
?>