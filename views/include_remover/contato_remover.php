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
            $sql = "SELECT * FROM contato where id_contato = '$id_postagem'";
            $query = mysqli_query($con, $sql);
            $item = mysqli_fetch_array($query, MYSQLI_ASSOC)
        ?>        
    </div>
    <section class="menuAdm">
        <section id="contato">
            <form  id="formPostagem" action="../bancoPhp/remover/contato_remover_db.php?cd=<?php echo $id_postagem ?>" method="POST">
                
                <h1 id="titulo">Deseja realmente remover este contato?</h1>                
                <input class="inputForm" name="id_contato" type="hidden" value="<?php echo $item['id_contato']; ?>">
                <input class="inputForm" name="id_usuario" type="hidden" value="<?php echo $usuario; ?>">
                <input class="inputForm" name="nome" type="text"  required value="<?php echo $item['nome']; ?>">            
                <input class="inputForm" name="email" type="text" value="<?php echo $item['email']; ?>" >
                <input class="inputForm" name="empresa" type="text" value="<?php echo $item['empresa']; ?>" >
                <input class="inputForm" name="telefone" type="text" value="<?php echo $item['telefone']; ?>" >
                <input class="inputForm" name="celular" type="text" value="<?php echo $item['celular']; ?>" >
                <input class="inputForm" name="FormContato" type="text" value="<?php echo $item['FormContato']; ?>" >
                <input class="inputForm" name="sexo" type="text" value="<?php echo $item['sexo']; ?>" >
                <input class="inputForm" name="horarioContato" type="text" value="<?php echo $item['horarioContato']; ?>" >
                <input class="inputForm" name="assunto" type="text" value="<?php echo $item['assunto']; ?>" >
                <label class='labelAtendido' for="ate">Marcar como inativo</label>
                <input id="ate" class="inputForm" name="ativo" type="radio" value="S" 
                       <?php echo ($item['ativo'] == 'S')?'checked':''; ?>>
                <label class='labelAtendido' for="ate">Marcar como ativo</label>
                <input id="ate" class="inputForm" name="ativo" type="radio" value="N" 
                       <?php echo ($item['ativo'] == 'N')?'checked':''; ?>> 
                <fieldset id="btns">
                    <button class="Botao" type="reset" >Limpar</button>
                    <button class="Botao Botao2" type="submit" >Remover</button>
                </fieldset>
            </form>
        </section>
        
    </section>
    
    
</body>
</html>
