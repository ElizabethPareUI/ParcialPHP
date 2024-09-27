
<?php

include __DIR__ . '/../class/Product.php';

/** 
* @return Product[] 
*/
function detailsObtener():array
{
   
   $productsJSON = json_decode(file_get_contents(__DIR__ . '/../data/products.json'), true);

   
   $products = [];

   foreach($productsJSON as $info) {
       $product = new Product;
       $product->product_id = $info['product_id'];
       $product->title = $info['title'];
       $product->description = $info['description'];
       $product->price =$info['price'];
       $product->dimensions = $info['dimensions'];
       $product->image = $info['image'];
       $product->designer_name = $info['designer_name'];
       $product->portrait = $info['portrait'];
       $product->biography = $info['biography'];

       $products[] = $product;
   }

   return $products;
}


function productsGetbyId(int $id): ?Product
{
    
    $products = detailsObtener();

   
    foreach($products as $product) {
        if($product->product_id == $id) {

            return $product;
        }
    }
    
    return null;
}