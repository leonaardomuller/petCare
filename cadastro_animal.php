<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Animal - PetCare</title>
</head>

<body>
  <main>
    <form id="cadastro" class="cadastro" name="cadastro" method="post" action="salvar_animal.php" enctype="multipart/form-data">
      <fieldset>
        <section>
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
        </section>
        <div class="buttons-container">
          <input id="button-reset" type="reset" name="cancelar" value="Limpar">
          <input id="button-save" type="submit" name="entrar" value="Salvar">
        </div>
      </fieldset>
    </form>
  </main>

  <aside>
    <img id="pets-image" src="/assets/images/pets.png" alt="Cachorro e gato deitado na grama.">
  </aside>
</body>

</html>