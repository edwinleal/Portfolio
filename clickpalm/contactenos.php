<?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['contactname']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['contactname']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	
	
	//Check to make sure that the country field is not empty
	if(trim($_POST['company']) == '') {
		$hasError = true;
	} else {
		$company = trim($_POST['company']);
	}
	

	//Check to make sure that the country field is not empty
	if(trim($_POST['charge']) == '') {
		$hasError = true;
	} else {
		$charge = trim($_POST['charge']);
	}

	

	//Check to make sure that the tel field is not empty
	if(trim($_POST['usrtel']) == '') {
		//$hasError = true;
	} else {
		$tel = trim($_POST['usrtel']);
	}
	
	//Check to make sure that the country field is not empty
	if(trim($_POST['country']) == '') {
		$hasError = true;
	} else {
		$country = trim($_POST['country']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		//$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}
	
	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		//$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = ''; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email  \n\nCompany: $company \n\nCharge: $charge \n\nTel: $tel \n\nCountry: $country \n\nSubject: $subject \n\nComments:\n $comments";
		$headers = 'From: Clickidea Soluciones al Alcance de un Click <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Contáctenos</title>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>

<script src="js/slides.min.jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	// validate signup form on keyup and submit
	var validator = $("#contactform").validate({
		rules: {
			contactname: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			subject: {
				required: false,
				minlength: 2
			},
			message: {
				required: false,
				minlength: 10
			},
			country: {
				required: true,
				minlength: 3
			}
		},
		messages: {
			contactname: {
				required: "Por favor ingrese su nombre",
				minlength: jQuery.format("Your name needs to be at least {0} characters")
			},
			email: {
				required: "Por favor, introduzca una dirección válida de correo electrónico",
				minlength: "Por favor, introduzca una dirección válida de correo electrónico"
			},
			company: {
				required: "Por favor, introduzca una empresa",
				minlength: "Por favor, introduzca una empresa"
			},
			charge: {
				required: "Por favor, introduzca su cargo",
				minlength: "Por favor, introduzca su cargo"
			},
			
			subject: {
				required: "Es necesario introducir un asunto!",
				minlength: jQuery.format("Ingrese por lo menos {0} caracteres")
			},
			message: {
				required: "Es necesario introducir un mensaje!",
				minlength: jQuery.format("Ingrese por lo menos {0} caracteres")
			},
			country: {
				required: "Es necesario introducir el país!",
				minlength: jQuery.format("Ingrese por lo menos {0} caracteres")
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			label.addClass("checked");
		}
	});
});
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48079210-1', 'clickidea.com');
  ga('send', 'pageview');

</script>
<!--[if IE]>
	<script type="text/javascript">
	(function(){
	var html5elmeents = "address|article|aside|audio|canvas|command|datalist|details|dialog|figure|figcaption|footer|header|hgroup|keygen|mark|meter|menu|nav|progress|ruby|section|time|video".split('|');
	for(var i = 0; i < html5elmeents.length; i++){
	document.createElement(html5elmeents[i]);
	}
	}
	)();
	</script>
	<![endif]-->
</head>

<body>
<div id="header-wrap">
  <header class="group">
    <h2><a href="index.html" title="ClickIdea">Click palm</a></h2>
    <div id="call">
    <ul class="call-us">
    	<p>Comuníquese con Nosotros:</p>
    	<li>USA - Miami: <span>+1 (305) 320 - 9665</span></li>
    	<li class="email-us"><span><a href="#" title="">info@clickpalm.com</a></span<</li>
    </ul>
      <h4 class="clients"><a href="#" target="_blank">Acceso a Clientes</a></h4>
    </div>
    <!-- end call -->
    <nav class="group">
      <ul>
        <li><a href="index.html" title="">Inicio</a></li>
        <li><a href="soluciones.html" title="">Soluciones </a></li>
        <li><a href="beneficios.html" title="">Beneficios </a></li>
        <li><a href="tecnologia.html" title="">Tecnología </a></li>
        <li><a href="contactenos.php" title="" class="select">Contáctenos</a></li>
        <li class="last">
          <div> 
          <a href="#" target="_blank"><img src="images/fb.jpg" width="33" height="32" alt="facebook"></a> 
          <a href="#" target="_blank"><img src="images/tw.jpg" width="33" height="33" alt="twitter"></a> 
          <a href="#" target="_blank"><img src="images/lk.jpg" width="33" height="33" alt="linkeding"></a> 
          </div>
        </li>
      </ul>
    </nav>
  </header>

</div>
<!-- end header wrap -->

<div id="container">
	<div id="us" class="group">
		<div class="cont-us">
			<h3>Contáctenos</h3>
			<p>Gracias por su interés en nuestra tecnología. Diligencie el siguiente formulario y lo vamos a contactar a la mayor brevedad posible.</p><br><br><br>
				<span class="offices">Miami - Estados Unidos</span>
				<p class="infoc">Teléfono: +1 (954) 217-6911. <br>
				Dirección: 1820 N. Corporate Lakes Blvd., Suite 305<br>
				Weston, FL 33326 </p> <br>
				
				<span class="offices">Bogotá - Colombia</span>
				<p class="infoc">Teléfono: +57 (313) 890-8687 <br>
				Dirección: Calle 90 No. 19 - 41, Oficina 201 <br>
				Edificio Quantum </p> <br>
								
				<div id="map-canvas"></div>
		</div>
		

		<div class="cont-us">
			<h3>Envianos tu mensaje</h3>
      <?php if(isset($hasError)) { //If errors are found ?>
      <p class="error">Por favor, compruebe si se han rellenado todos los campos con información válida y vuelva a intentarlo. Gracias.</p>
      <?php } ?>
      <?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
      <div class="success">
        <p><strong>Mensaje enviado con éxito!</strong></p>
        <p>Gracias por contáctarnos <strong><?php echo $name;?></strong>! Tu mensaje fue enviado con éxito y estaremos en contacto a la mayor brevedad.</p>
      </div>
      <?php } ?>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
        <p>
          <label for="name">Nombre: <em>*</em></label>
          <input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" placeholder="Ingresa tu nombre completo" />
        </p>
        <p>
          <label for="email">Correo Electrónico: <em>*</em></label>
          <input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" placeholder="Ingresa tu correo electrónico" />
        </p>
        <p>
          <label for="company">Empresa: <em>*</em></label>
          <input type="text" name="company" id="company" value="" class="required" role="input" aria-required="true" placeholder="Nombre de la empresa" />
        </p>
        <p>
          <label for="charge">Cargo: <em>*</em></label>
          <input type="text" name="charge" id="charge" value="" class="required" role="input" aria-required="true" placeholder="Ingresa tu cargo en la empresa" />
        </p>
        
        <p>
          <label for="tel">Teléfono: <em>*</em></label>
          <input type="text" name="usrtel" id="usrtel" value="" role="input" aria-required="true" placeholder="Ingresa tu número de contácto" />
        </p>
        <p>
          <label for="country">Pais: <em>*</em></label>
          <input type="text" name="country" id="country" value="" role="input" aria-required="true" placeholder="En que país te encuentras?" class="required" />
        </p>
        <p>
          <label for="subject">Área plantación: </label>
          <input type="text" name="subject" id="subject" value="" role="input" aria-required="true" placeholder="En que servicio estas interesado?" />
        </p>
        <p>
          <label for="message">Mensaje: </label>
          <textarea rows="8" name="message" id="message" role="textbox" aria-required="true" placeholder="Cuéntanos que dificultades enfrentas en tu plantación" ></textarea>
        </p>
        <p class="requiredNote"><em>*</em> Campos con asteriscos son obligatorios.</p>
        <input type="submit" value="Enviar Mensaje" name="submit" id="submitButton" title="Envia tu mensaje." />
      </form>
		</div>
	</div>
