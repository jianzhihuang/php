<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class cartController extends Controller
{
    public function cart()
    {
        $data =  Cart::getContent();
        return view('cart',[
        "data" => $data
        ]);
    }


    public function add(Request $res)
    {
        $add = Cart::add([

            'id' => $res ->id,
            'name' =>$res->name,
            'price' => $res->price,
            'quantity' =>$res->quantity,
            
            'attributes' =>[

                'color'=> $res->color,
                'size' => $res->size

            ]
        ]);

        if($add){

            return view('cart',[
                'data' => Cart::getContent()

            ]);
        }
    }
}
