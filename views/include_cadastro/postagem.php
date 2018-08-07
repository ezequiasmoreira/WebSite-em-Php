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
     
    <section class="menuAdm">
        <section id="contato">
            <form  id="formPostagem" action="../bancoPhp/cadastro/postagem_db.php" method="POST">            
            <h1 id="titulo">Cadastrar novas postagens</h1> 
            <input class="inputForm" name="id_p_usuario" type="hidden" value="<?php echo $usuario; ?>">
            <input class="inputForm" name="titulo" type="text" placeholder="Titulo:" required>            
            <input class="inputForm" name="foto" type="text" placeholder="aqui vai a foto:" required>
            <textarea class="inputForm" name="descricao" rows="10">Descricao</textarea>
            <input class="inputForm" name="link" type="text" placeholder="link"> 
            <input class="inputForm" name="alt" type="text" placeholder="Descrição da imagem" >            
            <fieldset id="btns">
                <button class="Botao" type="reset" >Limpar</button>
                <button class="Botao Botao2" type="submit" Onclick="validaFormulario()">Cadastrar</button>
            </fieldset>
        </form>
    </section>
        
    </section>
    
    
</body>
</html>
