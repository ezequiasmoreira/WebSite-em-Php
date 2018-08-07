<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
        $id_postagem = $_POST['id_postagem'];
	$id_p_usuario     = $_POST['id_p_usuario'];
	$titulo = $_POST['titulo'];
	$foto = $_POST['foto'];
	$descricao  = $_POST['descricao'];
        $link      = $_POST['link'];
	$alt      = $_POST['alt'];
	
	$sql = "UPDATE postagem SET id_postagem = '$id_postagem', id_p_usuario ='$id_p_usuario', titulo='$titulo', foto='$foto', descricao='$descricao', link='$link', alt='$alt'
                WHERE id_postagem = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
	//header('Location: ../views/postagem.php?erro='.mysqli_error($con));
         header('Location: ../../views/painel.php?status=-5&pag=1'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=5&pag=5');
	}

	mysqli_close($con);
?>
