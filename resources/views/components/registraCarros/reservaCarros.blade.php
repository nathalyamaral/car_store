<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/estilo.css">

</head>
<body>

<h2>Formulario de Reserva de Carros</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Dados Pessoas</h3>
            <label for="fname"><i class="fa fa-user"></i> Nome Comppleto</label>
            <input type="text" id="fname" name="firstname" placeholder="fulano d tal">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Endereço</label>
            <input type="text" id="adr" name="address" placeholder="Av. Rio Branco...">
            <label for="city"><i class="fa fa-institution"></i> Cidade</label>
            <input type="text" id="city" name="city" placeholder="corumba">

            <div class="row">
              <div class="col-50">
                <label for="state">UF</label>
                <input type="text" id="state" name="state" placeholder="BR">
              </div>
              <div class="col-50">
                <label for="zip">Numero</label>
                <input type="text" id="zip" name="numero" placeholder="1001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Pagamento</h3>
            <label for="fname">Aceitamos Cartões</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nome Titular Cartão</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Numero</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Mês Vencimento</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="Setembro">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Ano Vencimento</label>
                <input type="text" id="expyear" name="expyear" placeholder="2020">
              </div>
              <div class="col-50">
                <label for="cvv">Codigo de Segurança</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>