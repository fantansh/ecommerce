<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class product extends Controller
{
    //
    public function register()
    {
        return view ('product.register');

    }
    public function store(Request $request)
    {
        $product= new product();
        $product->name= $request->name;
        $product->unit= $request->unit;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $is_secessed= $product::save();
        if($is_secessed)
        {
            echo 'recard save secessfully';
        }
            else{
                echo 'somting went wrong try again';
            }
    }
    
}
