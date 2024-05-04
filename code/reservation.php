<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation</title>
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="reservation.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
        * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: "Montserrat", sans-serif;
    }
    *::-webkit-scrollbar {
        display: none;
      }

    body {
      min-height: 100vh;
      <?php
    require_once 'dbCongih1.php';
    $result = $db->query("SELECT image FROM images WHERE id = 18");
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
      overflow-x: hidden;
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

    .h2 {
      color: #abd2fa;
      font-weight: bolder;
    }

    .banner {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      color: #fff;
      padding-bottom: 20px;
    }

    .card-container {
      display: grid;
      grid-template-columns: 1fr;
    }

    .card-img {
        <?php
    require_once 'dbCongih1.php';
    $result = $db->query("SELECT image FROM images WHERE id = 19");
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
      height: 300px;
    }

    .banner h2 {
      padding-bottom: 40px;
      margin-bottom: 20px;
    }

    .card-content {
      background: #fff;
      color: #000;
      width: 90%;
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
    }

    .card-content h3 {
      text-align: center;
      color: #000;
      padding: 25px 0 10px 0;
      font-size: 26px;
      font-weight: 500;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .form-row select,
    .form-row input {
      flex: 1 1 45%;
      margin: 15px 0;
      padding: 5px;
      font-size: 15px;
      outline: none;
      border: none;
      border-bottom: 1px solid #eee;
      font-weight: 500;
    }

    input[type="text"],
    input[type="number"],
    input::placeholder,
    .form-row select {
      color: black;
      font-weight: 500;
    }

    input[type="submit"] {
      color: #fff;
      background: #292929;
      padding: 12px 0;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    input[type="submit"]:hover {
      opacity: 0.9;
    }

    @media only screen and (min-width: 768px) {
      .card-container {
        grid-template-columns: 1fr 1fr;
      }
    }
  </style>
  <body>
    <section class="banner">
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
      <h2 class="h2">BOOK YOUR TABLE</h2>
      <div class="card-container">
        <div class="card-img"></div>
        <div class="card-content">
          <h3>RESERVATION</h3>
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-row">
              <input
                type="text"
                id="name"
                name="name"
                placeholder="Full Name"
              />
              <input
                type="text"
                id="phone"
                name="phone"
                placeholder="Phone No"
              />
            </div>
            <div class="form-row">
              <label for="name">Date</label>
              <input type="date" id="date" name="date" placeholder="date" />
              <select name="time" id="time">
                <option value="time-select">Select Time</option>
                <option value="10:00">10:00</option>
                <option value="10:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="10:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="10:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="10:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="10:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="10:00">21:00</option>
                <option value="22:00">22:00</option>
              </select>
            </div>
            <div class="form-row">
              <input
                type="number"
                id="persons"
                name="persons"
                placeholder="How Many Persons?"
                min="1"
              />
              <input onclick="confirm()" type="submit" value="Book Table" />
            </div>
          </form>
        </div>
      </div>
    </section>
  </body>
  <script>
    function confirm() {
      alert("BOOKING CONFIRMED");
    }
  </script>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "spice");
    if ($conn->connect_error) { die("Connection failed: " .
  $conn->connect_error); } $name = $_POST['name']; $phone = $_POST['phone'];
  $date = $_POST['date']; $time = $_POST['time']; $persons = $_POST['persons'];
  if (empty($date)) { die("Error: Date cannot be empty"); } $sql = "INSERT INTO
  reservation (`Name`, `Phone No`, `Date`, `Time`, `Persons`) VALUES ('$name',
  '$phone', '$date', '$time', '$persons')"; if ($conn->query($sql) === TRUE) {
  echo "Reservation successful"; } else { echo "Error: " . $sql . "<br />" .
  $conn->error; } $conn->close(); } ?>
</html>