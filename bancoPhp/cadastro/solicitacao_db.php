<?php
	include('../../conexao/conexao.php');


	//$id_s_usuario     = $_POST['id_s_usuario'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone  = $_POST['telefone'];
	
	$sql = "INSERT INTO solicitacao VALUES (null, null, '$nome', '$email', '$telefone','N')";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
          //echo 'erro'. mysqli_error($con);		
          header('Location: ../../index.php');
	} else {
            header('Location: ../../index.php');
	}

	mysqli_close($con);
?>
