@extends('layouts.app')

@section('content')
            <div>
               <div class="card-deck">
                @foreach ($medallas as $medalla)
                <div class="col d-flex justify-content-center">
                    <div class="card">
                      <img class="card-img-top" src="{{$medalla->imagen}}" alt="Card image cap" style="height: 100px;">
                      <div class="card-body">
                        <p class="card-title">{{$medalla->nombre}}</p>
                        <p class="card-text">{{$medalla->descripcion}}</p>
                        <input type="checkbox" name="check">
                      </div>
                    </div>
                    </div>
                @endforeach
              </div>
            </div>
       
@endsection
    
