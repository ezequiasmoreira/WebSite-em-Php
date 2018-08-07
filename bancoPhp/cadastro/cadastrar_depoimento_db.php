<?php
    include('../../conexao/conexao.php');

    $nome       = $_POST['nome'];
    $data       = $_POST['data'];
    $email      = $_POST['email'];
    $descricao  =$_POST['descricao'];
    
    $sql = "INSERT INTO depoimento VALUES (null, '$nome', '$data', '$email', '$descricao', null, 'N')";
    
    $query = mysqli_query($con, $sql);
    if(!$query) {
        
        header('Location: ../../index.php?erro='.mysqli_error($con));
      
   } else {
        header("Location: ../../index.php?sucesso=sucesso");
   }

    mysqli_close($con);
	