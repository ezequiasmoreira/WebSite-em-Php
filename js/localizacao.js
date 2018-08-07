window.onload = function() {
    chamaHref();
    chamasrc();
}
 //insere o caminho das imagens 
 
function chamasrc(){    
    caminhoImagens();  
}
function chamaHref(){
    caminhoDasPaginas();
    defineMenu();   
}


//caminnho ao clicar nas imagens
function caminhoDasPaginas(){
    document.getElementById("voltarInicio").onclick = function (){
            document.getElementById("voltarInicio").href = "../index.php";
    }
     //caminho rodape
    document.getElementById("outlook").onclick = function (){
            document.getElementById("outlook").href = "contato.php";
    }
    document.getElementById("facebook").onclick = function (){
            document.getElementById("facebook").href = "https://www.facebook.com/";
    }
}

