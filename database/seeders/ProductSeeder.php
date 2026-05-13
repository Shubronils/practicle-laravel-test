<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
       Product::create([
        'img' =>'/GenInfo/puma.jpg',
        'brand' =>'Nike',
        'title' =>'Nike Running shoes',
        'rating' =>'4.5',
        'reviews' =>'200',
        'sellPrice' =>'4999',
        'orders' =>'246',
        'mrp' =>'9999',
        'discount' =>'40',
        'category' =>'men',
       ]);
       Product::create([
        'img' =>'/GenInfo/puma.jpg',
        'brand' =>'Addidas',
        'title' =>'Addidas Shoes',
        'rating' =>'3.5',
        'reviews' =>'150',
        'sellPrice' =>'3999',
        'orders' =>'700',
        'mrp' =>'5999',
        'discount' =>'20',
        'category' =>'women',
       ]);
       Product::create([
        'img' =>'/GenInfo/puma.jpg',
        'brand' =>'Puma',
        'title' =>'Puma Shoes',
        'rating' =>'5',
        'reviews' =>'500',
        'sellPrice' =>'6999',
        'orders' =>'800',
        'mrp' =>'11999',
        'discount' =>'40',
        'category' =>'men',
       ]);
    }
}