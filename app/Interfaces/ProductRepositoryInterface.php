<?php

namespace App\Interfaces;

Interface ProductRepositoryInterface
{
    public function getAllProducts();
    public function getProductById($ProductId);
    public function deleteProduct($ProductId);
    public function createProduct(array $productDetails);
    public function updateProduct($productId, array $productDetails);
}
