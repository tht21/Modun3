<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Request $request)
    {
        $productDescription = $request->input('Product_Description');
        $listPrice = $request->input('Price');
        $discountPercent = $request->input('Discount_Percent');
        $discountAmount = $listPrice * $discountPercent * 0.01;
        $discountPrice = $listPrice * $discountAmount;
        return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'listPrice', 'discountPercent']));
    }
}
