<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <style>
           /* hier is nav */
         ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              overflow: hidden;
              background: linear-gradient(to bottom,  #937a93, #d6c5d6);
            }

            li {
              float: left;
              
            }

            li a {
              display: block;
              color: white;
              text-align: center;
              padding: 20px 30px;
              text-decoration: none;
            }

            li a:hover:not(.active) {
              background: #bfb1bf;
            }

            .active {
              background-color: #bfb1bf;
            }

          /* hier eindigt nav */
             * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                }

                body,
                input,
                textarea {
                font-family: "Poppins", sans-serif;
                }

                .container {
                position: relative;
                width: 100%;
                min-height: 100vh;
                padding: 2rem;
                background-color: #494049;
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
                }

                .form {
                width: 100%;
                max-width: 820px;
                background-color: #eee4ee;
                border-radius: 10px;
                box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.4);
                z-index: 1000;
                overflow: hidden;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                }

                .contact-form {
                background-color: #bc9ebc;
                position: relative;
                }

                .circle {
                border-radius: 50%;
                background: linear-gradient(135deg, transparent 20%, #937993);
                position: absolute;
                }

                .circle.one {
                width: 130px;
                height: 130px;
                top: 130px;
                right: -40px;
                }

                .circle.two {
                width: 80px;
                height: 80px;
                top: 10px;
                right: 30px;
                }

                .contact-form:before {
                content: "";
                position: absolute;
                width: 26px;
                height: 26px;
                background-color: #937993;
                transform: rotate(45deg);
                top: 50px;
                left: -13px;
                }

                form {
                padding: 2.3rem 2.2rem;
                z-index: 10;
                overflow: hidden;
                position: relative;
                }

                .title {
                color: #fff;
                font-weight: 500;
                font-size: 1.5rem;
                line-height: 1;
                margin-bottom: 0.7rem;
                }

                .input-container {
                position: relative;
                margin: 1rem 0;
                }

                .input {
                width: 100%;
                outline: none;
                border: 2px solid #fafafa;
                background: none;
                padding: 0.6rem 1.2rem;
                color: #fff;
                font-weight: 500;
                font-size: 0.95rem;
                letter-spacing: 0.5px;
                border-radius: 25px;
                transition: 0.3s;
                }

                textarea.input {
                padding: 0.8rem 1.2rem;
                min-height: 150px;
                border-radius: 22px;
                resize: none;
                overflow-y: auto;
                }

                .input-container label {
                position: absolute;
                top: 50%;
                left: 15px;
                transform: translateY(-50%);
                padding: 0 0.4rem;
                color: #fafafa;
                font-size: 0.9rem;
                font-weight: 400;
                pointer-events: none;
                z-index: 1000;
                transition: 0.5s;
                }

                .input-container.textarea label {
                top: 1rem;
                transform: translateY(0);
                }

                .btn {
                padding: 0.6rem 1.3rem;
                background-color: #fff;
                border: 2px solid #fafafa;
                font-size: 0.95rem;
                color: #937793;
                line-height: 1;
                border-radius: 25px;
                outline: none;
                cursor: pointer;
                transition: 0.3s;
                margin: 0;
                }

                .btn:hover {
                background-color: transparent;
                color: #fff;
                }

                .input-container span {
                position: absolute;
                top: 0;
                left: 25px;
                transform: translateY(-50%);
                font-size: 0.8rem;
                padding: 0 0.4rem;
                color: transparent;
                pointer-events: none;
                z-index: 500;
                }

                .input-container span:before,
                .input-container span:after {
                content: "";
                position: absolute;
                width: 10%;
                opacity: 0;
                transition: 0.3s;
                height: 5px;
                background-color: #1abc9c;
                top: 50%;
                transform: translateY(-50%);
                }

                .input-container span:before {
                left: 50%;
                }

                .input-container span:after {
                right: 50%;
                }

                .input-container.focus label {
                top: 0;
                transform: translateY(-50%);
                left: 25px;
                font-size: 0.8rem;
                }

                .input-container.focus span:before,
                .input-container.focus span:after {
                width: 50%;
                opacity: 1;
                }

                .contact-info {
                padding: 2.3rem 2.2rem;
                position: relative;
                }

                .contact-info .title {
                color: #937993;
                }

                .text {
                color: #333;
                margin: 1.5rem 0 2rem 0;
                }

                .information {
                display: flex;
                color: #555;
                margin: 0.7rem 0;
                align-items: center;
                font-size: 0.95rem;
                }

                .icon {
                width: 28px;
                margin-right: 0.7rem;
                }

                .social-media {
                padding: 2rem 0 0 0;
                }
/* 
                .social-media p {
                color: #333;
                } */

                .social-icons {
                display: flex;
                margin-top: 0.5rem;
                }

                .social-icons a {
                width: 35px;
                height: 35px;
                border-radius: 5px;
                background: linear-gradient(45deg, #937993, #ead0ea);
                color: #fff;
                text-align: center;
                line-height: 35px;
                margin-right: 0.5rem;
                transition: 0.3s;
                }

                .social-icons a:hover {
                transform: scale(1.05);
                }

                .contact-info:before {
                content: "";
                position: absolute;
                width: 110px;
                height: 100px;
                border: 22px solid #937993;
                border-radius: 50%;
                bottom: -77px;
                right: 50px;
                opacity: 0.3;
                }
                .square {
                position: absolute;
                height: 400px;
                top: 50%;
                left: 25%;
                transform: translate(181%, 11%);
                opacity: 0.3;
                }
             

                @media (max-width: 850px) {
                .form {
                    grid-template-columns: 1fr;
                }

                .contact-info:before {
                    bottom: initial;
                    top: -75px;
                    right: 65px;
                    transform: scale(0.95);
                }

                .contact-form:before {
                    top: -13px;
                    left: initial;
                    right: 70px;
                }

                .text {
                    margin: 1rem 0 1.5rem 0;
                }

                /* .social-media {
                    padding: 1.5rem 0 0 0;
                } */
                

                /* @media (max-width: 480px) {
                .container {
                    padding: 1.5rem;
                } */

                .contact-info:before {
                    display: none;
                }

                form,
                .contact-info {
                    padding: 1.7rem 1.6rem;
                }

                .text,
                .information,
                .social-media p {
                    font-size: 0.8rem;
                }

                .title {
                    font-size: 1.15rem;
                }

                /* .social-icons a {
                    width: 30px;
                    height: 30px;
                    line-height: 30px;
                } */

                /* .icon {
                    width: 23px;
                } */

                .input {
                    padding: 0.45rem 1.2rem;
                }

                .btn {
                    padding: 0.45rem 1.2rem;
                }
                }
                a:link {
                    color: black;
                    background-color: transparent;
                    text-decoration: none;
                    }
                    a:visited {
                    color: #443d44;
                    background-color: transparent;
                    text-decoration: none;
                    }
    </style>
  </head>
  <body>
  <ul style="width:100%; height:px;">
  <li><a href="#home">Home</a></li>
  <li><a href="./index.php">Reserveren</a></li>
  <li><a href="./experience.php">Events</a></li>
  <!-- <li style="float:right"><a class="active" href="#about">About</a></li> -->
</ul>
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
          <span class="circle one"></span>
          <span class="circle two"></span>

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
              <input type="tel" name="phone" class="input" placeholder="Phone"/>
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

    <script src="app.js"></script>
  </body>
</html>
