@extends('layouts.app')

@section('content')
            <div class="content">
              <form action="{{route('entrenador.store')}}" method="post">
                 @csrf
                Nombre:<br>
                <input type="text" name="nombre"><br>
                @if ($errors->has('nombre'))
    <strong style="color: red">{{$errors->first('nombre')}}</strong>
    @endif
                  Apellido:<br>
                <input type="text" name="apellido"><br>
                  Descripcion:<br>
                <input type="text" name="descripcion"><br>
                <input type="submit" name="enviar">
              </form>


            </div>
       
@endsection
    
