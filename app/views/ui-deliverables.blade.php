<!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Raymond Lee" />
<meta name="description" content="Welcome to UI Deliverables! I am a front-end developer with experience in developing in HTML/HTML5, JavaScript, CSS/CSS3.">
<meta name="keywords" content="HTML,HTML5,CSS,CSS3,angular,angularjs,JavaScript,jQuery,resume,portfolio,demos,contact">
<title>UI Deliverables</title>
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<link href='//fonts.googleapis.com/css?family=Lobster|Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|PT+Sans:400,400italic,700,700italic|Droid+Serif:400,400italic,700,700italic|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic|Play:400,700' rel='stylesheet' type='text/css'>

@if (App::environment()==='production')
	<base href="/www2/ui-deliverables" />
@else
	<base href="/www2/index.php/ui-deliverables" />
@endif
<meta charset="utf-8">
<title>Angular 2 - Tour of Heroes | UI Deliverables</title>

@if (App::environment()==='local')
	<link rel="stylesheet" type="text/css" href="/www2-static/build/dev/css/global-styles.css">
    <link rel="stylesheet" type="text/css" href="/www2-static/build/dev/css/ng2-apps/ui-deliverables.css">
@else
	<link rel="stylesheet" type="text/css" href="/www2-static/build/Release/css/global-styles.css">
	<link rel="stylesheet" type="text/css" href="/www2-static/build/Release/css/ng2-apps/ui-deliverables.css">
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
		appPath: '/ui-deliverables',
		templateSrc: '/www2-static/build/Release/templates/ng2/ui-deliverables/',
		stylesSrc: 'www2-static/build/Release/css/ng2-apps/ui-deliverables/',
		mainSrc: './ui-deliverables/main.js',
		currentYear: '<?php echo date("Y"); ?>'
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
	<script src="/www2-static//build/dev/js/ng2-apps/systemjs-config.js"></script>
	<script>
        System.import('app').catch(function(err){ console.error(err); });
    </script>
@else
	<script src="/www2-static//build/Release/js/ng2-apps/systemjs-config.min.js"></script>
    <script src="/www2-static//build/Release/js/ng2-apps/ui-deliverables/ui-deliverables.combo.min.js"></script>
	<script>
        System.import('main').catch(function(err){ console.error(err); });
    </script>
@endif
<section id="page" data-role="page">
	  <ui-deliverables>Loading...</ui-deliverables>
</section>
@if (App::environment()==='production')
	@include('shared.analytics')
@endif
</body>
</html>
