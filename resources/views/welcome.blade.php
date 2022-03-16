@extends('layouts.layout')
  @section('content')
     <div style="margin: 5% 35%;">
         <img src="./images/pizza.png" alt="">
         <h1 style="padding-left:43px">this is the main page</h1>
         <p  style="padding-left:43px">name : {{$name}} -  age : {{$age}}</p>
     </div>
    @endsection
