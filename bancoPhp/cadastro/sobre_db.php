<?php
	include('../../conexao/conexao.php');

	$id_sobre_usuario = $_POST['id_sobre_usuario'];
	$titulo           = $_POST['titulo'];
	$sobre            = $_POST['sobre'];
	$missao           = $_POST['missao'];
        $visao            = $_POST['visao'];
	$valores          = $_POST['valores'];
	
	$sql = "INSERT INTO sobre VALUES (null, '$id_sobre_usuario', '$titulo', '$sobre', '$missao', '$visao', '$valores')";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
            echo 'erro'. mysqli_error($con);
         // header('Location: ../../views/painel.php?status=-4&pag=4');
	} else {
            header('Location: ../../views/painel.php?status=4&pag=4');
	}

	mysqli_close($con);
?>
