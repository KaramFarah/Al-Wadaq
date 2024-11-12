<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function home(){
        $categories = Category::orderBy('created_at')->limit(5)->get();

        $products = Product::all()->load('category');

        $featuredProducts = Product::where('featured' , 1)->with('category')->orderBy('created_at')->get();
        $rFeaturedProducts = Product::where('featured' , 1)->with('category')->orderBy('created_at' , 'DESC')->get();
        // dd($products);
        return view('website.index' , compact('categories' , 'products' , 'featuredProducts' , 'rFeaturedProducts'));
    }
    public function categories(){

        $products = Product::where('category_id' , request()->category_id)->with('category')->get();

        return view('website.category-single' , compact('products'));
    }

    
}
