window.onload = function() {
    chamaHref();
    chamasrc();
}
 //insere o caminho das imagens 
 
function chamasrc(){    
    caminhoImagens();  
}
function chamaHref(){
    caminhoPaginas();
    defineMenu();   
}

function validaFormulario(){
    var 	titulo 		= document.getElementsByName("titulo");
    var		sobre 		= document.getElementsByName("sobre");
    var		missao		= document.getElementsByName("missao");
    var		visao	= document.getElementsByName("visao");
    var		valores	= document.getElementsByName("valores");
    var		texto	= "Necessário o preenchimento";
            
            if (titulo == ""){
                alert(texto + ' do titulo!');
                formuser.titulo.focus();
                return false;						
            }
            if (sobre == ""){
                alert(texto + ' do sobre!');
                formuser.sobre.focus();
                return false;						
            }
            if (missao == ""){
                alert(texto + ' do missao!');
                formuser.missao.focus();
                return false;						
            }
            if (visao == ""){
                alert(texto + ' da visão!');
                formuser.visao.focus();
                return false;						
            }
            if (valores == ""){
                alert(texto + ' da valores!');
                formuser.valores.focus();
                return false;						
            }
}


