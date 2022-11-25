<?php 
// Product Details 
// Minimum amount is $0.50 US 
// Test Stripe API configuration 

@define('STRIPE_API_KEY', 'sk_test_51M6QmYGIQmKFxol0HhVnKu2MyWO3zSGtO7MKwYaHvAi9Jhbbq9yTZ2lRMn2rdlUMUECqCuIQ4Z2sJPnBmpt4I5QJ00bmvSr6ED');  
@define('STRIPE_PUBLISHABLE_KEY', 'pk_test_51M6QmYGIQmKFxol0gf5jwbUJfPfadcApazxqW3KLHAsVBUAxvCPgWo5p7EqeRfalYOmHTMn0Fp7h9lHR4us4QpMK0080KUaVpX'); 

@define('STRIPE_SUCCESS_URL', 'http://localhost//masTER%20PROJECT%20SD/Customer/CustomerLogin/login-form-03/stripe/success.php'); 
@define('STRIPE_CANCEL_URL', 'http://localhost/stripe/cancel.php');

// Database configuration   
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'zooproject'); 
?>