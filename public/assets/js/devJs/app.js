var base = angular.module('base', ['ui.router','ngResource']);

base.config(function($stateProvider, $urlRouterProvider) {
	$urlRouterProvider.otherwise("/");
	  $stateProvider
	  //PostList
	   .state('postList', {
      url: "/",
      templateUrl: "./ngTemplates/posts.html",
      controller: "postListCtrl"
    })
	   //Post
	.state('post', {
		url: "post/:postId",
		templateUrl: "./ngTemplates/post.html",
		controller: "postCtrl"
	})
	//Search
	.state('search', {
		url: "result/:key",
		templateUrl: "./ngTemplates/posts.html",
		controller: "getSearchResult"
	})
	//NextPage
	.state('pagn', {
		url: "page/:page",
		templateUrl: "./ngTemplates/posts.html",
		controller: "getPage"
	})
});

