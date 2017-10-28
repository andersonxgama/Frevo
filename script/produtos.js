$(document).ready(function()
{	
	var refrigerantes;
	var cerveja;
	var refrigerantesIconsContainer = $("#refrigerantes_icons_container").detach();
	var cola = $("#cola_container").detach();
	var guarana = $("#guarana_container").detach();
	var laranja = $("#laranja_container").detach();
	var limao = $("#limao_container").detach();
	var uva = $("#uva_container").detach();
	var bossaNova = $("#bossa_nova_container").detach();

	$("#text_return").text("");
	
	function refrigerantesClick()
	{
		$("#produtos_title").text("Refrigerantes");
		refrigerantes = $(this).detach();
		cerveja = $("#cerveja_container").detach();
		$("#produtos_container").append(refrigerantesIconsContainer);
		$("#text_return").html("&#8592; Voltar");
		$(this).off("click");
	}

	function cervejaClick()
	{
		refrigerantes = $("#refrigerantes_container").detach();
		$("#produtos_container").css("flex-direction","column");
		$("#produtos_icon_cerveja").attr("src","src/icon_cerveja_produtos_site_sml.png");
		$("#produtos_container").append(bossaNova);
		$("#produtos_title").text("Cerveja");
		$("#produtos_title_cerveja").text("");
		$("#text_return").html("&#8592; Voltar");
		$(this).off("click");
	}

	function colaClick()
	{
		refrigerantesIconsContainer = $("#refrigerantes_icons_container").detach();
		$("#produtos_container").css("flex-direction","column");
		$("#produtos_container").prepend(refrigerantes);
		$("#produtos_container").append(cola);
		$("#produtos_icon_refrigerantes").attr("src","src/icon_refrigerante_cola.png");
		$("#produtos_title_refrigerantes").text("");
	}
	
	function guaranaClick()
	{
		refrigerantesIconsContainer = $("#refrigerantes_icons_container").detach();
		$("#produtos_container").css("flex-direction","column");
		$("#produtos_container").prepend(refrigerantes);
		$("#produtos_container").append(guarana);
		$("#produtos_icon_refrigerantes").attr("src","src/icon_refrigerante_guarana.png");
		$("#produtos_title_refrigerantes").text("");
	}

	function laranjaClick()
	{
		refrigerantesIconsContainer = $("#refrigerantes_icons_container").detach();
		$("#produtos_container").css("flex-direction","column");
		$("#produtos_container").prepend(refrigerantes);
		$("#produtos_container").append(laranja);
		$("#produtos_icon_refrigerantes").attr("src","src/icon_refrigerante_laranja.png");
		$("#produtos_title_refrigerantes").text("");
	}

	function limaoClick()
	{
		refrigerantesIconsContainer = $("#refrigerantes_icons_container").detach();
		$("#produtos_container").css("flex-direction","column");
		$("#produtos_container").prepend(refrigerantes);
		$("#produtos_container").append(limao);
		$("#produtos_icon_refrigerantes").attr("src","src/icon_refrigerante_limao.png");
		$("#produtos_title_refrigerantes").text("");
	}

	function uvaClick()
	{
		refrigerantesIconsContainer = $("#refrigerantes_icons_container").detach();
		$("#produtos_container").css("flex-direction","column");
		$("#produtos_container").prepend(refrigerantes);
		$("#produtos_container").append(uva);
		$("#produtos_icon_refrigerantes").attr("src","src/icon_refrigerante_uva.png");
		$("#produtos_title_refrigerantes").text("");
	}

	function verificaLarguraNavegador()
	{
		if($(window).width() > 600)
		{
			$("#produtos_container").css("flex-direction","row");
		}
	}
	
	$("#refrigerantes_container").on("click", refrigerantesClick);
	$("#cerveja_container").on("click", cervejaClick);
	$("#produtos_container").on("click", "#cola_icon_container", colaClick);
	$("#produtos_container").on("click", "#guarana_icon_container", guaranaClick);
	$("#produtos_container").on("click", "#laranja_icon_container", laranjaClick);
	$("#produtos_container").on("click", "#limao_icon_container", limaoClick);
	$("#produtos_container").on("click", "#uva_icon_container", uvaClick);

	$("#return").click(function()
	{
		if($("#produtos_container").children("#refrigerantes_icons_container").length > 0)
		{
			$("#produtos_title").text("Produtos");
			$("#produtos_container").prepend(refrigerantes);
			$("#produtos_container").css("flex-direction","column");
			verificaLarguraNavegador();
			$("#produtos_icon_refrigerantes").attr("src","src/icon_refrigerantes_produtos_site.png");
			$("#produtos_title_refrigerantes").text("Refrigerantes");
			refrigerantesIconsContainer = $("#refrigerantes_icons_container").detach();
			$("#produtos_container").append(cerveja);
			$("#refrigerantes_container").on("click", refrigerantesClick);
			$("#text_return").html("");
		}
		else if($("#produtos_container").children("#bossa_nova_container").length > 0)
		{	
        	verificaLarguraNavegador();
					
			$("#produtos_icon_cerveja").attr("src","src/icon_cerveja_produtos_site.png");
			bossaNova = $("#bossa_nova_container").detach();
			$("#cerveja_container").on("click", cervejaClick);
			$("#produtos_container").prepend(refrigerantes);
			$("#produtos_title").text("Produtos");
			$("#produtos_title_cerveja").text("Cerveja");
			$("#text_return").html("");
		}
		else if($("#produtos_container").children(".refrigerante_container").length > 0)
		{
			refrigerantes = $("#refrigerantes_container").detach();
			
			switch($("#produtos_container").children(".refrigerante_container").attr("id"))
			{
				case "cola_container":
					cola = $("#cola_container").detach();
					$("#produtos_container").append(refrigerantesIconsContainer);
					break;
				case "guarana_container":
					guarana = $("#guarana_container").detach();
					$("#produtos_container").append(refrigerantesIconsContainer);
					break;
				case "laranja_container":
					laranja = $("#laranja_container").detach();
					$("#produtos_container").append(refrigerantesIconsContainer);
					break;
				case "limao_container":
					limao = $("#limao_container").detach();
					$("#produtos_container").append(refrigerantesIconsContainer);
					break;
				case "uva_container":
					uva = $("#uva_container").detach();
					$("#produtos_container").append(refrigerantesIconsContainer);
					break;
			}
			
			$("#produtos_icon_refrigerantes").attr("src","src/icon_refrigerantes_produtos_site.png");
			$("#produtos_title").text("Refrigerantes");
			$("#produtos_title_refrigerantes").text("Refrigerantes");
		}
	});
});