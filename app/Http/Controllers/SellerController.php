<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;


class SellerController extends Controller
{
    function getData(){
        return Seller::find(1)->productData;
    }

    function getData1() {
        return Seller::find(2)->productData1;
    }

    function getData2() {
        $data = Product::with('seller')->get();
        return $data;
    }
}
