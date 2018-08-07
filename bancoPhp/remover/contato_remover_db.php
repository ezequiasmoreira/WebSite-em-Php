<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
	
        $sql = "DELETE FROM contato WHERE id_contato = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {	
            header('Location: ../../views/painel.php?status=-23&pag=-23'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=23&pag=23');
	}

	mysqli_close($con);
?>
