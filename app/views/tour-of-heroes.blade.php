<!doctype html>
<html>
<head>
<base href="/www2/public/index.php/tour-of-heroes" />
<meta charset="utf-8">
<title>Angular 2 - Todo Example</title>
<!-- <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
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
		stylesSrc: 'www2-static/build/Release/css/ng2-apps/tour-of-heroes/'
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

(function (global) {
  System.config({
    paths: {
      // paths serve as alias
      //'npm:': '/node_modules/'
	  'npm:': '//unpkg.com/'
    },
    // map tells the System loader where to look for things
    map: {
      // our app is within the app folder
      app: '/build/Release/js/ng2-apps',

      // angular bundles
      '@angular/core': 'npm:@angular/core/bundles/core.umd.js',
      '@angular/common': 'npm:@angular/common/bundles/common.umd.js',
      '@angular/compiler': 'npm:@angular/compiler/bundles/compiler.umd.js',
      '@angular/platform-browser': 'npm:@angular/platform-browser/bundles/platform-browser.umd.js',
      '@angular/platform-browser-dynamic': 'npm:@angular/platform-browser-dynamic/bundles/platform-browser-dynamic.umd.js',
      '@angular/http': 'npm:@angular/http/bundles/http.umd.js',
      '@angular/router': 'npm:@angular/router/bundles/router.umd.js',
      '@angular/forms': 'npm:@angular/forms/bundles/forms.umd.js',

      // other libraries
      'rxjs':  'npm:rxjs',
      'angular-in-memory-web-api': 'npm:angular-in-memory-web-api/bundles/in-memory-web-api.umd.js'
    },
    // packages tells the System loader how to load when no filename and/or no extension
    packages: {
		/*
      app: {
        main: './tour-of-heroes/main.js',
        defaultExtension: 'js'
      },
	  */
      rxjs: {
        defaultExtension: 'js'
      }
    }
  });
})(this);

</script>
<!-- 3. Bootstrap --> 
<script src="/www2-static//build/Release/js/ng2-apps/tour-of-heroes/tour-of-heroes.combo.min.js"></script>
<script>
	System.import('main').catch(function(err){ console.error(err); });
</script>
<div class="container theme-showcase" role="main">
  <my-app>Loading...</my-app>
</div>
<!-- /container -->

</body>
</html>
