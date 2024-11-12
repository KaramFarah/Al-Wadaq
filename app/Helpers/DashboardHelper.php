<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Gate;
use Illuminate\Support\Str;

class DashboardHelper
{

    static public function getTrue(){
        return 'karam';
    }

    static public function getMenuItems() : array
    {
        $_menuitems = [];
        $_menuitems = [
            [
                'label' => __('لوحة التحكم '),
                'prefixIcon' => 'bx bxs-home',
                'route' => route('dashboard.home'),
                'active' => request()->routeIs('dashboard.home'),
            ],
            [
                'navHeading' => 'أقسام الموقع'
            ],
            [
                'label' => __('السلايدر'),
                'prefixIcon' => 'bi bi-aspect-ratio',
                'route' => route('slider.index'),
                'active' => request()->routeIs('slider.*'),
            ],
            [
                'label' => __('الأصناف'),
                'prefixIcon' => 'bi bi-diagram-3',
                'route' => route('categories.index'),
                'active' => request()->routeIs('categories.*'),
            ],
            [
                'label' => __('المنتجات'),
                'prefixIcon' => 'bi bi-cart2',
                'route' => route('products.index'),
                'active' => request()->routeIs('products.*'),
            ],     
            [
                'label' => __('الموقع'),
                'prefixIcon' => 'bx bx-globe',
                'route' => route('website.home'),
                'active' => request()->routeIs('website.home'),
            ],
            
        ];
        return $_menuitems;
    }
}
?>