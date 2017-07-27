angular.module("participantes").controller("participantesCtrl", function($scope, participanteAPI, $filter){ //contatoAPI = mesmo nome dado na factory (contatoAPIService.js)
	
	$scope.app = "";
	//$scope.participantes = [];
	$scope.participantesForm = {};

	var limparForm = function(){
		$scope.participantesForm = {};
		$scope.formCadastroParticipante.$setPristine();
	}

	var getIp = function(){
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        $scope.participantesForm.ip = JSON.parse(xhttp.responseText).ip;
		    }
		};
		xhttp.open("GET", "https://freegeoip.net/json/?callback=", true);
		xhttp.send();
	}
	
	$scope.adicionarParticipante = function(participanteForm){
		participanteForm.data = new Date();
		participanteForm.data.setHours(participanteForm.data.getHours() - 3);
	
		participanteAPI.saveParticipante(participanteForm).success(function (data){
			limparForm();
			//$scope.participantes.push(data);
			$scope.formCadastroParticipante.success = true;

			//redirect after 2 sec
			setTimeout(function(){
				var pathname = window.location.pathname;
				var rootPath = pathname.substring(0, pathname.lastIndexOf("/"));
				window.location.href = rootPath + '/blogpost.php';
			 }, 2000);

		});
	};

	getIp();
});
