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
        <form  action="painel.php?pag=8" method="POST">
            <fieldset>
                <label for="escolhaPostagem" class="labelSelect">Selecione uma página para edição</label>
                <select name="escolhaPostagem" id="idEscolhaPostagem" class="inputForm">
                <?php
                    $sql = "SELECT * FROM sobre";
                    $query = mysqli_query($con, $sql);
                    while ($obj = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?php echo $obj['id_sobre']; ?>"><?php echo $obj['titulo']; ?></option>
                <?php
                    }
                ?>
                </select>            
            </fieldset> 
            <input type="submit" value="Selecionar" class="Botao selecionar ">
        </form>
         <?php
            $id_select = @$_POST['escolhaPostagem'];
            $sql = "SELECT * FROM sobre where id_sobre = '$id_select'";
            $query = mysqli_query($con, $sql);
            $item = mysqli_fetch_array($query, MYSQLI_ASSOC)
        ?>
        
    </div>
    <section class="menuAdm">
        <section id="contato">
            <form  id="formPostagem" action="../bancoPhp/alterar/sobre_alterar_db.php?cd=<?php echo $id_select ?>" method="POST">
                
                <h1 id="titulo">Alterar página sobre nós</h1>                
                <input class="inputForm" name="id_sobre" type="hidden" value="<?php echo $item['id_sobre']; ?>">
                <input class="inputForm" name="id_sobre_usuario" type="hidden" value="<?php echo $usuario; ?>">
                <input class="inputForm" name="titulo" type="text" value="<?php echo $item['titulo']; ?>" required>           
                <textarea class="inputForm" name="sobre" rows="10"><?php echo $item['sobre']; ?></textarea>
                <textarea class="inputForm" name="missao" rows="10"><?php echo $item['missao']; ?></textarea>
                <textarea class="inputForm" name="visao" rows="10"><?php echo $item['visao']; ?></textarea>
                <textarea class="inputForm" name="valores" rows="10"><?php echo $item['valores']; ?></textarea>
             
                <fieldset id="btns">
                    <button class="Botao" type="reset" >Limpar</button>
                    <button class="Botao Botao2" type="submit" >Alterar</button>
                </fieldset>
            </form>
        </section>
        
    </section>
    
    
</body>
</html>
