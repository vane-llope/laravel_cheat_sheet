@extends('layouts.layout')
  @section('content')
  <div style="display:flex; justify-content: space-around;">
  <div >
    <h1>Pizza House</h1>
    <p>best pizzas you've ever had !!</p>
    <p>types : </p>
    <p>{{$type}} - {{$basic}}</p>
    <p>price : {{$price}}$</p>
    <h3>if statements :</h3>
    @if( $price > 15 )
     <p>this pizza is expensive</p>
     @elseif($price <5)
     <p>this pizza is cheap</p>
     @else
     <p>this pizza is normally priced</p>
     @endif

     <!--unless is the opposite of , which literally means if it's not true-->
     @unless($basic == 'cheesy crust')
        <p>you dont have cheesy crust</p>
     @endunless

     <!--to do php stuff-->
     @php
      $name = 'shaun';
      echo $name;
     @endphp
     </div>
    <!--cloumn 2-->
    <div >
        <h1>LOOP</h1>
    @for($i=0;$i<5; $i++)
     <p>the value of i is : {{$i}}</p>
    @endfor
    <h3 style="color:crimson">nested arrays and loop</h3>
    <span style="color: red"> so important</span>
    <!--so importanr-->
    <h3>for</h3>
    @for($i = 0;$i<count($pizzaTaste) /*which is 3*/;$i++)
    <p>{{$pizzaTaste[$i]['typ']}} - {{$pizzaTaste[$i]['base']}}</p>
    @endfor
    <h3>foreach</h3>
    @foreach($pizzaTaste as $pizzaTaste)
   
    @if($loop -> first)
    <span>(first in the loop) :</span>
    @endif
    @if($loop -> last)
    <span>(last in the loop) :</span>
    @endif
    <p>{{$loop->index}} : {{$pizzaTaste['typ'] }} -  {{$pizzaTaste['base']}}</p>
    @endforeach

</div>
 <!--cloumn 3-->
 <div>
   <h1>Query Parameters</h1>
   <p> 
     this happens on main page not here so<br>
     enter this URL to see what happens:<br>
     http://127.0.0.1:8000/?name=shaun&age=23</p>

     <h1>to connect to mysql</h1>
 <p>do this command on terminal:</p>
 <p><span style="color: rgb(158, 158, 19)">mysql </span> <strong>-u root -p</strong></p>
 <p>and then give your password<br>
    at the end go into env file and give<br>
 databases info as well</p>
 <h1>to checkout wildcards<br> the URL :</h1>
 <p><strong>http://127.0.0.1:8000/pizzas/52</strong></p>
 <p>52 is a eeample , you can use anyother number</p>

 </div>
</div>
    

</div>

@endsection