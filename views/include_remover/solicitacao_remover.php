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
        <form  action="painel.php?pag=9" method="POST">
            <fieldset>
                <label for="escolhaPostagem" class="labelSelect">Selecione uma solicitação para Remover</label>
                <select name="escolhaPostagem" id="idEscolhaPostagem" class="inputForm">
                <?php
                    $sql = "SELECT * FROM solicitacao";
                    $query = mysqli_query($con, $sql);
                    while ($obj = mysqli_fetch_array($query)) {
                ?>
                    <option value="<?php echo $obj['id_solicitacao']; ?>"><?php echo $obj['titulo']; ?></option>
                <?php
                    }
                ?>
                </select>            
            </fieldset> 
            <input type="submit" value="Selecionar" class="Botao selecionar ">
        </form>
         <?php
            $id_postagem = @$_POST['escolhaPostagem'];
            $sql = "SELECT * FROM solicitacao where id_solicitacao = '$id_postagem'";
            $query = mysqli_query($con, $sql);
            $item = mysqli_fetch_array($query, MYSQLI_ASSOC)
        ?>
        
    </div>
    <section class="menuAdm">
        <section id="contato">
            <form  id="formPostagem" action="../bancoPhp/remover/solicitacao_remover_db.php?cd=<?php echo $id_postagem ?>" method="POST">
                
                <h1 id="titulo">Dados da postagem </h1>                
                <input class="inputForm" name="id_s_usuario" type="hidden" value="<?php echo $usuario; ?>">
                <input class="inputForm" name="id_solicitacao" type="hidden" value="<?php echo $item['id_solicitacao']; ?>">
                <input class="inputForm" name="nome" type="text"  required value="<?php echo $item['nome']; ?>">            
                <input class="inputForm" name="email" type="text" value="<?php echo $item['email']; ?>" required>
                <input class="inputForm" name="telefone" type="text" value="<?php echo $item['telefone']; ?>" >          
                <fieldset id="btns">
                    <button class="Botao" type="reset" >Limpar</button>
                    <button class="Botao Botao2" type="submit" >Remover</button>
                </fieldset>
            </form>
        </section>
        
    </section>
    
    
</body>
</html>
