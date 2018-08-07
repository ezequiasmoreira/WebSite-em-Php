<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
	
        $sql = "DELETE FROM solicitacao WHERE id_solicitacao = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {	
            header('Location: ../../views/painel.php?status=-21&pag=1'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=21');
	}

	mysqli_close($con);
?>
