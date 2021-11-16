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
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Gallery!</title>
    <style>
      body {
        /* background: linear-gradient(to bottom, #FFFFFF, #00EAFF, #fff); */
      }
      
      section {
            position: relative;
            width: 100%;
            max-height: 1000px;
            display: flex;
            justify-content: space-between;
            background: url("../food5.jpg") no-repeat center center ;
            opacity:0.5;
            padding: 2rem;
            align-items: center;
            justify-content: center;

        }
        section:hover{
            opacity:1;
            box-shadow: 3px 3px 20px #e0943a;
        }

        .content {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;

        }
        .content .text{
            position: relative;
            max-width: 600px;
            max-height: 500px;
        }
        .content .text h2{
            color: #FFF;
            font-size: 10px;
            line-height: 1.5em;
            font-weight: bold;
            letter-spacing: 5px;
            transition: 0.5s ease;

        }
        .content .text h2:hover{
            font-size: 60px;
            box-shadow: 3px 3px 20px #e0943a;
            padding: 10px;
        }

        .content .text h2 span{
            color: #e0943a;
            font-size: 80px;
        }
       
        .content .text a {
            margin-top: 20px;
            padding: 10px 20px;
            color: #111;
            background: #FFF;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            letter-spacing: 2px;
            


        }
        .content .text a:hover{
            padding: 25px ;
            border-radius: 30px;
        }


     
       
        .content .imgbox img {
           max-width: 200px;
           max-height: 100px;

        }
      
      
      *{
        margin: 0;
        padding: 0;
      }
      .cell{
         width: 33%;
         height: 350px;
         margin: 0 15px;
         overflow: hidden;
         border-radius: 8px;

      }

      .cell img {
        width: 100%;
        height:  350px;
        object-fit: cover;
      }
    </style>
  </head>
  <body>

  <section  style='background: url("../food5.jpg") no-repeat center center;
            background-size: cover;'>
       <header>
        
       </header>
       <div class="content">
           <div class="text">
               <h2>MARINE <span>GEORGE</span></h2>
               <a href="">VIEW MENU</a> 
               <a href="./contact.php">Home</a>                     
         </div>
         
       </div>

           
      
   </section>
   <hr>
   <h1>Food</h1>
   <br>
          
      <div class="main-carousel"  >
        <div class="cell"><img src="food.jpg"></div>
        <div class="cell"><img src="food2.jpg"></div>
        <div class="cell"><img src="food3.jpg"></div>
        <div class="cell"><img src="food4.jpg"></div>
        <div class="cell"><img src="food5.jpg"></div>
        <div class="cell"><img src="food4.jpg"></div>
        <div class="cell"><img src="food5.jpg"></div>
      </div>
      <br>
      <br>
       <hr>
       <br>
       <h1>drinks</h1>
       <br>

      <div class="main-carousel">
        <div class="cell"><img src="drink.jpg"></div>
        <div class="cell"><img src="drink1.jpg"></div>
        <div class="cell"><img src="drink2.jpg"></div>
        <div class="cell"><img src="drink3.jpg"></div>
        <div class="cell"><img src="drink4.jpg"></div>
        <div class="cell"><img src="drink.jpg"></div>
        <div class="cell"><img src="drink1.jpg"></div>
      </div>

      <br><br>
            


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script type="text/javascript">
       $('.main-carousel').flickity({
          // options
          cellAlign: 'left',
          wrapeAround:true,
          freeScroll: true
        });

    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>



