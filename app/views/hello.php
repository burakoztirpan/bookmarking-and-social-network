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
	<script src="https://code.angularjs.org/1.3.6/angular.js" type="text/javascript" charset="utf-8" ></script>
	<script src="https://code.angularjs.org/1.3.5/angular-route.js" type="text/javascript" charset="utf-8"></script>
	<script src="assets/js/app.js" type="text/javascript" charset="utf-8"></script>
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
			<div ng-view>
				a
			</div>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 rightside">
			<!-- SEARCHBOX -->
			<input class="col-xs-12 col-sm-12 col-md-12 col-lg-12" type="text" name="searchbox" id="inputSearchbox" placeholder="Search" title="search box">
			<i class="fa fa-search"></i>
			<!-- /SEARCHBOX -->
		</div>
	</div>
	<!-- /BODY -->
	<!-- FOOTER -->
	<div class="row" ng-controller="postListCtrl">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			{{names[0]}}
		</div>
	</div>
	<!-- /FOOTER -->
</div>
</html>
