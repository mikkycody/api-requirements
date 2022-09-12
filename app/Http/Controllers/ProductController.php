<?php

namespace App\http\Controllers;

use App\Filters\ProductFilter\Category;
use App\Filters\ProductFilter\Price;
use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::filterWithPipeline([
            Category::class, Price::class
        ])->get();
        return ProductResource::collection($products)->additional(['status' => true, 'message' => 'Products retrieved.']);
    }
}
