<?php include('../www2-static/build/CacheBuster.php'); ?>
<!doctype html>
<html>
<head>
@if (App::environment()==='production')
	<base href="/www2/tour-of-heroes" />
@else
	<base href="/www2/index.php/tour-of-heroes" />
@endif
<meta charset="utf-8">
<title>Angular 2 - Tour of Heroes | UI Deliverables</title>

@if (App::environment()==='local')
	<link rel="stylesheet" type="text/css" href="/www2-static/build/dev/css/global-styles.css?v=<?php echo $cacheVersion ?>">
    <link rel="stylesheet" type="text/css" href="/www2-static/build/dev/css/ng2-apps/tour-of-heroes.css?v=<?php echo $cacheVersion ?>">
@else
	<link rel="stylesheet" type="text/css" href="/www2-static/build/Release/css/global-styles.css?v=<?php echo $cacheVersion ?>">
	<link rel="stylesheet" type="text/css" href="/www2-static/build/Release/css/ng2-apps/tour-of-heroes.css?v=<?php echo $cacheVersion ?>">
@endif

</head>

<body role="document">
    <script src="//unpkg.com/core-js/client/shim.min.js"></script>
    <script src="//unpkg.com/zone.js@0.6.25?main=browser"></script>
    <script src="//unpkg.com/reflect-metadata@0.1.8"></script>
    <script src="//unpkg.com/systemjs@0.19.39/dist/system.src.js"></script>
    
<script>
(function(){
	window.MySite = {
		environment: '{{ App::environment() }}',
		appPath: '/tour-of-heroes',
		templateSrc: '/www2-static/build/Release/templates/ng2/tour-of-heroes/',
		stylesSrc: 'www2-static/build/Release/css/ng2-apps/tour-of-heroes/',
		mainSrc: './tour-of-heroes/main.js',
	}
	var paths = window.location.pathname.split(window.MySite.appPath);
	var startPaths = paths[0];
	var folders = startPaths.split("/");
	var prefix = "";
	folders.forEach(function(folder){
		prefix+="../"
	});
	window.MySite.stylesSrc=prefix+window.MySite.stylesSrc;
})();
</script>
@if (App::environment()==='local')
	<script src="/www2-static/build/dev/js/ng2-apps/systemjs-config.js?v=<?php echo $cacheVersion ?>"></script>
	<script>
        System.import('app').catch(function(err){ console.error(err); });
    </script>
@else
	<script src="/www2-static/build/Release/js/ng2-apps/systemjs-config.min.js?v=<?php echo $cacheVersion ?>"></script>
    <script src="/www2-static/build/Release/js/ng2-apps/tour-of-heroes/tour-of-heroes.combo.min.js?v=<?php echo $cacheVersion ?>"></script>
	<script>
        System.import('main').catch(function(err){ console.error(err); });
    </script>
@endif

<div class="container theme-showcase" role="main">
  <my-app>Loading...</my-app>
</div>
<!-- /container -->
@if (App::environment()==='production')
	@include('shared.analytics')
@endif
</body>
</html>
