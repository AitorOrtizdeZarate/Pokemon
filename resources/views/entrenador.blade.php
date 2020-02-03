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
               
            </div>
       
@endsection
    
