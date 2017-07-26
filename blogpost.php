
<DOCYTYPE!>
    <html>
    	<head>
			<meta charset="UTF-8">
			<title>PORTAL GROWTH</title>

			<script src="lib/angular-1.5.7/angular.js"></script>
			<script src="lib/angular-1.5.7/angular-messages.js"></script>
			<script src="lib/angular-1.5.7/angular-locale_pt-br.js"></script>
			<!-- My imports -->
			<script src="js/app.js"></script>
			<script src="js/controllers/participantesCtrl.js"></script>
			<script src="js/services/participanteAPIService.js"></script>
			<script src="js/value/configValue.js"></script>
			
			<!-- Bootstrap -->
			<link rel="stylesheet" type="text/css" href="lib/bootstrap-3.3.6-dist/css/bootstrap.css">
			<!-- My css -->
			<link rel="stylesheet" type="text/css" href="css/app.css">

			<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-103200040-1', 'auto');
				  ga('send', 'pageview');

		</script>
		</head>
	
	<body ng-controller="participantesCtrl">
		<div class ="jumbotron center" style="text-align: center; background-color:#FFFFFF !important; ">

			<div style="width: 100%;">
				<img src="./imagens/portal1.png" alt="Banner" class="img-responsive center">

				<h2 ng-bind="app"></h2>
				<!--
				<p style="font-size: 13px; padding-top: 5px; color:#000000"><i>"O <b>Facebook</b> chegou a marca de 1,7 bilhões de usuários 		  ativos e boa parte desse sucesso se
						deve à mentalidade de growth hacking que a empresa possui desde o seu primeiro dia.</i>” Marketing
						de Conteúdo"</p>

				<p style="font-size: 13px; padding-top: 5px; color:#000000"><i>"<b>Airbnb</b> usou táticas de growth hacking 
					    para crescer mais de 300% em novos usuários e aluguéis por dia.”</i> Vida de Startup</p>


				<p style="font-size: 13px; padding-top: 5px; color:#000000"><i>“Uma das ações de growth hacking mais famosas 		 do <b>LinkedIn</b> ajudou a empresa a crescer de 2 milhões para 200 milhões de usuários ativos."</i> 
						Marketing de Conteúdo</p> -->				
			</div>

			<br></br><br></br>


			<p style="font-size: 20px; padding-top: 10px">
				No Growth Hacking a definição de metas é muito importante:
			 </p>
			   	<p style="font-size: 20px; padding-top: 3px">
					- Principais objetivos a serem alcançados <br />
					- Dados que devem ser analisados, quantidade e qualidade<br />
					- Modelo de alavancagem (pesquisa com audiência pra descobrir possíveis brechas que não estão sendo aproveitadas)
				</p>
			<p style="font-size: 20px; padding-top: 10px">
				<b>Ciclo de vida do Growth Hacking:</b> 

			</p>

			<div class ="jumbotron center" style="text-align: center; background-color:#FFFFFF !important; ">
				<div style="width: 100%;">
					<img src="./imagens/CICLO.png" alt="Banner" class="img-responsive center">
				</div>

				<div>
					<p style="font-size: 18px; padding-top: 3px">
						01 - Brainstorming - Com base nos dados obtidos, sugestões são apresentadas com foco <br />no crescimento. O objetivo é sair dessa etapa com um "estoque de ideias";
					</p>
				</div>
				<div>
					<p style="font-size: 18px; padding-top: 3px">
						02 - Estabelecimento de prioridades - Nem todas as ideias serão colocadas em prática;<br /> nesta etapa são definidas quais serão experimentadas e quais suas prioridades;
					</p>
				</div>	
				<div>
					<p style="font-size: 18px; padding-top: 3px">
						03 - Documentação MUITO IMPORTANTE - Todos os experimentos devem ser documentados<br /> para comparação e com objetivo de saber quais foram os mais bem sucedidos.
					</p>
				</div>	
				<div>
					<p style="font-size: 18px; padding-top: 3px">
						04 -  MVT (Teste Mínimo Viável) - Usado pra testar uma hipótese em Growth Hacking,<br /> caso obtenha sucesso, passa para o MVP.
					</p>
				</div>	
				<div>
					<p text id="p" style="font-size: 18px; padding-top: 3px">
						05 - Melhoria Contínua - Ao final de todo ciclo de Growth Hacking, a ideia é atuar<br /> com melhoria contínua, sempre pensando em obter crescimento.
					</p>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //><b>Táticas de Growth Hacking para ajudar seu site a crescer!</b><br></br>
					</h1>
				</div>	
 				
 				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						1 - Marketing de conteúdo 
							- Conteúdo de qualidade que gere valor e seja gratuito!<br /> (Ex: blogs, podcasts, vídeos, infográficos);<br />
							- Upgrade de conteúdo: Oferecer material criado para captar mais leads, conteúdo gratuito e que agregue valor.
					</h1>
				</div>	
				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						2 - Incentivo - Oferece algo que tenha valor ao usuário com preço acessível (ex: Uber, DropBox)<br /> com a tática de MGM - Member Get Member.
					</h1>
				</div>	
				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						3 - Click Pop up - Mesmas características de uma landing page (Ex: Pop up que aparece na<br /> tela com duas opções "aceito" e "voltar").
					</h1>
				</div>	
				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						4 - Sequência de e-mails para novos cadastrados em sua base - Sugerir uma sequência de arquivos<br /> que irão esclarecer o tema do site acessado. Sequência de 5-7 e-mails.
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 20px; padding-top: 3px">
						<br //><b>Casos de Sucesso</b>
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 20px; padding-top: 3px">
						<br //><b>Twitter</b>
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //>A plataforma teve muita publicidade desde o início, muita gente se cadastrava e compartilhava <br />com seus amigos e familiares que por sua vez se cadastravam também. Mas o uso do site não <br /> parecia permanente, os usuários criavam a conta, usavam por alguns dias e nunca mais voltavam.<br /> Ao invés de oferecer condições especiais ou recorrer ao marketing tradicional, decidiram investir no produto em si.
					</h1>
				</div>	
				
				<div>
					<h1 style="font-size: 20px; padding-top: 3px">
						<br //><b>LinkedIn</b>
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //>O LinkedIn passou de 2 milhões para 200 milhões de usuários implementando um <br /> técnica de Growth Hacking que permite a criação de contas gratuitas. <br /> Esta ação garantia que o perfil do usuário apareça de maneira "orgânica" nas <br /> pesquisas. Antes do LinkedIn, procurar seu nome em ferramentas de busca exigia um <br /> certo esforço procurando e navegando pra só depois de todo esse <br /> processo finalmente encontrar uma página que fosse realmente sobre você.
					</h1>
				</div>	
				<div>
					<h1 style="font-size: 20px; padding-top: 3px">
						<br //><b>Airbnb</b>
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //>O Airbnb usou uma poderosa campanha de e-mail no início de sua campanha <br /> de Growth Hacking e isso ajudou o site a ter um sucesso elevado. <br />O próximo passo  que ele deram foi ainda mais brilhante, o Airbnb utilizou-se de uma lista de casas <br /> e apartamentos de outra empresa, a Craiglist, entrou em contato com os donos <br /> perguntando se tinham interesse em colocar seus anúncios na plataforma. <br /> Essa estratégia ganhou milhares de usuários de maneira muito rápido, <br /> fazendo com que o site se tornasse viral imediatamente.
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 20px; padding-top: 3px">
						<br //><b>Mitos sobre Growth Hacking</b>
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //><i>Mito 1: Growth Hacking não é ético</i>
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //>Isso se dá pelo fato dos Growth Hackers sempre utilizarem atalhos (dentro da lei) <br /> para o crescimento de um site ou produto.
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //>Um dos casos mais conhecidos é do Airbnb (exemplo acima). O início de suas atividades, <br /> o Airbnb utilizou de uma base de emails de outra empresa, a Craigslist, através de uma falha no próprio site.
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //><i>Mito 2: Growth Hacking = Marketing Digital</i>
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //>O marketing baseia suas ações no produto pronto, enquanto o Growth Hacking <br /> analisa todas as partes do processo e procura encontrar melhorias <br /> em cada etapa. A diferença entre eles está no fato do Growth Hacker <br /> procurar o crescimento através da utilização e interação do produto, <br /> enquanto o Marketing foca em estratégias do produto pronto <br /> (inbound e outbound marketing).
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //><i>Mito 3: Growth Hackers são programadores</i>
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 18px; padding-top: 3px">
						<br //>Este mito nasce porque alguns dos Growth Hackers realmente são programadores e utilizam dos <br /> seus conhecimentos para implementar as estratégias dentro do produto. <br /> No entanto, isso não significa que seja uma coisa primordial para atuar na área.
					</h1>
				</div>	

				<div>
					<h1 style="font-size: 20px; padding-top: 3px">
						<br //><b>Quer saber mais? Assine nosso conteúdo semanal!</b>
						<a href="index.php"><b style="font-size: 20px">Cadastre seu email aqui!</b></a>
					</h1>
				</div>
				<br /><br /><br /><br /><br /><br /><br /><br /><br />
				<p>&copy; 2017 JOVENS TITÃS</p>

			</div>

		</div>		
	</body>
</html>


