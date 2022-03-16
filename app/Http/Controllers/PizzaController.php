<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizza = [
            'type'  => 'hawaiian' ,
            'basic' => 'garlic crust',
            'price' => 10
           ];
       
           $pizzaTaste =[
               ['typ' => 'hawaiian'   ,'base' => 'cheesy crust'],
               ['typ' => 'volcano'    ,'base' => 'garlic crust'],
               ['typ' => 'veg supreme','base' => 'thin adnd crispy']
           ];

           $test = 'test';

        return view('pizzas', $pizza ,['pizzaTaste' => $pizzaTaste]);
    }

    public function show($id){
        return view('details',['id'=>$id]) ;
       }
}
