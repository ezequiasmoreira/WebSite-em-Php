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
            <form  id="formPostagem" action="../bancoPhp/cadastro/sobre_db.php" method="POST">            
            <h1 id="titulo">Cadastrar a página "sobre nós"</h1> 
            <input class="inputForm" name="id_sobre_usuario" type="hidden" value="<?php echo $usuario; ?>">
            <input class="inputForm" name="titulo" type="text" placeholder="Titulo:" required>           
            <textarea class="inputForm" name="sobre" rows="10">Texto que define a empresa</textarea>
            <textarea class="inputForm" name="missao" rows="10">Informe qual a missão da empresa</textarea>
            <textarea class="inputForm" name="visao" rows="10">Informe qual a visão da empresa</textarea>
            <textarea class="inputForm" name="valores" rows="10">Informe qual os valores da empresa</textarea>
                         
            <fieldset id="btns">
                <button class="Botao" type="reset" >Limpar</button>
                <button class="Botao Botao2" type="submit" Onclick="validaFormulario()">Cadastrar</button>
            </fieldset>
        </form>
    </section>
        
    </section>
    
    
</body>
</html>
