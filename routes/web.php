<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $fileNames = [
        ['name' => 'bars-solid.svg'],
        ['name' => 'man.svg'],
        ['name' => 'woman icon.svg'],
        ['name' => 'older.svg'],
        ['name' => 'tv-solid.svg'],
        ['name' => 'couch-solid.svg'],
        ['name' => 'gamepad-solid.svg'],
        ['name' => 'book-solid.svg'],
        ['name' => 'gift-solid.svg'],
    ];
    $nameItems = [
        ['name' => 'Traditional Wear'],
        ['name' => 'Western Wear'],
        ['name' => 'Swim & Beachwear'],
        ['name' => 'Winter & Seasonal Wear'],
        ['name' => 'Beauty & Grooming'],
        ['name' => 'Juwellery'],
        ['name' => 'Personal care Appliances'],
        ['name' => 'International Brands'],
        ['name' => 'Foot Wear'],
        ['name' => 'Watches'],
        ['name' => 'Accessories'],
    ];
    $bags = [
        [
            'file' => 'bag3.jpeg',
            'name' => 'Beautiful Bag',
            'price' => '4500 Bdt',
            'oldPrice' => '7300 Bdt'
        ],
        [
            'file' => 'bag4.jpeg',
            'name' => 'Beautiful Bag',
            'price' => '4500 Bdt',
            'oldPrice' => '7300 Bdt'
        ],
        [
            'file' => 'bag5.jpeg',
            'name' => 'Beautiful Bag',
            'price' => '4500 Bdt',
            'oldPrice' => '7300 Bdt'
        ],
        [
            'file' => 'bag6.jpg',
            'name' => 'Beautiful Bag',
            'price' => '4500 Bdt',
            'oldPrice' => '7300 Bdt'
        ],
        [
            'file' => 'bag7.jpeg',
            'name' => 'Beautiful Bag',
            'price' => '4500 Bdt',
            'oldPrice' => '7300 Bdt'
        ],
    ];
    return view('home', ['fileNames' => $fileNames, 'nameItems' => $nameItems, 'bags' => $bags]);
});
