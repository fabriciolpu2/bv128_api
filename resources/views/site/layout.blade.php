<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Canaimé Studios</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="site/css/bg.css" rel="stylesheet" />
        <link href="site/css/styles.css" rel="stylesheet" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
			
		<div id="wrapper">
		
			
			<div id="main">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #212529 !important">
                    <div class="container">
                        <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top"><img  class="js-scroll-trigger" src="images/logo_canaime.png" alt="..." style="height: 50px" /></a> -->
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars ml-1"></i>
                        </button>
						<div class="navbar navbar-toggler-right">
							<ul class="navbar-nav text-uppercase ml-auto" style="text-align: right;">
								<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home.cliente')}}">Home</a></li>
								<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('bv128')}}">BV 128</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('eleanor')}}">EleanorIII</a></li>
								<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Makunaima</a></li>
								<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('sobre')}}">Sobre</a></li>
                                <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contato</a></li> -->
                            </ul>
						</div>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
							<ul class="navbar-nav text-uppercase ml-auto" style="text-align: right;">
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/admin/login">Entrar</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
					<footer id="footer">
						<span class="copyright" style="color: aliceblue;" >&copy; Canaimé Studios  </span>
					</footer>
			</div>
            @yield('paginas')
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
		<script src="site/js/jquery.min.js"></script>
			<!-- <script src="site/js/browser.min.js"></script>
			<script src="site/js/breakpoints.min.js"></script>
			<script src="site/js/util.js"></script> 
			<script src="site/js/main.js"></script> -->
	</body>
</html>
