<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Artigos</title>
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
    <link rel="stylesheet" type="text/css" href="../css/localizacao.css"> 
    <!--icone que fica ao lado do titulo da página-->
    <link  rel="icon"  href="../img/topo/topoMobile.png">
    <script type="text/javascript" src="../js/geral.js"></script>
    <script type="text/javascript" src="../js/localizacao.js"></script>
    

</head>
<body>
    <header id="topo">
       <?php include 'cabecalho.php'; ?>				
    </header>
    
    <div class='conteudo'>         
        <iframe id= "frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3777.172381370179!2d-40.
                987119485596025!3d-18.790469608735435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb6a23
                8bc34f0d1%3A0xd3ba99f76a80ece3!2sR.+L%2C+44%2C+Mantena+-+MG%2C+35290-000!5e0!3m2!1spt-BR!2sbr!4
                v1525583208805" frameborder="0" style="border:0" allowfullscreen>
                    
        </iframe>                	
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
