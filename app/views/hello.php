<!doctype html>
<html lang="en">
<head>
	<base href="<?php echo Config::get('app.site_url'); ?>">
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>

	<!-- CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
	<!-- Javascripts-->
	<script src="assets/js/angular.js" type="text/javascript" charset="utf-8" ></script>
	<script src="assets/js/angular-ui-router.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/ngresource.js" type="text/javascript" charset="utf-8"></script>
	<!-- DevJs -->
	<script src="assets/js/devJs/app.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/devJs/post.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/devJs/postlist.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/devJs/search.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>

</head>
<div class="container" ng-app="base">
	<!-- HEADER -->
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			Header
		</div>
	</div>
	<!-- /HEADER -->
	<!-- BODY -->
	<div class="row">
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<div ui-view>
				a
			</div>
		</div>
		<div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 rightside">
			<form ng-submit="submit()"  ng-controller="searchCtrl">
			<!-- SEARCHBOX -->
			<input ng-model="key" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" type="text" name="searchbox" id="inputSearchbox" placeholder="Search" title="search box">
			<i type="submit" class="fa fa-search"></i>
			<!-- /SEARCHBOX -->
		</form>
		</div>
	</div>
	<!-- /BODY -->
	<!-- FOOTER -->
	<a ui-sref="postList" title="">Post List</a>
	<div class="row" ng-controller="postListCtrl">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		</div>
	</div>
	<!-- /FOOTER -->
</div>
</html>
