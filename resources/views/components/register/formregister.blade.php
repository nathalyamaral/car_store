<div class="container">
    <form class="form-horizontal" id="contact" action="#">
        <div>
            <h3>Dados</h3>
            <section>
                <label for="cpf">CPF *</label>
                <input id="cpf" name="cpf" type="text" class="form-control required">
                <label for="name">Nome completo *</label>
                <input id="name" name="name" type="text" class="form-control required">
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" class="form-control required email">
                <label for="password">Senha *</label>
                <input id="password" name="password" type="password" class="form-control required">
                <label for="confirm">Confirme sua senha *</label>
                <input id="confirm" name="confirm" type="password" class="form-control required">
            </section>
            <h3>CNH</h3>
            <section>
                <label for="numeroCnh">Numero da CNH *</label>
                <input id="numeroCnh" name="numeroCnh" type="number" minlength="9" maxlength="10" class="form-control required">
                <label for="registro">Numero de registro *</label>
                <input id="registro" name="registro" type="number" maxlength="11" minlength="11" class="form-control required">
                <label for="validade">Data de validade *</label>
                <input id="validade" name="validade" type="text" class="form-control required data">
                <label for="rg">RG *</label>
                <input id="rg" name="rg" type="text" maxlength="20" class="form-control required rg">
                <label for="data_nascimento">Data de nascimento *</label>
                <input id="data_nascimento" name="data_nascimento" type="text" class="form-control required data">
                <label for="UF">UF *</label>
                <select name="estados-brasil" id="estadoo" name="estadoo" class="form-control required">
                    <option value="">Selecione</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </section>
            <h3>Endereço</h3>
            <section>
                <!-- Search input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
                    <div class="col-md-2">
                        <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                    </div>
                </div>
                
                <!-- Prepended text-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">Rua</span>
                            <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                        </div>
                        
                    </div>
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon">Nº <h11>*</h11></span>
                            <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon">Bairro</span>
                            <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                        </div>
                        
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-md-2 control-label" for="prependedtext"></label>
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon">Cidade</span>
                            <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                        </div>
                        
                    </div>
                    
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon">Estado</span>
                            <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                        </div>
                        
                    </div>
                </div>
                </section>
            </div>
        </form>
        <script type="text/javascript">
            $('#cpf').mask('000.000.000-00');
            $('.data').mask('00/00/0000');
            
            jQuery.validator.setDefaults({
                debug: true,
                success: "valid"
            });
            var form = $("#contact");
            form.validate({
                errorPlacement: function errorPlacement(error, element) { element.before(error); },
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
                    }
                }
            });
            
            form.children("div").steps({
                headerTag: "h3",
                bodyTag: "section",
                transitionEffect: "slideLeft",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function (event, currentIndex)
                {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    alert("Submitted!");
                }
            });
            
            function limpa_formulario_cep() {
                //Limpa valores do formulário de cep.
                document.getElementById('rua').value=("");
                document.getElementById('bairro').value=("");
                document.getElementById('cidade').value=("");
                document.getElementById('estado').value=("");
                
            }
            
            function meu_callback(conteudo) {
                if (!("erro" in conteudo)) {
                    //Atualiza os campos com os valores.
                    document.getElementById('rua').value=(conteudo.logradouro);
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
                        document.getElementById('rua').value="...";
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