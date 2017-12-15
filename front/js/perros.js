angular.module('api')
 .factory("facPerros",["$http",function($http) {
  return {
    lista:function(callback){
      $http.get("/back")
      .then(function(response) {
        callback(response);
      }, function(response) {
        callback(response);
      });
    },
    ver:function(id,callback){
       $http.get("/back/show.php?id="+id)
      .then(function(response) {
        callback(response);
      }, function(response) {
        callback(response);
      });
    },
    eliminado:function(id,callback){
      $http.post("/back/delete.php?id="+id)
      .then(function(response) {
        callback(response);
      }, function(response) {
        callback(response);
      });
    },
    actualizar:function(data,callback){
      $.post( '/back/update.php' , data)
      .done(function( data ) {
        console.log(data);
      });
    },
    crear:function(data,ret){
    
    },
  };
}]);

app.controller("perros", ["$scope" ,"facPerros" ,function($scope,facPerros) {
  $scope.lista = [];
  function init(){
    var params = {}; 
    var search = window.location.href.split("?")[1];
    if(!(search === undefined))
       params = JSON.parse('{"' + decodeURI(search).replace(/"/g, '\\"').replace(/&/g, '","').replace(/=/g,'":"') + '"}');
     if("id" in params){
        $scope.ver(params.id);  
     }else
        $scope.index();
  }
  
  $scope.index = function(){
    facPerros.lista((res)=>{
      $scope.lista = res.data;
    });
  } 
  $scope.ver = function(val){
    console.log("ver");
    facPerros.ver(val,(res)=>{
      $scope.perro = res.data;
    });
  }
  $scope.editar = function(){
    
  }
  $scope.actualizar = function(){
    facPerros.actualizar({id:1,nombre:"rofi"},(res)=>{
      $scope.lista = res.data;
    });
  }
  init();
 
}]);