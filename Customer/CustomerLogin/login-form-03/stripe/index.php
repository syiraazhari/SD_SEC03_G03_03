<?php
// Include configuration file  
require_once 'config.php'; 
include 'dbConnect.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title> Stripe Checkout in PHP by codeat21.com</title>
<meta charset="utf-8">
<!-- Stylesheet file -->
<link href="css/style.css" rel="stylesheet">
<!-- Stripe JavaScript library -->
<script src="https://js.stripe.com/v3/"></script>
</head>
<body class="App">
	<h1>How to Integrate Stripe Payment Gateway in PHP</h1>
	<div class="wrapper">
        <!-- Display errors returned by checkout session -->
		<div id="paymentResponse"></div>
		<?php 
			$results = mysqli_query($db_conn,"SELECT * FROM products where status=1");
			$row = mysqli_fetch_array($results,MYSQLI_ASSOC);
		?>
			<div class="col__box">
			  <h5><?php echo $row['name']; ?></h5>
				<h6>Price: <span> $<?php echo $row['price']; ?> </span> </h6>
			
				<!-- Buy button -->
				<div id="buynow">
					<button class="btn__default" id="payButton"> Buy Now </button>
				</div>
			</div>
	</div>		
<script>
var buyBtn = document.getElementById('payButton');
var responseContainer = document.getElementById('paymentResponse');    
// Create a Checkout Session with the selected product
var createCheckoutSession = function (stripe) {
    return fetch("stripe_charge.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            checkoutSession: 1,
			Name:"<?php echo $row['name']; ?>",
			ID:"<?php echo $row['id']; ?>",
			Price:"<?php echo $row['price']; ?>",
			Currency:"<?php echo $row['currency']; ?>",
        }),
    }).then(function (result) {
        return result.json();
    });
};

// Handle any errors returned from Checkout
var handleResult = function (result) {
    if (result.error) {
        responseContainer.innerHTML = '<p>'+result.error.message+'</p>';
    }
    buyBtn.disabled = false;
    buyBtn.textContent = 'Buy Now';
};

// Specify Stripe publishable key to initialize Stripe.js
var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

buyBtn.addEventListener("click", function (evt) {
    buyBtn.disabled = true;
    buyBtn.textContent = 'Please wait...';
    createCheckoutSession().then(function (data) {
        if(data.sessionId){
            stripe.redirectToCheckout({
                sessionId: data.sessionId,
            }).then(handleResult);
        }else{
            handleResult(data);
        }
    });
});
</script>
</body>
</html>