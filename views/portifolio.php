<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>WS Fotografia Portifolio</title>
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
    <link rel="stylesheet" type="text/css" href="../css/slide.css">
    <link rel="stylesheet" type="text/css" href="../css/portifolio.css">  
    <!--icone que fica ao lado do titulo da página-->
    <link  rel="icon"  href="../img/topo/topoMobile.png">
    <script type="text/javascript" src="../js/geral.js"></script>
    <script type="text/javascript" src="../js/Portifolio.js"></script>
    

</head>
<body>		
    <header id="topo">
        <?php include 'cabecalho.php'; ?>			
    </header>
    <div id='tamanho'>
        <div id="moldura">
            <img id='imagem' src='#'>           
            <button id="ant"  >Anterior</button>
            <button id="prox" >Próxima</button>
            <a id="fechar"  href ="portifolio.php"> Fechar</a>            
        </div>        
    </div> 
    <div id="title">
	<h2>Eternize seus melhores momentos </h2>        
    </div>
    <!--imagem que serão trazidas do banco-->
    <section id="indexSection">
        <table id="tabela">
            <tr><td class="categoria">Casamento</td></tr>
            <tr><td><img class="imgt" id="img1" src="#" alt=""></td></tr>
            <tr><td><img class="imgt" id="img2" src="#"></td></tr>
            <tr><td><img class="imgt" id="img3" src="#"></td></tr>
            <tr><td><img class="imgt" id="img4" src="#"></td></tr>
            <tr><td><img class="imgt" id="img5" src="#"></td></tr>
            <tr><td class="categoria">Bebes</td></tr>
            <tr><td><img class="imgt" id="img6" src="#"></td></tr>
            <tr><td><img class="imgt" id="img7" src="#"></td></tr>
            <tr><td><img class="imgt" id="img8" src="#"></td></tr>
            <tr><td><img class="imgt" id="img9" src="#"></td></tr>
            <tr><td><img class="imgt" id="img10" src="#"></td></tr>
            <tr><td class="categoria">15 anos</td></tr>
            <tr><td><img class="imgt" id="img11" src="#"></td></tr>
            <tr><td><img class="imgt" id="img12" src="#"></td></tr>
            <tr><td><img class="imgt" id="img13" src="#"></td></tr>
            <tr><td><img class="imgt" id="img14" src="#"></td></tr>
            <tr><td><img class="imgt" id="img15" src="#"></td></tr>
        </table>
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
