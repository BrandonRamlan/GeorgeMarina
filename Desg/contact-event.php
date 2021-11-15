<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body,input,textarea {
    font-family: "Poppins", sans-serif;
  }

  .container {
    position: relative;
    width: 100%;
    min-height: 100vh;
    padding: 2rem;
    background: linear-gradient(to bottom, #FFFFFF, #00EAFF, #fff);
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .form {
    width: 100%;
    max-width: 820px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.4);
    z-index: 1000;
    overflow: hidden;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }

  form {
    padding: 2.3rem 2.2rem;
    z-index: 10;
    overflow: hidden;
    position: relative;
  }

  .title {
    color: #000000;
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
    border: 2px solid #000000;
    background: none;
    padding: 0.6rem 1.2rem;
    color: #000000;
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
    color: #000000;
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
  background: linear-gradient(to bottom,   #FFFFFF, #00EAFF, #fff);
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
  color: #000000;
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

  .social-icons {
  display: flex;
  margin-top: 0.5rem;
  }

  .social-icons a {
  width: 35px;
  height: 35px;
  border-radius: 5px;
  background: linear-gradient(to bottom,   #FFFFFF, #00EAFF, #fff);
  color: #000000;
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
  border: 22px linear-gradient(to bottom,   #FFFFFF, #00EAFF, #fff);
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
