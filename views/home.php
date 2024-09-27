<?php
include __DIR__ . '/../data/products-info.php';
?>



<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/ParcialPHP/images/banner0.jpg" class="d-block w-100" alt="banner0">
    </div>
    <div class="carousel-item">
      <img src="/ParcialPHP/images/banner2.jpg" class="d-block w-100" alt="banner2">
    </div>
    <div class="carousel-item">
      <img src="/ParcialPHP/images/banner3.jpg" class="d-block w-100" alt="banner3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div class="latest-products">
    
    <h2>Latest Products</h2>
    <div class="card-products">
        <?php
        $latestProducts = array_slice($products, -5); 
        foreach ($latestProducts as $product): ?>
            <div class="card">
                <img src="<?= $product['image'] ?>" class="card-img-top" alt="<?= $product['title'] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $product['title'] ?></h5>
                    <a href="index.php?s=details&id=<?= $product['product_id'] ?>" class="btn">More Info</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</div>


