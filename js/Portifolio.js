window.onload = function() {
    /*CaminhoMenu();
    caminhoImagens();
    caminhoDasPaginas();
    chamasrc();
    chamaHref();
    chamasrc();*/
     srcPortifolio();
    caminhoImagens();
    iniciaSlide();
    mudaFoto();
    caminhoPaginas();
    defineMenu();
    clicardomouse();
}
 //insere o caminho das imagens 
 
/*function chamasrc(){
    srcPortifolio();
    caminhoImagens();
    iniciaSlide();
    mudaFoto();
   
}
function chamaHref(){
    caminhoDasPaginas();
    CaminhoMenu();
    clicardomouse();
}*/


//view Portifolio
function srcPortifolio(){               
            document.getElementById("img1").src = "../img/conteudo/portifolio/f1.jpg";
            document.getElementById("img2").src = "../img/conteudo/portifolio/f2.jpg";
            document.getElementById("img3").src = "../img/conteudo/portifolio/f3.jpg";
            document.getElementById("img4").src = "../img/conteudo/portifolio/f4.jpg";
            document.getElementById("img5").src = "../img/conteudo/portifolio/f5.jpg";
            document.getElementById("img6").src = "../img/conteudo/portifolio/f6.jpg";
            document.getElementById("img7").src = "../img/conteudo/portifolio/f7.jpg";
            document.getElementById("img8").src = "../img/conteudo/portifolio/f8.jpg";
            document.getElementById("img9").src = "../img/conteudo/portifolio/f9.jpg";
            document.getElementById("img10").src = "../img/conteudo/portifolio/f10.jpg";
            document.getElementById("img11").src = "../img/conteudo/portifolio/f11.jpg";
            document.getElementById("img12").src = "../img/conteudo/portifolio/f12.jpg";
            document.getElementById("img13").src = "../img/conteudo/portifolio/f13.jpg";
            document.getElementById("img14").src = "../img/conteudo/portifolio/f14.jpg";
            document.getElementById("img15").src = "../img/conteudo/portifolio/f15.jpg";    
}

//slide

function clicardomouse(){
    document.getElementById("img1").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img2").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img3").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img4").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img5").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img6").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img7").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img8").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img9").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img10").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img11").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img12").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img13").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img14").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
    document.getElementById("img15").onclick= function (){
        document.getElementById("tamanho").style.display = 'block';        
    }
}

function preload(){
    imgs = Array("f1.jpg","f2.jpg","f3.jpg","f4.jpg","f5.jpg","f6.jpg","f7.jpg","f8.jpg","f9.jpg","f10.jpg",
    "f11.jpg","f12.jpg","f13.jpg","f14.jpg","f15.jpg");
    imgQtd = imgs.length;
    
    for(i=0; i<imgQtd; i++){
        var preloadimg = new Image();
        preloadimg.src = imgs[i];
        preloadimg.width = 50;
    }
}
function iniciaSlide(){
    preload();
    max =15;
    min =1;
    fi = min;
    carregaFoto("../img/conteudo/portifolio/f1.jpg");    
}
function carregaFoto(foto){  
  document.getElementById("imagem").src = foto;   
}

function mudaFoto(){
    document.getElementById("prox").onclick = function (){
        proximaFoto();
    }
    document.getElementById("ant").onclick = function (){
        fotoAnterior();
    }
}

function proximaFoto(){    
        fi++;
        if (fi > max ){
            fi = min;
        }
        carregaFoto("../img/conteudo/portifolio/f"+fi+".jpg");
}

function fotoAnterior(){    
        fi--;
        if (fi < min ){
            fi = max;
        }
        carregaFoto("../img/conteudo/portifolio/f"+fi+".jpg");   
}
