<?php
          
   $usuario = @$_SESSION['id'];
   $opcao   = @$_POST['selectNotificacao'];
   $cd      = @$_GET['cd'];
   if((int)$cd){
       $opcao = @$_GET['cd'];
   }
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
    
        
         <?php
            $id_select = @$_POST['escolhaPostagem'];
            $sql =  "SELECT * FROM depoimento WHERE id_depoimento = '$opcao'";
            $query = mysqli_query($con, $sql);
            $item = mysqli_fetch_array($query, MYSQLI_ASSOC);
        ?>
        
   
    <section class="menuAdm">
        <section id="contato">
            <form  id="formPostagem" action="../bancoPhp/alterar/depoimento_alterar_db.php?cd=<?php echo $opcao ?>" method="POST">
                
                <h1 id="titulo">Alterar depoimento</h1>                
                <input class="inputForm" name="id_depoimento" type="hidden" value="<?php echo $item['id_depoimento']; ?>">
                <input class="inputForm" name="id_usuario" type="hidden" value="<?php echo $usuario; ?>">
                <input class="inputForm" name="nome" type="text"  required value="<?php echo $item['nome']; ?>">            
                <input class="inputForm" name="email" type="text" value="<?php echo $item['email']; ?>" >
                <textarea class="inputForm" name="descricao" cols="10" rows="10"><?php echo $item['descricao']; ?></textarea>
                <label class='labelAtendido' for="ate">Marcar como atendido</label>
                <input id="ate" class="inputForm" name="postar" type="radio" value="S" 
                       <?php echo ($item['postar'] == 'S')?'checked':''; ?>>
                <label class='labelAtendido' for="ate">Marcar como não atendido</label>
                <input id="ate" class="inputForm" name="postar" type="radio" value="N" 
                       <?php echo ($item['postar'] == 'N')?'checked':''; ?>> 
            
                <fieldset id="btns">
                    <button class="Botao" type="reset" >Limpar</button>
                    <button class="Botao Botao2" type="submit" >Alterar</button>
                    <a href=""></a>
                </fieldset>
            </form>
        </section>
        
    </section>
    
    
</body>
</html>
