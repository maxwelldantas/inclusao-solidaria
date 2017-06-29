<?php

$link = mysqli_connect("localhost", "root", "", "inclusaosolidaria") or die();
mysqli_query($link,"SET NAMES 'utf8'");
mysqli_query($link,"SET character_set_connection=utf8");
mysqli_query($link,"SET character_set_client=utf8");
mysqli_query($link,"SET character_set_results=utf8");


if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit();
}

$sql = "INSERT INTO cadastrovoluntario (nomeVoluntario,cpf,email,telefone,Curso_idCurso) VALUES
('".$_POST['name']."','".$_POST['cpf']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['curso']."')";
  
  $result=mysqli_query($link,$sql);
	
	echo (mysqli_error($link));
	
	if($result){
		echo "Inserindo com sucesso";
	}
	else{
		echo "Não inserindo";
	}
?>