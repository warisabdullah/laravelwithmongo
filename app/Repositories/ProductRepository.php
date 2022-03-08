<?php

namespace App\Repositories;

use App\Interfaces\ProductRepositoryInterface;
use App\Models\Products;

class ProductRepository implements ProductRepositoryInterface
{
    public function getAllProducts()
    {
        return Products::all();
    }
    public function getProductById($ProductId){
        return Products::findorfail($ProductId);
    }
    public function deleteProduct($ProductId){
        Products::destroy($ProductId);
    }
    public function createProduct(array $orderDetails){
        return Products::create($orderDetails);
    }
    public function updateProduct($productId, array $productDetails){
        return Products::where('_id', $productId)->update($productDetails);
    }


}
