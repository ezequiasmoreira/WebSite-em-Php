<?php
	include('../../conexao/conexao.php');

	$id_p_usuario     = $_POST['id_p_usuario'];
	$titulo = $_POST['titulo'];
	$foto = $_POST['foto'];
	$descricao  = $_POST['descricao'];
        $link      = $_POST['link'];
	$alt      = $_POST['alt'];
	
	$sql = "INSERT INTO postagem VALUES (null, '$id_p_usuario', '$titulo', '$foto', '$descricao', '$link', '$alt')";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
		//header('Location: ../../views/postagem.php?erro='.mysqli_error($con));
          header('Location: ../../views/painel.php?status=-1&pag=1');
	} else {
            header('Location: ../../views/painel.php?status=1&pag=1');
	}

	mysqli_close($con);
?>
