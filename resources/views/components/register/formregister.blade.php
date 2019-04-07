<div class="container">
    <form id="contact" action="#">
        <div>
            <h3>Dados</h3>
            <section>
                <label for="cpf">CPF *</label>
                <input id="cpf" name="cpf" type="text" class="required">
                <label for="name">Nome completo*</label>
                <input id="name" name="name" type="text" class="required">
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" class="required email">
                <label for="password">Senha *</label>
                <input id="password" name="password" type="text" class="required">
                <label for="confirm">Confirme sua senha *</label>
                <input id="confirm" name="confirm" type="text" class="required">
            </section>
            <h3>CNH</h3>
            <section>
                <label for="userName">User name *</label>
                <input id="userName" name="userName" type="text" class="required">
            </section>
            <h3>Endereço</h3>
            <section>
                <ul>
                    <li>Foo</li>
                    <li>Bar</li>
                    <li>Foobar</li>
                </ul>
            </section>
            <h3>Fim</h3>
            <section>
                <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
            </section>
        </div>
    </form>
    <script type="text/javascript">
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
                    verificaCPF: true
                },
                password:{
                    minlength : 6
                }
            },
            messages: {
                password: {
                    minlength:"Mínimo de seis (6) caracteres"
                },
                confirm: {
                    minlength:"Mínimo de seis (6) caracteres"
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
    </script>
</div>