<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $categories = Categories::where('active', 1)->limit(10)->get();
        //dd($categories);
        return view('/web/pages/index',compact('categories'));
    }

    public function aboutus()
    {
        return view('/web/pages/aboutus');
    }

    public function clients()
    {
        return view('/web/pages/clients');
    }

    public function export()
    {
        return view('/web/pages/export');
    }

    public function category()
    {
        $categories = Categories::where('active', 1)->get();
        return view('/web/pages/category',compact('categories'));
    }

    public function product($slug)
    {

        $categories = Categories::where('slug', $slug)->first();
        $products = Product::where('category_id', $categories->id)->with('images')->get();
        //dd($products[0]->images[0]->image_url);
        return view('/web/pages/product',['products'=>$products], compact('categories'));
    }
    public  function product_details($slug)
    {
        //$products = Product::where('slug', $slug)->get();
        if($slug == 'admin') {
            return redirect()->route('login');
        }

        $products = Product::with('category')->with('images')->where('slug', $slug)->first();
        //dd($products->images[0]->image_url);
        //$other_products = Product::where('category_id', $products->category->id)->where('slug', '!=' , $slug)->get();
        $other_products = Product::where('category_id', $products->category->id)->with(['images' => function ($query) {
            $query->take(1); // Limit the number of images to one per product
        }])->where('slug', '!=' , $slug)->get();
        dd($other_products->images->image_url);
        return view('/web/pages/product-details',['products'=>$products],['other_products'=>$other_products]);
    }

    public function production()
    {
        return view('/web/pages/production');
    }

    public function contactus()
    {
        return view('/web/pages/contactus');
    }

    public function privacypolicy()
    {
        return view('/web/pages/privacypolicy');
    }

    public function termsandcondition()
    {
        return view('/web/pages/termsandcondition');
    }

    public function shippingandreturn()
    {
        return view('/web/pages/shippingandreturn');
    }
}
