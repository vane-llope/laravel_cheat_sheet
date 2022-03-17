@extends('layouts.layout')
  @section('content')
  <div style="margin: 6% 20%;">
    <h1>the id that you get from URL which is calld wildcards</h1>
<div style="margin-top:5%;">
  <p>ID : <strong> {{$id}}</strong></p>
  <p>Name : <strong>{{$pizzaid->name}}</strong></p>
  <p>Type : <strong>{{$pizzaid->type}}</strong></p>
  <p>Base : <strong>{{$pizzaid->base}}</strong></p>
  <p>Created At : <strong>{{$pizzaid->created_at}}</strong></p>
  <p>Price : <strong>{{$pizzaid->price}}$</strong></p>
  </div>

  <a href="/pizzas">back to cheat sheet</a>
  </div>
  @endsection