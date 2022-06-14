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
        $categories= $this->category->orderBy('name', 'ASC')->get();
        //dd($categories);
        $recusives = new Recusive($categories);
        $data = $recusives->showCategories($parent_id = '');
//        dd($data);
        return view('frontend.index',compact('data'));
    }
}
