<?php
    include '../conexao/conexao.php';   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Sobre nós</title>
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
    <link rel="stylesheet" type="text/css" href="../css/sobre.css"> 
    <!--icone que fica ao lado do titulo da página-->
    <link  rel="icon"  href="../img/topo/topoMobile.png">
    <script type="text/javascript" src="../js/geral.js"></script>
    <script type="text/javascript" src="../js/sobre.js"></script>
    

</head>
<body>
    <header id="topo">
       <?php include 'cabecalho.php'; ?>			
    </header>
    
    <!--aqui serão inseridos os arquivos via php-->
    <div class="sobre"> 
        <?php        
            $sql = "SELECT * FROM sobre ORDER BY id_sobre DESC";
            $query = mysqli_query($con, $sql);
            while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        ?>
        <h1 class="titulo"><?php echo $item['titulo']; ?></h1>
        <p class="texto">
            <?php echo $item['sobre']; ?>
        </p>       
       <!-- <a href=""><img class="artigosImg artigosImg2" src="../img/conteudo/index/foto02.jpg"  alt=""></a>-->
       <h2 class="titulo">Missão</h2>
        <p class="texto">
            <?php echo $item['missao']; ?>
        </p>
        <h2 class="titulo">Visão</h2>
        <p class="texto">
            <?php echo $item['visao']; ?>
        </p>
       <h2 class="titulo">Valores</h2>
        <p class="texto">
            <?php echo $item['valores']; ?>
        </p>
         <?php
            }
        ?>
        
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
<?php
    mysqli_close($con);
?>
