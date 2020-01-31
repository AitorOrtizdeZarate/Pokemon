@extends('layouts.app')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    <img src="/imagenes/pokeball.png" id="pokeball">
                </div>
            <div class="card-deck">
                @foreach ($entrenadores as $entrenador)
                <div class="col-3">
                    <div class="card">
                      <img class="card-img-top" src="{{$entrenador->imagen}}" alt="Card image cap" style="height: 300px;">
                      <div class="card-body">
                        <h5 class="card-title">{{$entrenador->nombre}} {{$entrenador->apellido}}</h5>
                        <p class="card-text">{{$entrenador->descripcion}}</p>
                        <a href="#" class="btn btn-primary">Ver Entrenador</a>
                      </div>
                    </div>
                    </div>
                @endforeach
            </div>
            </div>
        
@endsection
    
