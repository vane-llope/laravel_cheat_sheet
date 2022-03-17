@extends('layouts.layout')
  @section('content')
  <div style="margin: 6% 20%;">
    <h1>the id that you get from URL which is calld wildcards</h1>
<div style="margin-top:5%;">
  <p>ID : <strong> {{$id}}</strong></p>
  <p>Name : <strong>{{$pizza->name}}</strong></p>
  <p>Type : <strong>{{$pizza->type}}</strong></p>
  <p>Base : <strong>{{$pizza->base}}</strong></p>
  <p>Toppings : <strong>
  <ul>
  @foreach ($pizza->toppings as $topping)
  <li>{{$topping}}</li>
  @endforeach  
  </ul>  
  </strong></p>
  <p>Created At : <strong>{{$pizza->created_at}}</strong></p>
  <p>Price : <strong>{{$pizza->price}}$</strong></p>
  </div>

  <br>
  <form action="/pizzas/{{$pizza ->id}}"  method="post">
    {{csrf_field()}}
    @method('delete')
  <button style="height:45px; background-color:rgb(243, 36, 36); color:white; width:150px; cursor:pointer;">complete order</button>
  </form>
  </div>
  @endsection