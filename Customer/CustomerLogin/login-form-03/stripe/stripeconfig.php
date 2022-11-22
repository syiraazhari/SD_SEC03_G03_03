<?php

    require_once "stripe-php-master/init.php";

    $stripedetails = array(
              "publishableKey"=>"pk_test_51M6QmYGIQmKFxol0gf5jwbUJfPfadcApazxqW3KLHAsVBUAxvCPgWo5p7EqeRfalYOmHTMn0Fp7h9lHR4us4QpMK0080KUaVpX",
              "secretKey"=>"sk_test_51M6QmYGIQmKFxol0HhVnKu2MyWO3zSGtO7MKwYaHvAi9Jhbbq9yTZ2lRMn2rdlUMUECqCuIQ4Z2sJPnBmpt4I5QJ00bmvSr6ED"
    );

    \Stripe\Stripe::setApiKey($stripedetails["secretKey"]);
?>