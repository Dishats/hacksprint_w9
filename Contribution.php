<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
include 'admin/db_connect.php'; 
?>
    <title>Alumni contribution Page</title>
    <style>
         header.masthead {
      background: url(admin/assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>);
      background-repeat: no-repeat;
      background-size: cover;
    }

    
        body {
          
            background-size: cover;
            font-family: Arial, sans-serif;
            text-align: center;
            color: white;
            padding: 50px;
        }

        /*.donation-container {
            max-width: 700;
            margin: auto;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }*/

        /*.payment-options img {
            width: 50px;
            margin: 10px;
            cursor: pointer;*/
        }
        {
           /* margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('background.jpg'); Add your background image URL 
            background-size: cover;
            background-position: center;
            display: center;
            align-items: center;
            justify-content: center;
            height: 100vh;*/
        }

        /*.container {
            background-color: rgba(255, 255, 255,);
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            text-align: center;*/
        }

        /*input,
        button {
            margin-top: 10px;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
   

</head>

<body>
    <hr>
    <hr>

    <div class="donation-container">

        <h2>Alumni Donation Page</h2>
        <p>"Your quest for knowledge made you reach our institution in the past. Currently, you are serving society with a vision. The college is planning on constructing a new building with facilities like Alumni Annex, Start-up Cell and Innovation Centre. The institution is now relying on its greatest asset - its Alumni. We humbly request you to donate to this cause and make this project a success. </p>

        <p>Select a payment option:</p>
        <div class="payment-options">
            <!-- Links to payment services with their logos -->
            <a href="https://pay.Google.com/" target="_blank"><img src="/alumni/images/Gpay.jpeg" width="32" height="32" alt="Google Pay"></a>
            <a href="https://www.phonepe.com/" target="_blank"><img src="/alumni/images/phonepay.jpeg" width="32" height="32" alt="PhonePe"></a>
            <a href="https://paytm.com/" target="_blank"><img src="/alumni/images/paytm.jpeg" width="32" height="32" alt="Paytm"></a>
            <a href="https://www.paypal.com/" target="_blank"><img src="/alumni/images/paypal.jpeg" width="32" height="32" alt="PayPal"></a>
        </div>

        <p>Or choose other payment methods:</p>
        <div class="container">
            <h2>To Contribute</h2>
            <img src="/alumni/images/qr.png" width="200" height="200">
        </div>
        <h2> Scan Here </h2>
    
        <script>
            function makePayment() {
                // Get payment details
                const amount = document.getElementById('amount').value;
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
    
                // Use the payment gateway APIs (replace the placeholders with actual API calls)
                // Example: Replace 'your_payment_gateway_api_url' with the actual API endpoint
                const paymentGatewayUrl = 'your_payment_gateway_api_url';
    
                // Replace the placeholders below with the actual parameters required by your payment gateway
                const paymentData = {
                    amount,
                    name,
                    email,
                    phone,
                    // Add other required parameters
                };
    
                // Make an AJAX request to the payment gateway
                // Note: This is a simplified example; you may need to use a library like Axios or jQuery.ajax
                // to handle AJAX requests more efficiently
                // Example using fetch:
                fetch(paymentGatewayUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(paymentData),
                })
                    .then(response => response.json())
                    .then(data => {
                        // Process the payment response (redirect to success page, show confirmation, etc.)
                        console.log(data);
                        // Handle the payment response based on your requirements
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        // Handle errors (show error message, retry payment, etc.)
                    });
            }
        </script>
    </body>
    
    </html>
        <!-- Add links to bank account, credit card, debit card, etc. 
        <a href="link-to-bank-payment-page">Donate via Bank Account</a><br>
        <a href="link-to-credit-card-payment-page">Donate via Credit Card</a><br>
        <a href="link-to-debit-card-payment-page">Donate via Debit Card</a>-->

    </div>

</body>

</html>