var base = angular.module('base', ['ngRoute']);


base.factory('postListFactory', function($http){
	var datas = [];
$http.get('post').
  success(function(data) {
    angular.forEach(data, function(key, val){
    	datas.push(key, val);
    });    
  }).error(function(error){
  		return error;
  });
  return datas;
});

base.controller('postListCtrl', ['$scope','postListFactory' ,
	function ($scope, postListFactory) {
		$scope.data = postListFactory;
}]);

base.config(['$routeProvider',function($routeProvider) {
	$routeProvider
	.when('/', {
   templateUrl : 'ngTemplates/posts.html',
  controller : 'postListCtrl'
 }).otherwise({
  redirectTo : '/'
 });

}]);