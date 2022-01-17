<?php
// $active = (isset($_GET["content"])) ? $_GET["content"] : "";
// var_dump($_SESSION);


?>
     
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <style>
                  *{
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                  font-family: 'Poppins', sans-serif;
                }

                section {
                  position: relative;
                  width: 100%;
                  min-height: 100px;
                  padding: flex;
                  justify-content: space-between;
                  align-items: center;
                  background: #fff;

                }
                header{
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%;
                  padding: 20px 100px;
                  display: flex;
                  justify-content: space-between;
                  align-items: center;
                  
                }

                header ul {
                  position: relative ;
                  display: flex;
                  list-style-type: none;
                  overflow: hidden;
                  margin: 0;
                  padding: 0;
                }
                header ul li{
                  list-style: none;
                  
                }
                header ul li a {
                  display: block;
                  color: #333;
                  font-weight: 400;
                  margin-left: 40px;
                  text-decoration: none; 
                  
                }
                header ul li a:hover {
                  background-color: #777;
              
                }

                .active {
                  background-color: #04AA6D;
                }


  
  </style>
</head>
<body>
  <section>
    <header>
      <a href="#" class="logo"><img src="" alt=""></a>
      <ul>
        <li><a href="./index.php?content=home">Home</a></li>
        <li><a href="./index.php?content=reservation">Reserveren</a></li>
        <li><a href="./index.php?content=logout">logout</a></li>
      </ul>
     
    </header>
    <h1 style="margin-top:2%;">Welkom</h1>
  </section> 
  <h1 style="text-align:center; color:#3e9299; margin-top:3%;" >George marina</h1><br>
  <!-- hier zijn meer informatie-->

  <div><p style="text-align:center; color:#3e9299; ">George Marina is set in a spectacular, three storey waterside building in the upcoming Amstelkwartier,<br>
                                                                              right along the banks of the Amstel river that flows into Amsterdam's iconic canals. <br>
‍
                                                                            With large windows overlooking the marina in front, an open kitchen and sushi counter, <br>
                                                                              lush plants, a striking 360 green marble bar and an eye-catching staircase right in the middle of the restaurant, <br>
                                                                              it's also our cuisine that will leave a long lasting impression. Being so close to the water, <br>
                                                                                we're famous for our seafood and sushi platters, but you might as well order steak frites, <br>
                                                                                a juicy bistro burger or a veggie dish. A great all-day hangout for breakfast, lunch, <br>
                                                                                  dinner or Friday night cocktails accompanied by a live set from our resident DJ. <br>
                                                                  ‍
                                                                                Despite our restaurants' modern allure, our large, <br>
                                                                                  sunny terrace has more of a Côte d'Azur feel – especially in the summer when guests coming from the canals dock their boats in the marina, <br>
                                                                                  and enjoy a drink while watching the sunset. No matter what season and what time of the day though, <br>
                                                                                    George Marina is a great place to escape hectic, daily life – if only for one day.   
</p>
<hr> <hr>

<h2 style="text-align:center; color:#3e9299; margin-top:2%;">GEORGE HAS IT ALL </h2>
<p style="text-align:center; color:#3e9299;"> <br>
                                                From that local neighbourhood spot where everybody knows your name to a light-filled, <br>
                                                eclectic restaurant with view on the Amstel river: George has it all. <br>

                                                Serving you iconic dishes and timeless classics with New York, Paris, <br>
                                                the Côte d'Azur and Hong Kong in mind, along with local ingredients, <br> freshly roasted coffee and signature cocktails, <br>
                                                our restaurants are open all day, every day –  so come join us for an early morning espresso, <br>
                                                a lazy Sunday brunch or an intimate dinner with friends in a relaxed, elegant atmosphere. <br>
</p>
<h4 style="text-align:center; color:#3e9299; margin-top:2%;">A FEAST FOR YOUR SENSES 
</h4><br>
<p style="text-align:center; color:#3e9299;">Most of our restaurants are designed by Amsterdam based Architecture & Design studio Framework, <br> who signed for our bespoke interiors and sophisticated yet intimate ambiance, <br>
                                              featuring typical George elements like metro tiles, lush leather couches, <br>
                                              brass lighting, and marble bars. With each location having its own charm, <br>
                                              your visit to George quite literally is a feast for your eyes and taste buds. <br>

                                              Most of our locations have stunning, sunny terraces and are open all day, every day for breakfast, lunch and dinner.</p>

</p>
</div>
<!-- Hier begint de footer -->
  <section class="container-fluid fixed-bottom">
        <div class="row">
          <div class="col-12 px-0" id="footer">
          <div class="col">
            <h5 style="color:#3e9299;">Klantenservice:</h5>
            <hr>
            <p style="color: #3e9299">
               Nummer: 06 12345678
            <br>
               Email: contact@george.com
            </p>
            
        </div>
        <div class=col  style="position: absolute;  top:40px; left: 600px; color:#3e9299">
          <h5>Social media</h5>
           <a href="https://www.facebook.com/George-Amsterdam-997786783679032" class="" ><img src="./f.png" style="width:30px;" alt=""></a>
           <a href="https://www.georgemarina.nl/" class="" ><img src="./g.png" style="width:30px;" alt=""></a>
           <a href="https://www.instagram.com/georgemarina.nl/" class="" ><img src="./i.png" style="width:30px;" alt=""></a>
        
          </div>
          <div class=col  style="position: absolute;  top:40px; left: 1000px; color:#3e9299">
          <h5 >Locatie: Daltonlaan 200 Utrecht</h5>
           
        
          </div>
        </div>
          </div>
        </div>
        
      </section>
      <!--hier eindigt de footer-->
</body>
</html>
 