<?php
    include('../../conexao/conexao.php');

    $nome       = $_POST['nome'];    
    $email      = $_POST['email'];
    $empresa  =$_POST['empresa'];
    $telefone  =$_POST['telefone'];
    $celular  =$_POST['celular'];
    $FormContato  =$_POST['FormContato'];
    $sexo  =$_POST['sexo'];
    $horarioContato  =$_POST['horarioContato'];
    $assunto  =$_POST['assunto'];
    
    $sql = "INSERT INTO contato VALUES (null, null, '$nome','$email', '$empresa', '$telefone','$celular', '$FormContato', '$sexo','$horarioContato', '$assunto','N')";
    
    $query = mysqli_query($con, $sql);
    if(!$query) {
        echo 'erro'.mysqli_error($con);
        //header('Location: ../views/artigos.php');
      
   } else {
        header("Location: ../../views/contato.php?sucesso=sucesso");
   }

    mysqli_close($con);
	