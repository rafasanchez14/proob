<!DOCTYPE html>
<html>
  <head>
 @include('layout.layout')
  </head>
  <body>
  <form class="" action="{{url('login')}}" method="post">
    <label>Nombre</label>
    <input type="text" class="" name="name" value="{{$name}}"/>
    {{csrf_field()}}
      <button type="submit" name="button"class="btn btn-primary btn-lg">send</button>
el valor es {{$name}}
  </form>
  </body>
</html>
