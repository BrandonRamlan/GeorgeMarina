<?php

  include("./functions.php");
  is_authorized(["eigenaar"]);

  include("./connect_db.php");

  $sql = "SELECT * 
          FROM `klant`, `resevering`
          WHERE `klant` . `email` = `resevering` . `email_klant` 
          ORDER BY `datum`, `tijd` ASC";

  $result = mysqli_query($conn, $sql);

  $table_content = "";

  while ($record = mysqli_fetch_assoc($result)) {
        $table_content .= "<tr><td>" . $record["voornaam"] . "</td> " .
                              "<td>" . $record["tussenvoegsel"] . "</td>" .
                              "<td>" . $record["achternaam"] . "</td> " .
                              "<td>" . $record["mac_aantal_personen"] . "</td> " .
                              "<td>" . $record["tafel"] . " </td>" .
                              "<td>" . $record["mobile"] . "</td> " .
                              "<td>" . date_format(date_create($record["datum"]), "d-m-y") . "</td> " .
                              "<td>" . date_format(date_create($record["tijd"]), "H:i") . " </td>" .
                              "<td>" . "18-11-2021" . "</td></tr>";
    //   var_dump($record);
  }
?>

<div class="container mt-3">
    <div class="row">
        <h3>Overzicht reseveringen</h3>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Voornaam</th>
                    <th scope="col">Tussevoegsel</th>
                    <th scope="col">Achternaam</th>
                    <th scope="col">Aantalpersonnen</th>
                    <th scope="col">Telefoonumeer</th>
                    <th scope="col">ReserveringDatum</th>
                    <th scope="col">Tijd</th>
                    <th scope="col">Datum</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $table_content; ?>
            </tbody>
        </table>
    </div>
</div>