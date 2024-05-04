<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="about.css " />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="shortcut icon" href="/images/logo.jpeg" type="image/x-icon" />
    <title>About Us</title>
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Montserrat", sans-serif;
    }
    *::-webkit-scrollbar {
        display: none;
      }
    .logo {
      width: 100%;
      height: auto;
      background-color: #231123;
      display: flex;
      justify-content: space-between;
      font-size: 2em;
      color: #fff;
      user-select: none;
    }
    .logo img {
      border-radius: 50%;
    }
    section {
      padding: 4% 10%;
    }
    .about-us {
      width: 100%;
      height: 1600px;
      background-color: #231123;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 4rem;
    }
    .main-img img {
      max-width: 100%;
      width: 560px;
      height: auto;
    }
    .text {
      padding: 6% 0;
    }
    .text h4 {
      color: #ce1446;
      font-size: 16px;
      font-weight: 600;
      text-transform: uppercase;
      margin-bottom: 10px;
    }
    .text h1 {
      color: #fff;
      font-size: 36px;
      text-transform: capitalize;
      font-weight: 700;
      line-height: 46px;
      margin-bottom: 30px;
    }
    .text h2 {
      color: #fff;
      font-size: 36px;
      text-transform: capitalize;
      font-weight: 700;
      line-height: 46px;
      margin-bottom: 30px;
    }
    hr {
      width: 30%;
      border: none;
      height: 2px;
      background-color: #ce1446;
      margin-bottom: 50px;
    }
    .text p {
      max-width: 600px;
      color: #fff;
      font-size: 15px;
      font-weight: 400;
      line-height: 1.7;
      margin-bottom: 60px;
    }
    .last-text {
      display: flex;
    }
    .text1 {
      margin-right: 60px;
    }
    .last-text h3 {
      color: #ce1446;
      font-size: 60px;
      font-weight: 700;
    }
    .last-text h5 {
      color: #fff;
      font-size: 18px;
      font-weight: 500;
      line-height: 18px;
    }

    @media (max-width: 1385px) {
      section {
        padding: 4% 4%;
        transition: 0.3s;
      }
      .main-img img {
        width: 500px;
        height: auto;
        transition: 0.3s;
      }
    }
    @media (max-width: 1240px) {
      .text h1 {
        font-size: 30px;
        transition: 0.3s;
      }
      .text h2 {
        font-size: 30px;
        transition: 0.3s;
      }
    }
    @media (max-width: 1040px) {
      .about-us {
        grid-template-columns: 1fr;
        height: 100%;
      }
      .main-img img {
        padding-top: 40px;
      }
      .logo {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
  <body>
    <h2 class="logo">
      <a href="home1.php"
        ><?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 1"); ?>
        <?php if($result->num_rows > 0){ ?>
        <?php while($row = $result->fetch_assoc()){ ?>
        <img
          style="
            float: left;
            width: 100px;
            height: 100px;
            border: 2px solid black;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
          "
          src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
          alt=""
        />
        <?php } ?>
        <?php }else{ ?>
        <p class="status error">Image(s) not found...</p>
        <?php } ?></a
      >
    </h2>
    <section class="about-us">
      <div class="main-img">
        <?php  
require_once 'dbCongih1.php'; 
$result = $db->query("SELECT image FROM images WHERE id = 16"); ?>
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
      <div class="text">
        <h4>About US</h4>
        <h1>Welcome to Spice Symphony</h1>
        <hr />
        <p>
          At Spice Symphony, we believe that dining is not just about food; it's
          about creating memorable experiences that linger on your palate and in
          your heart. Nestled in the heart of Rajori Garden,New Delhi our
          culinary haven is more than just a restaurant — it's a celebration of
          flavors, a symphony of aromas, and a gathering place for those who
          appreciate the art of good food.
        </p>
        <br />
        <h2>Our Story</h2>
        <p>
          At Spice Symphony, we believe that dining is not just about food; it's
          about creating memorable experiences that linger on your palate and in
          your heart. Nestled in the heart of Rajori Garden,New Delhi our
          culinary haven is more than just a restaurant — it's a celebration of
          flavors, a symphony of aromas, and a gathering place for those who
          appreciate the art of good food.
        </p>
        <br />
        <h2>Join Us on this Culinary Voyage</h2>
        <p>
          At Spice Symphony, we invite you to embark on a culinary voyage where
          every dish tells a story and every visit is a new chapter. Join us in
          celebrating the art of food, the joy of connection, and the pleasure
          of shared moments. Thank you for choosing Spice Symphony. We look
          forward to serving you and creating memories together. Bon Appétit!
          Spice Symphony
        </p>
        <p>
          Thank you for choosing Spice Symphony. We look forward to serving you
          and creating memories together.
        </p>
        <p>Bon Appétit!</p>
        <p>Spice Symphony</p>
        <div class="last-text">
          <div class="text1">
            <h3>100+</h3>
            <h5>Cuisines</h5>
          </div>
          <div class="text1">
            <h3>20k</h3>
            <h5>Happy Customers</h5>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>