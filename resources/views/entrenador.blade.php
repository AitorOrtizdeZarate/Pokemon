@extends('layouts.app')

@section('content')
            <div class="content">
            
               <div>
               	<div>
               		<h1>{{$entrenadores->nombre}} {{$entrenadores->apellido}}</h1>
               	</div>
           		<div class="title m-b-md">
                    <img src="{{$entrenadores->imagen}}" id="pokeball">
                </div>
               </div>

               <div class="card-deck">
                @foreach($entrenadores as $entrenador)
                <div class="col-2" style="height: 550px;">
                    <div class="card">

                      <img class="card-img-top" src="{{$entrenador->medalla->imagen}}" alt="Card image cap" style="height: 300px;">
                      <div class="card-body">
                        <h5 class="card-title">{{$entrenador->medalla->nombre}}</h5>
                        
                        
                      </div>
                    </div>
                    </div>
                    @endforeach
               
            </div>
               
            </div>
       
@endsection
    
