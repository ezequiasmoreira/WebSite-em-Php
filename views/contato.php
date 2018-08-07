<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Contato</title>
    <meta charset= "utf-8" />
    <!--a tela do site vai ser igual a tela do dispositivo e o zoom vai iniciar na escala 1-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />	

    <meta name="description" content="site destinado a promover a fotografia digital" />
    <meta name="keywords" content="Fotos, albuns, books" />
    <meta name="robots" content="index follow" />
    <meta name="author" content="Fotografia" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/padrao.css"> 
    <link rel="stylesheet" type="text/css" href="../css/contato.css"> 
    <!--icone que fica ao lado do titulo da página-->
    <link  rel="icon"  href="../img/topo/topoMobile.png">
    <script type="text/javascript" src="../js/geral.js"></script>
    <script type="text/javascript" src="../js/contato.js"></script>
    

</head>
<body>
    <header id="topo">
       <?php include 'cabecalho.php'; 
       
        @$sucesso = $_GET['sucesso'];
        if($sucesso){
            echo "<p style='width:100%; float:left; text-align:center;'>
            Obrigado por fazer contato em breve daremos retorno.</p>";
        }
    ?>			
    </header>
    
    <section id="contato">
        <form  id="formContato" action="../bancoPhp/cadastro/cadastrar_contato_db.php" method="post">
           
            <input class="inputForm" name="nome" type="text" placeholder="Nome:" required>
            <input class="inputForm" name="email" type="email" placeholder="Email:" required>
            <input class="inputForm" name="empresa" type="text" placeholder="Empresa:" required>
            <input class="inputForm" name="telefone" type="text" placeholder="Telefone:" maxlength="14" required>
            <input class="inputForm" name="celular" type="text" placeholder="Celular:" maxlength="14" required>
            <fieldset id="formaDecontato">
                <legend id="legendContato">Forma de Contato</legend>            
                <select name="FormContato" class="seleciona">
                    <option value="1">Email</option>
                    <option value="2">Telefone</option>
                </select>
            </fieldset>
            <fieldset id="sexo">
                <legend id="legendSexo">Sexo</legend> 
                <label for="masculino">Masculino</label>
                <input type="radio" name="sexo" value="Masculino" checked="checked" id="masculino">
                <label for="feminino">Feminino</label>
                <input type="radio" name="sexo" value="Feminino" id="Feminino">              
            </fieldset>
            <input class="inputForm" name="horarioContato" type="text" placeholder="Horário para contato:" required>
            <input class="inputForm" name="assunto" type="text" placeholder="Assunto:" required>  
            <fieldset id="btns">
                <button class="Botao" type="reset" >Linpar</button>
                <button class="Botao Botao2" type="submit" >Enviar</button>
            </fieldset>
        </form>
    </section>
   
    <footer class="rodape">
        <?php include 'rodape.php'; ?>	
    </footer>	
    <script type="text/javascript" src="../js/jquery/jquery-3.3.1.js"></script>
    <script>		
        $(".btn-menu").click(function(){
          $(".menu").show();
        });
		 $(".btnclose").click(function(){
          $(".menu").hide();
        });
    </script>
    
</body>
</html>
