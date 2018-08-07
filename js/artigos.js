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
    var 	subtitulo 		= document.getElementsByName("subtitulo");
    var		descricao 		= document.getElementsByName("descricao");
    var		foto		= document.getElementsByName("foto");
    var		alt	= document.getElementsByName("alt");
    var		link	= document.getElementsByName("link");
    var		foto_2	= document.getElementsByName("foto_2");
    var		alt_2	= document.getElementsByName("alt_2");
    var		link_2	= document.getElementsByName("link_2");
    var		texto_2	= document.getElementsByName("texto_2");
    var		texto	= "Necessário o preenchimento";
            
            if (titulo == ""){
                alert(texto + ' do titulo!');
                formuser.titulo.focus();
                return false;						
            }
            if (subtitulo == ""){
                alert(texto + ' do subtitulo!');
                formuser.subtitulo.focus();
                return false;						
            }
            if (foto == ""){
                alert(texto + ' do foto!');
                formuser.foto.focus();
                return false;						
            }
            if (alt == ""){
                alert(texto + ' da alt!');
                formuser.alt.focus();
                return false;						
            }
            if (link == ""){
                alert(texto + ' da link!');
                formuser.link.focus();
                return false;						
            }
            if (foto_2 == ""){
                alert(texto + ' da foto_2!');
                formuser.foto_2.focus();
                return false;						
            }
            if (alt_2 == ""){
                alert(texto + ' da alt_2!');
                formuser.alt_2.focus();
                return false;						
            }
            if (link_2 == ""){
                alert(texto + ' da link_2!');
                formuser.link_2.focus();
                return false;						
            }
            if (texto_2 == ""){
                alert(texto + ' da texto_2!');
                formuser.texto_2.focus();
                return false;						
            }
}



