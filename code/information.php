<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Information Form</title>
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon" />
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #494368;
      }
      .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border: 5px solid black;
      }
      *::-webkit-scrollbar {
        display: none;
      }
      .form-group {
        margin-bottom: 20px;
      }
      label {
        display: block;
        font-weight: bold;
      }
      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
      }
      input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      .error {
        color: red;
        font-size: 0.8em;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h2>
        Please fill out the information based on your selected payment method:
      </h2>
      <form
        id="paymentForm"
        action="<?php echo $_SERVER['PHP_SELF'];?>"
        method="post"
      >
        <div class="form-group">
          <label for="cardNumber">Card Number:</label>
          <input
            id="number"
            name="number"
            type="text"
            placeholder="Enter your card number"
            required
          />
        </div>
        <div class="form-group">
          <label for="cvv">CVV:</label>
          <input
            type="password"
            id="cvv"
            name="cvv"
            placeholder="Enter your CVV"
            required
          />
        </div>
        <div class="form-group">
          <label for="expiryDate">Expiry Date:</label>
          <input
            id="expiry"
            name="expiry"
            type="text"
            placeholder="MM/YYYY"
            required
          />
        </div>

        <div class="form-group">
          <label for="name">Name:</label>
          <input
            id="name"
            name="name"
            type="text"
            placeholder="Enter your name"
            required
          />
        </div>

        <input type="submit" value="Submit" />
      </form>
    </div>
    <script>
      const form = document.getElementById("paymentForm");
      form.addEventListener("submit", function (event) {
        event.preventDefault();
        const formData = new FormData(form);
        const cardNumber = formData.get("cardNumber");
        const cvv = formData.get("cvv");
        const expiryDate = formData.get("expiryDate");
        const name = formData.get("name");
        window.location.href = "thankyou.php";
      });
    </script>
  </body>
</html>