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
                <form>
                  <button type="button" class="btn btn-primary">Añadir Medalla</button>
                </form>

                 <div class="d-flex justify-content-center align-items-center" style="height: 300px;">
                 <div class=" col-11 card-deck  ">
                  @foreach($entrenadores->medalla as $medalla)
                  <div class="col">
                      <div class="card">

                        <img class="card-img-top" src="{{$medalla->imagen}}" alt="Card image cap" style="height: 100px;">
                        <div class="card-body">
                          <h5 class="card-title">{{$medalla->nombre}}</h5>
                          
                          
                        </div>
                      </div>
                      </div>
                      @endforeach
                 
                  </div>
                  </div>
                
               
            </div>
       
@endsection
    
