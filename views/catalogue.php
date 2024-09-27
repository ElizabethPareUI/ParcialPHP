<?php
include __DIR__ . '/../bibliotecas/products-details.php';
$products = detailsObtener();
?>
<div class="catalogue">
    <div class="card-products">
        <?php foreach ($products as $product): ?>
            <div class="card">
                <img src="<?= $product->image?>" class="card-img-top" alt="<?= $product->title ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product->title ?></h5>
                    <p class="card-text"><?= $product->description ?></p>
                    <h3>$<?= $product->price ?></h3>
                    <a href="index.php?s=details&id=<?=$product->product_id?>" class="btn">More Info</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
