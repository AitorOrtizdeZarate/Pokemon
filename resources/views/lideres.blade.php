@extends('layouts.app')

@section('content')
            <div class="content">
            
               <div class="col-12">
               	<div>
               		<h1>{{$medalla->lider->nombre}}</h1>
               	</div>
           		<div class="title m-b-md">
                    <img src="{{$medalla->lider->imagen}}" id="pokeball">
                </div>
                <div>
                <h3>{{$medalla->lider->lugar}}</h3>
                </div>
               </div>

               

                 

                
                
               
            </div>
       
@endsection
    
