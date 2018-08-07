<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
	
        $sql = "DELETE FROM artigos WHERE id_artigos = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {	
            //echo 'erro'. mysqli_error($con);
            header('Location: ../../views/painel.php?status=-11&pag=1'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=11');
	}

	mysqli_close($con);
?>
