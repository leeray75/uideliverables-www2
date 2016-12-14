<!doctype html>
<html>
<head>
<base href="/www2/public/index.php/tour-of-heroes" />
<meta charset="utf-8">
<title>Angular 2 - Todo Example</title>
<link rel="stylesheet" type="text/css" href="/www2-static/build/Release/css/global-styles.css">
</head>

<body role="document">
    <script src="//unpkg.com/core-js/client/shim.min.js"></script>
    <script src="//unpkg.com/zone.js@0.6.25?main=browser"></script>
    <script src="//unpkg.com/reflect-metadata@0.1.8"></script>
    <script src="//unpkg.com/systemjs@0.19.39/dist/system.src.js"></script>
    
<script>
(function(){
	window.MySite = {
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
	<script src="/www2-static//build/Release/js/ng2-apps/systemjs-config-dev.js"></script>
	<script>
        System.import('app').catch(function(err){ console.error(err); });
    </script>
@else
	<script src="/www2-static//build/Release/js/ng2-apps/systemjs-config-production.min.js"></script>
    <script src="/www2-static//build/Release/js/ng2-apps/tour-of-heroes/tour-of-heroes.combo.min.js"></script>
	<script>
        System.import('main').catch(function(err){ console.error(err); });
    </script>
@endif

<div class="container theme-showcase" role="main">
  <my-app>Loading...</my-app>
</div>
<!-- /container -->

</body>
</html>
