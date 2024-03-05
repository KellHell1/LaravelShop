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
            'title' => 'MAZDA',
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
            'title' => 'MERS',
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
            'title' => 'Lexus'
        ], [
            'title' => 'Lexus',
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
            'title' => 'Coco'
        ], [
                'title' => 'Fiat',
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
