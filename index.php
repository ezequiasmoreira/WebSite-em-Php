<?php
    include 'conexao/conexao.php';   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Bem vindos!</title>
    <meta charset= "UTF-8" />
    <!--a tela do site vai ser igual a tela do dispositivo e o zoom vai iniciar na escala 1-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />	

    <meta name="description" content="site destinado a promover a fotografia digital" />
    <meta name="keywords" content="Fotos, albuns, books" />
    <meta name="robots" content="index follow" />
    <meta name="author" content="Fotografia" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/padrao.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script type="text/javascript" src="js/geral.js"></script>
    <script type="text/javascript" src="js/Index.js"></script>
    <link  rel="icon"  href="img/topo/topoMobile.png">

</head>
<body>		
    <header id="topo">
       <?php include 'views/cabecalho.php'; ?>		
    </header>
    <div id="title">
	<h2>Nosso negócio é eternizar seus momentos </h2>
        <img id="imgPostagem" src="img/conteudo/index/porSol.jpg" alt="Por do sol">
    </div>
    <!--imagem que serão trazidas do banco-->
    <section id="indexSection" >
        <?php
            include 'views/include_cadastro/solicitacao.php';
            $sql = "SELECT * FROM postagem ORDER BY id_postagem DESC";
            $query = mysqli_query($con, $sql);
            while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        ?>
            <h1 class="postagem titlePostagem"><?php echo $item['titulo'];  ?></h1>
            <a class="postagem" href="<?php echo $item['link']; ?>">
                <img <?php echo $item['foto']; ?> alt="<?php echo $item['alt']; ?>">
            </a>
            <p class="postagem paragrafoPostagem"><?php echo $item['descricao']; ?></p>      
        <?php
            }
        ?>
    </section>    
    <!--lista os depoimentos-->
    <section class="listaDepoimento">        
        <p>depoimentos</p>
        <?php
            $sql = "SELECT * FROM depoimento WHERE postar = 's' ORDER BY id_depoimento DESC";
            $query = mysqli_query($con, $sql);
            while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                ?>  
            <div class="divDepoimento">
                <p class="titleDepoimento"><?php echo $item['nome'];  ?></p>
                <p class="dataDepoimento" ><?php echo $item['data_depoimento']; ?>"</p>
                <p class="paragrafoDepoimento"><?php echo $item['descricao']; ?></p> 
            </div>

        <?php
            }
        ?>
    </section>
    <!--formulario de depoimento-->
    <?php
        @$sucesso = $_GET['sucesso'];
        if($sucesso){
            echo "<p style='width:100%; float:left; text-align:center;'>Obrigado pelo depoimento, ele será revisado pelo administrador e postado em breve</p>";
        }
    ?>
    <div class="depoimento">
        <form action="bancoPhp/cadastro/cadastrar_depoimento_db.php" method="POST">
            <fieldset>
                <legend class="legend">Deixe seu depoimento</legend>
                <input class="inputForm" type="text" placeholder="Seu nome" name="nome" required>
                <input class="inputForm" type="Date" placeholder="Data" name="data" required>
                <input class="inputForm" type="email" placeholder="Seu email" name="email" required>
                <textarea class="inputForm" rows="10" cols="50" placeholder="Descrição" name="descricao" required></textarea>
                <input class="btnformD btnformD1" type="reset" value="limpar">
                <input class="btnformD btnformD2" type="submit" value="enviar">
            </fieldset>
        </form>
    </div>		
    <footer class="rodape">
        <?php include 'views/rodape.php'; ?>
    </footer>	
    <script type="text/javascript" src="js/jquery/jquery-3.3.1.js"></script>
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