</div>

<!--! end container -->
<footer>
  <img alt="" src="images/logofooter.png">
  <div> 
  <a href="https://www.facebook.com/pages/Clickidea-Corp/511912805565988" target="_blank"><img src="images/ff.png" width="33" height="32" alt="facebook"></a> 
  <a href="https://twitter.com/clickideacorp" target="_blank"><img src="images/ft.png" width="33" height="33" alt="twitter"></a> 
  <a href="http://www.linkedin.com/company/clickidea-corporation?trk=top_nav_home" target="_blank"><img src="images/fl.png" width="33" height="33" alt="linkeding"></a> 
  </div>
  <div>
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Soluciones</a></li>
      <li><a href="#">Beneficios</a></li>
      <li><a href="#">Tecnología</a></li>
      <li><a href="#">Contáctenos</a></li>
    </ul>
  </div>
  <p>Copyright © 2013 Clickidea.</p>
</footer>
<!--! end footer -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>

function initialize() {
  var mapOptions = {
    zoom: 4,
    center: new google.maps.LatLng(14.928487,-76.597656), 
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);

  setMarkers(map, offices);
}

var offices = [
  ['USA Clickidea', 25.815773,-80.323489, 4],
  ['Colombia Clickidea', 4.866767,-74.036547, 5],
];

function setMarkers(map, locations) { 
  var image = {
    url: 'images/clickideapin.png',

    size: new google.maps.Size(40, 51),

    origin: new google.maps.Point(0,0),

    anchor: new google.maps.Point(16, 53)
  };
  var shape = {
      coord: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  for (var i = 0; i < locations.length; i++) {
    var Clickidea = locations[i];
    var myLatLng = new google.maps.LatLng(Clickidea[1], Clickidea[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: image,
        shape: shape,
        title: Clickidea[0],
        zIndex: Clickidea[3]
    });
  }
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</body>
</html>
