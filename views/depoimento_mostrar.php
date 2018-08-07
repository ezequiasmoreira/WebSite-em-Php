<?php
          
   $usuario = @$_SESSION['id'];
  
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>   
    <meta charset= "utf-8" />
    <!--a tela do site vai ser igual a tela do dispositivo e o zoom vai iniciar na escala 1-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />	
    <link rel="stylesheet" type="text/css" href="../css/padrao.css"> 
    <link rel="stylesheet" type="text/css" href="../css/includePainel.css"> 

</head>
<body>
    <header id="topo">
        
        
        		
    </header>    
    
        <table class="tableMostrar">
            
                    
        <?php
            $id_select = @$_POST['escolhaPostagem'];
            $sql =  "SELECT * FROM depoimento";
            $query = mysqli_query($con, $sql);
            while ($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        ?>
            <tr class="tableMostrarTr">
                <td class="tableMostrarTd tableMostrarTdTitle">Cód</td>
                <td class="tableMostrarTd"><?php echo $item['id_depoimento']; ?></td>
                <td class="tableMostrarTd tableMostrarTdTitle">Nome</td>
                <td class="tableMostrarTd"><?php echo $item['nome']; ?></td>
                <td class="tableMostrarTd tableMostrarTdTitle">Data</td>
                <td class="tableMostrarTd"><?php echo $item['data_depoimento']; ?></td>
                <td class="tableMostrarTd tableMostrarTdTitle">E-mail</td>
                <td class="tableMostrarTd"><?php echo $item['email']; ?></td>
                <td class="tableMostrarTd tableMostrarTdTitle">Descricao</td>
                <td class="tableMostrarTd"><?php echo $item['descricao']; ?></td>
                <td class="tableMostrarTd tableMostrarTdTitle">Status</td>
                <td class="tableMostrarTd"><?php echo ($item['postar']=='S')?'Atendido':'Não atendido'; ?></td>
                <td></td>
                <td class="tableMostrarTd">
                    <a href="painel.php?pag=16&cd=<?php echo $item['id_depoimento'] ?>
                       
                       ">Alterar</a>
                    <a href="painel.php?pag=18&escolhaPostagem=<?php echo $item['id_depoimento'] ?>&cd=<?php echo $item['id_depoimento'] ?>">Excluir</a>
                </td>
                <td></td>
            </tr>
           
        <?php
            }
        ?>
        
        </table>
        
   
    
    
    
</body>
</html>
