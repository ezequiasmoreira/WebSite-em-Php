<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
	
        $sql = "DELETE FROM depoimento WHERE id_depoimento = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {	
            header('Location: ../../views/painel.php?status=-17&pag=17'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=17&pag=17');
	}

	mysqli_close($con);
?>
