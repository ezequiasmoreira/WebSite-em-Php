<?php
	session_start();
	include('../conexao/conexao.php');
	
	$login = $_POST['login'];
	$senha = md5($_POST['senha']);
	
	
        $sql = "SELECT * FROM usuario WHERE usuario.login ='$login' AND usuario.senha = '$senha'";
	$query = mysqli_query($con, $sql);
	$obj = mysqli_fetch_array($query, MYSQLI_ASSOC);
	
	if ($obj['id_usuario'] > 0) {
		$_SESSION['id'] = $obj['id_usuario'];
		header('Location: ../views/painel.php');
	} else {
		header('Location: ../views/login.php?erro=1');
	}
	
	mysqli_close($con);
?>