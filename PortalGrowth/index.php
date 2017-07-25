<html ng-app="participantes">
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
	</head>
	
	<body ng-controller="participantesCtrl">
		<div class ="jumbotron center" style="text-align: center; background-color:#30353B !important; ">

			<div style="width: 100%; height: 100%">
				<img src="./imagens/portal.png" alt="Banner" class="img-responsive center">

				<h2 ng-bind="app"></h2>

				<p style="font-size: 13px; padding-top: 5px; color:#FFFFF0"><i>"O <b>Facebook</b> chegou a marca de 1,7 bilhões de usuários 		  ativos e boa parte desse sucesso se
						deve à mentalidade de growth hacking que a empresa possui desde o seu primeiro dia.</i>” Marketing
						de Conteúdo"</p>

				<p style="font-size: 13px; padding-top: 5px; color:#FFFFF0"><i>"<b>Airbnb</b> usou táticas de growth hacking 
					    para crescer mais de 300% em novos usuários e aluguéis por dia.”</i> Vida de Startup</p>


				<p style="font-size: 13px; padding-top: 5px; color:#FFFFF0"><i>“Uma das ações de growth hacking mais famosas 		 do <b>LinkedIn</b> ajudou a empresa a crescer de 2 milhões para 200 milhões de usuários ativos."</i> 
						Marketing de Conteúdo</p>				
			</div>
			
			<form name="formCadastroParticipante" class="margin center" style="width: 40%;">
				<p style="font-size: 14px; padding-top: 8px;color:#FFFFF0"><b>Receba Semanalmente os melhores conteúdos de Growth
				Hacking por e-mail e aprenda  como esse novo mindset está revolucionando o marketing tradicional.</b>
				</p>
				
				<div ng-if="formCadastroParticipante.success" class="alert alert-success">
					<strong style="color:#FF0000">Seu cadastro foi realizado sucesso!</strong>
				</div>

				<input class="form-control" type="text" name="nome" ng-model="participantesForm.nome" placeholder="Nome Completo" ng-required="true" />
				<input class="form-control" type="text" name="email" ng-model="participantesForm.email" placeholder="Email" ng-required="true" ng-pattern="/^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}(\.[a-z.]{2})?$/" />
				<div ng-messages="formCadastroParticipante.nome.$error">
				<div ng-message="required" ng-show="formCadastroParticipante.nome.$dirty" class="alert alert-danger">
					Preencha o nome completo!
				</div>
			</div>
			
			<div ng-show="formCadastroParticipante.email.$error.required && formCadastroParticipante.email.$dirty" class="alert alert-danger">
				Preencha o campo email
			</div>
			<div ng-show="formCadastroParticipante.email.$error.pattern" class="alert alert-danger">
  				 <span ng-class="error" ng-show="formCadastroParticipante.email.$error.required">Email é obrigatório</span>
			     <span ng-class="error" ng-show="formCadastroParticipante.email.$error.pattern"> Formato do e-mail é inválido</span>
			</div>
				<button class ="btn btn-block btn-primary" ng-click="adicionarParticipante(participantesForm)" ng-disabled="formCadastroParticipante.$invalid" style="color:#FFFFF0">Quero me tornar um Growth Hacker</button>
			</form>

			<script>
				  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				  ga('create', 'UA-103200040-1', 'auto');
				  ga('send', 'pageview');

			</script>

		</div>
	</body>
</html> 
