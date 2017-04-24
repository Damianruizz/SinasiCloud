@extends('layout_admin')

@section('content')

<br><br><br><br>

	<section class="succes" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Bienvenido Usuario</h2>
                </div>
            </div>            
        </div>
    </section>

    <section class="succes" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Catalogos</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <a href="{{ url('client_index') }}"><h3>Clientes</h3></a>
                </div>
                <div class="col-lg-4" style="float: right;">
                    <a href="{{ url('concept_index') }}"><h3>Conceptos</h3></a>
                </div>                
            </div>
        </div>
    </section>
@endsection