<head>
  <title>Contact</title>
  <link rel="stylesheet" type="text/css" href="./Css/ContactEvent.css">
</head>

  <body>
 
    <div class="container">
      <img src="shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="location.png" class="icon" alt="" />
              <p>Daltonlaan200, Utrecht</p>
            </div>
            <div class="information">
              <img src="email.png
              " class="icon" alt=""/>
              <p><a href="mailto:goergemarina@restaurant.nl">goergemarine@restaurant.com</a></p>
            </div>
            <div class="information">
              <img src="phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://www.facebook.com/George-Amsterdam-997786783679032">
                <i class="fab fa-facebook-f"></i>
              </a>

              <a href="https://www.instagram.com/georgemarina.nl/">
                <i class="fab fa-instagram"></i>
              </a>

            </div>
          </div>
        </div>

        <div class="contact-form">
          <!-- <span class="circle one"></span>
          <span class="circle two"></span> -->

          <form action="./contact1.php" method="post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="Username"/>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder="Email"/>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="phone" name="phone" class="input" placeholder="Phone"/>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder="Message"></textarea>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
      
    </div>

  </body>
