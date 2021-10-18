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
			<div id="bg" 
				style="background:url('site/assets/img/bv.png') 
					bottom left; "></div>
			<!-- <div id="overlay"></div>-->
			<div id="main">
                <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                    <div class="container">
                        <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top"><img  class="js-scroll-trigger" src="images/logo_canaime.png" alt="..." style="height: 50px" /></a> -->
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            
                            <i class="fas fa-bars ml-1"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav text-uppercase ml-auto">
                                <!-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Sobre</a></li>
                                {{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li> --}}
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contato</a></li> -->
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/admin/login">Entrar</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

				<!-- Header -->
					<header id="header" style="">
                        
						<!-- <h1>Adam Jensen</h1>  -->
						<img src="images/logo_canaime.png" alt="" width="350px">
						<!-- <p>Security Chief &nbsp;&bull;&nbsp; Cyborg &nbsp;&bull;&nbsp; Never asked for this</p> -->
						<nav>
							<ul>
								<li><a href="https://instagram.com/canaimestudio" class="icon brands fa-instagram" style="color: aliceblue; text-decoration: none"><span class="label">Instagram</span></a></li>
								<li><a href="https://api.whatsapp.com/send?phone=5595991370723" class="icon brands fa-whatsapp" style="color: aliceblue; text-decoration: none"><span class="label">Email</span></a></li>
                                <li><a href="https://www.youtube.com/channel/UCRjvxLoWN9kZhdVPh-IH8sA" style="color: aliceblue; text-decoration: none;" class="icon brands fa-youtube" target="_blank"><span class="label">Jogar</span></a></li>
                                <li><a href="https://play.google.com/store/apps/details?id=com.fabriciolpu2.boavista128" style="color: aliceblue; text-decoration: none;" class="icon brands fa-google-play" target="_blank"><span class="label">Jogar</span></a></li>

							</ul>
						</nav>
						
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright" style="color: aliceblue;" >&copy; Canaimé Studios  </span>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>
