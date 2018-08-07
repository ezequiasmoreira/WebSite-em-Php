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
        <form  action="painel.php?pag=7" method="POST">
            <fieldset>
                <label for="escolhaPostagem" class="labelSelect">Selecione um artigo para edição</label>
                <select name="escolhaPostagem" id="idEscolhaPostagem" class="inputForm">
                <?php
                    $sql = "SELECT * FROM artigos";
                    $query = mysqli_query($con, $sql);
                    while ($obj = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?php echo $obj['id_artigos']; ?>"><?php echo $obj['titulo']; ?></option>
                <?php
                    }
                ?>
                </select>            
            </fieldset> 
            <input type="submit" value="Selecionar" class="Botao selecionar ">
        </form>
         <?php
            $id_select = @$_POST['escolhaPostagem'];
            $sql = "SELECT * FROM artigos where id_artigos = '$id_select'";
            $query = mysqli_query($con, $sql);
            $item = mysqli_fetch_array($query, MYSQLI_ASSOC)
        ?>
        
    </div>
    <section class="menuAdm">
        <section id="contato">
            <form  id="formPostagem" action="../bancoPhp/alterar/artigo_alterar_db.php?cd=<?php echo $id_select ?>" method="POST">
                
                <h1 id="titulo">Alterar artigos</h1>                
                <input class="inputForm" name="id_artigos" type="hidden" value="<?php echo $item['id_artigos']; ?>">
                <input class="inputForm" name="id_a_usuario" type="hidden" value="<?php echo $usuario; ?>">
                <input class="inputForm" name="titulo" type="text"  required value="<?php echo $item['titulo']; ?>">            
                <input class="inputForm" name="subtitulo" type="text" value="<?php echo $item['subtitulo']; ?>" required>
                <textarea class="inputForm" name="descricao" rows="10"><?php echo $item['texto']; ?></textarea>
                <input class="inputForm" name="foto" type="text" value="<?php echo $item['foto']; ?>" >
                <input class="inputForm" name="alt" type="text" value="<?php echo $item['alt']; ?>" >    
                <input class="inputForm" name="link" type="text" value="<?php echo $item['href_foto']; ?>"> 
                <input class="inputForm" name="foto_2" type="text" value="<?php echo $item['foto_2']; ?>" >
                <input class="inputForm" name="alt_2" type="text" value="<?php echo $item['alt_foto']; ?>" > 
                <input class="inputForm" name="link_2" type="text" value="<?php echo $item['href_foto_2']; ?>">
                <textarea class="inputForm" name="texto_2" rows="10"><?php echo $item['texto_2']; ?></textarea> 
                <fieldset id="btns">
                    <button class="Botao" type="reset" >Limpar</button>
                    <button class="Botao Botao2" type="submit" >Alterar</button>
                </fieldset>
            </form>
        </section>
        
    </section>
    
    
</body>
</html>
