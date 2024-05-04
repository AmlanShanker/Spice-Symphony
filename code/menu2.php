<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MENU | | PAGE-2</title>
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    .logo {
      position: absolute;
      top: 10px;
      left: 10px;
    }
    body{
      overflow-x: hidden;
    }
    .logo img {
      max-width: 140px;
      height: auto;
      border-radius: 50%;
    }

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    *::-webkit-scrollbar {
        display: none;
      }
    .dark {
      position: fixed;
      top: 20px;
      right: 20px;
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
    }

    .menu .dark {
      position: absolute;
      top: 20px;
      right: 20px;
    }

    Light Mode :root {
      background-color: #fff;
      color: #0d160b;
    }

    body.dark-mode {
      background-color: #0d160b;
    }

    .dark-mode .heading > h1 {
      color: black;
    }

    .dark-mode .heading > h3 {
      color: black;
    }

    .dark-mode .food-items {
      background-color: #0d160b;
      border: 2px solid white;
    }

    .dark-mode .details-sub {
      color: #fff;
    }

    .dark-mode .details > p {
      color: #fff;
    }

    .dark-mode #total-bill {
      background-color: #0d160b;
    }

    .dark-mode #total-bill #item-info,
    .dark-mode #total-bill p,
    .dark-mode #total-bill ul,
    .dark-mode #total-bill h2 {
      color: #fff;
    }

    body {
      background: #f3f3f3;
    }

    #total-bill #item-info,
    #total-bill p,
    #total-bill ul,
    #total-bill h2 {
      color: #0d160b;
    }

    .menu {
      padding: 0 10px 30px 10px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      grid-gap: 20px 40px;
    }

    .heading {
      background: #258ea6;
      color: white;
      margin-bottom: 30px;
      padding: 30px 0;
      grid-column: 1/-1;
      text-align: center;
    }

    .heading > h1 {
      font-weight: 400;
      font-size: 32px;
      letter-spacing: 10px;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .heading > h3 {
      font-weight: 600;
      font-size: 22px;
      letter-spacing: 5px;
      text-transform: uppercase;
    }

    .food-items {
      display: grid;
      position: relative;
      grid-template-rows: auto 1fr;
      border: 2px solid black;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.6);
      transition: 0.2s ease-in-out;
      background-color: white;
    }

    .food-items img {
      position: relative;
      width: 100%;
      height: 280px;
      border-radius: 15px 15px 0 0;
      cursor: pointer;
    }

    h1 {
      grid-column: 1/-1;
      text-align: center;
    }

    .details {
      padding: 20px 10px;
      display: grid;
      grid-template-rows: auto 1fr 50px;
      grid-row-gap: 15px;
    }

    .details-sub {
      display: grid;
      grid-template-columns: auto auto;
    }

    .price {
      text-align: right;
    }

    .details-sub > h5 {
      font-weight: 600;
      font-size: 18px;
    }

    .details > p {
      color: #0d160b;
      font-size: 15px;
      line-height: 28px;
      font-weight: 400;
      align-self: stretch;
    }

    .details > button {
      background: #e84343;
      border: none;
      color: #fff;
      font-weight: 600;
      border-radius: 5px;
      width: 180px;
      cursor: pointer;
    }

    .details > button:hover {
      background: #4daa57;
    }

    input[type="number"],
    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .place {
      background-color: #28a745;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .place:hover {
      background-color: #218838;
    }

    #total-bill {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .button {
      width: 1300px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .button button {
      width: 50px;
      height: 50px;
      border: 2px solid black;
      border-radius: 20%;
      margin-left: 10px;
    }
    button:hover {
      cursor: pointer;
    }
    @media screen and (max-width: 768px) {
      .button {
        display: none;
      }
    }
  </style>
  <body>
    <a href="home1.php" class="logo"
      ><?php  
          require_once 'dbCongih1.php'; 
          $result = $db->query("SELECT image FROM images WHERE id = 1"); ?>
      <?php if($result->num_rows > 0){ ?>
      <?php while($row = $result->fetch_assoc()){ ?><img
        style="
          background-color: red;
          float: left;
          width: 100%;
          height: 85px;
          border: 2px solid black;
          box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        "
        src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
        alt="ok"
      /><?php } ?>
      <?php }else{ ?>
      <p class="status error">Image(s) not found...</p>
      <?php } ?></a
    >
    <div class="menu">
      <div class="heading">
        <h1>Spice Symphony</h1>
        <h3>&mdash;Menu&mdash;</h3>
        <button class="dark" id="theme-toggle">
          <ion-icon name="contrast-outline"></ion-icon>
        </button>
      </div>
      <div class="food-items">
        <?php  
          require_once 'dbCongih1.php'; 
          $result = $db->query("SELECT image FROM images WHERE id = 25"); ?>
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
        <div class="details">
          <div class="details-sub">
            <h5>Veg Thali</h5>
            <h5 class="price">&#8377;250</h5>
          </div>
          <p>
            A delicious combination of vegetarian dishes, including dal, sabzi,
            rice, roti, salad, and dessert.
          </p>
          <input
            type="number"
            id="quantity1"
            placeholder="Quantity"
            min="0"
            max="5"
            oninput="updateTotal()"
          />
        </div>
      </div>
      <div class="food-items">
        <?php  
          require_once 'dbCongih1.php'; 
          $result = $db->query("SELECT image FROM images WHERE id = 26"); ?>
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
        <div class="details">
          <div class="details-sub">
            <h5>Non-Veg Thali</h5>
            <h5 class="price">&#8377;350</h5>
          </div>
          <p>
            A satisfying assortment of non-vegetarian dishes, including chicken
            curry, rice, roti, salad, and dessert.
          </p>
          <input
            type="number"
            id="quantity2"
            placeholder="Quantity"
            min="0"
            max="5"
            oninput="updateTotal()"
          />
        </div>
      </div>
      <div class="food-items">
        <?php  
          require_once 'dbCongih1.php'; 
          $result = $db->query("SELECT image FROM images WHERE id = 29"); ?>
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
        <div class="details">
          <div class="details-sub">
            <h5>Special Combo</h5>
            <h5 class="price">&#8377;500</h5>
          </div>
          <p>
            Our special combo includes a mix of both vegetarian and
            non-vegetarian dishes, perfect for sharing.
          </p>
          <input
            type="number"
            id="quantity3"
            placeholder="Quantity"
            min="0"
            max="5"
            oninput="updateTotal()"
          />
        </div>
      </div>
      <div class="food-items">
        <?php  
          require_once 'dbCongih1.php'; 
          $result = $db->query("SELECT image FROM images WHERE id = 31"); ?>
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
        <div class="details">
          <div class="details-sub">
            <h5>Premium Thali</h5>
            <h5 class="price">&#8377;90</h5>
          </div>
          <p>
            A premium thali boasts an opulent spread of culinary delights,
            featuring gourmet dishes ranging from fragrant biryanis and
            succulent kebabs to rich curries and decadent desserts, promising a
            feast fit for royalty.
          </p>
          <input
            type="number"
            id="quantity4"
            placeholder="Quantity"
            min="0"
            max="5"
            oninput="updateTotal()"
          />
        </div>
      </div>
      <div class="food-items">
        <?php  
          require_once 'dbCongih1.php'; 
          $result = $db->query("SELECT image FROM images WHERE id = 32"); ?>
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
        <div class="details">
          <div class="details-sub">
            <h5>Chinese Combo</h5>
            <h5 class="price">&#8377;400</h5>
          </div>
          <p>
            A Chinese combo entices with an array of authentic delicacies, from
            savory stir-fries and aromatic fried rice to crispy spring rolls and
            delectable dumplings, offering a symphony of flavors that epitomize
            the essence of Chinese cuisine.
          </p>
          <input
            type="number"
            id="quantity5"
            placeholder="Quantity"
            min="0"
            max="5"
            oninput="updateTotal()"
          />
        </div>
      </div>
      <div class="food-items">
        <?php  
          require_once 'dbCongih1.php'; 
          $result = $db->query("SELECT image FROM images WHERE id = 33"); ?>
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
        <div class="details">
          <div class="details-sub">
            <h5>South Indian Thali</h5>
            <h5 class="price">&#8377;300</h5>
          </div>
          <p>
            A South Indian thali is a vibrant symphony of flavors, featuring a
            medley of traditional dishes such as aromatic rice, tangy sambar,
            crispy dosas, fluffy idlis, spicy chutneys, and cooling yogurt,
            capturing the essence of the region' rich culinary heritage in every
            bite.
          </p>
          <input
            type="number"
            id="quantity6"
            placeholder="Quantity"
            min="0"
            max="5"
            oninput="updateTotal()"
          />
        </div>
      </div>
      <div class="button">
        <a href="menu.php"><button>1</button></a>
        <a href="menu2.php"><button>2</button></a>
      </div>
    </div>

    <div id="total-bill">
      <h2>Total Bill</h2>
      <div id="item-info"></div>
      <input class="input" type="text" id="address" placeholder="Address" />

      <p>Total Price: ₹<span id="total-price">0</span></p>
      <p>Items Ordered:</p>
      <ul id="ordered-items"></ul>
      <a href="payment.php"
        ><button class="place" onclick="placeOrder()">Place Order</button></a
      >
    </div>
  </body>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const themeToggle = document.getElementById("theme-toggle");
      const body = document.body;

      themeToggle.addEventListener("click", function () {
        body.classList.toggle("dark-mode");
      });
    });

    const items = [
      { name: "Veg Thali", price: 250 },
      { name: "Non-Veg Thali", price: 350 },
      { name: "Special Combo", price: 500 },
      { name: "Premium Thali", price: 90 },
      { name: "Chinese Combo", price: 400 },
      { name: "South Indian Thali", price: 300 },
    ];

    var totalItems = 0;
    var totalPrice = 0;
    var orderedItems = [];

    function updateTotal() {
      totalItems = 0;
      totalPrice = 0;

      items.forEach((item, index) => {
        var quantity =
          parseInt(document.getElementById("quantity" + (index + 1)).value) ||
          0;
        if (quantity < 0) {
          alert("Please enter a valid quantity for " + item.name);
          return;
        }
        totalItems += quantity;
        totalPrice += quantity * item.price;
      });

      document.getElementById("total-price").innerText = totalPrice;
      document.getElementById("item-info").innerHTML =
        "Total Items: " + totalItems;
      updateOrderedItemsList();
    }

    function placeOrder() {
      if (totalItems === 0) {
        alert("Please add items to your order before placing it.");
        return;
      }

      var address = document.getElementById("address").value.trim();
      if (address === "") {
        alert("Please enter a valid address.");
        return;
      }

      alert(
        "Order Placed for " +
          totalItems +
          " items, Total Price: ₹" +
          totalPrice +
          ", Address: " +
          address
      );
    }

    function updateOrderedItemsList() {
      var itemsList = document.getElementById("ordered-items");
      itemsList.innerHTML = "";
      items.forEach((item, index) => {
        var quantity =
          parseInt(document.getElementById("quantity" + (index + 1)).value) ||
          0;
        if (quantity > 0) {
          var listItem = document.createElement("li");
          listItem.innerText = item.name + " x" + quantity;
          itemsList.appendChild(listItem);
        }
      });
    }
  </script>
  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
</html>
