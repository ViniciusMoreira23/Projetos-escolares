// $(document).ready(function(){
// var $div = "<div id='content'>I am a divvvv</div>"
// $("canvas").append($div);

// });
$(document).ready(function(){
    $("input").click(function(){
         // $('#nome').attr('style', 'display: inline;');
        
         
         
    });
});

 
$(document).ready(function(){
    $(".button").click(function(){
         $('#dir').attr('style', 'animation-name:direita;');
         $('#esq').attr('style', 'animation-name: esquerda;');
         $('#chave').attr('style', 'animation-name: desaparecer;');
         $('#cont2').attr('style', 'animation-name: sumir;');
         $('.cont').attr('style', 'animation-name:direita2; box-shadow: 0px 0px white !important;');
		 $('#txt').attr('style', 'animation-name: zzinho;');
        
         
         
    });
});


function gravar(){
				var titulo = document.getElementById("campo").value;
				var div = document.getElementById("divResultado");
				div.innerText = titulo;
			}

// $('#esq').css({
 // animation-name: 'xanaina'
 // });
 /*$(document).ready(function(){
    $("input").click(function(){
         $('#nome').attr('style', 'display: inline;');
        
         
         
    });
});*/