<?php
// Include configuration file  
require_once 'config.php'; 
include 'dbConnect.php';


?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title> Checkout </title>
<meta charset="utf-8">
<!-- Stylesheet file -->
<link href="css/style.css" rel="stylesheet">
<!-- Stripe JavaScript library -->

<script src="https://js.stripe.com/v3/"></script>
</head>
<body class="App">
	<h1>Payment Gateway</h1>
	<div class="wrapper">
        <!-- Display errors returned by checkout session -->
		<div id="paymentResponse"></div>
		<?php 
			$results = mysqli_query($db_conn,"SELECT * FROM products where status=1");
			
            while($row=mysqli_fetch_array($results))
            {  $product_id=$row[0];  $name=$row[1];  $price=$row[2];  $status=$row[3];  }   
		?>
			<div class="col__box">
			  <h5><?php echo $name; ?></h5>
				<h6>Price: <span> RM<?php echo $price; ?> </span> </h6>
			
				<form action="stripe_charge.php"  method = "post">
				<div id="buynow">
					<button class="btn__default" name="payButton" id="payButton"> Buy Now </button>
				</div>
</form>
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
			Name:"<?php echo $name; ?>",
			ID:"<?php echo $product_id; ?>",
			Price:"<?php echo $price; ?>",
			Currency:"myr",
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