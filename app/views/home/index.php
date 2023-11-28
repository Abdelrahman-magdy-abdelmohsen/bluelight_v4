
<?php
include_once("header.php");

?>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= path?>front/css/index.css">
</head>
<body>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?=path?>front/imgs/offer1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="<?= path?>front/imgs/offer2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item"data-bs-interval="2000">
            <img src="<?=path?>front/imgs/offer3.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="title">
    <h3 class="text-center mt-2">Shop by Brand</h3>
</div>

<div class="brand mb-4 mt-4 ">

    <div class="row flex-sm-shrink-1 flex-row justify-content-center ">
        <div class="box rounded-4">
            <img src="<?=path?>front/imgs/ABB.jpg" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="<?=path?>front/brands/schneider.png" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="<?=path?>front/brands/chint.jpg" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="<?= path?>front/brands/osram.png" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="<?= path?>front/brands/Philips.png" class="img-fluid">
        </div>
        <div class="box rounded-4">
            <img src="<?= path?>front/brands/Bosch.png" class="img-fluid">
        </div>

    </div>
</div>
<h3 class="text-center align-items-center">Latest</h3>
<div class="latest d-flex justify-content-center align-items-center">
    <div class="row g-4">
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img src="<?= path?>front/products/contactor2.jpg" class="card-img-top img-fluid" alt="Product 1">
                <div class="card-body rounded-4 mt-1">
                    <h5 class="card-title">Product Title 1</h5>
                    <p class="card-text">Description of the product. This card has.</p>
                    <h6 class="card-subtitle mb-2 text-muted">Price: $XX.XX</h6>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img src="<?= path?>front/products/contactor2.jpg" class="card-img-top img-fluid" alt="Product 1">
                <div class="card-body rounded-4 mt-1">
                    <h5 class="card-title">Product Title 1</h5>
                    <p class="card-text">Description of the product. This card has.</p>
                    <h6 class="card-subtitle mb-2 text-muted">Price: $XX.XX</h6>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img src="<?= path?>front/products/contactor2.jpg" class="card-img-top img-fluid" alt="Product 1">
                <div class="card-body rounded-4 mt-1">
                    <h5 class="card-title">Product Title 1</h5>
                    <p class="card-text">Description of the product. This card has.</p>
                    <h6 class="card-subtitle mb-2 text-muted">Price: $XX.XX</h6>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img src="<?= path?>front/products/contactor2.jpg" class="card-img-top img-fluid" alt="Product 1">
                <div class="card-body rounded-4 mt-1">
                    <h5 class="card-title">Product Title 1</h5>
                    <p class="card-text">Description of the product. This card has.</p>
                    <h6 class="card-subtitle mb-2 text-muted">Price: $XX.XX</h6>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary rounded-pill">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Add more col elements with similar card structure for other products -->
    </div>
</div>

</body>


<script src="<?= path?>front/js/index.js"> </script>
