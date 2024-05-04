<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Methods</title>
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 400px;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1),
                0 5px 12px -2px rgba(0, 0, 0, 0.1),
                0 18px 36px -6px rgba(0, 0, 0, 0.1);
        }

        .container .title {
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container form input {
            display: none;
        }

        .container form .category {
            margin-top: 10px;
            padding-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .category label {
            width: calc(50% - 15px);
            max-width: calc(50% - 15px);
            height: 145px;
            padding: 20px;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border-radius: 5px;
            position: relative;
            margin-bottom: 15px;
        }

        @media screen and (max-width: 600px) {
            .category label {
                width: calc(100% - 15px);
                max-width: calc(100% - 15px);
            }
        }

        #visa:checked~.category .visaMethod,
        #mastercard:checked~.category .mastercardMethod,
        #paypal:checked~.category .paypalMethod,
        #AMEX:checked~.category .amexMethod,
        #cash:checked~.category .cashMethod,
        #upi:checked~.category .upiMethod {
            box-shadow: 0px 0px 0px 1px #6064b6;
        }

        #visa:checked~.category .visaMethod .check,
        #mastercard:checked~.category .mastercardMethod .check,
        #paypal:checked~.category .paypalMethod .check,
        #AMEX:checked~.category .amexMethod .check,
        #cash:checked~.category .cashMethod .check,
        #upi:checked~.category .upiMethod .check {
            display: block;
        }

        label .imgName {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
            gap: 10px;
        }

        .imgName span {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            top: 72%;
            transform: translateY(-72%);
        }

        .imgName .imgContainer {
            width: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: absolute;
            top: 35%;
            transform: translateY(-35%);
        }

        img {
            width: 50px;
            height: auto;
        }

        .visa img,
        .mastercard img,
        .paypal img,
        .AMEX img {
            width: 80px;
        }

        .cashMethod,
        .upiMethod {
            width: 100%;
            height: 145px;
            padding: 20px;
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            border-radius: 5px;
            position: relative;
            margin-bottom: 15px;
        }

        .check {
            display: none;
            position: absolute;
            top: -4px;
            right: -4px;
        }

        .check i {
            font-size: 18px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #6064b6;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #4e518d;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="title">
            <h4>Select a <span style="color: #6064b6">Payment</span> method</h4>
        </div>


        <form id="paymentForm" method="GET">
            <input type="radio" name="payment" id="visa">
            <input type="radio" name="payment" id="mastercard">
            <input type="radio" name="payment" id="paypal">
            <input type="radio" name="payment" id="AMEX">
            <input type="radio" name="payment" id="cash">
            <input type="radio" name="payment" id="upi">

            <div class="category">
                <label for="visa" class="visaMethod">
                    <div class="imgName">
                        <div class="imgContainer visa">
                            <img src="https://i.ibb.co/vjQCN4y/Visa-Card.png" alt="">
                        </div>
                        <span class="name">VISA</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="mastercard" class="mastercardMethod">
                    <div class="imgName">
                        <div class="imgContainer mastercard">
                            <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="">
                        </div>
                        <span class="name">Mastercard</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="paypal" class="paypalMethod">
                    <div class="imgName">
                        <div class="imgContainer paypal">
                            <img src="https://i.ibb.co/KVF3mr1/paypal.png" alt="">
                        </div>
                        <span class="name">Paypal</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="cash" class="cashMethod">
                    <div class="imgName">
                        <div class="imgContainer cash">
                            <img src="data:image/jpeg;base64,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" alt="">
                        </div>
                        <span class="name">Cash on Delivery</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>

                <label for="upi" class="upiMethod">
                    <div class="imgName">
                        <div class="imgContainer upi">
                            <img src="https://www.shutterstock.com/image-vector/kerala-india-19-07-2023-260nw-2334125251.jpg" alt="">
                        </div>
                        <span class="name">UPI</span>
                    </div>
                    <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                </label>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <script>
       
        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            const selectedPaymentMethod = document.querySelector('input[name="payment"]:checked').id;
            let redirectUrl = ''; 
            
            switch (selectedPaymentMethod) {
                case 'visa':
                    redirectUrl = 'information.php'; 
                    break;
                case 'mastercard':
                    redirectUrl = 'information.php'; 
                    break;
                case 'paypal':
                    redirectUrl = 'information.php'; 
                    break;
                case 'AMEX':
                    redirectUrl = 'information.php'; 
                    break;
                case 'cash':
                    redirectUrl = 'thankyou.php'; 
                    break;
                case 'upi':
                    redirectUrl = 'upi.php'; 
                    break;
                default:
                    break;
            }
            
            event.preventDefault(); 
            window.location.href = redirectUrl; 
        });
    </script>
   
</body>
</html>
 

