@extends('layout_index')

@section('content')

    <div class="top-content">
        
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Sinasi Cloud</strong></h1>
                        <div class="description">
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Ingreso al Sistema</h3>
                                <p>Ingresa con tu email y contraseña.</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" method="post" class="login-form" action="{{ url('login') }}">
                            {!! csrf_field() !!}
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Email</label>
                                    <input type="text" name="email" placeholder="Email" class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Contraseña</label>
                                    <input type="password" name="password" placeholder="Contraseña" class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 social-login">
                        <h3>Visitanos</h3>
                        <div class="social-login-buttons">
                            <a class="btn btn-link-2" href="https://www.facebook.com" TARGET="_new">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                        
                            <a class="btn btn-link-2" href="http://www.google.com" TARGET="_new">
                                <i class="fa fa-google-plus"></i> Google Plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection    