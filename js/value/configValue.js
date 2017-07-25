// Service onde fica centralizada as constantes referentes ao modulo.

/* 
 * value("config", {  ===> identico ao constant, só que nao pode ser passado como parametro em um servico do tipo provider, pois da erro.
 * ou
 * constant("config", {  ===> identico ao value, só que este pode ser passado como parametro em um servico do tipo provider, para utilizar as constantes definidas.
 */
angular.module("participantes").constant("config", {
	baseUrl: "https://evening-escarpment-76919.herokuapp.com"
});
