@extends('layouts.layout')
 @section('content')
 <div style="margin: 2% 10%;">
    <h1>add a new pizza</h1>
    <!--pizzas in the form is the route::post in web.php we have named [check web.php 'post' to understand]-->
    <form action="{{ route('pizzas')}}" method="post">
      {{csrf_field()}}
        <label for="name">Your Name : </label>
        <input type="text" style="border: 1px black solid" name="name" id="name">
        <br>
        
        <!--name is something like modal in vue-->
        <label for="type">Choose Pizza Type</label>
        <select name="type" id="type">
            <option value="margherita">margherita</option>
            <option value="hawaiian">hawaiian</option>
            <option value="veg supreme">veg supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <br>
 
        <label for="base">Choose Pizza Base</label>
        <select name="base" id="base">
            <option value="cheesy crust">cheesy crust</option>
            <option value="garlic crust">garlic crust</option>
            <option value="thin and crispy">thin and crispy</option>
            <option value="thick">thick</option>
        </select>
        <br>

        <input style="cursor: pointer; background-color:rgb(243, 36, 36); height:40px; color:white;margin-top:3%;" type="submit" value="Order Pizza">
    </form>
</div>
 @endsection