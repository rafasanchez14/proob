<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" href=" {{ url('/css/pro.css')}}">
 @include('layout.layout')
  </head>
  <body>
    <div class="">
      @foreach($datos as $dato)
        <li class="list-group-item op">  <option value="{{$dato->usuario}}">{{$dato->usuario}}</option></li>
        <br> 
      </ul>
    </div>


   @endforeach
  </body>
</html>
