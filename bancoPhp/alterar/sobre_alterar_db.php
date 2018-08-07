<?php
	include('../../conexao/conexao.php');
        $cd               = $_GET['cd'];
        $id_sobre         = $_POST['id_sobre'];
        $id_sobre_usuario = $_POST['id_sobre_usuario'];
	$titulo           = $_POST['titulo'];
	$sobre            = $_POST['sobre'];
	$missao           = $_POST['missao'];
        $visao            = $_POST['visao'];
	$valores          = $_POST['valores'];
        
        
	
	
	$sql = "UPDATE sobre SET id_sobre= '$id_sobre', id_sobre_usuario ='$id_sobre_usuario', titulo='$titulo',
                sobre='$sobre', missao='$missao', visao='$visao', valores='$valores'
                WHERE id_sobre = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
            //echo 'erro'. mysqli_error($con);	
            header('Location: ../../views/painel.php?status=-8&pag=1');
	} else {
            header('Location: ../../views/painel.php?status=8&pag=8');
	}

	mysqli_close($con);
?>
