<?php
    include '../conexao/conexao.php';
    include('../bancoPhp/validar.php');    
   $usuario = @$_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Area administrativa</title>
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
    <link rel="stylesheet" type="text/css" href="../css/painel.css"> 
    <!--icone que fica ao lado do titulo da página-->
    <link  rel="icon"  href="../img/topo/topoMobile.png">
    <script type="text/javascript" src="../js/geral.js"></script>
    <script type="text/javascript" src="../js/painel.js"></script>
    

</head>
<body>
    <header id="topo">
        <div id="divTopo">
           <a  href="#" id="voltarInicio">
               <img  style="display: none" class="logo" id="topoMobile" src="#" alt="logo ws fotografia" >
            </a>
            
            <button class="btn-menu"><i class="material-icons">&#xe5d2;</i></button>
            <!--busca o usuario-->
            <?php
                $sql = "SELECT * FROM usuario WHERE usuario.id_usuario = '$usuario' ";
                $query = mysqli_query($con, $sql);
                $item = mysqli_fetch_array($query, MYSQLI_ASSOC)
            ?>
            <p>Administrador: <?php echo $item['nome']; ?> </p>
            
        </div>
        
        <nav class="menu">
            <a class="btnclose"><i class="material-icons">close</i></a>
            <ul>
                <li><a class="inicio" href="#">Início</a></li>
                <li><a class="portifolio" href="#">Portifolio</a></li>
                <li><a class="artigos" href="#">Artigos</a></li>
                <li><a class="sobre" href="#">Sobre nós</a></li>					
                <li><a class="contato" href="#">Contato</a></li>
                <li><a class="acesso" href="#">Acesso restrito</a></li>
            </ul>
        </nav>			
    </header> 
    
     
    <section class="menuAdm">
        <?php
            //solicitação
            $sql = "SELECT * FROM solicitacao  WHERE atendido = 'N' ORDER BY id_solicitacao DESC";
            $query = mysqli_query($con, $sql);
            $obj = mysqli_fetch_array($query, MYSQLI_ASSOC);
            
            //depoimento
            $sql_depoimento = "SELECT * FROM depoimento WHERE postar = 'N' ORDER BY id_depoimento DESC";
            $query_depoimento = mysqli_query($con, $sql_depoimento);
            $obj_depoimento = mysqli_fetch_array($query_depoimento, MYSQLI_ASSOC);
            
            //contato
            $sql_contato = "SELECT * FROM contato WHERE ativo = 'N' ORDER BY id_depoimento DESC";
            $query_contato = mysqli_query($con, $sql_depoimento);
            $obj_contato = mysqli_fetch_array($query_depoimento, MYSQLI_ASSOC);
            
        ?>
        <div id="menulateral" >
            <ul class="cadastro">                
                <li> <a href="../bancoPhp/logout.php">Sair</a> <li>
                <li> <a href="painel.php">Início</a> <li>
                <li>Cadastros</li>
                <li><a class="" href="painel.php?pag=1">Cadastrar Postagens</a></li>
                <li><a class="" href="painel.php?pag=2">Cadastrar Portifolio</a></li>
                <li><a class="" href="painel.php?pag=3">Cadastrar Artigos</a></li>
                <li><a class="" href="painel.php?pag=4">Cadastrar Sobre nós</a></li>
                <li>Edição</li>
                <li><a class="" href="painel.php?pag=5">Editar Postagens</a></li>
                <li><a class="" href="painel.php?pag=6">Editar Portifolio</a></li>
                <li><a class="" href="painel.php?pag=7">Editar Artigos</a></li>
                <li><a class="" href="painel.php?pag=8">Editar Sobre nós</a></li>
                <li>Remover </li>
                <li><a class="" href="painel.php?pag=9">Remover Postagens</a></li>
                <li><a class="" href="painel.php?pag=10">Remover Portifolio</a></li>
                <li><a class="" href="painel.php?pag=11">Remover Artigos</a></li>
                <li><a class="" href="painel.php?pag=12">Remover Sobre nós</a></li>
                
                 
            </ul>
        </div>   
        
        <div class="conteudo">
            
           <?php 
                $status = @$_GET['status'];
                $pag    = @$_GET['pag'];
                
               //controla mensagem de erros ou de sucesso
               switch ($status) {
                       case 1:   echo "<p class='pstatus'>A postagem foi cadastrada com sucesso</p>"; break;
                       case -1:  echo "<p class='pstatus'>A postagem não foi cadastrada </p>"; break;
                       
                       case 3:   echo "<p class='pstatus'>O artigo foi cadastrado com sucesso</p>"; break;
                       case -3:  echo "<p class='pstatus'>O artigo não foi cadastrado </p>"; break;
                       
                       case 4:   echo "<p class='pstatus'>A página sobre nós foi cadastrada com sucesso</p>"; break;
                       case -4:  echo "<p class='pstatus'>A página sobre nós não foi cadastrada </p>"; break;
                       
                       case 5:   echo "<p class='pstatus'>A postagem foi editada com sucesso</p>"; break;
                       case -5:  echo "<p class='pstatus'>A postagem não foi editada </p>"; break;
                       
                       case 7:   echo "<p class='pstatus'>O artigo foi editado com sucesso</p>"; break;
                       case -7:  echo "<p class='pstatus'>O artigo não foi editado </p>"; break;
                       
                       case 8:   echo "<p class='pstatus'>A página sobre nós foi editada com sucesso</p>"; break;
                       case -8:  echo "<p class='pstatus'>A página sobre nós não foi editada </p>"; break;
                       
                       case 9:   echo "<p class='pstatus'>A postagem foi removida com sucesso</p>"; break;
                       case -9:  echo "<p class='pstatus'>A postagem não foi removida </p>"; break;  
                       
                       case 11:   echo "<p class='pstatus'>O artigo foi removido com sucesso</p>"; break;
                       case -11:  echo "<p class='pstatus'>O artigo não foi removido </p>"; break; 
                       
                       case 12:   echo "<p class='pstatus'>A página foi removida com sucesso</p>"; break;
                       case -12:  echo "<p class='pstatus'>A página não foi removida </p>"; break; 
                       
                       case 16:   echo "<p class='pstatus'>O depoimento foi alterado com sucesso</p>"; break;
                       case -16:  echo "<p class='pstatus'>O depoimento não foi alterado </p>"; break;                             
                      
                       //index do painel
                       case 20:   echo "<p class='pstatus'>A solicitação foi alterada com sucesso</p>"; break;
                       case -20:  echo "<p class='pstatus'>A solicitação não foi alterada </p>"; break; 
                       
                       case  21:   echo "<p class='pstatus'>A solicitação de orçamento foi Removida com sucesso</p>"; break;
                       case -21:  echo "<p class='pstatus'>A solicitação de orçamento não foi Removida </p>"; break;             
                       
                       case  22:   echo "<p class='pstatus'>O contato foi alterado com sucesso</p>"; break;
                       case -22:  echo "<p class='pstatus'>O contato não foi alterado </p>"; break;
                       
                       case  23:   echo "<p class='pstatus'>O contato foi removido com sucesso</p>"; break;
                       case -23:  echo "<p class='pstatus'>O contato não foi removido </p>"; break;             
                }
                
               switch ($pag) {
                       case 1:include 'include_cadastro/postagem.php'; break;
                       case 3:include 'include_cadastro/artigo.php'; break;
                       case 4:include 'include_cadastro/sobre.php'; break;
                       case 5: include 'include_editar/postagem_editar.php'; break;
                       case 7: include 'include_editar/artigo_editar.php'; break;
                       case 8: include 'include_editar/sobre_editar.php'; break;
                       case 9: include 'include_remover/postagem_Remover.php'; break;
                       case 11: include 'include_remover/artigo_remover.php'; break;
                       case 12: include 'include_remover/sobre_remover.php'; break;
                       case 13: include 'include_cadastro/solicitacao.php'; break;
                       case 14: include 'include_editar/solicitacao_editar.php'; break;
                       case 15: include 'include_remover/solicitacao_remover.php'; break;
                       //depoimento
                       case 16: include 'include_editar/depoimento_editar.php'; break;
                       case 17: include 'depoimento_mostrar.php'; break;
                       case 18: include 'include_remover/depoimento_remover.php'; break;
                       //solicitação
                       case 20: include 'include_editar/solicitacao_editar.php'; break;
                       case 21: include 'solicitacao_mostrar.php'; break;
                       //contato
                       case 22: include 'include_editar/contato_editar.php'; break;
                       case 23: include 'contato_mostrar.php'; break;
                       case 24: include 'include_remover/contato_remover.php'; break;
                       
                      
                       

                default: if($pag){ header('Location: painel.php');break;}
                }
               
            ?>
            
            <!-- programação do index do painel -->
            <main style="<?php echo (@$pag)?'display:none':'block'; ?>">
                <!-- Solicitação -->
                <?php
                    if($obj){                     
                ?>
                <p class="notificacao">Você possui solicitação de serviços não analizada</p>
                <form action="painel.php?pag=20" method="post" class="formNotificacao">
                    <select name="selectNotificacao" class="selectNotificacao">
                    <?php     


                        $sql = "SELECT * FROM solicitacao  WHERE atendido = 'N' ORDER BY id_solicitacao DESC";
                        $query = mysqli_query($con, $sql);
                        while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){

                    ?>
                        <option value="<?php echo $item['id_solicitacao']; ?>"><?php  echo $item['nome']; ?></option>
                    <?php
                         }
                    ?>
                    </select>                 
                    <input class="btnNotificacao" type="submit" value="Verificar">
                </form>
                
                <?php
                    }else{
                                 echo '<p class="notificacao">Você não possui nenhum orçamento para analizar</p>';
                         }
                ?>
                <a class="todosOrcamento" href="painel.php?pag=21">Mostrar Todos os orçamentos</a>
                
                <!--Contato-->
                 <?php
                    if($obj){                     
                ?>
                <p class="notificacao">Você possui solicitação de contatos ativa</p>
                <form action="painel.php?pag=22" method="post" class="formNotificacao">
                    <select name="selectNotificacao" class="selectNotificacao">
                    <?php 
                        $sql = "SELECT * FROM contato WHERE ativo = 'N' ORDER BY id_contato DESC";
                        $query = mysqli_query($con, $sql);
                        while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){

                    ?>
                        <option value="<?php echo $item['id_contato']; ?>"><?php  echo $item['nome']; ?></option>
                    <?php
                         }
                    ?>
                    </select>                 
                    <input class="btnNotificacao" type="submit" value="Verificar">
                </form>
                
                <?php
                    }else{
                        echo '<p class="notificacao">Você não possui nenhum depoimento para analizar</p>';
                    }
                ?>
                 <a class="todosOrcamento" href="painel.php?pag=23">Mostrar Todos os contatos</a>
                 
                 <!--Depoimento-->
                 <?php
                    if($obj){                     
                ?>
                <p class="notificacao">Você possui solicitação de depoimentos não analizada</p>
                <form action="painel.php?pag=16" method="post" class="formNotificacao">
                    <select name="selectNotificacao" class="selectNotificacao">
                    <?php 
                        $sql = "SELECT * FROM depoimento WHERE postar = 'N' ORDER BY id_depoimento DESC";
                        $query = mysqli_query($con, $sql);
                        while($item = mysqli_fetch_array($query, MYSQLI_ASSOC)){

                    ?>
                        <option value="<?php echo $item['id_depoimento']; ?>"><?php  echo $item['nome']; ?></option>
                    <?php
                         }
                    ?>
                    </select>                 
                    <input class="btnNotificacao" type="submit" value="Verificar">
                </form>
                
                <?php
                    }else{
                                 echo '<p class="notificacao">Você não possui nenhum depoimento para analizar</p>';
                         }
                ?>
                 <a class="todosOrcamento" href="painel.php?pag=17">Mostrar Todos os depoimentos</a>
            </main>
        </div>
        
    </section>
    
    <footer class="rodape">
       <div class="social-icons">
            <a id="facebook" href="#" target="_blank"><i style="font-size:24px" class="fa">&#xf082;</i></a>
            <a id="localizacao" href="#"><i class="material-icons">&#xe568;</i></a>
            <a id="outlook" href="#"><i style="font-size:24px" class="fa">&#xf0e0;</i></a>
            <p class="atendimento">Atendimento em horário comercial</p>
            <p class="copyright">
                    copyright © Ws Fotografia Ltda 2018. Todos os direitos reservados
            </p>
        </div>
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