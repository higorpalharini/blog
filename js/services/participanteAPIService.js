// Exemplo de service utilizando o padrao factory (fabrica).
angular.module("participantes").factory("participanteAPI", function($http, config){
	
	// Comecados com _ segue convenção javascript para atributos privados.

	var _getParticipantes = function(){
		return $http.get(config.baseUrl + "/participantes");
	};
	
	var _saveParticipante = function(participantes){
		return $http.post(config.baseUrl + "/participantes", participantes);
	};
	
	var _deleteParticipante = function(participantes){
		return $http.delete(participantes._links.participantes.href);
	};
	
	var _updateParticipante = function(participantesUpdated){
		return $http.put(config.baseUrl + "/participantes/" + participantesUpdated.id, participantesUpdated);
	}
	
	return {
		getParticipantes: _getParticipantes,
		saveParticipante: _saveParticipante,
		deleteParticipante: _deleteParticipante,
		putParticipante: _updateParticipante
	}
	
});