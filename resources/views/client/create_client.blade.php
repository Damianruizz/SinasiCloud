@extends('layout_admin')

@section('content')

<br><br><br><br>

    <div class="container">
    <br><br>
		<h1>Nuevo Cliente</h1>
		<form role="form" method="POST" action="{{ url('companys') }}" id="for">
		{!! csrf_field() !!}
		  <div class="form-group">
		    <label for="name">Razón Social:</label>
		    <input type="text" class="form-control" id="name" placeholder="Razón Social" name="dependencia">
		  </div>
		  <div class="form-group">
		    <label for="rfc">Registro Federal de Contribuyentes:</label>
		    <input type="text" class="form-control" id="rfc" placeholder="RFC" name="rfc">
		  </div>
		  <h4>Dirección</h4>
		  <div class="form-group" >
		    <label for="calle">Calle:</label>
		    <input type="text" class="form-control" id="calle" placeholder="Calle" name="calle">
		  </div>
		  <div class="form-group">
		    <label for="numext">N° Exterior:</label>
		    <input type="text" class="form-control" id="num" placeholder="Numero Exterior" name="numext">
		  </div>
		  <div class="form-group">
			<label for="numint">N° Interior:</label>
		    <input type="text" class="form-control" id="num" placeholder="Numero Interior" name="numint">
		  </div>
		  <div class="form-group" >
		    <label for="colonia">Colonia:</label>
		    <input type="text" class="form-control" id="colonia" placeholder="Colonia" name="colonia">
		  </div>
		  <div class="form-group">
		    <label for="numcp">Codigo Postal:</label>
		    <input type="text" class="form-control" id="num" placeholder="CP" name="numcp">
		  </div>
		  <div class="form-group">
		    <label for="ciudad">Delegación o Municipio:</label>
		    <input type="text" class="form-control" id="ciudad" placeholder="Ciudad" name="ciudad">
		  </div>
		  <div class="form-group">
		    <label for="estado">Estado:</label>
		    <input type="text" class="form-control" id="estado" placeholder="Entidad Federativa" name="estado">
		  </div>
		  <div class="form-group">
		    <label for="responsable">Contacto:</label>
		    <input type="text" class="form-control" id="responsable" placeholder="Responsable" name="responsable">
		  </div>
		  <div class="form-group">
		    <label for="tel">Telefono:</label>
		    <input type="text" class="form-control" id="tel" placeholder="Telefono" name="telefono">
		  </div>
		  <div class="form-group">
		    <label for="tel">Telefono 2:</label>
		    <input type="text" class="form-control" id="tel" placeholder="Telefono" name="telefono">
		  </div>
		  <div class="form-group">
		    <label for="email">E-mail:</label>
		    <input type="email" class="form-control" id="email" placeholder="Email" name="emailu">
		  </div>
		  <div class="form-group">
		    <label for="sweb">Sitio Web:</label>
		    <input type="text" class="form-control" id="sweb" placeholder="http://net-cloud.com.mx" name="sweb">
		  </div>
		  

		  <button type="submit" class="btn btn-primary">Guardar</button>
		</form>
	</div> 
	<style type="text/css">
		#num {
			width: 20%;
		}
		#tel{
			width: 30%;
		}
	</style>

@endsection