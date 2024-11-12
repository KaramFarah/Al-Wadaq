<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $pageTitle = [
            'title' => 'المنتجات',
            'bread_crumbs' => [
                [
                    'title' => 'الرئيسية',
                    'link'  => route('dashboard.home')
                ],
                [
                    'title' => 'جميع المنتجات',
                    'link'  => route('products.index')
                ],
            ]
        ];
        return view('dashboard.products.index' , compact('pageTitle' , 'products' , 'categories'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $product = product::create($request->all());

        if ($request->hasFile('photo')){
            $product->media()->delete();
            $product->addMedia($request->file('photo'))->toMediaCollection('products' , 'media');
        }
        return redirect()->route('products.index')->with(['message' => 'تمت إضافة المنتج بنجاح']);
    }


    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $pageTitle = [
            'title' => 'الأصناف',
            'bread_crumbs' => [
                [
                    'title' => 'الرئيسية',
                    'link'  => route('dashboard.home')
                ],
                [
                    'title' =>  'تعديل المنتج' . ' ' . $product->id,
                    'link'  => route('products.index')
                ],
            ]
        ];

        return view('dashboard.products.index' , compact('pageTitle' , 'product' , 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        // dd($request->all());
        $product->update($request->all());
        if ($request->hasFile('photo')) {

            $product->media()->each(function ($media) {
                $media->delete(); 
            });
            
            $product->addMedia($request->file('photo'))->toMediaCollection('products', 'media');
        }
        
        return redirect()->route('products.index')->with(['info' => __('تم تعديل المنتج بنجاح !')]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        
        return back()->with(['danger' => __('تم حذف القطعة بنجاح !')]);
    }
}
