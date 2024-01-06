<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
include 'admin/db_connect.php'; 
?>
    <title>Alumni contribution Page</title>
    <style>
        body {
            background-image: url('C:/Users/pg524/Downloads/OneDrive/Desktop/u.jpg'); /* Add the path to your background image */
            background-size: cover;
            font-family: Arial, sans-serif;
            text-align: center;
            color: white;
            padding: 50px;
        }

        .donation-container {
            max-width: 600px;
            margin: auto;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .payment-options img {
            width: 50px;
            margin: 10px;
            cursor: pointer;
        }
        {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-image: url('background.jpg'); /* Add your background image URL */
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }

        input,
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

    <div class="donation-container">
        <h2>Alumni Donation Page</h2>
        <p>Thank you for supporting our alumni community!</p>

        <p>Select a payment option:</p>
        <div class="payment-options">
            <!-- Links to payment services with their logos -->
            <a href="https://pay.Google.com/" target="_blank"><img src="Gpay-logo.png" alt="Google Pay"></a>
            <a href="https://www.phonepe.com/" target="_blank"><img src="phonepe-logo.png" alt="PhonePe"></a>
            <a href="https://paytm.com/" target="_blank"><img src="paytm-logo.png" alt="Paytm"></a>
            <a href="https://www.paypal.com/" target="_blank"><img src="paypal-logo.png" alt="PayPal"></a>
        </div>

        <p>Or choose other payment methods:</p>
        <div class="container">
            <h2>Alumni Contribution Page</h2>
            <form id="paymentForm">
                <label for="amount">Contribution Amount:</label>
                <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
    
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="Your full name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your email" required>
    
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="Your phone number" required>
    
                <button type="button" onclick="makePayment()">Make Payment</button>
            </form>
        </div>
    
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
        <!-- Add links to bank account, credit card, debit card, etc. -->
        <a href="link-to-bank-payment-page">Donate via Bank Account</a><br>
        <a href="link-to-credit-card-payment-page">Donate via Credit Card</a><br>
        <a href="link-to-debit-card-payment-page">Donate via Debit Card</a>

    </div>

</body>

</html>