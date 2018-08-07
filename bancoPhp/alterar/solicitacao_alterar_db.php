<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
        $id_solicitacao = $_POST['id_solicitacao'];
	$id_s_usuario     = $_POST['id_s_usuario'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone  = $_POST['telefone'];        
	$atendido  = $_POST['atendido'];
        
	
	$sql = "UPDATE solicitacao SET id_solicitacao = '$id_solicitacao', id_s_usuario ='$id_s_usuario',
     nome='$nome', email='$email', telefone='$telefone',atendido ='$atendido'
                WHERE id_solicitacao = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
	//header('Location: ../views/postagem.php?erro='.mysqli_error($con));
         header('Location: ../../views/painel.php?status=-20'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=20');
	}

	mysqli_close($con);
?>
