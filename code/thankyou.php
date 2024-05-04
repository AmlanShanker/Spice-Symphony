<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.jpeg" type="image/x-icon" />
    <style>
        /* Custom CSS */
        .order-confirmation-modal {
            max-width: 600px;
            margin: 0 auto;
        }
        *::-webkit-scrollbar {
        display: none;
      }
    </style>
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h1 class="mb-0">Order Confirmation</h1>
                </div>
                <div class="card-body">
                    <div id="confirmationMessage" class="text-center mb-3"></div>
                    <button type="button" class="btn btn-primary btn-block" id="randomQuoteBtn" data-toggle="modal" data-target="#myModal">
                        View Random Quote
                    </button>
                    <ul id="orderDetails" class="list-unstyled mt-3"></ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered order-confirmation-modal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Order Details:</h5>
              
                <a href="home1.php" class="close" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</a>
            </div>
            <div class="modal-body">
                <ul id="orderDetailsModal" class="list-unstyled"></ul>
                <h2 class="mt-3">Random Quote:</h2>
                <p id="quoteTextModal"></p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    const quotes = {
        pasta: [
            "Life is a combination of magic and pasta. - Federico Fellini",
            "Everything you see, I owe to spaghetti. - Sophia Loren",
            "The trouble with eating Italian food is that five or six days later you're hungry again. - George Miller",
            "One cannot think well, love well, sleep well, if one has not dined well. - Virginia Woolf"
        ],
        dessert: [
            "Stressed spelled backwards is desserts. Coincidence? I think not! - Anonymous",
            "Dessert is like a feel-good song, and the best ones make you dance. - Chef Edward Lee",
            "Life is uncertain. Eat dessert first. - Ernestine Ulmer",
            "A party without cake is just a meeting. - Julia Child"
        ],
        seafood: [
            "There is no sincerer love than the love of food. - George Bernard Shaw",
            "Fish, to taste right, must swim three times - in water, in butter, and in wine. - Polish proverb",
            "Good fish is always expensive. - H.W. Tilman",
            "You don't need a silver fork to eat good food. - Paul Prudhomme"
        ]
    };

    function generateRandomQuote() {
        const categories = Object.keys(quotes);
        const randomCategory = categories[Math.floor(Math.random() * categories.length)];
        const quoteList = quotes[randomCategory];
        const randomQuote = quoteList[Math.floor(Math.random() * quoteList.length)];
        return randomQuote;
    }

   
    const randomQuote = generateRandomQuote();
    const quoteText = document.getElementById("quoteTextModal");
    quoteText.innerText = randomQuote;

    document.addEventListener("DOMContentLoaded", function () {
        
        const confirmationMessage = document.getElementById("confirmationMessage");
        confirmationMessage.innerText = "Your order has been placed and you will receive it in 45 minutes";

        
        var orderDetails = sessionStorage.getItem('orderDetails');
        if (orderDetails) {
            orderDetails = JSON.parse(orderDetails);
            document.getElementById("orderDetails").innerHTML = `
                <li>Items: ${orderDetails.items.join(", ")}</li>
                <li>Total Price: $${orderDetails.totalPrice.toFixed(2)}</li>
                <li>Customer Name: ${orderDetails.customerName}</li>
            `;
        } else {
            
            console.log("No order details found");
        }
    });
</script>

</body>
</html>