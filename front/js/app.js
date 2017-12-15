$(document).ready(function(){
  $(".button-collapse").sideNav();
  $(".dropdown-button").dropdown();
  
});

var app = angular.module("api", ["ngRoute"]);
app.config(function($routeProvider) {
    var url ="/front/html/";
    $routeProvider
    .when("/", {
        templateUrl : url+"perros.html",
        controller: "perros" 
    })
    .when("/ver", {
        templateUrl : url+"show.html",
        controller: "perros"
        
    })
    .when("/nuevo", {
        templateUrl : url+"nuevo.html",
        controller: "perros"
    })
    .when("/editar", {
        templateUrl : url+"editar.html",
        controller: "perros"
    });
  });

