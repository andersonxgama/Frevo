<? 
	include "venda_frevo.php";
	include "trabalhe_conosco.php";

	if(strlen($_POST['txt_nome_venda']))
	{	
		$mensagemVenda = "Nome: " .$_POST["txt_nome_venda"] ."<br/>".
		"Empresa: " .$_POST["txt_empresa_venda"] ."<br/>".
		"Telefone: " .$_POST["txt_telefone_venda"] ."<br/>".
		"Mensagem: " .$_POST["txt_mensagem_venda"];
		
		if(sendMailVenda($_POST['txt_email_venda'],'vendas@frevo.com.br', $mensagemVenda, 'Venda Frevo'))
		{
			echo '<script language="javascript">';
			echo 'alert("Mensagem enviada com sucesso")';
			echo '</script>';
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Erro ao enviar a mensagem, tente novamente.")';
			echo '</script>';
		}
	}
	
	if(strlen($_POST['txt_nome_trabalhe']))
	{	
		$mensagemTrabalhe = "Nome: " .$_POST["txt_nome_trabalhe"] ."<br/>".
		"Telefone: " .$_POST["txt_telefone_trabalhe"] ."<br/>".
		"E-mail: " .$_POST["txt_email_trabalhe"] ."<br/>".
		"Mensagem: " .$_POST["txt_mensagem_trabalhe"];
		
		if(sendMailTrabalhe($_POST['txt_email_trabalhe'],'trabalheconosco@frevo.com.br', $mensagemTrabalhe, $_FILES["txt_anexo_trabalhe"],'Trabalhe Conosco'))
		{
			echo '<script language="javascript">';
			echo 'alert("Mensagem enviada. Boa sorte!")';
			echo '</script>';
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("Erro ao enviar a mensagem, tente novamente.")';
			echo '</script>';
		}
	}
?>

