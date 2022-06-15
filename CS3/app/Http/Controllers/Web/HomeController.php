<?php

namespace App\Http\Controllers\Web;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;
use App\Models\Tag;

class HomeController extends Controller
{
    private $category;
    private $product;
    private $productImage;
    private $productTag;
    private $tag;

    public function __construct(Category $category, Product $product, ProductImage $productImage, ProductTag $productTag, Tag $tag)
    {
        $this->category = $category;
        $this->product = $product;
        $this->productImage = $productImage;
        $this->productTag = $productTag;
        $this->tag = $tag;
    }
    public function index(){

        //dd($categories);
        $category = $this->category->where('parent_id', 0)->get();
        $product=$this->product->latest()->take(12)->get();
        return view('frontend.index',compact('category','product'));
    }
}
