@extends('layouts.app')

@section('content')
            <div class="content">
            
               <div class="col-12">
               	<div>
               		<h1>{{$entrenadores->nombre}} {{$entrenadores->apellido}}</h1>
               	</div>
           		<div class="title m-b-md">
                    <img src="{{$entrenadores->imagen}}" id="pokeball" class="rounded-circle">
                </div>
               </div>

               <hr size="30">
                <h2>Medallas</h2>

                 <div class="d-flex justify-content-center align-items-center" style="height: 350px;">
                 <div class="card-deck">

                  @foreach($entrenadores->medalla as $medalla)
                  <div class="col">
                      <div class="card">

                        <img class="card-img-top" src="{{$medalla->imagen}}" alt="Card image cap" style="height: 150px;">
                        <div class="card-body">
                          <h5 class="card-title">{{$medalla->nombre}}</h5>
                          
                          
                        </div>
                      </div>
                      </div>
                      @endforeach
                 
                  </div>
                  </div>

                <hr size="30">
                <h2>Pokemon</h2>
                
               
            </div>
       
@endsection
    
