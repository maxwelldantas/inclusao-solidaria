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
if ($_GET['list']){
	$sql = "SELECT count(*) AS contagem FROM curso";
  
	$result=mysqli_query($link,$sql);
	
	if($result){
		$sqldata = mysqli_fetch_array($result);
		if(($sqldata["contagem"])>0){
			for($i=0;$i<$sqldata["contagem"];$i++){
				$sql = "SELECT * FROM curso LIMIT $i,1";
				$result=mysqli_query($link,$sql);
				$sqldata2 = mysqli_fetch_array($result);
				if(isset($sqldata2["nomeCurso"])){
					echo ("<option valor='".$sqldata2['idCurso']."'>".$sqldata2["nomeCurso"]."</option>");
				}
			}
		}
	}
}
else{
	$sql = "SELECT count(*) AS contagem FROM cadastrovoluntario INNER JOIN curso ON (idCurso=Curso_idCurso)";
  
	$result=mysqli_query($link,$sql);
	
	if($result){
		$sqldata = mysqli_fetch_array($result);
		if(($sqldata["contagem"])>0){
			for($i=0;$i<$sqldata["contagem"];$i++){
				$sql = "SELECT * FROM cadastrovoluntario INNER JOIN curso ON (idcurso=curso_idcurso) WHERE nomeCurso='".$_POST['nameCurso']."' LIMIT $i,1";
				$result=mysqli_query($link,$sql);
				if($result){
					$sqldata2 = mysqli_fetch_array($result);
					if(isset($sqldata2["nomeVoluntario"])){
						echo ("<p> Professor(a): ".$sqldata2['nomeVoluntario']." - ".$sqldata2["email"]."  </p>");
					}
				}
			}
		}
	}
}


?>