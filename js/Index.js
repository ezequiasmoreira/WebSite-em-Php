window.onload = function() {
    caminhoImagensIndex();
    caminhoDasPaginas();
    CaminhoMenu();
}
 //insere o caminho das imagens 
function caminhoImagensIndex(){  
    //imagem logo mobile (pequena) 
    document.getElementById("topoMobile").src= "img/topo/topoDesktop.png";   
    
}

//caminnho ao clicar nas imagens
function caminhoDasPaginas(){
    document.getElementById("voltarInicio").onclick = function (){
            document.getElementById("voltarInicio").href = "index.php";
    }
     //caminho rodape
    document.getElementById("outlook").onclick = function (){
            document.getElementById("outlook").href = "views/contato.php";
    }
    document.getElementById("localizacao").onclick = function (){
            document.getElementById("localizacao").href = "views/localizacao.php";
    }
    document.getElementById("facebook").onclick = function (){
            document.getElementById("facebook").href = "https://www.facebook.com/";
    }
}

//caminho do menu 
function CaminhoMenu(){
    document.getElementsByClassName("inicio")[0].onclick = function (){
            document.getElementsByClassName("inicio")[0].href = "index.php";
    }
    document.getElementsByClassName("portifolio")[0].onclick = function (){
            document.getElementsByClassName("portifolio")[0].href = "views/portifolio.php";
    }
    document.getElementsByClassName("acesso")[0].onclick = function (){
            document.getElementsByClassName("acesso")[0].href = "views/login.php";            
    }
    document.getElementsByClassName("sobre")[0].onclick = function (){
            document.getElementsByClassName("sobre")[0].href = "views/sobre.php";            
    }
    document.getElementsByClassName("contato")[0].onclick = function (){
            document.getElementsByClassName("contato")[0].href = "views/contato.php";            
    }
    document.getElementsByClassName("artigos")[0].onclick = function (){
            document.getElementsByClassName("artigos")[0].href = "views/artigos.php";            
    }
    
    
}
