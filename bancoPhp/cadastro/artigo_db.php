<?php
	include('../../conexao/conexao.php');
        $id_p_usuario = $_POST['id_p_usuario'];
	$titulo       = $_POST['titulo'];
	$subtitulo    = $_POST['subtitulo'];	
	$descricao    = $_POST['descricao'];
        $foto         = $_POST['foto'];
        $alt          = $_POST['alt'];
        $link         = $_POST['link'];
        $foto_2       = $_POST['foto_2'];
        $alt_2        = $_POST['alt_2'];
        $link_2       = $_POST['link_2'];
        $texto_2      = $_POST['texto_2'];
        
	
	
	$sql = "INSERT INTO artigos VALUES (null, '$id_p_usuario', '$titulo','$subtitulo', '$descricao', '$foto', 
                '$alt', '$link', '$foto_2','$texto_2','$alt_2','$link_2')";
        
	$query = mysqli_query($con, $sql);
	if(!$query) {
          //echo 'erro'. mysqli_error($con);
          //se der erro entra aqui
            header('Location: ../../views/painel.php?status=-3&pag=3');
	} else {
            header('Location: ../../views/painel.php?status=3&pag=3');
	}

	mysqli_close($con);
?>
