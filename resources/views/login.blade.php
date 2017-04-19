@extends('layout')

@section('content')



<div class="preloader"></div>
	    
	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"> 	</div>
 
			<h1>Bienvenido a <strong>Sinasi Cloud</strong> </h1>
 
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="{{ url('login') }}" id="subscribeForm" method="POST">
					{!! csrf_field() !!}
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0" id="">
								<input class="form-control input-lg" name="email" type="email" id="address" placeholder="Email" data-validate="validate(required, email)" required="required">
							</div>

							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0" id="ip">
								<input class="form-control input-lg" name="password" type="password" id="address" placeholder="Contraseña" required="required">
							</div>

							<div class="col-md-5 col-sm-4" id="btn">
								<button type="submit" class="btn btn-success btn-lg">Ingresar</button>
							</div>
						</div>
					</form>
					<span id="result" class="alertMsg"></span> 
				</div>
			</div>				
		</div><! --/container -->
	</main><! --/main -->

	<style type="text/css">
		.logo{

			font-family: sans-serif;
    		font-size: 46px;
		}

		#ip{

			margin-top: 43px;
		}

		#btn{

			margin-bottom: 20%; */
		}

	</style>

@endsection