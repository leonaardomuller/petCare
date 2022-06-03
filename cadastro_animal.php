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
  <title>Animal - PetCare</title>
</head>

<body>
  <main>
    <div id="container">
      <form id="cadastro" class="cadastro" name="cadastro" method="post" action="salvar_animal.php">
        <!-- <fieldset>
          <h2>Doador</h2>
          <section class="two-box">
            <div class="box">
              <label>Nome</label>
              <input id="name" class="input" type="text" name="name" autofocus>
            </div>
            <div class="box">
              <label>Telefone</label>
              <input id="telephone" class="input" type="text" name="contact">
            </div>
          </section>
        </fieldset>

        <fieldset>
          <h2>Endereço</h2>
          <section class="two-box">
            <div class="box">
              <input id="street" class="input" type="text" placeholder="Rua" name="street">
            </div>
            <div class="box">
              <input id="house_number" class="input" type="text" placeholder="Número" name="house_number">
            </div>
          </section>
          <br>
          <section class="two-box">
            <div class="box">
              <input id="district" class="input" type="text" placeholder="Bairro" name="district">
            </div>
            <div class="box">
              <input id="city" class="input" type="text" placeholder="Cidade" name="city">
            </div>
          </section>
        </fieldset> -->

        <fieldset>
          <div id="">
            <h2>Pet</h2>
            <div id="options-container">
              <section class="options-content">
                <h3>Espécie</h3>
                <select id="specie" name="specie">
                  <option value="Gato">Gato</option>
                  <option value="Cachorro">Cachorro</option>
                </select>
                <h3>Sexo</h3>
                <select id="gender" name="gender">
                  <option value="M">Macho</option>
                  <option value="F">Fêmea</option>
                </select>
              </section>
              <section class="options-container">
                <h3>Porte</h3>
                <select id="size" name="size">
                  <option value="Pequeno">Pequeno</option>
                  <option value="Medio">Médio</option>
                  <option value="Grande">Grande</option>
                </select>
                <h3>Idade</h3>
                <select id="age" name="age">
                  <option value="minus1">Menos de 1 ano</option>
                  <option value="1a3">1 a 3 anos</option>
                  <option value="3a5">3 a 5 anos</option>
                  <option value="plus5">Mais que 5 anos</option>
                </select>
              </section>
            </div>
            <h3>Observaçōes: </h3>
            <textarea id="comments" name="comments" rows="5" cols="33"></textarea>
            <br>
            <h3>Imagens</h3>
            <input id="animal_img" type="file" name="animal_img" accept="image/png, image/jpeg">
          </div>
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