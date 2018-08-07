<?php
	include('../../conexao/conexao.php');
        
        $cd =$_GET['cd'];
	
        $sql = "DELETE FROM postagem WHERE id_postagem = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {	
            header('Location: ../../views/painel.php?status=-9&pag=1'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=9');
	}

	mysqli_close($con);
?>
