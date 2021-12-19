<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            [
                'product_name' => 'CHANEL1',
                'product_price' => 2000,
                'product_image' => asset('img/photo-1563170351-be82bc888aa4.jpeg')
            ],
            [
                'product_name' => 'CHANEL2',
                'product_price' => 2000,
                'product_image' => asset('img/photo-1563170351-be82bc888aa4.jpeg')
            ],
            [
                'product_name' => 'CHANEL3',
                'product_price' => 2000,
                'product_image' => asset('img/photo-1563170351-be82bc888aa4.jpeg')
            ],
            [
                'product_name' => 'CHANEL4',
                'product_price' => 2000,
                'product_image' => asset('img/photo-1563170351-be82bc888aa4.jpeg')
            ],
            [
                'product_name' => 'CHANEL5',
                'product_price' => 2000,
                'product_image' => asset('img/photo-1563170351-be82bc888aa4.jpeg')
            ]
            ]);
    }
}
