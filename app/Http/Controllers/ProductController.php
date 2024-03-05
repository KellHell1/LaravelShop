<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all()->where('id', '=', 1);

        return $products;
    }

    public function createProduct()
    {
        Product::create([
            'name' => 'MAZDA',
            'description' => 'description',
            'details' => 'It is very long description',
            'active' => true,
            'price' => 550.00,
            'color' => 'Red',
            'size' => '99x99',
        ]);

        return 'success';
    }

    public function updateProduct()
    {
        $product = Product::find(1);

        $product->update([
            'name' => 'MERS',
            'description' => 'description'
        ]);

        return $product;
    }

    public function deleteProduct()
    {
        $product = Product::find(3);

        if ($product) {
            $status = $product->delete();
        } else {
            return 'not exist';
        }

        return $status;
    }

    public function firstOrCreate()
    {
        $product = Product::firstOrCreate([
            'name' => 'Lexus'
        ], [
            'name' => 'Lexus',
            'description' => 'new description',
            'details' => 'It is very long description',
            'active' => true,
            'price' => 550.00,
            'color' => 'Red',
            'size' => '99x99',
        ]);

        return $product;
    }

    public function updateOrCreate()
    {
        $product = Product::updateOrCreate([
            'name' => 'Coco'
        ], [
                'name' => 'Fiat',
                'description' => 'new description',
                'details' => 'It is very long description',
                'active' => true,
                'price' => 550.00,
                'color' => 'Red',
                'size' => '99x99',
            ]);

        return $product;
    }
}
