<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kreait\Firebase\Factory;

class Product extends Model
{
    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(__DIR__. "/config-firebase.json")
            ->withDatabaseUri('https://flutter-login-baaf0-default-rtdb.firebaseio.com/');

        $this->database = $factory->createDatabase();
    }

    public static function getAllProducts(){
        $products = (new static)->database->getReference('Products/SerialNumber/')->getValue();
        $allProducts = [];

        foreach ($products as $product) {
            $product['category'] = Product::getCategoryName($product['category_id']);
            $product['product_name'] = Product::getProductName($product['product_id']);
            $product['brand'] = Product::getBrandName($product['merk_id']);
            $product['type'] = Product::getTypeName($product['tipe_id']);

            array_push($allProducts, $product);
        }

        // dd($products);
        // dd($allProducts);

        return $allProducts;
    }

    public static function getCategoryName($category_id){
        $categories = (new static)->database->getReference('Products/Category')->getValue();

        foreach ($categories as $category) {
            if($category['id'] == $category_id){
                return $category['name'];
            }
        }
    }

    public static function getProductName($product_id){
        $products = (new static)->database->getReference('Products/Product')->getValue();

        foreach ($products as $product) {
            if($product['id'] == $product_id){
                return $product['name'];
            }
        }
    }

    public static function getBrandName($brand_id){
        $brands = (new static)->database->getReference('Products/Merk')->getValue();

        foreach ($brands as $brand) {
            if($brand['id'] == $brand_id){
                return $brand['name'];
            }
        }
    }

    public static function getTypeName($type_id){
        $types = (new static)->database->getReference('Products/Tipe')->getValue();

        foreach ($types as $type) {
            if($type['id'] == $type_id){
                return $type['name'];
            }
        }
    }
}
