
@extends('layouts.app')

@section('content')
<section>
<font color="white">
    <br><br>
    <div class="contact-content" >
        
            <div class="row">
                <div class="col-md-8">
                    <div class="send-message">
                        <div class="sep-section-heading">
                            <h2><em>Cadastre - se</em></h2>
                        </div>
                        
                        <form id="contact_form" action="{{ route('register') }}" method="POST" >
                         @csrf
                            <div class="row">
                                <div class=" col-md-4 col-sm-4 col-xs-6">
                                    <label for="cpf" id="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>
                                    <input type="text" class="blog-search-field{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>
                                        
                                    @if ($errors->has('cpf'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cpf') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class=" col-md-4 col-sm-4 col-xs-6">
                                    <label id="name" for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                                    <input type="text" class="blog-search-field{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                                

                            <div class="row">
                                <div class=" col-md-4 col-sm-4 col-xs-6">
                                    <label id="email" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                    <input type="text" id="email" for="email" class="blog-search-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <br>
                                <div class=" col-md-4 col-sm-4 col-xs-6">
                                    <label id="passaword" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                            </div>

                            <div class="primary-button">
                                <a href="{{ route('register') }}">Enviar <i class="fa fa-paper-plane"></i></a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        
    </div>
</font>
</section>

@endsection