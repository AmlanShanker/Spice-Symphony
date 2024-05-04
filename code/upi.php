<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon" />
    <title>UPI Payment Information</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }
      *::-webkit-scrollbar {
        display: none;
      }
      .container {
        width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border: 2px solid black;
      }
      .form-group {
        margin-bottom: 20px;
      }
      label {
        display: block;
        font-weight: bold;
      }
      input[type="text"] {
        width: 90%;
        padding: 10px;
        border: 2px solid black;
        border-radius: 5px;
      }
      input[type="submit"] {
        width: 90%;
        margin-left: 25px;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: 2px solid black;
        border-radius: 5px;
        cursor: pointer;
        text-align: Center;
      }
      input[type="submit"]:hover {
        background-color: #0056b3;
      }
      .image-container {
        display: flex;
        justify-content: center;
      }
      .image {
        height: 110px;
        width: 110px;
      }
      h2 {
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>UPI Payment Information</h2>
      <form
        action="<?php echo $_SERVER['PHP_SELF']; ?>"
        method="post"
        id="upiForm"
      >
        <div class="form-group">
          <label for="upiId">UPI ID:</label>
          <br />
          <input
            name="upiid"
            type="text"
            id="upiId"
            placeholder="Enter your UPI ID"
          />
          <h2>OR</h2>
          <label for="qrCode">QR Code:</label>
        </div>
        <div class="form-group image-container">
          <?php  
    require_once 'dbCongih1.php'; 
    $result = $db->query("SELECT image FROM images WHERE id = 24"); ?>
          <?php if($result->num_rows > 0){ ?>
          <?php while($row = $result->fetch_assoc()){ ?>
          <img
            class="image"
            src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
            alt="QR Code"
            id="qrCode"
          />
          <?php } ?>
          <?php }else{ ?>
          <p class="status error">Image(s) not found...</p>
          <?php } ?>
        </div>

        <a href="thankyou.php"><input type="submit" value="Submit" /></a>
      </form>
    </div>

    <script>
      document
        .getElementById("upiForm")
        .addEventListener("submit", function (event) {
          event.preventDefault();
          const upiId = document.getElementById("upiId").value;
          const queryString = `?upiId=${encodeURIComponent(upiId)}`;
          window.location.href = `thankyou.php${queryString}`;
        });
    </script>
  </body>
</html>