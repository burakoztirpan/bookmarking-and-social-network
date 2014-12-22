

base.controller('searchCtrl',['$scope','$state','$stateParams',
	function($scope,$state,$stateParams,$http){                
		$scope.submit = function() {
        if ($scope.key) {
          $state.go('search',{key:$scope.key});
          }
    };
}]);


base.controller('getSearchResult',['$scope','$stateParams','$http',
    function($scope,$stateParams,$http){
      if($stateParams){
        $http.get('/tatli/public/search-result/'+$stateParams.key+'').
        success(function(data, status, headers, config) {
          $scope.posts = data;
        }).
        error(function(data, status, headers, config) {
          console.log(status)
        });
      }
    }
  ])

