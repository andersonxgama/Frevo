$(document).ready(function()
{	
	function validaFormTrabalheConosco()
	{
		if(checkTrabalheFields())
		{
			$("#form_trabalhe_conosco").submit();
			clearTrabalheTextFields();
			alert("Mensagem enviada com sucesso");
			return true;
		}
		else
		{
			return false;
		}
	});
	
	function checkTrabalheFields()
	{	
		var notEmpty = true;
	
		if((!$("#nome_trabalhe").val()) || ($("#nome_trabalhe").val() == "PREENCHIMENTO OBRIGATÓRIO"))
		{
			$("#nome_trabalhe").val("PREENCHIMENTO OBRIGATÓRIO");
			$("#nome_trabalhe").css("color", "red");	
			notEmpty = false;
		}
		
		if((!$("#telefone_trabalhe").val()) || ($("#telefone_trabalhe").val() == "PREENCHIMENTO OBRIGATÓRIO"))
		{
			$("#telefone_trabalhe").val("PREENCHIMENTO OBRIGATÓRIO");
			$("#telefone_trabalhe").css("color", "red");	
			notEmpty = false;
		}
		
		if(!$("#anexo_trabalhe").val())
		{
			alert("Favor anexar o arquivo do currículo");
			notEmpty = false;
		}
		
		return notEmpty;
	}
	
	$("#nome_trabalhe").click(function()
	{	
		if($("#nome_trabalhe").val() == "PREENCHIMENTO OBRIGATÓRIO")
		{
			$("#nome_trabalhe").val("");
			$("#nome_trabalhe").css("color", "black");
		}
	});
	
	$("#telefone_trabalhe").click(function()
	{
		if($("#telefone_trabalhe").val() == "PREENCHIMENTO OBRIGATÓRIO")
		{
			$("#telefone_trabalhe").val("");
			$("#telefone_trabalhe").css("color", "black");
		}
	});
	
	$("#anexo_trabalhe").on("change", function()
	{
		var formato = $(this).val().split(".").pop().toString();
		
		if((formato === "pdf") || (formato === "docx") || (formato === "doc"))
		{
			alert("FORMATO ACEITO");	
		}
		else
		{
			alert("Serão aceitos somente arquivos nos formatos .pdf, .docx, .doc");
        	$("#anexo_trabalhe").val("");
		}
	});
	
	$("#telefone_trabalhe").keyup(function()
	{
		if(this.value != this.value.replace(/[^- 0-9\.]/g, ""))
		{
		   this.value = this.value.replace(/[^- 0-9\.]/g, "");
		}
	});
	
	function clearTrabalheTextFields()
	{
		$("#nome_trabalhe").val("");
		$("#telefone_trabalhe").val("");
		$("#anexo_trabalhe").val("");
	}
});