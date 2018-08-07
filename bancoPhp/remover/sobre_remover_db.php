<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
	
        $sql = "DELETE FROM sobre WHERE id_sobre = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {	
            header('Location: ../../views/painel.php?status=-12&pag=1');
	} else {
            header('Location: ../../views/painel.php?status=12');
	}

	mysqli_close($con);
?>
