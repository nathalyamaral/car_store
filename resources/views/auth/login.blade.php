@extends('layouts.app')

@section('content')
<section>
<font color="white">
    <br><br>
    <div class="contact-content">
            <div class="row">
                <div class="col-md-8">
                    <div class="send-message">
                        <div class="sep-section-heading">
                            <h2><em>Login</em></h2>
                        </div>
                        
                        <form id="contact_form" action="{{ route('login') }}" method="POST" enctype="multipart/form-data" >

                            @csrf
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block browser_alert_login">
                                    <strong>{{$message}}</strong>
                                </div>
                            @endif

                            <div class="row">
                                <div class=" col-md-4 col-sm-4 col-xs-6">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                    <input type="text" class="blog-search-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br>
                                <div class=" col-md-4 col-sm-4 col-xs-6">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>
                            <font size="2%">
                                <div class="primary-button">
                                    <a href="{{ route('login') }}">Login <i class="fa fa-paper-plane"></i></a>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu sua senha?') }}
                                        </a>
                                    @endif
                                </div>
                            </font>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</font>
</section>

@endsection
