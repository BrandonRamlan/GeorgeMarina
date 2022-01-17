<?php
if (!(isset($_GET["content"]) && isset($_GET["email"]) && isset($_GET["pwh"]))) {
  header("Location: ./index.php?content=message&alert=hacker-alert");
  exit();
}

include("./connect_db.php");
include("./functions.php");
// include("./k-home.php");

$email = sanitize($_GET["email"]);

 // var_dump(check_userrole($email, 'klant'));exit();

if (!check_userrole($email, array('klant', 'eigenaar', 'docent', 'begeleider')) )
{
  header("Location: ./index.php?content=message&alert=wrongactivationpage");
  exit();
} 
else {
?>

<head>
  <link rel="stylesheet" type="text/css" href="./Css/AStyle.css">
</head>

<div class="container">
  <div class="card">
    <div class="inner-box" id="card">
      <div>
        <h2> ACTIVER</h2>
        <form id="activate" action="./index.php?content=activate_script" method="post">
          <div class="form-group">
            <label  for="inputPassword">Kies een nieuw wachtwoord</label>
            <input name="password" type="password" class="form-control" id="inputPassword"  aria-describedby="passwordHelp" autofocus>

            <label for="inputPasswordCheck">Type het wachtwoord opnieuw:</label>
            <input name="passwordCheck" type="password" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
          </div>
          <div class="form-group">
            <label for="inputPasswordCheck">Voornaam:</label>
            <input name="firstname" type="text" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
            <label for="inputPasswordCheck">Tussenvoegsel:</label>
            <input name="infix" type="text" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
            <label for="inputPasswordCheck">Achternaam:</label>
            <input name="lastname" type="text" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
            <label for="inputPasswordCheck">Mobiel:</label>
            <input name="mobile" type="tel" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
          </div>
          <button type="submit" class="submit-btn">Submit</button>
          <input type="hidden" name="email" value="<?php echo $_GET["email"]; ?>">
          <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
        </form>
      </div>
    </div>
  </div>
</div> 
  <?php
}
?>
