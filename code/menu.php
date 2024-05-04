<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu</title>
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
    *::-webkit-scrollbar {
        display: none;
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
        <div class="details">
          <div class="details-sub">
            <h5>Kadhai Paneer</h5>
            <h5 class="price">&#8377;230</h5>
          </div>
          <p>
            Indulge in the ultimate comfort of our Kadhai Paneer with Cream.
            Each succulent piece of paneer is lovingly cooked in a fragrant
            medley of spices and enriched with velvety cream.
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
          $result = $db->query("SELECT image FROM images WHERE id = 34"); ?>
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
            <h5>Tandoori Roti</h5>
            <h5 class="price">&#8377;10</h5>
          </div>
          <p>
          Delight in the smoky aroma and irresistible flavor of freshly baked tandoori
          roti, boasting a crisp exterior and pillowy softness within, a perfect
          accompaniment to any savory dish.

          </p>
          <input
            type="number"
            id="quantity2"
            placeholder="Quantity"
            min="0"
            max="10"
            oninput="updateTotal()"
          />
        </div>
      </div>
      <div class="food-items">
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
        <div class="details">
          <div class="details-sub">
            <h5>Chole Bhature</h5>
            <h5 class="price">&#8377;100</h5>
          </div>
          <p>
            Chole Bhature is a popular North Indian dish featuring spicy
            chickpea curry (chole) paired with deep-fried bread (bhature),
            creating a flavorful and satisfying meal.
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
        <div class="details">
          <div class="details-sub">
            <h5>Masala Dosa</h5>
            <h5 class="price">&#8377;90</h5>
          </div>
          <p>
            Masala Dosa is a South Indian delicacy made of fermented rice and
            lentil batter, thinly spread on a hot griddle, filled with a spiced
            potato mixture, and served with chutneys and sambar.
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
        <div class="details">
          <div class="details-sub">
            <h5>Matar Paneer</h5>
            <h5 class="price">&#8377;130</h5>
          </div>
          <p>
            Matar Paneer is a classic North Indian dish made with soft cubes of
            paneer (Indian cottage cheese) cooked in a creamy tomato-based gravy
            along with green peas, flavored with aromatic spices.
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
        <div class="details">
          <div class="details-sub">
            <h5>Fried Rice</h5>
            <h5 class="price">&#8377;80</h5>
          </div>
          <p>
            Fried rice is a savory Asian dish made with cooked rice stir-fried
            with vegetables, eggs, and often meat or seafood, seasoned with soy
            sauce and other flavorings.
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
      <div class="food-items">
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
        <div class="details">
          <div class="details-sub">
            <h5>Tandoori Chicken</h5>
            <h5 class="price">&#8377;280</h5>
          </div>
          <p>
            Tandoori chicken is a flavorful Indian dish consisting of marinated
            chicken cooked in a traditional clay oven (tandoor), resulting in
            smoky, tender, and aromatic meat with a vibrant red hue.
          </p>
          <input
            type="number"
            id="quantity7"
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
        <div class="details">
          <div class="details-sub">
            <h5>Butter Chicken</h5>
            <h5 class="price">&#8377;250</h5>
          </div>
          <p>
            It is a creamy and flavorful dish consisting of tender chicken cooked in a rich
            tomato-based sauce with butter, cream, and a blend of aromatic spices.
          </p>
          <input
            type="number"
            id="quantity8"
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
          $result = $db->query("SELECT image FROM images WHERE id = 20"); ?>
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
            <h5>White Sauce Pasta</h5>
            <h5 class="price">&#8377;120</h5>
          </div>
          <p>
            Indulge in the creamy richness of our White Sauce Pasta,
            meticulously prepared with a velvety béchamel base and infused with
            delicate herbs. Every mouthful offers a symphony of flavors
            reminiscent of Italian culinary finesse, tailored for pasta
            aficionados seeking a delightful experience.
          </p>
          <input
            type="number"
            id="quantity9"
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
          $result = $db->query("SELECT image FROM images WHERE id = 12"); ?>
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
            <h5>Red Sauce Pasta</h5>
            <h5 class="price">&#8377;120</h5>
          </div>
          <p>
            Savor the tangy goodness of our Red Sauce Pasta, crafted with a
            flavorful tomato base and aromatic herbs. Each bite delivers a burst
            of Italian-inspired bliss, perfect for pasta lovers.
          </p>
          <input
            type="number"
            id="quantity10"
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
          $result = $db->query("SELECT image FROM images WHERE id = 13"); ?>
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
            <h5>Hakka Noodles</h5>
            <h5 class="price">&#8377;110</h5>
          </div>
          <p>
            Embark on a culinary adventure with our Hakka Noodles, stir-fried to
            perfection with fresh vegetables and aromatic spices. A tantalizing
            fusion of Chinese and Indian flavors awaits, promising a delightful
            dining experience.
          </p>
          <input
            type="number"
            id="quantity11"
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
          $result = $db->query("SELECT image FROM images WHERE id = 14"); ?>
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
            <h5>Chilli Potato</h5>
            <h5 class="price">&#8377;80</h5>
          </div>
          <p>
            Delight your taste buds with our crispy Chilli Potato, a tantalizing
            fusion of tender potatoes tossed in a spicy-sweet sauce. Each bite
            offers a perfect balance of crunch and flavor, creating an
            irresistible snack or appetizer.
          </p>
          <input
            type="number"
            id="quantity12"
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
          $result = $db->query("SELECT image FROM images WHERE id = 21"); ?>
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
            <h5>Kulfi</h5>
            <h5 class="price">&#8377;60</h5>
          </div>
          <p>
            Savor the luscious delight of our Kulfi, lovingly crafted with rich,
            creamy textures and a medley of traditional flavors. Each bite
            encapsulates the essence of indulgence, offering a blissful
            experience reminiscent of cherished moments and sweet nostalgia.
          </p>
          <input
            type="number"
            id="quantity13"
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
          $result = $db->query("SELECT image FROM images WHERE id = 22"); ?>
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
            <h5>Gulab Jamun</h5>
            <h5 class="price">&#8377;65</h5>
          </div>
          <p>
            Indulge in the tender perfection of our Gulab Jamun, meticulously
            prepared to achieve the ideal balance of softness and sweetness.
            Every bite unveils a burst of syrupy goodness, evoking the warmth of
            traditional Indian desserts and igniting the senses with
            unparalleled satisfaction.
          </p>
          <input
            type="number"
            id="quantity14"
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
          $result = $db->query("SELECT image FROM images WHERE id = 23"); ?>
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
            <h5>Rasgulla</h5>
            <h5 class="price">&#8377;65</h5>
          </div>
          <p>
            Indulge in the divine sweetness of our Rasgulla, expertly crafted
            with spongy textures and immersed in a syrupy elixir. Each bite
            captures the essence of Indian culinary heritage, offering a
            symphony of flavors that creates unforgettable memories.
          </p>
          <input
            type="number"
            id="quantity15"
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
    var itemPrices = [
      230, 10, 100, 90, 130, 80, 280, 250, 120, 120, 110, 80, 60, 65, 65,
    ];
    var itemNames = [
      "Kadhai Paneer",
      "Tandoori Roti",
      "Chole Bhature",
      "Masala Dosa",
      "Matar Paneer",
      "Fried Rice",
      "Tandoori Chicken",
      "Butter Chicken",
      "White Sauce Pasta",
      "Red Sauce Pasta",
      "Hakka Noodles",
      "Chilli Potato",
      "Kulfi",
      "Gulab Jamun",
      "Rasgulla",
    ];
    var totalItems = 0;
    var totalPrice = 0;
    var orderedItems = [];
    function updateTotal() {
      totalItems = 0;
      totalPrice = 0;
      for (var i = 0; i < itemPrices.length; i++) {
        var quantity =
          parseInt(document.getElementById("quantity" + (i + 1)).value) || 0;
        if (quantity < 0) {
          alert("Please enter a valid quantity for " + itemNames[i]);
          return;
        }
        totalItems += quantity;
        totalPrice += quantity * itemPrices[i];
      }
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
      for (var i = 0; i < itemNames.length; i++) {
        var quantity =
          parseInt(document.getElementById("quantity" + (i + 1)).value) || 0;
        if (quantity > 0) {
          var item = document.createElement("li");
          item.innerText = itemNames[i] + " x" + quantity;
          itemsList.appendChild(item);
        }
      }
    }
  </script>
  <script
    type="module"
    src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
  ></script>
</html>