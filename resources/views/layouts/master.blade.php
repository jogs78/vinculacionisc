<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VINCULACIÓN - @yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co"/>
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co"/>
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content=""/>
	<meta name="twitter:image" content=""/>
	<meta name="twitter:url" content=""/>
	<meta name="twitter:card" content=""/>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Font Awesome Fonts -->
	<!--<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">-->
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Pricing -->
	<link rel="stylesheet" href="css/pricing.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="site">www.vinculacion.isc.ittg.mx</p>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="{{ url('/') }}"><i class="icon-study"></i>VINCULACIÓN<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class="active"><a href="{{ url('/') }}">Inicio</a></li>
							<li><a href="{{ url ('/graduatesview')}}">Egresados</a></li>
							<li><a href="{{ url ('/company')}}">Empresas</a></li>
							<li><a href="{{ url ('/projects')}}">Proyectos Vinculados</a></li>
							<li><a href="{!!url('/review')!!}">Eventos</a></li>
							<li class="btn-cta"><a href="{{url ('/login')}}"><span>Entrar</span></a></li>
							<li class="btn-cta"><a href="{{url ('/register')}}"><span>Crear cuenta</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
	@yield('content')
	<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h3> Más relacionados</h3>
					<p>Paginas relacionadas al Departamento de Sistemas y Computación.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
						<ul class="fh5co-footer-links">
						<h3>De interés</h3>
						<li><a href="https://www.facebook.com/pages/Ittg/460006994128706">Facebook ITTG</a></li>
						<li><a href="https://www.sistemastectuxtla.net">Ingeniería en Sistemas</a></li>
						<li><a href="https://www.ittg.edu.mx">ITTG</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<ul class="fh5co-footer-links">
						<h3>Instituciones</h3>
						<li><a href="https://www.tecnm.mx">TecNM</a></li>
						<li><a href="https://www.cacei.org.mx">CACEI</a></li>
						<li><a href=https://www.conacyt.gob.mx/>CONACYT</a></li>
					</ul>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<ul class="fh5co-footer-links">
						<h3>Sitios de interés</h3>
						<li><a href="https://www.gob.mx/sep">SEP</a></li>
						<li><a href="https://www.ses.sep.gob.mx">Secretaria de Edcuación Superior</a></li>
					</ul>
				</div>				
			</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">© Todos los derechos reservados | Jefatura de la Oficina de Proyectos de Vinculación del Departamento de Sistemas y Computación.</small> 
						<small class="block"><a href="https://www.ittg.edu.mx" target="_blank">Carretera Panamericana Km. 1080, C.P. 29050, Apartado Postal: 599
						Tel. (961) 61 5 04 61 Fax: (961) 61 5 16 87</a></small>
					</p>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Count Down -->
	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);
    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });
    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
</script>
<script> src=("js/highcharts.js")</script>
<script> src=("js/graficas.js") </script>
	</body>
</html>

