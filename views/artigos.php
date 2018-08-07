<!DOCTYPE html>
<?php
    include '../conexao/conexao.php';   
?>
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
    <link rel="stylesheet" type="text/css" href="../css/artigos.css"> 
    <!--icone que fica ao lado do titulo da página-->
    <link  rel="icon"  href="../img/topo/topoMobile.png">
    <script type="text/javascript" src="../js/geral.js"></script>
    <script type="text/javascript" src="../js/artigos.js"></script>
    

</head>
<body>
    <header id="topo">
         <?php include 'cabecalho.php'; ?>				
    </header>
    
    <!--aqui serão inseridos os arquivos via php-->
    <!--imagem que serão trazidas do banco-->
    <section id="artigosSection" >
        <div class="artigos">
        <?php        
            $sql = "SELECT * FROM artigos ORDER BY id_artigos DESC";
            $query = mysqli_query($con, $sql);
            while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        ?>
            <h1 class="titulo"><?php echo $item['titulo']; ?></h1>
            <h2 class="subtitulo"><?php echo $item['subtitulo']; ?></h2>
            <p class="texto">
                <?php echo $item['texto']; ?>
            </p>
            <!--no src da foto deve ser informado apenas o caminho da foto-->
            <a href="<?php echo $item['href_foto']; ?>">
                <img class="artigosImg" src="<?php echo $item['foto']; ?>" alt="<?php echo $item['alt']; ?>">
            </a>
            <!--<p class="legenda">foto do caracol</p>-->
            <p class="texto texto2">
                <?php echo $item['texto_2']; ?>
            </p>
            <a href="<?php echo $item['href_foto_2']; ?>">
                <img class="artigosImg artigosImg2" src="<?php echo $item['foto'];/*../img/conteudo/index/foto02.jpg*/ ?>"  
                     alt="<?php echo $item['alt_foto']; ?>">
            </a>
            <!--<p class="legenda">foto do gato</p>--> 
        <?php
            }
        ?>
         </div>
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
<?php
    mysqli_close($con);
?>

