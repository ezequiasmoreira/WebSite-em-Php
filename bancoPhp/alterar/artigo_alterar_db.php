<?php
	include('../../conexao/conexao.php');
        $cd           = $_GET['cd'];
        $id_artigos   = $_POST['id_artigos'];
        $id_a_usuario = $_POST['id_a_usuario'];
	$titulo       = $_POST['titulo'];
	$subtitulo    = $_POST['subtitulo'];	
	$texto        = $_POST['descricao'];
        $foto         = $_POST['foto'];
        $alt          = $_POST['alt'];
        $href_foto    = $_POST['link'];
        $foto_2       = $_POST['foto_2'];
        $texto_2      = $_POST['texto_2'];
        $alt_foto        = $_POST['alt_2'];
        $href_foto_2  = $_POST['link_2'];
        
        
	
	
	$sql = "UPDATE artigos SET id_artigos = '$id_artigos', id_a_usuario ='$id_a_usuario', titulo='$titulo',
                subtitulo='$subtitulo', texto='$texto', foto='$foto', alt='$alt',href_foto='$href_foto',
                foto_2='$foto_2', texto_2='$texto_2', alt_foto='$alt_foto',href_foto_2='$href_foto_2'
                WHERE id_artigos = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
            //echo 'erro'. mysqli_error($con);	
            header('Location: ../../views/painel.php?status=-7&pag=1');
	} else {
            header('Location: ../../views/painel.php?status=7&pag=7');
	}

	mysqli_close($con);
?>
