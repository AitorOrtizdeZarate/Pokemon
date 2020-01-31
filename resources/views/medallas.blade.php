@extends('layouts.app')

@section('content')
            <div>
               <div class="card-deck m-auto">
                @foreach ($medallas as $medalla)
                <div class="col-3">
                    <div class="card">
                      <img class="card-img-top" src="{{$medalla->imagen}}" alt="Card image cap" style="height: 100px;">
                      <div class="card-body">
                        <h5 class="card-title">{{$medalla->nombre}} {{$medalla->apellido}}</h5>
                        <p class="card-text">{{$medalla->descripcion}}</p>
                        <input type="checkbox" name="check">
                      </div>
                    </div>
                    </div>
                @endforeach
            </div>
            </div>
       
@endsection
    
