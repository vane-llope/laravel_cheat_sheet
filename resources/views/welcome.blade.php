@extends('layouts.layout')
  @section('content')

     <div style="margin: 5% 35%;">
      <h2>{{session('msg')}}</h2>
      <div style="background-color: rgb(243, 36, 36); text-align: center; height:40px; padding-top:2%;">
        <a style="color:white;" href="/pizzas/create">Order Pizza</a>
      </div>
        <br>

        <div style="background-color: rgb(243, 36, 36); text-align: center; height:40px; padding-top:2%;">
        <a style="color:white;" href="/pizzaRecords">pizzaRecords</a>
        </div>
        <br>

        <div style="background-color: rgb(243, 36, 36); text-align: center; height:40px; padding-top:2%;">
        <a style="color:white;" href="/pizzas">cheat sheet</a>
        </div>
        <br>

        <div style="background-color: rgb(243, 36, 36); text-align: center; height:40px; padding-top:2%;">
        <a style="color:white;" href="/pizzas/1">wildcards</a>
        <br>

      </div>
      
     
         <img src="./images/pizza.png" alt="">
         <h1 style="padding-left:43px">this is the main page</h1>
         <p  style="padding-left:43px">name : {{$name}} -  age : {{$age}}</p>

         <br>
         <div style="background-color: rgb(243, 36, 36); text-align: center; height:40px; padding-top:2%;">
          <a style="color:white;" href="/?name=zahra&age=23">Query Parameters</a>
          <p>checkout the URL and the paragraph above</p>
          </div>
        
     </div>
    @endsection
