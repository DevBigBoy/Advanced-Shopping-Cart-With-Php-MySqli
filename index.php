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

    <title>Shopping Cart</title>
</head>

<body>

    <div class="container">
        <div class="row text-center py-5">
            <div class="col-md-3 col-sm-6 my-3 my-md-0">
                <form action="index.php" method="post">
                    <div class="card shadow">
                        <div>
                            <img src="./upload/product1.png" alt="image 1" class="img-fluid card-img-top">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>

                            <h6>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </h6>

                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <h5>
                                <small>
                                    <s class="text-secondary">$519</s>
                                </small>
                                <span class="price">$599</span>
                            </h5>

                            <button type="submit" name="add" class="btn btn-warning my-3">
                                Add to Cart
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">

            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">

            </div>

            <div class="col-md-3 col-sm-6 my-3 my-md-0">

            </div>
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