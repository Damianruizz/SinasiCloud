@extends('layout_admin')

@section('content')

<br><br><br><br>

    <section id="">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Listado de Clientes</h2>
            </div>
        </div>
        <br><br>
        <p></p><br>          
        <table class="table">
            <thead>
                <tr class="danger">
                   <th>Razon Social</th>
                   <th>Contacto</th>
                   <th>Telefono</th>
                   <th>Email</th>
                   <th></th>
                </tr>
            </thead>
            <tbody>
              <?php $clase = true; ?>
              @foreach($clients as $key => $value)
                @if ($clase) 
                  <tr class="active">
                  <?php $clase = false; ?>
                @else
                  <tr class="success">
                  <?php $clase = true; ?>
                @endif
                  <td>{{ $value->name }}</td>
                  <td>{{ isset($value->contact) ? $value->contact : '-' }}</td>
                  <td>{{ isset($value->tel1) ? $value->tel1 : '-' }} </td>
                  <td>{{ isset($value->email1) ? $value->email1 : '-' }}</td>
                  <td id="btn"><a href="{{ route('client_edit', $value->id) }}" id="edit" class="btn btn-primary">Editar</a>
                  <a href="{{ URL::to('clientd/' . $value->id) }}" id="destroy" class="btn btn-danger">Eliminar</a> </td>
                </tr> 
              @endforeach
            </tbody>
        </table>
      <a href="{{ url('client_create') }}" class="btn btn-primary" role="button">Crear Cliente</a> 
      <br><br>
    </div>
  </section> 
@endsection