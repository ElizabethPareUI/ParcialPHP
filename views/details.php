<?php
require_once __DIR__ . '/../bibliotecas/products-details.php';

$product = productsGetbyId($_GET['id']);


if($product === null) {
    require __DIR__ . '/404.php';
} else {
?>
<div class="details-main">
    <div class="container-img">
        <picture>
            <source srcset="<?= $product->image ?>">
            <img src="<?= $product->image; ?>">
        </picture>  
    </div>
    
    <div class="container-details">
        <div class="details-item-content card-body">
            <h1><?= $product->title; ?></h1>
            <h4>Designed by <?= $product->designer_name; ?></h2>
            <h2>$<?= $product->price; ?></h2>
            <h5>Dimensions: <?= $product->dimensions; ?></h5>
            <p><?= $product->description; ?></p>
            <button class="btn">Buy</button>
        </div>
    </div>
</div>

<div class="designer-bio">
    <figure>
        <img src="<?= $product->portrait; ?>">
    </figure>
    
    <div class="bio-description">
        <p><?= $product->biography; ?></p>
    </div>
</div>

<?php
}


 
