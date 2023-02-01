<?php
    require_once "stripe-php/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51MVI6oGUygaHYSJ36oCDpt40H9AUeGeCPTqdcaYqe69WqDYGzJGcbsDLSKi1ExLIKqsnGdUqse5I3znPyznSg5XL00aAD0hIPS",
        "publishableKey" => "pk_test_51MVI6oGUygaHYSJ3HFkbVseGrf5zi0xJsSJHXsZA1IRNGxTWUK7WvyPXeqGP1kgCUiiy7dvNXmJNckb8jjV6RKtv001K3Wo87e"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>