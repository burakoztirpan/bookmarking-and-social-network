base.service("postFactory", function($resource) {
	return $resource("/tatli/public/post/:id", {
    query: { method: "GET", isArray: false }
  });
});

base.controller('postCtrl',['$scope','$stateParams','postFactory',
	function($scope,$stateParams,postFactory){
		  postFactory.get({ id: $stateParams.postId }, function(data) {
			$scope.post = data;
  	});
}]);