<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login Administrativo</title>
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
    <link rel="stylesheet" type="text/css" href="../css/login.css"> 
    <!--icone que fica ao lado do titulo da página-->
    <link  rel="icon"  href="../img/topo/topoMobile.png">
    <script type="text/javascript" src="../js/geral.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
    

</head>
<body>
    <header id="topo">
        <?php include 'cabecalho.php'; ?>			
    </header>
    
    
    <div class="login">
        <?php
        if(@$_GET['erro'] == 1) {
        ?>         
            <p >Usuário ou senha inválida!</p> 
        <?php    
         }
        ?>
        <p> Login</p>
        <form action="../bancoPhp/login_db.php" method="POST">
            <input id="email" type="email" name="login" placeholder="Seu email" />
            <input id="senha" type="password" name="senha" placeholder="senha" /><br/>
            <input id="btns" type="submit" value="Logar"/>

        </form>
    </div>
    
   
    
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
