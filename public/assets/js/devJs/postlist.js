base.service("postListFactory", function($resource) {
	return $resource("/tatli/public/post", {}, {
    query: { method: "GET", isArray: true }
  });
});


base.controller('postListCtrl', ['$scope','$state','postListFactory','$http',
	function ($scope, $state, Posts,$http) {
	Posts.query().$promise.then(function(data) {
		$scope.posts = data;
        $scope.getPage = 1;
		$scope.page = function($page) {
			$state.go('pagn',{page: $page});
  		}

		});
}]);


base.controller('getPage',['$scope','$state','$stateParams','$http',
    function($scope,$state,$stateParams,$http){

    	$scope.page = function($page) {
			$state.go('pagn',{page: $page});
  		}

      if($stateParams){
        $http.get('/tatli/public/page/'+$stateParams.page+'').
        success(function(data, status, headers, config) {
          $scope.posts = data;
         // debugger; // Buradayım
          $scope.getPage = parseInt((location.hash).split('/').slice(-1)[0])+1;
        }).
        error(function(data, status, headers, config) {
          console.log(status)
        });
      }
    }
  ])