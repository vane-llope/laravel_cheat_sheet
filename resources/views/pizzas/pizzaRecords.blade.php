@extends('layouts.layout')
  @section('content')
  <div style="margin: 8% 25%">
  <h1 style="text-align: center">these datas are comming from mysql</h1>
  @foreach($pizzas as $pizza)
  <p style="text-align: center">{{$pizza -> type}} |  {{$pizza -> base}} | {{$pizza -> name}}  | {{$pizza -> price}}$ | {{$pizza -> created_app}}</p>
  @endforeach
  </div>
  @endsection