<html>
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Frevo</title>
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/top.css">
        <link rel="stylesheet" href="style/menu.css">
        <link rel="stylesheet" href="style/slide.css">
        <link rel="stylesheet" href="style/main.css">
        <link rel="stylesheet" href="style/a_frevo.css">
        <link rel="stylesheet" href="style/produtos.css">
        <link rel="stylesheet" href="style/refrigerantes.css">
        <link rel="stylesheet" href="style/cerveja.css">
        <link rel="stylesheet" href="style/forms.css">
        <link rel="stylesheet" href="style/bottom.css">
        <link rel="stylesheet" href="style/rj.css">
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed" rel="stylesheet">
        <script src="script/jquery-3.2.1.js"></script>
        <script src="script/produtos.js"></script>
        <script src="script/form_venda_frevo.js"></script>
        <script src="script/form_trabalhe_conosco.js"></script>
		<script src="script/slide.js"></script>
    </head>
    
    <body>    
    	<div id="top" name="top">
        	<div id="logo_container">
            	<a href=""><img id="logo_img" src="src/logo_frevo.png" alt="logo"></a>
            </div>
            
            <div id="top_icons_container">
            	<div class="top_icons_container" id="facebook_icon_container">
                	<a href="https://pt-br.facebook.com/Frevo-Brasil-175900322466921/">
                    	<img class="top_icon_image" id="img_facebook" src="src/icone_facebook.png" alt="facebook_icon">
                    </a>
                </div>
            	<div class="top_icons_container" id="instagram_icon_container">
                	<a href="https://www.linkedin.com/">
                    	<img class="top_icon_image" id="img_instagram" src="src/icone_linkedin.png" alt="instagram_icon">
                    </a>
                </div>
            </div>
        </div>

        <nav>
        	<ul>
            	<a href="#a_frevo">
                    <li class="menu_nav">
                        <div class="menu_icons_container">
                            <img class="image_menu" src="src/a_frevo_menu.png" alt="a_frevo">
                        </div>
                        <div class="menu_title_container">
                            <span class="text_menu">A Frevo</span>
                        </div>
                    </li>
				</a>
            	<a href="#produtos">
                    <li class="menu_nav">
                        <div class="menu_icons_container">
                            <img class="image_menu" src="src/produtos_menu.png" alt="produtos">
                        </div>
                        <div class="menu_title_container">
                            <span class="text_menu">Produtos</span>
                        </div>
                    </li>
				</a>
            	<a href="#venda_frevo">
                    <li class="menu_nav">
                        <div class="menu_icons_container">
                            <img class="image_menu" src="src/venda_frevo_menu.png" alt="venda_frevo">
                        </div>
                        <div class="menu_title_container">
                            <span class="text_menu">Venda Frevo</span>
                        </div>
                    </li>
				</a>
                <a href="#trabalhe_conosco">
                    <li class="menu_nav">
                        <div class="menu_icons_container">
                            <img class="image_menu" src="src/trabalhe_conosco_menu.png" alt="trabalhe_conosco">
                        </div>
                        <div class="menu_title_container">
                            <span class="text_menu">Trabalhe conosco</span>
                        </div>
                    </li>
                </a>
            </ul>
        </nav>

		<div id="slide_container">
        	<img id="img1_slide" class="img_slide" src="src/banner_refrigerantes.jpg" alt="slide">
        	<img id="img2_slide" class="img_slide" src="src/banner_bossanova.jpg" alt="slide">
            <img id="img3_slide" class="img_slide" src="src/banner_frevo.jpg" alt="slide">
        </div>

    	<div id="main">
        	<div id="main_icons_container">
            	<a href="#produtos">
                    <div id="produtos_icon_container" class="icon_container">
                        <img class="image_main_icons" src="src/produtos_main.png" alt="produtos_icon">
                        <span class="icons_title">Produtos</span>
                        <p class="icons_text">Conheça um pouco<br>mais sobre os nossos<br>produtos e como são<br>
                        produzidos</p>
                    </div>
                </a>
                
                <a href="#venda_frevo">
                    <div id="venda_frevo_icon_container" class="icon_container">
                        <img class="image_main_icons" src="src/venda_frevo_main.png" alt="trabalhe_conosco_icon">
                        <span class="icons_title">Venda Frevo</span>
                        <p class="icons_text">Tem interesse em ser<br>um distribuidor dos<br>produtos da Frevo?<br>Saiba
                        mais</p>
                    </div>
                </a>
                
                <a href="#trabalhe_conosco">
                    <div id="trabalhe_conosco_icon_container" class="icon_container">
                        <img class="image_main_icons" src="src/trabalhe_conosco_main.png" alt="venda_frevo_icon">
                        <span class="icons_title">Trabalhe conosco</span>
                        <p class="icons_text">Gostaria de fazer parte<br>da nossa equipe?<br>Clique aqui e entre<br>em
                        contato</p>
                    </div>
                </a>
            </div>
        </div>
        
		<a name="a_frevo">
            <div id="a_frevo_container">
                <div id="a_frevo_desc_container">
                    <h3 class="title">A Frevo</h3>
                    <hr>
                    <span>
                    <p>A Frevo é baseada numa história de sucesso. Atualmente a empresa conta com uma variada linha de
                    refrigerantes dos mais diversos sabores, além da famosa cerveja pilsen Bossa Nova.</p>
                                        
                    <p>O que parecia um sonho, agora é o paladar nordestino convertido em um empreendimento de sucesso.
                    Todos que fazem parte da família Frevo compartilham mais que um sentimento. Compartilha uma
                    familiaridade com a filosofia.</p>
                                        
                    <p>Quem consome os produtos Frevo tem a certeza de estar contribuindo para o crescimento do estado
                    de Pernambuco e enaltecendo toda a cultura que temos para oferecer.</p>
                    </span>
                </div>
                
                <div id="a_frevo_video_container">
                    <video width="400" height="320" controls>
                        <source src="src/video.mp4" type="video/mp4"></source>
                    </video>
                </div>
            </div>
        </a>
        
        <a name="produtos">
        	<h3 id="produtos_title">Produtos</h3>
            <hr id="dashes">
            <div id="produtos_container">
				<div id="refrigerantes_container">
                	<img id="produtos_icon_refrigerantes" class="icon_produtos" src="src/icon_refrigerantes_produtos_site.png" alt="refrigerantes">
					<span id="produtos_title_refrigerantes" class="title_icon_produtos">Refrigerantes</span>
				</div>
                
                <div id="cerveja_container">
                	<img id="produtos_icon_cerveja" class="icon_produtos" src="src/icon_cerveja_produtos_site.png" alt="cerveja">
                    <span id="produtos_title_cerveja" class="title_icon_produtos">Cerveja</span>
                </div>
            </div>
		</a>
        
        <div id="return">
        	<span id="text_return">&#8592; Voltar</span>
        </div>

		<div id="refrigerantes_icons_container">
			<div id="cola_icon_container" class="icons_refrigerantes">
				<img src="src/icon_refrigerante_cola.png" alt="icon_cola">
            	<span class="desc_refrigerantes_icon">Cola</span>
			</div>
			<div id="guarana_icon_container" class="icons_refrigerantes">
				<img src="src/icon_refrigerante_guarana.png" alt="icon_guarana">
            	<span class="desc_refrigerantes_icon">Guaraná</span>
			</div>
			<div id="laranja_icon_container" class="icons_refrigerantes">
				<img src="src/icon_refrigerante_laranja.png" alt="icon_laranja">
            	<span class="desc_refrigerantes_icon">Laranja</span>
			</div>
			<div id="limao_icon_container" class="icons_refrigerantes">
				<img src="src/icon_refrigerante_limao.png" alt="icon_limao">
            	<span class="desc_refrigerantes_icon">Limão</span>
			</div>
			<div id="uva_icon_container" class="icons_refrigerantes">
				<img src="src/icon_refrigerante_uva.png" alt="icon_uva">
            	<span class="desc_refrigerantes_icon">Uva</span>
			</div>
		</div>
        
        <div id="cola_container" class="refrigerante_container">
			<h3 class="refrigerante_title">Frevo Cola</h3>
        	<p class="refrigerante_desc">
                O sabor Frevo Cola foi desenvolvido especialmente para o paladar<br>
                nordestino. Dando um toque exclusivo e mais adocicado ao sabor<br>
                universal dos refrigerantes cola, o Frevo Cola, que vem em<br>
                diversas embalagens, está conquistando à todos!
            </p>
        </div>
        
		<div id="guarana_container" class="refrigerante_container">
			<h3 class="refrigerante_title">Frevo Guaraná</h3>
            <p class="refrigerante_desc">
                O guaraná Frevo, assim como todos os refrigerantes Frevo, tem o sabor<br>
                especialmente voltado para o público Nordestino. É um sabor levemente<br>
                mais adocicado, desenvolvido com base em pesquisas com consumidores da região.
            </p>
        </div>
        
		<div id="laranja_container" class="refrigerante_container">
			<h3 class="refrigerante_title">Frevo Laranja</h3>
            <p class="refrigerante_desc">
                Do suco natural da laranja é obtido o sabor do Frevo Laranja.<br>
                Os refrigerantes Frevo são compostos de: acidulante (para neutralizar<br>
                a doçura do açúcar e ressaltar o sabor do extrato), água, anti-oxidantes<br>
                (que evita a oxidação dos compostos aromáticos), conservantes (conservam<br>
                estéril o líquido), corantes naturais e dióxido de carbono (conserva, realça<br>
                o sabor e forma as bolhas do líquido).
            </p>
        </div>
        
		<div id="limao_container" class="refrigerante_container">
			<h3 class="refrigerante_title">Frevo Limão</h3>
            <p class="refrigerante_desc">
                O flavorizante do Frevo Limão é o suco natural das frutas, que<br>
                dá este sabor diferente, inovador e delicioso do refrigerante.<br>
                Além do sabor, o aroma também é natural do limão. O teor de suco<br>
                natural das frutas na bebida Frevo é o dobro do exigido por lei: 5%.
            </p>
        </div>
        
		<div id="uva_container" class="refrigerante_container">
			<h3 class="refrigerante_title">Frevo Uva</h3>
            <p class="refrigerante_desc">
                Usada para diversos fins, a uva foi uma das primeiras frutas<br>
                utilizadas como alimento pelo ser humano e bastante apreciada<br>
                durante a história. É a combinação desse clássico sabor com os<br>
                ingredientes da Frevo que dá origem a um refrigerante com um <br>
                gosto especial.
            </p>
        </div>
        
		<div id="bossa_nova_container">
			<h3 id="bossa_nova_title">Bossa Nova</h3>
            <p id="bossa_nova_desc">
                Cerveja pilsen de sabor leve, cor clara, espuma densa e cremosa.<br>
                Assim é a Cerveja Bossa. Nativa do nordeste, compete em condições<br>
                de igualdade com as melhores cervejas do mundo. Logo após poucos meses<br>
                do início da comercialização, a cerveja Bossa Nova conseguiu firmar-se<br>
                no competitivo mercado das cervejas e preparar sua rápida expansão para<br>
                os demais estados do nordeste.
            </p>
        </div>
        
        <a name="venda_frevo">
            <div id="venda_frevo_container">        	
                <div id="venda_frevo_desc_container">
                    <h3 class="title">Venda Frevo</h3>
                    <hr>
                    <span class="desc">
                    <p>A Frevo está no mercado há mais de 17 anos produzindo e vendendo produtos da melhor qualidade.
                    Trabalhamos sempre de forma transparente e respeitosa com nossos clientes, pois entendemos que estes
                    são nosso maior patrimônio.
                    Foi com essa credibilidade que alcançamos a posição de maior empresa de bebidas do nordeste
                    brasileiro.</p><br><br>
                    <p id="p_align_center">Mande a sua mensagem ou ligue para:<br>
					(81) 3339-4710 - Matriz (Recife/PE)<br>
					(85) 3297-1295 - Filial (Fortaleza/CE)<br><br>
					Seja você também um cliente da Frevo!</p>
                    </span>
                    <img class="image_desc" src="src/venda_frevo_main.png" alt="venda_frevo_img_desc">
                </div>
                   
                <form method="post" id="form_venda_frevo" onsubmit="return validaForm()">
                    <span class="form_title">Nome</span>
                    <input id="nome_venda" class="form_text_field" type="text" name="txt_nome_venda" required>
                
                    <span class="form_title">Empresa</span>
                    <input id="empresa_venda" class="form_text_field" type="text" name="txt_empresa_venda" required>
                
                    <span class="form_title">Telefone</span>
                    <input id="telefone_venda" class="form_text_field" type="text" name="txt_telefone_venda" required>
                
                    <span class="form_title">Email</span>
                    <input id="email_venda" class="form_text_field" type="text" name="txt_email_venda">
                
                    <span class="form_title">Mensagem</span>
                    <textarea id="mensagem_venda" class="form_message" rows="10" cols="30" name="txt_mensagem_venda" required></textarea><br>
                                
                    <input id="btn_enviar_venda" type="submit" value="Enviar">
                </form>
            </div>
		</a>
        
        <a name="trabalhe_conosco">
            <div id="trabalhe_conosco_container">
                <div id="trabalhe_conosco_desc_container">
                    <h3 class="title">Trabalhe conosco</h3>
                    <hr>
                    <span class="desc">
                    <p>Tem interesse em fazer parte da nossa equipe? Não perca tempo e envie o seu currículo! Você poderá ser
                    chamado posteriormente caso haja uma oportunidade de acordo com sua experiência profissional.</p><br><br>
                    
                    <p>Boa sorte!</p>
                    </span>
                    <img class="image_desc" src="src/trabalhe_conosco_main.png" alt="trabalhe_conosco_img_desc">
                </div>
            
                <form method="post" id="form_trabalhe_conosco" onsubmit="return validaFormTrabalheConosco()" enctype="multipart/form-data">
                    <span class="form_title">Nome</span>
                    <input id="nome_trabalhe" class="form_text_field" type="text" name="txt_nome_trabalhe" required>
                
                    <span class="form_title">Telefone</span>
                    <input id="telefone_trabalhe" class="form_text_field" type="text" name="txt_telefone_trabalhe" required>
                
                    <span class="form_title">Email</span>
                    <input id="email_trabalhe" class="form_text_field" type="text" name="txt_email_trabalhe" required>
                
                    <span class="form_title">Anexe o seu currículo (.pdf, docx, doc)</span>
                    <input id="anexo_trabalhe" type="file" accept="application/pdf" name="txt_anexo_trabalhe" required>
                    
                    <span class="form_title">Mensagem</span>
                    <textarea id="mensagem_trabalhe" class="form_message" name="txt_mensagem_trabalhe" rows="10" cols="30"></textarea><br>
                                
                    <input id="btn_enviar_trabalhe" type="submit" value="Enviar">
                </form>
			</div>
        </a>
        
        <div class="to_top_white">
        	<a class="link_to_top_red" href="">
            	<span class="text_to_top">Voltar &#8593;</span>
            </a>
        </div>
        
        <div id="bottom">
        	<div id="menu_bottom_container">
                <ul id="list_menu_bottom">
                	<a href="#a_frevo">
                    	<li class="menu_bottom">A Frevo</li>
                    </a>
                	<a href="#produtos">
                    	<li class="menu_bottom">Produtos</li>
                    </a>
                	<a href="#venda_frevo">
                    	<li class="menu_bottom">Venda Frevo</li>
                    </a>
                	<a href="#trabalhe_conosco">
                    	<li class="menu_bottom">Trabalhe conosco</li>
                    </a>
                </ul>
            </div>
            
            <div id="endereco_container">
                <span id="endereco">
					(81) 3339-4710 - Matriz (Recife/PE)<br>
					(85) 3297-1295 - Filial (Fortaleza/CE)
                </span>
            </div>
        </div>
        
        <div id="rj_container">
        	<a id="rj" href="rj/rj.html">RJ</a>
        </div>
    </body>
</html>