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
  <body> 

    <div class="container">
      <!--Begin van het Landing page -->
      <div class="row"> <!--Lijn nummber 1-->
        <div class="col-12 border-bottom border-dark ">
          <!-- Zo dat ik de border kan hebben -->
        </div>
      </div><br>
      
      <div class="row">
        <!-- Begin van col 1  -->
        <div class="col-3"> 
          <div class="row border-bottom border-dark"><!--Openings Hours Col-->
            <div class="col-12">
               <h1 id="Title"> OPENING HOURS </h1><br><br>
                
                <p style="font-family:Comic Sans;" class="text-center ">OPEN DAILY FROM
                11A.M. TILL LATE</p><br>
                
                <p style="font-family:Comic Sans;" class="text-center">We'll rock your boat at George Marina
                On sunny days we have valet parking for a fee of €12,50 during lunch and €15 during dinner</p><br>
            </div>
          </div>

          <div class="row border-top"> <!--Contact Col -->
            <div class="col-12">
            <h4 id="Title">CONTACT</h4><br>
            <a id="Contact" href="https://www.georgemarina.nl/">
              <p>MAPS</p>
              <p>E-MAIL</p>
              <p>PHONE</p> 
            </a>
            </div>
          </div>
        </div>
        <!-- einde van col 1 -->

        <!-- Begin van col 2 -->
        <div class="col-6 border-end border-start border-dark">
          <div style="text-align:center">   <!--This is Us Col-->
           <h1 id="Title">THIS IS US</h1><br>
            <p style="font: italic bold 12px/30px Georgia, serif;">THIS IS US
              George Marina is set in a spectacular, three storey waterside building in the upcoming Amstelkwartier, 
              right along the banks of the Amstel river that flows into Amsterdam's iconic canals.</p>

              <p style="font: italic bold 12px/30px Georgia, serif;">
              With large windows overlooking the marina in front, 
              an open kitchen and sushi counter, lush plants,
              a striking 360 green marble bar and an eye-catching staircase right in the middle of the restaurant,
              it's also our cuisine that will leave a long lasting impression. Being so close to the water, 
              we're famous for our seafood and sushi platters, but you might as well order steak frites, 
              a juicy bistro burger or a veggie dish. A great all-day hangout for breakfast, 
              lunch, dinner or Friday night cocktails accompanied by a live set from our resident DJ.</p>

              <p style="font: italic bold 12px/30px Georgia, serif;">
              Despite our restaurants' modern allure, our large, sunny terrace has more of a Côte d'Azur feel –
               especially in the summer when guests coming from the canals dock their boats in the marina, 
               and enjoy a drink while watching the sunset. No matter what season and what time of the day though, 
               George Marina is a great place to escape hectic, daily life – if only for one day.   
              - fin -
            </p>
          </div>
          <p class="text-center"> ↫ ↬</p>
        </div>
        <!-- Einde van col 2 -->
        
        <!-- Begin van col 3 -->
        <div class="col-3"> <!-- Menu col-->
          <div class="row border-bottom border-dark">
            <div class="col-12">
               <h1 id="Title"> MENU </h1><br>
               <a id="Menu" href="https://www.georgemarina.nl/">
                <p>FOOD</p><br>
                <p>DRINKS</p>
              </a>
            </div>
          </div> <!--Einde Menu col-->

          <div class="row border-top border-dark"> <!-- Reserveren col-->
            <div class="col-12">
              <a id="Book" href="https://www.georgemarina.nl/">
                <p> BOOK MY TABLE </p>
            </a>
            </div>
          </div><br>
        </div> <br><br><!--einde van reserveren col-->
      </div><br>
      <!-- Hier eindig the Eerste col -->

      <!-- --------------------------------------------------------------------------------------------------------------------------  -->
      
      <!-- Hier begin the carousel van eeten alleen -->
      <div class="row">
        <div class="col-12 border-top border-dark"><br>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./image/food/1.jpg" class="d-block w-100" width="1200" height="600" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./image/food/2.jpg" class="d-block w-100" width="1200" height="600" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./image/food/3.jpg" class="d-block w-100" width="1200" height="600" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./image/food/5.jpg" class="d-block w-100" width="1200" height="600" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./image/food/10.jpg" class="d-block w-100" width="1200" height="600" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden ">Next</span>
            </button>
          </div>
        </div>
      </div><br>
      <!-- Hier eindig the carousel -->
      
      <!-- ---------------------------------------------------------------------------------------- -->
    
      <div class="row"> <!--Lijn nummber 2-->
        <div class="col-12 border-top border-dark ">
          <!-- Zo dat je de lijn can zien -->
        </div>
      </div><br>
      
     <div class="row">
        <!-- Begin van nieuwe col 1  -->
        <div class="col-3"> <!--Book Event Col-->
          <div class="row border-bottom border-dark">
            <div class="col-12">
               <h1 id="Title"> BOOK EVENT </h1>
                
                <h1 id="Title">MORE INFORMATION</h1><br>
                
                <p style="font-family:Comic Sans;" class="text-center">
                 In search of an inspiring, creative meeting space that's
                 all about quality, comfort and a relaxed atmosphere?
                  We're here to make it happen for you. </p>
            </div>
          </div>

          <div class="row border-top border-dark"> <!--   Carees col-->
            <div class="col-12"><br><br>
              <a id="Book" href="https://www.georgemarina.nl/">
                <p>CAREERS</p>
            </a>
            </div>
          </div><br>
        </div><!-- einde van col 1 -->
        
        
        <div class="col-6"><!-- Begin van nieuwe col 2 -->
          <div class="border-end border-start border-dark">
            <div>    
              <a id="Book" href="https://www.georgemarina.nl/">
                <h1 id="Title">TAKE ME BACK TO GEORGE.AMSTERDAM</h1><br>
              </a>
            </div>
            <div class="col-12">
              <a style="text-decoration: none;
                        color:black; 
                      font-family:Comic Sans;" class="text-center" href="https://www.georgemarina.nl/">
                <p>GEORGE W.P.A.</p>
                <p>CAFÉ GEORGE</p>
                <p>GEORGE MARINA</p>
                <p> GEORGE L.A.</p>
                <p> GEORGE BISTRO BISTRO</p>
                <p> CAFÉ GEORGETTE</p>
                <p> LE PETIT GEORGE</p>
                <p> BISTRO G.P. BY GEORGE</p>
              </a>
           </div>

            <p class="text-center">Click one of our other venues to discover what George has to offer.</p>
          </div>
        </div><!-- Einde van col 2 -->
        
        <!-- Begin van nieuwe col 3 -->
        <div class="col-3"> <!-- COME QUICKLY col-->
          <div class="row">
            <div class="col-12">
            <img src="./image/food/4.png" alt="Girl in a jacket" width="250" height="350"><br>

            <p>"COME QUICKLY, I’M TASTING THE SUNSET AND THE STARS"</p>

            <p>- DOM PERIGNON -</p>
          </div>
          </div> <!--Einde COME QUICKLY col-->
        </div> <br><br><!--einde van reserveren col-->
      </div><br>
      <!-- Hier eindig the col -->

      <!-- ---------------------------------------------------------- -->

      <!-- hier begint een nieuwe carousel van Drink -->
      <div class="row">
        <div class="col-12 border-top border-dark"><br>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./image/food/7.gif" class="d-block w-100" width="1200" height="500" alt="...">
              </div>
              
            </div>
          </div>
        </div>
      </div><br>
      <!-- hier eindig de carousel ven de drinks -->

      <!-- --------------------------------------------------------------------- -->

      <div class="row"><!--Lijn nummber 3-->
        <div class="col-12 border-top border-dark ">
          <!-- zo dat je de lijn kan zien  -->
        </div>
      </div><br>

      <div class="row">
        <!-- Begin van een nieuwe col 1  -->
        <div class="col-3"> <!--Picture Col-->
          <div class="row ">
            <div class="col-12">
              <img src="./image/food/13.png" alt="Girl in a jacket" width="250" height="350"><br>
            </div>
          </div>
        </div>
        <!-- einde Picture col -->

        <!-- Begin van nieuwe col 2 -->
        <div class="col-6 border-end border-start border-dark">
            <div>   <!--GEORGE HOURS Col--> 
              <h1 id="Title">GEORGE HOURS</h1><br>
            </div>
          <div style="text-align:center">    
              <p>NYC 8:14 AM</p>
              <p>AMS 2:14 PM</p> 
              <p>LA 5:14 AM</p>
              <p> PAR 2:14 PM</p>
              <p> LDN 1:14 PM</p>
              <p>TYO 9:14 PM</p>
              </p>
          </div>
        </div>
        <!-- Einde van col 2 -->
        
        <!-- Begin van col 3 -->
        <div class="col-3"> <!-- Picture col-->
          <div class="row ">
            <div class="col-12">
              <img src="./image/food/11.png" alt="Girl in a jacket" width="250" height="350"><br>
            </div>
          </div> <!--Einde Picture col-->
        </div><!--einde Picture col-->
      </div><br>  
      <!-- einde van een nieuwe col -->
      <!-- ------------------------------------------------------------- -->

      <!-- hier begint de gif carousel -->
      <div class="row">
        <div class="col-12 border-top border-dark"><br>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./image/food/7.gif" class="d-block w-100" width="1200" height="400" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div><br><!-- hier Eindigt de gif carousel -->

      <div class="row"> <!-- lijn nummer 4-->
        <div class="col-12 border-top border-dark ">
          <!-- zo dat je de lijn kan zien -->
        </div>
      </div><br>

      <div class="row">
        <!-- Begin van nieuwe col 1  -->
       <div class="col-4 border-end border-start border-dark"> 
            <div>    <!-- JOIN OUR NEWSLETTER col -->
              <h1 id="Title">JOIN OUR NEWSLETTER</h1><br>
            </div>
          <div style="text-align:center">    
              <p>You will get all the latest news, events & happenings at George restaurants</p>
              <!-- More Info -->
              </p>
          </div>
        </div>
        <!-- einde JOIN OUR NEWSLETTER col -->

        <!-- Begin van col 2 -->
        <div class="col-4 border-end border-start border-dark">
            <div>    <!-- einde SPREAD THE LOVE col -->
              <h1 id="Title">SPREAD THE LOVE</h1><br>
            </div>
          <div style="text-align:center">    
             <!-- Social media icon -->
          </div>
        </div>
        <!-- Einde van col 2 -->
        
        <!-- Begin van col 3 -->
        <div class="col-4 border-end border-start border-dark">
            <div>    <!-- CONTACT col -->
              <h1 id="Title">CONTACT</h1><br>
            </div>
          <div style="text-align:center">    
              <p>Spaklerweg 10A</p>
              <p>1096 BA Amsterdam</p> 
              <p>+ 31 20 737 0280</p>
              <p>hello@georgemarina.nl</p>
          </div>
        </div>
      </div><br>

      <div class="row"><!-- lijn 4 Deze zal de footer zijn  -->
        <div class="col-12 border-top border-dark ">
          <!-- zo dat je de lijn kan zien  -->
        </div>
      </div>

      <div class="row">
        <!-- Begin van col 1  -->
       <div class="col-4 ">
          <a style="text-decoration: none; color:black;" href="https://www.georgemarina.nl/">
            <p>Copyright 2021 Maison George</p>
          </a>
        </div>
        

        <!-- Begin van col 2 -->
        <div class="col-4 ">
          <a style="text-decoration: none; color:black;" href="https://www.georgemarina.nl/">
            <p>Terms & Privacy</p>
          </a>
        </div>
        
        <!-- Begin van col 3 -->
        <div class="col-4 ">
          <a style="text-decoration: none; color:black;" href="https://www.georgemarina.nl/">
            <p>Made by atoms.amsterdam</p>
          </a>
        </div>
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>