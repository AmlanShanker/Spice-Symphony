<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SPICE SYMPHONY</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Roboto", sans-serif;
      list-style: none;
      text-decoration: none;
    }
    *::-webkit-scrollbar {
      display: none;
    }
    header {
      position: fixed;
      width: 100%;
      height: 100px;
      top: 0;
      right: 0;
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: space-around;
      padding: 20px 10%;
      background-color: #fff;
    }

    .logo {
      position: absolute;
      top: 10px;
      left: 10px;
    }

    .logo img {
      max-width: 140px;
      height: auto;
      border-radius: 50%;
    }

    .navmenu {
      display: flex;
    }
    ul {
      display: flex;
    }
    .navmenu a {
      position: relative;
      padding: 10px 20px;
      color: black;
      text-transform: capitalize;
      font-weight: 500;
      transition: all 0.5s ease;
    }

    .navmenu a::after {
      content: "";
      position: absolute;
      left: 0;
      bottom: -6px;
      width: 0;
      height: 3px;
      background: black;
      border-radius: 5px;
      transition: width 0.5s;
    }
    .navmenu a:hover::after {
      width: 100%;
    }
    #menu-icon {
      font-size: 35px;
      color: #292929;
      z-index: 10001;
      cursor: pointer;
      display: none;
    }
    section {
      padding: 60px 12%;
    }
    .home {
      width: 100%;
      height: 600px;
      background-position: center;
      background-size: cover;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      align-items: center;
      gap: 2rem;
    }
    .home-img img {
      max-width: 100%;
      width: 100%;
      height: auto;
      border: 2px solid #292929;
      border-radius: 50px;
      cursor: pointer;
    }
    .home-text h4 {
      color: #c33;
      font-size: 20px;
      font-weight: 600;
      letter-spacing: -1px;
      font-family: "Lobster", cursive;
    }
    .home-text h3 {
      font-size: 50px;
      color: #666;
      font-weight: 400;
      line-height: 1.2;
      margin: 23px 0;
    }
    .home-text h1 {
      font-size: 50px;
      color: #666;
      font-weight: 700;
      line-height: 1.2;
      margin: 23px 0;
    }
    .home-text p {
      color: #666;
      font-size: 15px;
      line-height: 25px;
      font-weight: 400;
      margin-bottom: 40px;
    }
    .main-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    .main-btn .btn1 {
      display: inline-block;
      color: #fff;
      font-size: 15px;
      text-transform: capitalize;
      background-color: #c33;
      padding: 12px 30px;
      transition: all 0.42s ease;
    }
    .main-btn .btn1:hover {
      background-color: #292929;
    }
    .btn2 {
      font-size: 15px;
      font-weight: 500;
      color: #666;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      margin-left: 30px;
    }

    .logo {
      font-size: 2em;
      color: #fff;
      user-select: none;
    }

    .wrapper {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0);
      width: 400px;
      height: 520px;
      background: transparent;
      border: 2px solid black;
      border-radius: 10px;
      backdrop-filter: blur(20px);
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
      transition: transform 0.5s ease;
    }

    .wrapper.active-popup {
      transform: translate(-50%, -50%) scale(1);
    }

    .wrapper.active {
      height: 520px;
    }
    .wrapper .form-box {
      width: 100%;
      padding: 40px;
    }
    .wrapper .form-box.login {
      transition: transform 0.18s ease;
      transform: translateX(0);
    }
    .wrapper.active .form-box.register {
      position: absolute;
      transition: none;
      transform: translateX(0);
    }
    .wrapper.active .form-box.login {
      transition: none;
      transform: translateX(-400px);
    }
    .wrapper .form-box.register {
      position: absolute;
      transform: translateX(400px);
    }
    .wrapper .icon-close {
      position: absolute;
      top: 0;
      right: 0;
      width: 45px;
      height: 45px;
      background: black;
      font-size: 2em;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      border-bottom-left-radius: 20px;
      cursor: pointer;
      z-index: 1;
    }
    .form-box h2 {
      font-size: 2em;
      color: black;
      text-align: center;
    }
    .input-box {
      position: relative;
      width: 100%;
      height: 50px;
      border-bottom: 2px solid black;
      margin: 30px 0;
    }
    .input-box label {
      position: absolute;
      top: 50%;
      left: 5px;
      transform: translateY(-50%);
      font-size: 1em;
      color: black;
      font-weight: 500;
      pointer-events: none;
    }
    .input-box input:focus ~ label,
    .input-box input:valid ~ label {
      top: -5px;
      transition: 0.5s;
    }
    .input-box input {
      width: 100%;
      height: 100%;
      background: transparent;
      border: none;
      outline: none;
      font-size: 1em;
      color: #241e4e;
      font-weight: 600;
      padding: 0 35px 0 5px;
    }
    .input-box .icon {
      position: absolute;
      right: 8px;
      font-size: 1.2em;
      color: #241e4e;
      line-height: 57px;
    }
    .remember-forgot {
      font-size: 0.9em;
      color: black;
      font-weight: 500;
      margin: -15px 0 15px;
      display: flex;
      justify-content: space-between;
    }
    .remember-forgot label input {
      accent-color: black;
      margin-right: 3px;
    }
    .remember-forgot a {
      color: black;
      text-decoration: none;
    }

    .remember-forgot a:hover {
      text-decoration: underline;
    }

    .btn {
      width: 100%;
      height: 45px;
      background: black;
      border: none;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1em;
      color: #fff;
      font-weight: 500;
    }

    .login-register {
      font-size: 0.9em;
      color: black;
      text-align: center;
      font-weight: 500;
      margin: 25px 0 10px;
    }
    .login-register p a {
      color: #001d4a;
      text-decoration: none;
      font-weight: 600;
    }
    .login-register p a:hover {
      text-decoration: underline;
    }
    .dark {
      width: 100px;
      height: 30px;
      background: transparent;
      border: 2px solid black;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1em;
      color: black;
      font-weight: 500;
      margin-left: 20px;
    }
    Light Mode :root {
      background-color: #fff;
      color: #292929;
    }
    .dark-mode .register-link,
    .dark-mode .login-link,
    .dark-mode .remember-forgot > a {
      color: #fff;
    }
    .dark-mode .navmenu a::after {
      background: white;
    }
    body.dark-mode {
      background-color: #292929;
      color: #fff;
    }
    .dark-mode .header {
      background-color: #292929;
      color: #fff;
    }
    .dark-mode .navmenu li a {
      color: #fff;
    }
    .dark-mode .wrapper label {
      color: #fff;
    }
    .dark-mode .register-link,
    .dark-mode .login-link,
    .dark-mode .remember-forgot > a {
      color: #fff;
    }
    .dark-mode .navmenu a::after {
      background: white;
    }
    .dark-mode .icon {
      color: #fff;
    }
    .dark-mode h3,
    .dark-mode h4,
    .dark-mode h1,
    .dark-mode p,
    .dark-mode h2 {
      color: #fff;
    }
    .dark-mode .food-description p {
      color: #fff;
    }
    .dark-mode #testimonials {
      background-color: #292929;
      color: #fff;
    }
    .dark-mode #testimonials p {
      color: #fff;
    }
    body {
      background-color: #fff;
      color: #292929;
    }
    .menu-icon {
      width: 25px;
      cursor: pointer;
      display: none;
    }
    #food {
      padding: 5rem 0 10rem 0;
    }
    #food h2 {
      text-align: center;
      font-size: 2.5rem;
      font-weight: 400;
      margin-bottom: 40px;
      text-transform: uppercase;
      color: #555;
    }
    .food-container {
      display: flex;
      justify-content: space-between;
    }
    .food-container img {
      display: block;
      width: 100%;
      margin: auto;
      max-height: 300px;
      object-fit: cover;
      object-position: center;
    }

    .img-container {
      margin: 0 1rem;
      position: relative;
    }
    .img-content {
      position: absolute;
      top: 70%;
      left: 50%;
      transform: translate(-50%, -50%);
      opacity: 0;
      z-index: 2;
      text-align: center;
      transition: all 0.3s ease-in-out 0.1s;
    }
    .img-content h3 {
      color: #fff;
      font-size: 2.2rem;
    }
    .img-content a {
      font-size: 1.2rem;
    }
    .img-container::after {
      content: "";
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.871);
      opacity: 0;
      z-index: 1;
      transform: scaleY(0);
      transform-origin: 100% 100%;
      transition: all 0.3s ease-in-out;
    }
    .img-container:hover::after {
      opacity: 1;
      transform: scaleY(1);
    }
    .img-container:hover .img-content {
      opacity: 1;
      top: 40%;
    }
    .food-menu-heading {
      text-align: center;
      font-size: 3.4rem;
      font-weight: 400;
      color: #666;
    }
    .food-menu-container {
      display: flex;
      flex-wrap: wrap;
      padding: 50px 0px 30px 0px;
    }
    .food-menu-container img {
      display: block;
      width: 250px;
      height: 250px;
      border-radius: 50%;
      object-fit: cover;
      object-position: center;
    }
    .food-menu-item {
      display: flex;
      flex: 1 1 600px;
      justify-content: space-evenly;
      margin-bottom: 3rem;
    }
    .food-description {
      margin: auto 1.5rem;
    }
    .font-title {
      font-size: 1.8rem;
      font-weight: 400;
      color: #444;
    }
    .food-description p {
      font-size: 1.4rem;
      color: #555;
      font-weight: 500;
    }
    .food-description .food-price {
      color: #117964;
      font-weight: 700;
    }
    #testimonials {
      padding: 5rem 0;
      background: rgba(243, 243, 243);
    }
    .testimonial-title {
      text-align: center;
      font-size: 2.8rem;
      font-weight: 400;
      color: #555;
    }
    .testimonial-container {
      display: flex;
      justify-content: space-between;
      font-size: 1.4rem;
      padding: 1rem;
    }
    .testimonial-box .checked {
      color: #ff9529;
    }
    .testimonial-box .testimonial-text {
      margin: 1rem 0;
      color: #444;
    }
    .testimonial-box {
      text-align: center;
      padding: 1rem;
    }
    .customer-photo img {
      display: block;
      width: 150px;
      height: 150px;
      object-fit: cover;
      object-position: center;
      border-radius: 50%;
      margin: auto;
    }
    #food-menu .see {
      width: 200px;
      height: 50px;
      background: transparent;
      border: 2px solid black;
      outline: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 1.1em;
      color: black;
      font-weight: 500;
      margin-left: 20px;
      display: block;
      margin: 0 auto;
      text-align: center;
    }

    .btn {
      display: inline-block;
      padding: 0.5em 1.5em;
      text-decoration: none;
      border-radius: 50px;
      cursor: pointer;
      outline: none;
      margin-top: 1em;
      text-transform: uppercase;
      font-weight: small;
    }
    .btn-primary {
      background: #16a083;
    }
    .btn-primary:hover {
      transition: background 0.3s ease-in-out;
    }

    @media only screen and (max-width: 700px) {
      nav ul {
        width: 100%;

        background: linear-gradient(
          45deg,
          #ff7e5f,
          #feb47b,
          #ffde7b,
          #ffafbd,
          #c891d6
        );
        display: block;
        position: absolute;
        top: 75px;
        right: 0;
        z-index: 2;
      }
      nav ul li {
        display: block;
        margin-top: 10px;
        margin-bottom: 10px;
      }
      nav ul li a {
        color: #fff;
      }
      .menu-icon {
        display: block;
      }
      #menuList {
        overflow: hidden;
        transition: 0.5s;
      }
      .home {
        flex-direction: column-reverse;
        margin: 50px 0;
      }
      .home-img {
        flex-basis: 100%;
        margin-bottom: 50px;
        width: 77%;
        height: 330px;
      }

      .home-text {
        flex-basis: 100%;
      }
      .home-text h2 {
        font-size: 35px;
      }
      .home-text h1 {
        font-size: 35px;
      }
      .home-text h3 {
        font-size: 35px;
      }
      #food {
        padding: 80px 0 20px 0;
      }
      .dark {
        margin-left: 120px;
      }
      .food-menu-heading {
        text-align: center;
        font-size: 2.4rem;
        font-weight: 400;
        color: #666;
        padding-top: 150px;
      }
    }
    @media only screen and (max-width: 600px) {
      .navmenu > a {
        font-size: 0.9em;
        margin-left: 10px;
      }
      .navmenu .btnLogin-popup {
        width: 100px;
        font-size: 0.9em;
        margin-left: 10px;
      }

      .wrapper {
        width: 100%;
      }

      .wrapper .form-box {
        padding: 20px;
      }
      .menu-items li {
        font-size: 1.6rem;
      }
      .testimonial-container {
        flex-direction: column;
        text-align: center;
      }
      .food-menu-container img {
        margin: auto;
      }
      .food-menu-item {
        flex-direction: column;
        text-align: center;
      }
      .menu-items li {
        margin-bottom: 2.5rem;
        font-size: 1.8rem;
        font-weight: 500;
      }
    }
  </style>
  <body>
    <header class="header">
      <a href="home1.php" class="logo"
        ><?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 1"); ?>
        <?php if($result->num_rows > 0){ ?>
        <?php while($row = $result->fetch_assoc()){ ?>
        <img
          style="
            background-color: red;
            float: left;
            width: 100%;
            height: 85px;
            border: 2px solid black;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
          "
          src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
          alt=""
        />
        <?php } ?>
        <?php }else{ ?>
        <p class="status error">Image(s) not found...</p>
        <?php } ?>
      </a>
      <nav class="navmenu">
        <ul id="menuList">
          <li><a href="menu.php">Menu</a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="contact.php">Review Us</a></li>
          <li><a href="about.php">About us</a></li>
          <li id="loginBtn" class="btnLogin-popup">
            <a href="#">SIGN-IN/UP</a>
          </li>
        </ul>
      </nav>
      <button class="dark" id="theme-toggle">
        <ion-icon name="contrast-outline"></ion-icon></button
      ><?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 10"); ?>
      <?php if($result->num_rows > 0){ ?>
      <?php while($row = $result->fetch_assoc()){ ?>
      <img
        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
        alt="1"
        class="menu-icon"
        onclick="togglemenu()"
      />
      <?php } ?>
      <?php }else{ ?>
      <p class="status error">Image(s) not found...</p>
      <?php } ?>
      <div class="wrapper">
        <span class="icon-close"><ion-icon name="close"></ion-icon></span>
        <div class="form-box login">
          <h2>Sign-In</h2>
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="input-box">
              <span class="icon">
                <ion-icon name="person"></ion-icon>
              </span>
              <input id="name" name="name" type="text" required />
              <label>Username</label>
            </div>
            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon
              ></span>
              <input id="password" name="password" type="password" required />
              <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label><input type="checkbox" />Remember Me</label>
              <!-- <a href="#">Forgot Password?</a> -->
            </div>
            <button type="submit" class="btn">Sign-In</button>
            <div class="login-register">
              <p>
                Don't Have An Account?
                <a href="#" class="register-link">Sign-Up</a>
              </p>
            </div>
          </form>
        </div>
        <div class="form-box register">
          <h2>Sign-Up</h2>
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="input-box">
              <span class="icon"><ion-icon name="person"></ion-icon> </span>
              <input id="name" name="name" type="text" required />
              <label>Username</label>
            </div>
            <div class="input-box">
              <span class="icon"><ion-icon name="call"></ion-icon></span>
              <input id="phone" name="phone" type="tel" required />
              <label>Phone No</label>
            </div>
            <div class="input-box">
              <span class="icon">
                <ion-icon name="mail"></ion-icon>
              </span>
              <input id="email" name="email" type="email" required />
              <label>Email</label>
            </div>
            <div class="input-box">
              <span class="icon">
                <ion-icon name="lock-closed"></ion-icon
              ></span>
              <input id="password" name="password" type="password" required />
              <label>Password</label>
            </div>
            <div class="remember-forgot">
              <label
                ><input type="checkbox" />I agree to the terms &
                conditions</label
              >
            </div>
            <button type="submit" class="btn">Sign-Up</button>
            <div class="login-register">
              <p>
                Already Have An Account?
                <a href="#" class="login-link">Sign-In</a>
              </p>
            </div>
          </form>
        </div>
      </div>
      <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <section class="home">
      <div class="home-text">
        <br />
        <h3>Experience The Taste Of Heaven</h3>
        <h4>Best In Spice Symphony</h4>
        <h1>Kadhai Paneer <br /></h1>
        <p>
          Indulge in the ultimate comfort of our Kadhai Paneer with Cream. Each
          succulent piece of paneer is lovingly cooked in a fragrant medley of
          spices and enriched with velvety cream.
        </p>
      </div>
      <div class="home-img">
        <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 2"); ?>
        <?php if($result->num_rows > 0){ ?>
        <?php while($row = $result->fetch_assoc()){ ?>
        <img
          src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
          alt=""
        />
        <?php } ?>
        <?php }else{ ?>
        <p class="status error">Image(s) not found...</p>
        <?php } ?>
      </div>
    </section>
    <section id="food-menu">
      <h2 class="food-menu-heading">Most Ordered Dishes</h2>
      <div class="food-menu-container container">
        <div class="food-menu-item">
          <div class="food-img">
            <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 3"); ?>
            <?php if($result->num_rows > 0){ ?>
            <?php while($row = $result->fetch_assoc()){ ?>
            <img
              src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
              alt=""
            />
            <?php } ?>
            <?php }else{ ?>
            <p class="status error">Image(s) not found...</p>
            <?php } ?>
          </div>
          <div class="food-description">
            <h2 class="food-titile">Butter Chicken</h2>
            <p>
              It is a creamy and flavorful dish consisting of tender chicken
              cooked in a rich tomato-based sauce with butter, cream, and a
              blend of aromatic spices.
            </p>
            <p class="food-price">Price: &#8377; 250</p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 4"); ?>
            <?php if($result->num_rows > 0){ ?>
            <?php while($row = $result->fetch_assoc()){ ?>
            <img
              src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
              alt=""
            />
            <?php } ?>
            <?php }else{ ?>
            <p class="status error">Image(s) not found...</p>
            <?php } ?>
          </div>
          <div class="food-description">
            <h2 class="food-titile">Chole Bhature</h2>
            <p>
              Chole Bhature is a popular North Indian dish featuring spicy
              chickpea curry (chole) paired with deep-fried bread (bhature),
              creating a flavorful and satisfying meal.
            </p>
            <p class="food-price">Price: &#8377; 100</p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 5"); ?>
            <?php if($result->num_rows > 0){ ?>
            <?php while($row = $result->fetch_assoc()){ ?>
            <img
              src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
              alt=""
            />
            <?php } ?>
            <?php }else{ ?>
            <p class="status error">Image(s) not found...</p>
            <?php } ?>
          </div>
          <div class="food-description">
            <h2 class="food-titile">Masala Dosa</h2>
            <p>
              Masala Dosa is a South Indian delicacy made of fermented rice and
              lentil batter, thinly spread on a hot griddle, filled with a
              spiced potato mixture, and served with chutneys and sambar.
            </p>
            <p class="food-price">Price: &#8377; 90</p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 6"); ?>
            <?php if($result->num_rows > 0){ ?>
            <?php while($row = $result->fetch_assoc()){ ?>
            <img
              src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
              alt=""
            />
            <?php } ?>
            <?php }else{ ?>
            <p class="status error">Image(s) not found...</p>
            <?php } ?>
          </div>
          <div class="food-description">
            <h2 class="food-titile">Matar Paneer</h2>
            <p>
              Matar Paneer is a classic North Indian dish made with soft cubes
              of paneer (Indian cottage cheese) cooked in a creamy tomato-based
              gravy along with green peas, flavored with aromatic spices.
            </p>
            <p class="food-price">Price: &#8377; 130</p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 7"); ?>
            <?php if($result->num_rows > 0){ ?>
            <?php while($row = $result->fetch_assoc()){ ?>
            <img
              src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
              alt=""
            />
            <?php } ?>
            <?php }else{ ?>
            <p class="status error">Image(s) not found...</p>
            <?php } ?>
          </div>
          <div class="food-description">
            <h2 class="food-titile">Fried Rice</h2>
            <p>
              Fried rice is a savory Asian dish made with cooked rice stir-fried
              with vegetables, eggs, and often meat or seafood, seasoned with
              soy sauce and other flavorings.
            </p>
            <p class="food-price">Price: &#8377; 80</p>
          </div>
        </div>
        <div class="food-menu-item">
          <div class="food-img">
            <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 8"); ?>
            <?php if($result->num_rows > 0){ ?>
            <?php while($row = $result->fetch_assoc()){ ?>
            <img
              src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
              alt=""
            />
            <?php } ?>
            <?php }else{ ?>
            <p class="status error">Image(s) not found...</p>
            <?php } ?>
          </div>
          <div class="food-description">
            <h2 class="food-titile">Tandoori Chicken</h2>
            <p>
              Tandoori chicken is a flavorful Indian dish consisting of
              marinated chicken cooked in a traditional clay oven (tandoor),
              resulting in smoky, tender, and aromatic meat with a vibrant red
              hue.
            </p>
            <p class="food-price">Price: &#8377; 280</p>
          </div>
        </div>
      </div>
      <a href="menu.php"> <button class="see">Click To See More</button></a>
    </section>

    <section id="testimonials">
      <h2 class="testimonial-title">What Our Customers Say</h2>
      <div class="testimonial-container container">
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 9"); ?>
              <?php if($result->num_rows > 0){ ?>
              <?php while($row = $result->fetch_assoc()){ ?>
              <img
                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
                alt=""
              />
              <?php } ?>
              <?php }else{ ?>
              <p class="status error">Image(s) not found...</p>
              <?php } ?>
              <p class="customer-name">Rohan Awasthi</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
            This cozy restaurant has left the best impressions! Hospitable
            hosts, delicious dishes, beautiful presentation, wide wine list and
            wonderful dessert. I recommend to everyone! I would like to come
            back here again and again.
          </p>
        </div>
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 9"); ?>
              <?php if($result->num_rows > 0){ ?>
              <?php while($row = $result->fetch_assoc()){ ?>
              <img
                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
                alt=""
              />
              <?php } ?>
              <?php }else{ ?>
              <p class="status error">Image(s) not found...</p>
              <?php } ?>
              <p class="customer-name">Priyanka Sharma</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
            It's a great experience. The ambiance is very welcoming and
            charming. Amazing wines, food and service. Staff are extremely
            knowledgeable and make great recommendations.
          </p>
        </div>
        <div class="testimonial-box">
          <div class="customer-detail">
            <div class="customer-photo">
              <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 9"); ?>
              <?php if($result->num_rows > 0){ ?>
              <?php while($row = $result->fetch_assoc()){ ?>
              <img
                src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
                alt=""
              />
              <?php } ?>
              <?php }else{ ?>
              <p class="status error">Image(s) not found...</p>
              <?php } ?>
              <p class="customer-name">Ujjwal Aggrawal</p>
            </div>
          </div>
          <div class="star-rating">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </div>
          <p class="testimonial-text">
            This place is great! Atmosphere is chill and cool but the staff is
            also really friendly. They know what they’re doing and what they’re
            talking about, and you can tell making the customers happy is their
            main priority.
          </p>
        </div>
      </div>
    </section>
    <script src="home.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const wrapper = document.querySelector(".wrapper");
        const login = document.querySelector(".login-link");
        const register = document.querySelector(".register-link");
        const btnPopup = document.querySelector(".btnLogin-popup");
        const iconClose = document.querySelector(".icon-close");
        const formBoxLogin = document.querySelector(".form-box.login");
        const formBoxRegister = document.querySelector(".form-box.register");

        function showSignUpBox() {
          formBoxLogin.style.transition = "transform 0.5s ease-in-out";
          formBoxRegister.style.transition = "transform 0.5s ease-in-out";
          formBoxLogin.style.transform = "translateX(-400px)";
          formBoxRegister.style.transform = "translateX(0)";
          wrapper.classList.add("active-popup");
          wrapper.style.opacity = "1";
          wrapper.style.visibility = "visible";
        }

        function showPopup() {
          wrapper.classList.add("active-popup");
          wrapper.style.opacity = "1";
          wrapper.style.visibility = "visible";
          setTimeout(() => {
            formBoxLogin.style.transition = "transform 0.5s ease-in-out";
            formBoxRegister.style.transition = "transform 0.5s ease-in-out";
            formBoxLogin.style.transform = "translateX(0)";
            formBoxRegister.style.transform = "translateX(400px)";
          }, 50);
        }

        function hidePopup() {
          wrapper.classList.remove("active-popup");
          formBoxLogin.style.transform = "translateX(-400px)";
          formBoxRegister.style.transform = "translateX(400px)";
          setTimeout(() => {
            wrapper.style.opacity = "0";
            setTimeout(() => {
              wrapper.style.visibility = "hidden";
            }, 500);
          }, 500);
        }

        register.addEventListener("click", showSignUpBox);

        login.addEventListener("click", () => {
          formBoxLogin.style.transition = "transform 0.5s ease-in-out";
          formBoxRegister.style.transition = "transform 0.5s ease-in-out";
          formBoxLogin.style.transform = "translateX(0)";
          formBoxRegister.style.transform = "translateX(400px)";
        });

        btnPopup.addEventListener("click", showPopup);

        iconClose.addEventListener("click", hidePopup);
      });

      document.addEventListener("DOMContentLoaded", function () {
        const themeToggle = document.getElementById("theme-toggle");
        const body = document.body;

        themeToggle.addEventListener("click", function () {
          body.classList.toggle("dark-mode");
        });
      });

      const header = document.querySelector("header");

      window.addEventListener("scroll", function () {
        if (window.scrollY > 0) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      });
      var menuList = document.getElementById("menuList");
      menuList.style.maxHeight = "0px";
      function togglemenu() {
        if (menuList.style.maxHeight == "0px") {
          menuList.style.maxHeight = "150px";
        } else {
          menuList.style.maxHeight = "0px";
        }
      }
    </script>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "spice");
    if ($conn->connect_error) { die("Connection failed: " .
    $conn->connect_error); } $name = $_POST['name']; $password =
    $_POST['password']; $stmt = $conn->prepare("INSERT INTO signin (username,
    password) VALUES (?, ?)"); $stmt->bind_param("ss", $name, $password); if
    ($stmt->execute()) { echo "Sign-in Successful"; } else { echo "Error: " .
    $stmt->error; } $stmt->close(); $conn->close(); } ?>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "spice");
    if ($conn->connect_error) { die("Connection failed: " .
    $conn->connect_error); } $username = mysqli_real_escape_string($conn,
    $_POST['name']); $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); $sql =
    "INSERT INTO signup (username, email, password) VALUES (?, ?, ?)"; $stmt =
    $conn->prepare($sql); $stmt->bind_param("sss", $username, $email,
    $hashed_password); if ($stmt->execute()) { echo "Signup successful!"; } else
    { echo "Error: " . $stmt->error; } $stmt->close(); $conn->close(); } ?>
  </body>
  </html>