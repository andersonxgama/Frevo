$(document).ready(function()
{	
	function validaFormVendaFrevo()
	{
		if(checkVendaFields())
		{
			$("#form_venda_frevo").submit();
			clearVendaTextFields();
			alert("Mensagem enviada com sucesso");
			return true;
		}
		else
		{
			return false;
		}
	});

	function checkVendaFields()
	{
		var notEmpty = true;
		
		if((!$("#nome_venda").val()) || ($("#nome_venda").val() == "PREENCHIMENTO OBRIGATÓRIO"))
		{
			$("#nome_venda").val("PREENCHIMENTO OBRIGATÓRIO");
			$("#nome_venda").css("color", "red");
			notEmpty = false;
		}
		
		if((!$("#empresa_venda").val()) || ($("#nome_venda").val() == "PREENCHIMENTO OBRIGATÓRIO"))
		{
			$("#empresa_venda").val("PREENCHIMENTO OBRIGATÓRIO");
			$("#empresa_venda").css("color", "red");
			notEmpty = false;
		}
		
		if((!$("#telefone_venda").val()) || ($("#nome_venda").val() == "PREENCHIMENTO OBRIGATÓRIO"))
		{
			$("#telefone_venda").val("PREENCHIMENTO OBRIGATÓRIO");
			$("#telefone_venda").css("color", "red");	
			notEmpty = false;
		}
		
		if((!$("#mensagem_venda").val()) || ($("#nome_venda").val() == "PREENCHIMENTO OBRIGATÓRIO"))
		{
			$("#mensagem_venda").val("PREENCHIMENTO OBRIGATÓRIO");
			$("#mensagem_venda").css("color", "red");
			notEmpty = false;
		}
		
		return notEmpty;
	}
	
	$("#nome_venda").click(function()
	{
		if($("#nome_venda").val() == "PREENCHIMENTO OBRIGATÓRIO")
		{
			$("#nome_venda").val("");
			$("#nome_venda").css("color", "black");
		}
	});
	
	$("#empresa_venda").click(function()
	{
		if($("#empresa_venda").val() == "PREENCHIMENTO OBRIGATÓRIO")
		{
			$("#empresa_venda").val("");
			$("#empresa_venda").css("color", "black");
		}
	});
	
	$("#telefone_venda").click(function()
	{
		if($("#telefone_venda").val() == "PREENCHIMENTO OBRIGATÓRIO")
		{
			$("#telefone_venda").val("");
			$("#telefone_venda").css("color", "black");
		}
	});
	
	$("#email_venda").click(function()
	{
		if($("#email_venda").val() == "PREENCHIMENTO OBRIGATÓRIO")
		{
			$("#email_venda").val("");
			$("#email_venda").css("color", "black");
		}
	});
	
	$("#mensagem_venda").click(function()
	{
		if($("#mensagem_venda").val() == "PREENCHIMENTO OBRIGATÓRIO")
		{
			$("#mensagem_venda").val("");
			$("#mensagem_venda").css("color", "black");
		}
	});
	
	$("#telefone_venda").keyup(function()
	{
		if(this.value != this.value.replace(/[^- 0-9\.]/g, ""))
		{
		   this.value = this.value.replace(/[^- 0-9\.]/g, "");
		}
	});
	
	function clearVendaTextFields()
	{
		$("#nome_venda").val("");
		$("#empresa_venda").val("");
		$("#telefone_venda").val("");
		$("#email_venda").val("");
		$("#mensagem_venda").val("");
	}
});