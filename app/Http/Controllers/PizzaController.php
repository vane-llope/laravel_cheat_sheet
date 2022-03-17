<?php

namespace App\Http\Controllers;
use App\Models\pizza;
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

        return view('pizzas.index', $pizza ,['pizzaTaste' => $pizzaTaste]);
    }

    public function show($id){
        $pizza=pizza::findOrFail($id);
        return view('pizzas.show',['id'=>$id],['pizza'=> $pizza]) ;
       }

    public function showRecords(){
        /*pizza  here is the mosel name*/

      // $pizzas=pizza::all();
      //$pizzas = pizza::orderBy('name','desc')->get();
      //  $pizzas =pizza::where('type','hawaiian')->get();

      /*it orders based on the most recent*/
         $pizzas=pizza::latest()->get();

    
        return view('pizzas.pizzaRecords',['pizzas' => $pizzas]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
       /* error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));*/

        /*Pizza here is the name of modal which represent our pizza table*/
        $pizza = new Pizza;

        $pizza->name= request('name');
        $pizza->type= request('type');
        $pizza->base= request('base');
        $pizza->toppings= request('toppings');
        if(request('base')=='cheesy crust')
        $pizza ->price=10;
        else if(request('base')=='garlic crust')
        $pizza ->price=15;
        else if(request('base')=='thin and crispy')
        $pizza ->price=20;
        else if(request('base')=='thick')
        $pizza ->price=22;
        //to show table record
        //error_log($pizza);
        $pizza->save();

       return redirect('/')->with('msg','Thanks For Your Order');
  
    }

    public function destroy($id){
        $pizza=pizza::findOrFail($id);
       $pizza -> delete();
       return redirect('/');
       

    }
}
