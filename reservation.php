<?php
  include("./functions.php");
  // var_dump($_SESSION);exit();
  is_authorized(["klant"]);
  
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Reservering!</title>
  <style>
    body {
      font-family: 'Raleway', sans-serif;
      font-weight: 400;
      letter-spacing: 1px;

    }

    .container {
      background: linear-gradient(to bottom, #FFFFFF, #00EAFF, #fff);
      margin: 100px;
      box-shadow: 25px 10px 15px rgba(0, 0, 0, 0.1);
      display: flex;
      grid-template-columns: 40% 100%;
    }


    .container-form {
      padding: 20px 0;
      margin: 0 auto;
      color: #000;
    }

    form {
      display: grid;
      grid-row-gap: 20px;
    }

    form p {
      font-weight: 600;
    }

    .form-field {
      display: flex;
      justify-content: space-between;
    }

    input,
    select {
      padding: 10px 15px;
    }

    .btn {
      background-color: rgba(0, 0, 0, .95);
      color: #fff;
      padding: 10px 20px;
      border: none;
      font-size: 18px;
      border-radius: 100px;
    }

    .btn1 {
      background-color: rgba(0, 0, 0, .95);
      color: #fff;
      padding: 10px 20px;
      border: none;
      font-size: 18px;
      border-radius: 100px;
    }



    li a:hover {
      background-color: #9B877F;
    }

    button[type=submit]:hover {}
  </style>
</head>

<body style="Backgroundcolor:#c9c0b9;">
  <img src="./image/food/mboutrecht.png" alt="MBO"
    style="width:10%;  display: block; margin-left: auto; margin-right: auto;">
<!-- hier begint het formulier --> 
  <div class="container mt-4">
    <div class="row">
      <div class="col-12 col-sm-6">
        <!-- hier begint het formulier van date and time -->
        <form action="index.php?content=reservation_script" method="post">
          <h2 class="heading heading-yellow">Reservation Online</h2>


          <div class="form-field">
            <p>Date</p>
            <input name="date" type="date" value="y-m-d" min="2021-10-01" max="2021-12-31">
          </div>
          <div>
            <p>Hoe laat wilt u komen:</p>
            <label for="inputMaxPersons"></label>
            <select name="time" id="InputTime">
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
              <option value="20:00">20:00</option>

            </select>
          </div>

          <div>
            <p>aantal personen</p>
            <label for="inputMaxPersons"></label>
            <select class="form-select form-select-xs" aria-label=".form-select-xs example" type="select"
              name="max_persons">

              <option value="1">1 person</option>
              <option value="2">2 personen</option>
              <option value="3">3 personen</option>
              <option value="4">4 personen</option>
              <option value="5">5 personen</option>
              <option value="6">6 personen</option>


            </select>
            <br>
            <div>
              <p>..Message</p>
              
              <label for="inputMessage"></label>
              <input type="text" id="message" name="message"><br>
            
            </div>
          </div>

        

          <button class="btn" type="submit">Volgende</button>
          

          <!-- <button class="btn1" type="cancel">Cancel</button> -->
          <!-- hier eindigt het formulier -->
        </form>
      </div>
      <!-- hier is het overzicht van de tafels -->
      <div class="col-12 col-sm-6">
        <img src="./image/food/1.png" alt="kersen" class="w-75 mx-auto d-block">
      </div>
    </div>
  </div>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
</body>

</html>