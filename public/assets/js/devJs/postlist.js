base.service("postListFactory", function($resource) {
	return $resource("/tatli/public/post", {}, {
    query: { method: "GET", isArray: true }
  });
});


base.controller('postListCtrl', ['$scope','postListFactory','$http',
	function ($scope, Posts,$http) {

	Posts.query().$promise.then(function(data) {

		var posts = data;

		angular.forEach(posts, function(val, key) {
			$http.get('/tatli/public/getpoints/'+val.id+'').
        	success(function(data, status, headers, config) {
				var post = [];
				post.push(val.id);
				post.push(val.subject);
				post.push(val.content);
				post.push(val.img);
				post.push(val.postpoint);
				post.push(val.created_at);
				post.push(val.userid);
				post.push(val.uptadet_at);
				post.push(val.postpoint);
				post.push(data.bad);
				post.push(data.good);
				posts.push(post);
        	})
		  
		});

		if(angular.isArray(data)){
			$scope.postsm = posts;
		}

		});
}]);