 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./Css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@1&family=Bebas+Neue&display=swap" rel="stylesheet">
  </head>

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
                            <a href="http://mbomarina.nl/register"><p>I'm new here</p></a>
                            <a href="">Forgot Password</a>
                            <a href="http://mbomarina.nl/">Home</a>
                        </div>
                    </div>
              </div>
            </div>
     </div>
  </body>
