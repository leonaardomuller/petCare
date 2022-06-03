<?php

//recebendo todos os dados do formulario de cadastro pelo metodo POST
$specie		= $_POST["specie"];
$gender		    = $_POST["gender"];
$size		 	= $_POST["size"];
$age		 	= $_POST["age"];
$comments		= $_POST["comments"];
$animal_img		= $_POST["animal_img"];

include("config.php");


$insere = mysqli_query($conectou, "INSERT into pets values(null,
 '$specie','$gender','$size','$age','$comments','$animal_img')") or die("Erro ao realizar o cadastro do menu!");
	
	if($insere == 1)
	{
		echo "<script>alert('Cadastro realizado com sucesso!');</script>";
		echo "<script>window.location = 'index.php'</script>";
	}


mysqli_close($conectou);