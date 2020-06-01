@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    <a href="solodia"> <img src="/imagenes/pokeball.png" id="pokeball"></a>
                   
                </div>
                
            <div class="card-deck">
                @foreach ($entrenadores as $entrenador)
                <div class="col-2" style="height: 550px;">
                    <div class="card">
                      <img class="card-img-top" src="{{$entrenador->imagen}}" alt="Card image cap" style="height: 300px;">
                      <div class="card-body">
                        <h5 class="card-title">{{$entrenador->nombre}} {{$entrenador->apellido}}</h5>
                        <p class="card-text">{{$entrenador->descripcion}}</p>
                        <a href="{{route('entrenador.show', $entrenador->id)}}" class="btn btn-primary">Ver Entrenador</a>
                      </div>
                      <form action="{{route('entrenador.destroy', $entrenador->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                    <input type="submit" name="eliminar" value="eliminar">
                </form>
                    </div>
                    </div>
                @endforeach
            </div>

            <div>
                <a href="{{route('entrenador.create', $entrenador->id)}}" class="btn btn-primary">Crear Entrenador</a>
            </div>
            </div>
        
@endsection
    
