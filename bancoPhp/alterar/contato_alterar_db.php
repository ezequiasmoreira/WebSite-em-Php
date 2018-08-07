<?php
	include('../../conexao/conexao.php');
        
    $cd              =$_GET['cd'];
    $id_contato      = $_POST['id_contato'];
    $id_usuario      = $_POST['id_usuario'];    
    $nome            = $_POST['nome'];    
    $email           = $_POST['email'];
    $empresa         =$_POST['empresa'];
    $telefone        =$_POST['telefone'];
    $celular         =$_POST['celular'];
    $FormContato     =$_POST['FormContato'];
    $sexo            =$_POST['sexo'];
    $horarioContato  =$_POST['horarioContato'];
    $assunto         =$_POST['assunto'];
    $ativo          =$_POST['ativo'];
    
        
	
	$sql = "UPDATE contato SET id_contato = '$id_contato', id_usuario ='$id_usuario',nome='$nome',
               email='$email', empresa='$empresa', telefone ='$telefone',celular ='$celular', FormContato='$FormContato',
                 sexo='$sexo', horarioContato='$horarioContato', assunto='$assunto',ativo='$ativo'
                WHERE id_contato = '$cd'";
	
	$query = mysqli_query($con, $sql);
	if(!$query) {
	//echo       'erro='.mysqli_error($con);
         header('Location: ../../views/painel.php?status=-22'.mysqli_error($con));
	} else {
            header('Location: ../../views/painel.php?status=22');
	}

	mysqli_close($con);
?>
