<?php
require_once('./php/CreateDb.php');
require_once('./php/component.php');

// create instance of createdb class

$database = new CreateDb("cart","products");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--============================== BOOTSTRAP ==============================-->
    <link href="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--============================== Font Awesome ==============================-->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <!--============================== Custome CSS ==============================-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <title>Shopping Cart</title>
</head>

<body>

    <div class="container">
        <div class="row text-center py-5">
            <?php 
            component('labtop','599','./upload/product1.png');
            component('headphones','599','./upload/product2.png');
            component('tablet','599','./upload/product3.png');
            component('mobile','599','./upload/product4.png');
            ?>
        </div>
    </div>
    <!--============================= BOOTSTRAP =============================-->
    <script src="https://cdn.jsdelivr.xyz/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!--============================= Font Awesome =============================-->
    <script src="./assets/js/all.min.js"></script>
</body>

</html>