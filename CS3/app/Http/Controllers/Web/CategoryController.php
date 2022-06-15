<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($slug,$categoryId)
    {

        $category = Category::where('parent_id', 0)->get();
        $products = Product::where('category_id', $categoryId)->paginate(2);

      //dd($categorysLimit);
        return view('frontend.productCategory', compact('category', 'products'));
    }


}
