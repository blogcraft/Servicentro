<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
	<meta property="fb:admins" content="757102574" />
	<meta property="fb:admins" content="721083007" />
	<meta property="fb:admins" content="737359096" />
	<meta property="og:title" content="Contáctanos" />
	<meta property="og:site_name" content="Servicentro"/>
	<meta property="og:url" content="http://www.servicentro.cl/contacto.php" />
	<meta property="og:description" content="Tienes alguna duda, comentario o sugerencia? Nos gustaria saber de ti! Mándanos un mensaje!" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="http://www.servicentro.cl/src/img/customLogoFB.jpg" />
	<meta name="description" content="Tienes alguna duda, comentario o sugerencia? Nos gustaria saber de ti! Mándanos un mensaje!" />
	
	<title>Servicentro - Contáctanos</title>
	
	<link rel="shortcut icon" href="http://www.servicentro.cl/src/img/favicon.ico"/>
	<link rel="icon" type="image/png" href="http://www.servicentro.cl/src/img/Servicetro.png"/>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Dosis">
  	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="http://www.servicentro.cl/src/stylesheet.css"/>
	<link rel="stylesheet" href="http://www.servicentro.cl/lib/font-awesome/css/font-awesome.min.css"/>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script src="http://www.servicentro.cl/src/jquery.popmenu.js"></script>
	<script src="http://www.servicentro.cl/src/menu.js"></script>
	<script src="http://www.servicentro.cl/src/scripts/twitter.js"></script>
	<script src="http://www.servicentro.cl/src/scripts/facebook.js"></script>
	<script>
        $(function(){
            $('#demo_box').popmenu();
        })
    </script>
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-50419520-1', 'servicentro.cl');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	</script>
	
	<script>
		<?php
			if( $_SERVER['REQUEST_METHOD'] === 'POST' ){
				$name = $_POST['name'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$telefono = $_POST['tel'];
				$ciudad = $_POST['city'];

				$to = 'contacto@servicentro.cl'; 
				$subject = 'Consulta desde Servicentro.cl';

				$from  = 'MIME-Version: 1.0' . "\r\n";
				$from .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				$from .= 'To: Servicentro <' . $to . '>' . "\r\n";
				$from .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";

				$body = '<html>
				<head>
					<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
					<title>Consulta desde Servicentro.cl</title>
				</head>
				<body>
					<header>
						<img src="http://www.servicentro.cl/src/img/customLogo.png">
					</header>
					<p>Has recibido un nuevo mensaje desde el sitio servicentro.cl.</p>
						<p><strong>Nombre: </strong> ' . $name . ' </p>
						<p><strong>Correo Electronico: </strong> ' . $email . ' </p>
						<p><strong>Telefono: </strong> ' . $telefono . ' </p>
						<p><strong>País: </strong> ' . $ciudad . ' </p>
						<p><strong>Mensaje: </strong> ' . $message . ' </p>
					</body>
				</html>';

				if (mail ($to, $subject, $body, $from)) { 
					$mensaje = '<p>Mensaje enviado, Gracias!</p>';
				} else { 
					$mensaje = '<p>Algo malo paso, intentalo nuevamente!</p>'; 
				}
			} else {
				$mensaje = ' ';
			}
		?>
	</script>
</head>
<body>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NMNBMM"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NMNBMM');</script>
	<!-- End Google Tag Manager -->

	<header>
		<img src="http://www.servicentro.cl/src/img/customLogo.png">
	</header>
	<div id= "menu-bar">
		<nav id="demo_box" class='menu'>
		</nav>
		<div style ="width: 100%;">
			<h2 class='titulo'>Contá<span class="rojo">c</span>tanos</h2>
		</div>
		<div class='social'>
			<div class="fb-like" data-href="//www.facebook.com/Servicentrocl" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
			<a href="//twitter.com/Servicentro_cl" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-lang="es"></a>
		</div>	
	</div>
	<div class= "outer">
		<section class="page">
			<div id="contact_form">
				<form name="form1" id="ff" method="post" action="contacto.php">
					<p>Tienes alguna duda, comentario o sugerencia? Nos gustaria saber de ti! Mándanos un mensaje!</p>	
					<label>
						<span>Nombre*:</span>
						<input class="textbox" type="text" placeholder="Ingresa tu nombre" name="name" id="name" required autofocus>
					</label>
					<label>
						<span>Ciudad*:</span>    
						<input class="textbox" type="text" placeholder="Ingresa tu ciudad" name="city" id="city" required>
					</label>
					<label>
						<span>Teléfono:</span>
						<input class="textbox" type="tel" placeholder="Ingresa tu telefono" name="tel" id="phone">
					</label>
					<label>
						<span>Correo*:</span>
						<input class="textbox" type="email" placeholder="tucorreo@mail.com" name="email" id="email" required>
					</label>
					<label for="message">
						<span>Pregunta o comentario*</span>
						<textarea name="message" placeholder="Ingresa tu mensaje" required></textarea>
					</label>
					<p></p>
					<input class="sendButton" type="submit" name="Submit" value="Enviar">
					<?php echo "$mensaje";?>
				</form>
			</div>
		</section>
	</div>
</body>
</html>