<?php

function component($productName, $productPrice, $productImg){
    $element = '
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="index.php" method="post">
            <div class="card shadow">
                <div>
                    <img src="'.$productImg.'" alt="image 1" class="img-fluid card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">'.$productName.'</h5>
                    <h6>
                        <i class="star_icon fa-solid fa-star"></i>
                        <i class="star_icon fa-solid fa-star"></i>
                        <i class="star_icon fa-solid fa-star"></i>
                        <i class="star_icon fa-solid fa-star"></i>
                        <i class="star_icon fa-regular fa-star"></i>
                    </h6>
                    <p class="card-text">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h5>
                        <small>
                            <s class="text-secondary">$519</s>
                        </small>
                        <span class="price">$'.$productPrice.'</span>
                    </h5>
                    <button type="submit" name="add" class="btn btn-warning my-3">
                        Add to Cart
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    ';

    echo $element;
}



?>