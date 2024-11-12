<?php

namespace App\Http\Controllers;

use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $pageTitle = [
            'title' => 'السلايدر',
            'bread_crumbs' => [
                [
                    'title' => 'الرئيسية',
                    'link'  => route('dashboard.home')
                ],
                [
                    'title' => 'السلايدر',
                    'link'  => route('slider.index')
                ],
            ]
        ];

        return view('dashboard.slider' , compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request

        $request->validate([
            'slide1' => 'nullable|image|mimes:jpg|max:2048',
            'slide2' => 'nullable|image|mimes:jpg|max:2048',
            'slide3' => 'nullable|image|mimes:jpg|max:2048',
        ]);
        // dd('we here');
        if($request->has('slide1')){

            $existingImagePath1 = public_path('assets/frontEnd/images/slider/4.jpg');

            if (File::exists($existingImagePath1)) {

                File::delete($existingImagePath1);

            }
            $image = $request->file('slide1');

            $imageName = '4.jpg'; 

            $image->move(public_path('assets/frontEnd/images/slider'), $imageName);
        }

        if($request->has('slide2')){

            $existingImagePath2 = public_path('assets/frontEnd/images/slider/5.jpg');

            if (File::exists($existingImagePath2)) {

                File::delete($existingImagePath2);

            }
            $image = $request->file('slide2');

            $imageName = '5.jpg'; 

            $image->move(public_path('assets/frontEnd/images/slider'), $imageName);
        }

        if($request->has('slide3')){

            $existingImagePath3 = public_path('assets/frontEnd/images/slider/6.jpg');

            if (File::exists($existingImagePath3)) {

                File::delete($existingImagePath3);

            }
            $image = $request->file('slide3');

            $imageName = '6.jpg'; 

            $image->move(public_path('assets/frontEnd/images/slider'), $imageName);
        }

        return redirect()->back()->with(['success' => 'تم تعديل الصورة بنجاح']);

        // return response()->json(['error' => 'Failed to upload image.'], 400);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
