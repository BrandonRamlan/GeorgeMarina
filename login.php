<!doctype html>
<html lang="en">
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@1&family=Bebas+Neue&display=swap" rel="stylesheet">
  </head>

  <style>
      body{
         height: 100vh;
            background: linear-gradient(to bottom, #FFFFFF, #00EAFF, #fff);
      }
      .container{
        width: 100%;
        height: 100vh;
        font-family: sans-serif;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card{
        width: 350px;
        height: 500px;
        box-shadow: 0 0 40px 20px rgba(0,0,0,0.1);
        perspective: 1000px;
    }
    .inner-box{
        position: relative;
        width: 100%;
        height: 100%;
        transform-style:preserve-3d;
        transition: transform 1s;
    }

    .card-front, .card-back{
        position: absolute;
        width: 100%;
        height: 100%;
        background-position: center;
        background-size: cover;
        padding: 55px;
        box-sizing: border-box;
        backface-visibility: hidden;
    }


    .card h2{
        margin-bottom: 20px;
        text-align: center;
        text-transform: uppercase;
        font-family: verdana;
        font-size: 2em;
        font-weight: 50;
        color: #000000;
        text-shadow: 1px 1px 1px #000000,
            1px 2px 1px #000000,
            1px 3px 1px #000000,
            1px 4px 1px #000000,
        1px 18px 6px rgba(16,16,16,0.4),
        1px 22px 10px rgba(16,16,16,0.2),
        1px 25px 35px rgba(16,16,16,0.2),
        1px 30px 60px rgba(16,16,16,0.4);
    }

    .form-control{
        width: 100%;
        background: transparent;
        border: 1px solid #000;
        margin: 30px 0;
        height: 35px;
        border-radius: 20px;
        padding: 0 10px;
        box-sizing: border-box;
        outline: none;
        text-align: center;
        color: #000;
    }

    ::placeholder{
        color: #000;
        font-size: 12px;
    }

    button{
        width: 100%;
        background: transparent;
        border: 1px solid #000;
        margin: 35px 0 10px;
        height: 32px;
        font-size: 12px;
        border-radius: 20px;
        padding: 0 10px;
        box-sizing: border-box;
        outline: none;
        color: #000;
        cursor: pointer;
    }

    .submit-btn{
        position: relative;
    }


    span{
        font-size: 13px;
        margin-left: 10px;
    }

   

    .card a{
        color: #000;
        text-decoration: none;
        display: block;
        text-align: center;
        font-size: 15px;
        margin-top: 20px;
    }
  </style>
  <body>
        <div class="container">
             <div class="card">
                    <div class="inner-box" id="card">
                        <div class="card-front">
                            <h2> LOGIN </h2>
                            <form  action="./index.php?content=login_script" method="post">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp"  placeholder="your email id" required autofocus>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" placeholder="your password" required>
                            </div>
                                <button type="submit" class="submit-btn">Submit</button>
                                <input type="checkbox"><span>Remember me</span>
                            </form>
                            <a href="./register.php"><p>I'm new here</p></a>
                            <a href="">Forgot Password</a>
                            <a href="http://mbomarina.nl/">Home</a>
                        </div>
                    </div>
              </div>
            </div>
     </div>

    
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>