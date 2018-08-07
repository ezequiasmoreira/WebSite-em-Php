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
    <div class="escolha">        
         <?php
            $id_postagem = @$_GET['escolhaPostagem'];
            $sql = "SELECT * FROM depoimento where id_depoimento = '$id_postagem'";
            $query = mysqli_query($con, $sql);
            $item = mysqli_fetch_array($query, MYSQLI_ASSOC)
        ?>        
    </div>
    <section class="menuAdm">
        <section id="contato">
            <form  id="formPostagem" action="../bancoPhp/remover/depoimento_remover_db.php?cd=<?php echo $id_postagem ?>" method="POST">
                
                <h1 id="titulo">Deseja realmente remover este depoimento?</h1>                
               <input class="inputForm" name="id_depoimento" type="hidden" value="<?php echo $item['id_depoimento']; ?>">
                <input class="inputForm" name="id_usuario" type="hidden" value="<?php echo $usuario; ?>">
                <input class="inputForm" name="nome" type="text"  required value="<?php echo $item['nome']; ?>">            
                <input class="inputForm" name="email" type="text" value="<?php echo $item['email']; ?>" >
                <textarea class="inputForm" name="descricao" cols="10" rows="10"><?php echo $item['descricao']; ?></textarea>
                         
                <fieldset id="btns">
                    <button class="Botao" type="reset" >Limpar</button>
                    <button class="Botao Botao2" type="submit" >Remover</button>
                </fieldset>
            </form>
        </section>
        
    </section>
    
    
</body>
</html>
