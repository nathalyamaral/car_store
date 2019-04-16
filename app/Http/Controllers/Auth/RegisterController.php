<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Cnh;
use App\Models\Telefone;
use App\Models\Endereco;
use App\Models\UserHasTelefone;
use App\Models\UserHasEndereco;
use App\Models\Agencia;
use App\Models\AgenciaHasEndereco;
use App\Models\AgenciaHasTelefone;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    
    use RegistersUsers;
    
    
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function showRegistrationFormAgencia(){
        return view('registeraegencia');
    }
    
    /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    protected function validator(array $data)
    {   
        $data['cpf'] = preg_replace("/[^0-9]/", "", $data['cpf']);
        return Validator::make($data, [
            //'cpf' => ['required', 'unique:users'],
            //'name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            //'password' => ['required', 'string', 'min:6', 'confirmed'],
            ]);
        }
        
        /**
        * Create a new user instance after a valid registration.
        *
        * @param  array  $data
        * @return \App\User
        */
        protected function create(array $data)
        {
            $data['cpf'] = preg_replace("/[^0-9]/", "", $data['cpf']); 
            if(array_key_exists('numeroCnh', $data)){
                $sucessoUser = User::create([
                    'cpf' => $data['cpf'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'nivel' => 'COMUM'
                    ]);
            }else if(array_key_exists('cnpj', $data)){
                $sucessoUser = User::create([
                    'cpf' => $data['cpf'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'nivel' => 'ADMIN'
                    ]);
            }

            

                if(array_key_exists('numeroCnh', $data)){
                    $sucessoCnh = Cnh::create([
                        'numero_cnh' => $data['numeroCnh'],
                        'numero_registro' => $data['registro'],
                        'data_validade' => date("Y-m-d", strtotime($data['validade'])),
                        'rg' => $data['rg'],
                        'data_nascimento' => date("Y-m-d", strtotime($data['data_nascimento'])),
                        'uf' => $data['uf'],
                        'users_cpf' => $data['cpf']
                        ]);
                    }else if(array_key_exists('cnpj', $data)){
                        $data['cnpj'] = trim($data['cnpj']);
                        $data['cnpj'] = str_replace(".", "", $data['cnpj']);
                        $data['cnpj'] = str_replace(",", "", $data['cnpj']);
                        $data['cnpj'] = str_replace("-", "", $data['cnpj']);
                        $data['cnpj'] = str_replace("/", "", $data['cnpj']);
                        
                        $sucessoCnpj = Agencia::create([
                            'cnpj' => $data['cnpj'],
                            'razao_social' => $data['razao_social'],
                            'users_cpf' => $data['cpf']
                            ]);
                            
                            $sucessoTelefoneAgencia = Telefone::create([
                                'numero' => $data['telefoneAgencia'],
                                ]);
                                
                                $sucessoHasAT = AgenciaHasTelefone::create([
                                    'agencia_cnpj' => $data['cnpj'],
                                    'telefone_idtelefone' => $sucessoTelefoneAgencia->idtelefone
                                    ]);
                                }
                                
                                
                                $sucessoTelefone = Telefone::create([
                                    'numero' => $data['telefone'],
                                    ]);
                                    
                                    $sucessoHasUT = UserHasTelefone::create([
                                        'users_cpf' => $data['cpf'],
                                        'telefone_idtelefone' => $sucessoTelefone->idtelefone
                                        ]);
                                        
                                        
                                        $sucessoEndereco = Endereco::create([
                                            'bairro' => $data['bairro'],
                                            'cep' => $data['cep'],
                                            'cidade' => $data['cidade'],
                                            'estado' => $data['estado'],
                                            'numero' => $data['numero'],
                                            'logradouro' => $data['logradouro']
                                            ]);
                                            
                                            if(array_key_exists('cnpj', $data)){
                                                $sucessoHasAE = AgenciaHasEndereco::create([
                                                    'agencia_cnpj' => $data['cnpj'],
                                                    'endereco_idendereco' => $sucessoEndereco->idendereco
                                                    ]);   
                                                }else{
                                                    $sucessoHasUE = UserHasEndereco::create([
                                                        'users_cpf' => $data['cpf'],
                                                        'endereco_idendereco' => $sucessoEndereco->idendereco
                                                        ]);
                                                    }
                                                    
                                                    return $sucessoUser;
                                                }
                                                
                                                protected function existsCpf(Request $request){
                                                    $cpf = $request['cpf'];
                                                    if(User::existCpf($cpf) == null){
                                                        return response()->json(false);
                                                    }else{
                                                        return response()->json(true);
                                                    }    
                                                    
                                                }
                                                
                                                protected function existsEmail(Request $request){
                                                    $email = $request['email'];
                                                    if(User::existEmail($email) == null){
                                                        return response()->json(false);
                                                    }else{
                                                        return response()->json(true);
                                                    }    
                                                    
                                                }
                                                
                                                protected function existsCnh(Request $request){
                                                    $cnh = $request['cnh'];
                                                    if(Cnh::existsCnh($cnh) == null){
                                                        return response()->json(false);
                                                    }else{
                                                        return response()->json(true);
                                                    }    
                                                    
                                                }
                                                
                                                protected function existsRegistro(Request $request){
                                                    $registro = $request['registro'];
                                                    if(Cnh::existsRegistro($registro) == null){
                                                        return response()->json(false);
                                                    }else{
                                                        return response()->json(true);
                                                    }    
                                                    
                                                }
                                                
                                                protected function existsCnpj(Request $request){
                                                    $cnpj = $request['cnpj'];
                                                    if(Agencia::existsCnpj($cnpj) == null){
                                                        return response()->json(false);
                                                    }else{
                                                        return response()->json(true);
                                                    }    
                                                    
                                                }
                                            }
                                            