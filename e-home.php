<?php
  include("./functions.php");
  is_authorized(["eigenaar"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>Document</title>
  <style>
    body{
      font-family: 'Roboto', sans-serif;

    }

    *{
      margin: 0;
      padding: 0;
      list-style: none;
      text-decoration: none;

    }

     .sidebar{
      position: fixed;
      left: 0px; 
      width: 250px;
      height: 100%;
      background: #042331;
      transition: all .5s ease;
    }

    .sidebar header{
      font-size: 22px;
      color: white;
      text-align: center;
      line-height: 70px;
      background: #063146;
      user-select: none;

    }
    .sidebar ul a{
      display: block;
      height: 100%;
      width: 100%;
      line-height: 65px;
      font-size: 20px;
      color: white;
      padding-left: 40px;
      box-sizing: border-box;
      border-top: 1px solid rgba(255, 255,255,.1);
      border-bottom: 1px solid black;
      transition: .4s;
    }
    ul li:hover a{
      padding-left: 50px;
    } */
     .sidebar ul a i{
      margin-right: 16px;
    }
     #check{
      display: none;

    }
     label #btn,label #cancel{
      position: absolute;
      cursor: pointer;
      background: #042331;
      

    } 
   
    }
    section{
      image: url(bg.jpg) no-repeat;
      position: center;
      width: 50px;
      height: 50vh;
      transition: all .5s; */
    } 
   
  </style>
</head>
<body>
  

  <div class="sidebar">
    <header>My App</header>
    <ul>
      <li><a href="/index.php?content=e-home"><i class="fas fa-qrcode"></i>Dashboard</a></li>
      <li><a href="/index.php?content=read"><i class="fas fa-stream"></i>Reserveringen</a></li>
      <li><a href="/index.php?content=b-rooster"><i class="fas fa-calendar-week"></i>Rooster</a></li>
      <li><a href="/index.php?content=aboutus"><i class="fas fa-question-circle"></i>About</a></li>
      <li><a href="./index.php?content=logout"><i class="fas fa-arrow"></i>Logout</a></li>
    </ul>
  </div>
  <section>
  <img src="./bg.jpg" alt="vegetablejuice" class="img-fluid w-100">
  </section>
  
</body>
</html>

