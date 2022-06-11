<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Doador - PetCare</title>
</head>

<body>
  <main>
    <div id="container">
      <form id="cadastro" class="cadastro" name="cadastro" method="post" action="salvar_doador.php">

        <fieldset>
          <h2>Doador</h2>
          <section class="two-box">
            <div class="box">
              <label for="name">Nome</label>
              <input id="name" class="input" type="text" name="name" autofocus>
            </div>
            <div class="box">
              <label for="telephone">Telefone</label>
              <input id="telephone" class="input" type="text" name="contact">
            </div>
          </section>
        </fieldset>

        <fieldset>
          <h2>Endereço</h2>
          <section class="two-box">
            <div class="box">
              <label for="street">Rua</label>
              <input id="street" class="input" type="text" name="street">
            </div>
            <div class="box">
              <label for="house_number">Número</label>
              <input id="house_number" class="input" type="text" name="house_number">
            </div>
          </section>
          <br>
          <section class="two-box">
            <div class="box">
              <label for="district">Bairro</label>
              <input id="district" class="input" type="text" name="district">
            </div>
            <div class="box">
              <label for="city">Cidade</label>
              <input id="city" class="input" type="text" name="city">
            </div>
          </section>
          <div class="buttons-container">
            <input id="button-reset" type="reset" name="cancelar" value="Limpar">
            <input id="button-save" type="submit" name="entrar" value="Salvar">
          </div>
        </fieldset>

      </form>
    </div>
  </main>

  <aside>
    <img id="pets-image" src="/assets/images/pets.png" alt="">
  </aside>
</body>

</html>