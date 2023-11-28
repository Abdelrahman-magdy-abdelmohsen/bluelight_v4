<?php
require_once "header.php";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= path?>front/css/check_out.css"/>
    <link rel="stylesheet" href="<?= path?>front/css/root.css"/>
</head>
<body>

<div class="container pb-3 pt-3 mt-5 ">
    <div class="row">
        <div class="box col-lg-6 col-sm-12 col-md-6">
<div class="img">
    <img src="<?= path?>front/products/contactor2.jpg" class="img-fluid p-5">
</div>
        </div>
        <div class="box col-lg-6 col-sm-12 col-md-6">
<div class="details_pro ">
    <h5 class="brand fs-5 "> brand</h5>
    <div class="description">
    <P> Apple IPhone 15 Pro Max With FaceTime – (256GB), 8GB RAM, Dual Sim</P>
    </div>
    <div class="warranty">
        <h6> 1 year of warranty</h6>
    </div>
    <div class="price">
        <h5> this is a price</h5>
    </div>
    <div class="stock">
        <p> in stock</p>
    </div>
    <div class="product_imgs d-flex flex-row">
        <img src="<?= path?>front/products/contactor2.jpg" class="img-fluid ">
        <img src="<?= path?>front/products/contactor2.jpg" class="img-fluid ">
    </div>
    <div class="stock">
        <p> in stock</p>
    </div>

    <form method="post" class="add_cart">
    <input type="number" min="0" max="5" class="quantity rounded-pill p-lg-2" value="0">
        <button class="add_cart_btn">
            <i class="fas fa-cart-shopping"></i>
            Add to Cart
        </button>
        <input type="button" value="buy now " class="rounded-pill p-lg-2 p-3 buy_btn" >
    </form>
</div>
        </div>
    </div>
</div>

</body>
</html>
