$(document).ready(function(){		var config =[];	$("#jmy_web").hide(250);	function initConfig (){		$.getJSON("javascript/configuracion.json", function(result){			config=result;		});			}		function jmy_web_guardar(data){				var guardar ={	"valor":$("#"+data.data.id).html(),						"pagina":data.data.page,						"opciones":{"href":$("#jmy_web_href").val()},						"id":data.data.id,						};		if(guardar.href!=undefined){			$("#"+data.data.id).attr("href",guardar.href);		}		$.ajax({            url: './jmyWebAjG', type: 'post', dataType: 'json', success: function (res) {              console.log(res); },            error: function (res) {               console.log(res);			              }, data:guardar		});		console.log(guardar);		mensajeGuardado();	}	function botones(data=[]){		var left = data.pageX;		var top = data.pageY+30;		$("#jmy_web").html("");		$("#jmy_web").addClass("jmyweb-botones");		$("#jmy_web").css({ 'left': left+'px','top':top+'px' });		var href = ($("#"+data.data.id).attr("href")!=undefined) ? $("#"+data.data.id).attr("href") : false;		//console.log(href);		var html = '';		if(href!==false)			html = html + '<input type="text" value="'+href+'" id="jmy_web_href" placeholder="href:'+data.data.id+'"> ';					html = html + '<button class="jmy_web_guardar" data-id="'+data.data.id+'" data-page="'+data.data.page+'">[=] Guardar</button><button class="jmy_web_cancelar"  data-id="'+data.data.id+'" data-page="'+data.data.page+'">[x] Cerrar</button>';		$("#jmy_web").html(html);		$("#jmy_web").show(250);		$(".jmy_web_guardar").click(function(){			jmy_web_guardar(data);		});		$(".jmy_web_cancelar").click(function(e){			$("#jmy_web").hide(250);		});	}	function mensajeGuardado(){		$("#jmy_web").html("");		$("#jmy_web").html("<p>Dato guardado :) </p>").delay(2000).hide(500);	}	$(".jmy_web_div").click(function(e){		var data = {			"id":$(this).attr('id'),			"placeholder":$(this).data("placeholder"),			"page":$(this).data("page"),			};		//console.log(data);		//console.log(e.pageX+ ' , ' + e.pageY);		botones({				pageX:e.pageX,				pageY:e.pageY,				data:data			});	});		/*Final de funciones Globales para el tema */	//	//	//	/* Funciones Editor de Blog */	function msk_add_blog(){		var html = '<button class="jmy_blog_guardar" >Agregar post en el Blog</button>';		html = html + '<input type="text" id="nombre_nuevo_post" placeholder="Nombre del nuevo post"> ';		$("#jmy_web_agregar_blog").html("");		$("#jmy_web_agregar_blog").html(html);		$(".jmy_blog_guardar").click(function (){			var str = $("#nombre_nuevo_post").val();			var r = str.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-').toLowerCase();			r = location.origin+"/blog/"+r+"/guardar";			window.location.href = r;		});	}	msk_add_blog();});