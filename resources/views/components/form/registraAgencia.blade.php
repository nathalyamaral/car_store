
<div class="container col-md-10">
    <form id="contact" action="{{ route('register') }}" method="POST">
        @csrf
        <h4>DADOS</h4>
        <section>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome Completo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="fa fa-user"></i></span>
                        </div>
                        <input id="name" name="name" type="text" class="form-control required" placeholder="Nome Completo">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="fa fa-user"></i></span>
                        </div>
                        <input id="cpf" name="cpf" type="text" class="form-control required" placeholder="xxx.xxx.xxx-xx">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i class="fa fa-at"></i></span>
                    </div>
                    <input id="email" name="email" type="text" class="form-control required email" placeholder="Email">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="fa fa-phone"></i></span>
                        </div>
                        <input id="ddd_tel" name="telefone" type="text" class="form-control ddd_tel required" placeholder="(xx) xxxx-xxxx">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="fa fa-key"></i></span>
                        </div>
                        <input id="password" name="password" type="password" class="form-control required" placeholder="Senha">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="confirmacao">Confirme a Senha</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="fa fa-key"></i></span>
                        </div>
                        <input id="confirm" name="confirm" type="password" class="form-control required" placeholder="Confirme Sua Senha">
                    </div>
                </div>
            </div>
        </section>
        <h4>AGÊNCIA</h4>
        <section>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="cnpj">CNPJ</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="fa fa-user"></i></span>
                        </div>
                        <input id="cnpj" name="cnpj" type="text" class="form-control required" placeholder="xx.xxx.xxx/xxxx-xx">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="razao_social">Razão Social</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="fa fa-user"></i></span>
                        </div>
                        <input id="razao_social" name="razao_social" type="text" class="form-control required" placeholder="Nome Completo">
                    </div>
                </div>
            </div>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telefoneAgencia">Telefone da Agência</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id=""><i class="fa fa-phone"></i></span>
                            </div>
                            <input id="telefoneAgencia" name="telefoneAgencia" type="text" class="form-control telefoneAgencia required" placeholder="(xx) xxxx-xxxx">
                        </div>
                    </div>
                </div>
        </section>
        <h4>ENDEREÇO</h4>
        <section>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cep">CEP</label>
                    <div class="input-group mb-3">
                        <input id="cep" name="cep" placeholder="Somente números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button" onclick="pesquisacep(cep.value)">Pesquisar</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="logradouro">Logradouro</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="">Logradouro</i></span>
                        </div>
                        <input id="logradouro" name="logradouro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="numero">Número</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="">Número</i></span>
                        </div>
                        <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="bairro">Bairro</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="">Bairro</i></span>
                        </div>
                        <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="complemento">Complemento</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id=""><i>...</i></span>
                    </div>
                    <input id="complemento" name="complemento" type="text" class="form-control" placeholder="Complemento">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="cidade">Cidade</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="">Cidade</i></span>
                        </div>
                        <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id=""><i class="">Estado</i></span>
                        </div>
                        <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                    </div>
                </div>
            </div>
        </section>
        <button class="btn btn-primary" type="submit"> {{ __('Cadastre-se') }} <i class="fa fa-paper-plane"></i></button>
    </form>
    <script type="text/javascript">
        $('#cpf').mask('000.000.000-00');
        $('#cnpj').mask('00.000.000/0000-00');
        $('.data').mask('00/00/0000');
        $('.ddd_tel').mask('(00) 00000-0000');
        $('.telefoneAgencia').mask('(00) 00000-0000');
        
        jQuery.validator.setDefaults({
            debug: false,
            success: "valid"
        });
        var form = $("#contact");
        form.validate({
            errorPlacement: function errorPlacement(error, element) { element.before(error); },
            errorElement: "span",
            errorClass: "text-danger",
            highlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').addClass('has-error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).closest('.form-group').removeClass('has-error');
            },
            errorPlacement: function (error, element) {
                if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                    error.insertBefore(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },
            rules: {
                confirm: {
                    equalTo: "#password",
                    minlength : 6
                },
                cpf:{
                    required: true, 
                    unique:['cpf', '/verifica_cpf/'],
                    verificaCPF: true
                },
                cnpj:{
                    required: true,
                    unique:['cnpj', '/verifica_cnpj/'],
                    verificaCNPJ: true
                },
                
                email: {
                    required: true,
                    unique:['email', '/verifica_email/'],
                    email: true
                },
                password:{
                    minlength : 6
                }, 
                name:{
                    letterswithbasicpunc: true
                }
            },
            messages: {
                password: {
                    minlength:"Mínimo de seis (6) caracteres"
                },
                confirm: {
                    minlength:"Mínimo de seis (6) caracteres"
                }, 
                email:{
                    unique: "Este Email já esta em uso",
                },
                cpf:{
                    unique: "Este CPF já esta em uso", 
                },
                cnpj:{
                    unique: "Este CNPJ já esta em uso", 
                }
            }
        });
        
        function limpa_formulario_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('logradouro').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('estado').value=("");
            
        }
        
        function meu_callback(conteudo) {
            if (!("erro" in conteudo)) {
                //Atualiza os campos com os valores.
                document.getElementById('logradouro').value=(conteudo.logradouro);
                document.getElementById('bairro').value=(conteudo.bairro);
                document.getElementById('cidade').value=(conteudo.localidade);
                document.getElementById('estado').value=(conteudo.uf);
            } //end if.
            else {
                //CEP não Encontrado.
                limpa_formulario_cep();
                alert("CEP não encontrado.");
                document.getElementById('cep').value=("");
            }
        }
        
        function pesquisacep(valor) {
            
            //Nova variável "cep" somente com dígitos.
            var cep = valor.replace(/\D/g, '');
            
            //Verifica se campo cep possui valor informado.
            if (cep !== "") {
                
                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;
                
                //Valida o formato do CEP.
                if(validacep.test(cep)) {
                    
                    //Preenche os campos com "..." enquanto consulta webservice.
                    document.getElementById('logradouro').value="...";
                    document.getElementById('bairro').value="...";
                    document.getElementById('cidade').value="...";
                    document.getElementById('estado').value="...";
                    
                    //Cria um elemento javascript.
                    var script = document.createElement('script');
                    
                    //Sincroniza com o callback.
                    script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';
                    
                    //Insere script no documento e carrega o conteúdo.
                    document.body.appendChild(script);
                    
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulario_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulario_cep();
            }
        }
    </script>
</div>