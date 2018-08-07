<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
        $id_depoimento = $_POST['id_depoimento'];
	$id_usuario     = $_POST['id_usuario'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$descricao  = $_POST['descricao'];        
	$postar  = $_POST['postar'];
        
	
	$sql = "UPDATE depoimento SET id_depoimento = '$id_depoimento',
     nome='$nome', email='$email', descricao='$descricao', id_usuario ='$id_usuario',postar ='$postar'
                WHERE id_depoimento = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
	//echo       'erro='.mysqli_error($con);
        header('Location: ../../views/painel.php?status=-16'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=16');
	}

	mysqli_close($con);
?>
