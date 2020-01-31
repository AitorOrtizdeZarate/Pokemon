<!DOCTYPE html>
<html>

	@include('layouts.head')
	

<body>
	
	        <div class="content ">
	            <div class="links bg-secondary text-white row justify-content-around" >
	            	<div>
	            		<a href="/"><img src="/imagenes/pokeball.png" id="logo"></a>
	            	</div>
	               <h1>Pokemon</h1>
	               <div>
	               	<a href="/"><img src="/imagenes/pokeball.png" id="logo"></a>
	               </div>
	            </div>
	           <br><br>
	            <div class="op">
	                @yield('content')
	            </div>
	        </div>
	    

		<!-- Optional JavaScript -->
        <!-- Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{ URL::asset('/bootstrap/js/popper.min.js') }}"></script>
        <script src="{{ URL::asset('/bootstrap/js/bootstrap.min.js') }}"></script>
			@include('layouts.footer')
		
</body>
</html>