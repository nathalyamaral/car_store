
<form action="{{ route('cadastraCnh') }}" method="POST">
    @csrf
    <div class="row">
        <div class=" col-md-4 col-sm-4 col-xs-6">
            <label for="cnpj" class="col-md-4 col-form-label text-md-right">{{ __('CNPJ') }}</label>
            <input id="cnpj" type="text" class="blog-search-field{{ $errors->has('cnpj') ? ' is-invalid' : '' }}" name="cnpj" value="{{ old('cnpj') }}" required autofocus>
            
            @if ($errors->has('cpf'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cnpj') }}</strong>
            </span>
            @endif
            
        </div>
        
        <div class=" col-md-4 col-sm-4 col-xs-6">
            <label for="Razao_Social" class="col-md-4 col-form-label text-md-right">{{ __('Razao_Social') }}</label>
            <input id="Razao_Social" type="text" class="blog-search-field{{ $errors->has('Razao_Social') ? ' is-invalid' : '' }}" name="Razao_Social" value="{{ old('Razao_Social') }}" required autofocus>
            
            @if ($errors->has('Razao_Social'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('Razao_Social') }}</strong>
            </span>
            @endif
        </div>
    </div>
    
    
    <div class="row">
        <div class=" col-md-4 col-sm-4 col-xs-6">
            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>
            <input id="cpf" type="email" class="blog-search-field{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required>
            
            @if ($errors->has('cpf'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cpf') }}</strong>
            </span>
            @endif
        </div>
        
        
    
</form>