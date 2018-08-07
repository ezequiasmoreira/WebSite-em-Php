//caminho do menu 
function defineMenu(){

    document.querySelector(".inicio").onclick = function (){
        this.href = "../index.php";
    }
    document.querySelector(".portifolio").onclick = function (){
        this.href = "portifolio.php";
    }
    document.querySelector(".acesso").onclick = function (){
        this.href = "login.php";            
    }
    document.querySelector(".sobre").onclick = function (){
        this.href = "sobre.php";            
    }
    document.querySelector(".contato").onclick = function (){
        this.href = "contato.php";            
    }
    document.querySelector(".artigos").onclick = function (){
        this.href = "artigos.php";            
    }
}

function caminhoImagens(){  
    //imagem logo mobile (pequena) 
    document.getElementById("topoMobile").src= "../img/topo/topoDesktop.png";   
    
}

//caminnho ao clicar nas imagens
function caminhoPaginas(){
    document.getElementById("voltarInicio").onclick = function (){
            this.href = "../index.php";
    }
     //caminho rodape
    document.getElementById("outlook").onclick = function (){
            this.href = "contato.php";
    }
    document.getElementById("facebook").onclick = function (){
            this.href = "https://www.facebook.com/";
    }
    document.getElementById("localizacao").onclick = function (){
            this.href = "localizacao.php";
    }
}