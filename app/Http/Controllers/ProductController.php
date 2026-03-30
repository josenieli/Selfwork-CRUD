<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
    $products = [
        ['id' => 1, 'title' => 'Maglia', 'description' => 'Lana merino', 'price' => 45.00],
        ['id' => 2, 'title' => 'Pantalone', 'description' => 'Cotone stretch', 'price' => 65.00],
        ['id' => 3, 'title' => 'Giubotto', 'description' => 'Impermeabile', 'price' => 95.00],
        ['id' => 4, 'title' => 'Cappotto', 'description' => 'Lana doppia', 'price' => 150.00],
        ['id' => 5, 'title' => 'Felpa', 'description' => 'Cotone felpato', 'price' => 35.00]
    ];
    return view('prodotti',['products' => collect($products)]);
}
}
