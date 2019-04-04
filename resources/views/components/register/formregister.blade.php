<form action="{{ route('register') }}" method="POST">
    @csrf
    <div class="row">
        <div class=" col-md-4 col-sm-4 col-xs-6">
            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>
            <input id="cpf" type="text" class="blog-search-field{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required autofocus>
            
            @if ($errors->has('cpf'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cpf') }}</strong>
            </span>
            @endif
            
        </div>
        
        <div class=" col-md-4 col-sm-4 col-xs-6">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            <input id="name" type="text" class="blog-search-field{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    
    
    <div class="row">
        <div class=" col-md-4 col-sm-4 col-xs-6">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
            <input id="email" type="email" class="blog-search-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
        
        
        <div class="col-md-4 col-sm-4 col-xs-6">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="blog-search-field{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <br>
            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
            
            <input id="password-confirm" type="password" class="blog-search-field" name="password_confirmation" required>
            
        </div>
        
    </div>
    
    <div class="primary-button">
        <button class="btn btn-primary" type="submit"> {{ __('Register') }} <i class="fa fa-paper-plane"></i></button>
    </div>
    
</form>