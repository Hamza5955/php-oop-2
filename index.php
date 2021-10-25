<?php

    require_once 'product.php';
    require_once 'user.php';
    require_once 'carta.php';


    $product1 = new Product("mac_m1", "Apple", 2200);
    var_dump($product1);

    $user1 = new User("matteo", "dr", "cfg@hj.it");

    $carta = new Card("363636363636", "01/02/2222", "233");

    var_dump($user1);
    var_dump($premium);
    var_dump($carta);
?>