<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review Us</title>
    <link rel="stylesheet" href="contact.css" />
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon" />
  </head>
  <style>
        * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Montserrat", sans-serif;
    }
    *::-webkit-scrollbar {
        display: none;
      }
    body {
        <?php
    require_once 'dbCongih1.php';
    $result = $db->query("SELECT image FROM images WHERE id = 15");
    ?>
        <?php if($result->num_rows > 0){ ?>
                    <?php while($row = $result->fetch_assoc()){ ?>
                        background-image: url('data:image/jpg;base64,<?php echo base64_encode($row['image']); ?>');
                    <?php } ?>
                <?php } else { ?>

                    background-image: url('data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>');
                <?php } ?>


      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
    }

    .contactUs {
      position: relative;
      width: 100%;
      padding: 40px 100px;
    }
    .contactUs .title {
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2em;
    }
    .contactUs .title h2 {
      color: #fff;
      font-weight: 500;
    }
    .form {
      grid-area: form;
    }
    .info {
      grid-area: info;
    }
    .map {
      grid-area: map;
    }
    .contact {
      padding: 40px;
      background: #fff;
      box-shadow: 0 5px 35px rgba(0, 0, 0, 0.15);
    }
    .box {
      position: relative;
      display: grid;
      grid-template-columns: 2fr 1fr;
      grid-template-rows: 5fr 4fr;
      grid-template-areas:
        "form info"
        "form map";
      grid-gap: 20px;
      margin-top: 20px;
    }
    .logo {
      width: 100%;
      height: auto;
      display: flex;
      justify-content: space-between;
      font-size: 2em;
      color: #fff;
      user-select: none;
    }
    .logo img {
      border-radius: 50%;
    }
    .contact h3 {
      color: #0e3959;
      font-weight: 500;
      font-size: 1.4em;
      margin-bottom: 10px;
    }
    .formBox {
      position: relative;
      width: 100%;
    }
    .formBox .row50 {
      display: flex;
      gap: 20px;
    }
    .inputBox {
      display: flex;
      flex-direction: column;
      margin-bottom: 10px;
      width: 50%;
    }
    .formBox .row100 .inputBox {
      width: 100%;
    }
    .inputBox span {
      color: #18b7ff;
      margin-bottom: 5px;
      font-weight: 500;
    }
    .inputBox input {
      padding: 10px;
      font-size: 1.1em;
      outline: none;
      border: 1px solid #333;
    }
    .inputBox textarea {
      padding: 10px;
      font-size: 1.1em;
      outline: none;
      border: 1px solid #333;
      resize: none;
      min-height: 220px;
      margin-bottom: 10px;
    }
    .send {
      background: #ff578b;
      color: #fff;
      border: none;
      font-size: 1.1em;
      max-width: 120px;
      font-weight: 500;
      cursor: pointer;
      padding: 14px 15px;
    }
    .inputBox ::placeholder {
      color: #999;
    }
    .social-links img {
      height: 20px;
      margin: 20px;
      cursor: pointer;
    }
    .social-links {
      text-align: center;
    }
    .info {
      background: #0e3959;
    }
    .info h3 {
      color: #fff;
    }
    .info .infoBox div {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .info .infoBox div span {
      min-width: 40px;
      height: 40px;
      color: #fff;
      background: #18b7ff;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 1.5em;
      border-radius: 50%;
      margin-right: 15px;
    }
    .info .infoBox div p {
      color: #fff;
    }

    .info .infoBox div a {
      color: #fff;
      text-decoration: none;
      font-size: 1.1em;
    }
    .map {
      padding: 0;
    }
    .map iframe {
      width: 100%;
      height: 100%;
    }
    @media (max-width: 991px) {
      .contactUs {
        padding: 20px;
      }
      .box {
        position: relative;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto;
        grid-template-areas: "form" "info" "map";
      }
      .map {
        min-height: 300px;
        padding: 0;
      }
      .formBox .row50 {
        display: flex;
        gap: 0;
        flex-direction: column;
      }
      .inputBox {
        width: 100%;
      }
      .contact {
        padding: 30px;
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
        <?php while($row = $result->fetch_assoc()){ ?><img
          style="
            float: left;
            width: 100px;
            height: 100px;
            border: 2px solid black;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
          "
          src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
          alt="logo"
        /><?php } ?>
        <?php }else{ ?>
        <p class="status error">Image(s) not found...</p>
        <?php } ?></a
      >
    </h2>
    <div class="contactUs">
      <div class="title">
        <h2>Feel Free to Review</h2>
      </div>
      <div class="box">
        <div class="contact form">
          <h3>Send A Review</h3>
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="formBox">
              <div class="row50">
                <div class="inputBox">
                  <span>First Name</span>
                  <input
                    type="text"
                    id="fname"
                    name="fname"
                    placeholder="Eg:-Akshay"
                  />
                </div>
                <div class="inputBox">
                  <span>Last Name</span>
                  <input
                    type="text"
                    id="lname"
                    name="lname"
                    placeholder="Eg:-Kumar"
                  />
                </div>
              </div>

              <div class="row50">
                <div class="inputBox">
                  <span>Email</span>
                  <input
                    type="text"
                    id="email"
                    name="email"
                    placeholder="Eg:-123@gmail.com"
                  />
                </div>
                <div class="inputBox">
                  <span>Mobile</span>
                  <input
                    type="text"
                    id="phone"
                    name="phone"
                    placeholder="Eg:- +912321232345"
                  />
                </div>
              </div>

              <div class="row100">
                <div class="inputBox">
                  <span>Review</span>
                  <textarea
                    id="message"
                    name="message"
                    placeholder="Write Your Review Here..."
                  ></textarea>
                </div>
              </div>

              <div class="row100">
                <div class="inputBox">
                  <input
                    onclick="confirm()"
                    class="send"
                    type="submit"
                    value="Send"
                  />
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="contact info">
          <h3>Contact Info</h3>
          <div class="infoBox">
            <div>
              <span><ion-icon name="location-outline"></ion-icon></span>
              <p>Rajouri Garden,New Delhi<br />INDIA</p>
            </div>
            <div>
              <span><ion-icon name="mail-outline"></ion-icon></span>
              <a href="mailto:spiceSymphonny@gmail.com"
                >spicesymphony@gmail.com</a
              >
            </div>
            <div>
              <span><ion-icon name="call-outline"></ion-icon></span>
              <a href="tel:+91 9869 364 645">+91 9869 364 645</a>
            </div>
            <div class="social-links">
              <a href=""><img src="images/fb.png" alt="" /></a>
              <a href=""><img src="images/X.avif" alt="" /></a>
              <a href=""><img src="images/Youtube_logo.png" alt="" /></a>
            </div>
          </div>
        </div>
        <div class="contact map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14006.07203370952!2d77.110312433355!3d28.644204492223007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d036b61214b21%3A0xaaa9a3b98a1faee2!2sRajouri%20Garden%2C%20Delhi!5e0!3m2!1sen!2sin!4v1712637865413!5m2!1sen!2sin"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script>
      function confirm() {
        alert("Thanks For The Review!");
      }
    </script>
  </body>

  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $conn = new mysqli("localhost", "root", "", "spice");

    if ($conn->connect_error) { die("Connection failed: " .
  $conn->connect_error); } $fname = $_POST['fname']; $lname = $_POST['lname'];
  $email = $_POST['email']; $phone = $_POST['phone']; $message =
  $_POST['message']; $sql = "INSERT INTO contact (`First_Name`, `Last_Name`,
  `Email`, `Mobile`, `Message`) VALUES ('$fname', '$lname', '$email', '$phone',
  '$message')"; if ($conn->query($sql) === TRUE) { echo "Review Has Been Added";
  } else { echo "Error: " . $sql . "<br />" . $conn->error; } $conn->close(); }
  ?>
</html>
