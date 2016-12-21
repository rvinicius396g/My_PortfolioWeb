<!doctype html>
<html lang="en">

<head>
	<!-- Google Analystic -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-81743207-2', 'auto');
		  ga('send', 'pageview');
		</script>
	<!--  -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Roberto Vinicius | Portfolio | Contato</title>
	<meta name="author" content="Roberto Vinicius">
	<meta name="keywords" content="desenvolvimento,front-end,entre em contato,curriculum,essay,etc"/>
	<meta name="description" content="Portofolio do Roberto, para desenvolvimento Web (front-end/Back-End)"/>

	
	<!-- js/jq -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/functionality.js"></script>
	<script type="text/javascript" src="assets/js/app.js"></script>
	<!-- js/jq -->
	<!-- fonts -->
	<!-- Lato Font is Copyright (c) 2010-2014, Łukasz Dziedzic (dziedzic@typoland.com) -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<!-- fonts -->

	<!-- css -->
	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="../style/contact-form.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body class="animate-in-contact">

	<div id="wrapper" class="contact-bg"><!-- #wrapper -->
		
	<header><!-- header -->
		<div class="header-logo">
			<div class="header-logo"><a href="/"><img src="../img/logo03.png" alt="Roberto Vinicius da Silva logo"></a></div>
		</div>

		<!-- <div class="header-menu">	
			<button class="menu-hamburger menu-hamburger--htx">
  					<span>toggle menu</span>
			</button>
		</div>

		<div class="header-menu-instructions">Menu</div> -->

	</header><!-- header -->

		<nav><!-- #nav -->
			<ul>
                <li class="workNav"><a href="work.html">Work</a></li>
                <li class="aboutNav"><a href="about.html">About</a></li>
                <li class="contactNav"><a href="contact.html">Contact</a></li>
            </ul>
		</nav><!-- #nav -->
		
		<div id="content" class="contact"><!-- #content -->
			<div class="container"><!-- #container -->
				<div class="header-contact"><h2>Contato</h2></div>

				<p>
					Se você deseja entrar em contato para uma possível oportunidade de emprego, preencha os dados abaixo
				</p>

				<p>
					Deixe o seu nome, email e a mensagem e eu irei responder o mais rapido possível.
				</p>
				
				<div class="contact-form-container"><!-- #form -->  
  					<form id="contact" action="contato.php" method="POST">
    					<fieldset>
    						<label>Nome: <span class="red">*</span></label>
      						<input placeholder="Insira seu nome" name="name" id="name" type="text" tabindex="1" required="required">
      						<div id="nameError">INSIRA SEU NOME</div>
    					</fieldset>
    					<fieldset>
    						<label>Email: <span class="red">*</span></label>
      						<input placeholder="Insira o seu Email" name="email" id="email" type="email" tabindex="2" required="required">
      						<div id="emailError">Verifique o seu email!</div>
    					</fieldset>
    					<fieldset>
    						<label>Menssagem: <span class="red">*</span></label>
      						<textarea placeholder="Escreva sua mensagem aqui.." name="message" id="message" tabindex="3" required="required"></textarea>
      						<div id="msgError">Insira algo abaixo!</div>
    					</fieldset>
    					<div id="honeypot-field">
							<label>Keep this field blank</label>
							<input type="text" name="honeypot" id="honeypot" />
						</div>
    					<fieldset>
      						<button name="submit" type="submit" id="submit" data-submit="...Sending">ENVIAR</button>
    					</fieldset>
    					<div id="returnmessage"></div>
  						</form>
  							<?php
  								if (isset($_POST['submit'])) {
  								# code...  								
								require 'PHPMailer-master/PHPMailerAutoload.php';
								$mail = new PHPMailer;
								$mail->isSMTP();
								$mail->SMTPSecure = 'ssl';
								$mail->SMTPAuth = true;
								$mail->Host = 'smtp.gmail.com';
								$mail->Port = 465;
								$mail->Username = 'vinicius396g@gmai.com';
								$mail->Password = '211297robesilva';
								$mail->setFrom('vinicius396g@gmai.com');
								$mail->addAddress('recipients@email-address.com');
								$mail->Subject = 'Meu portfolio';
								$mail->Body = $_POST['message']."Enviada por: ".$_POST['name']."\n Mail: ".$_POST['email'];
								//send the message, check for errors
								if (!$mail->send()) {
								    echo "ERROR: " . $mail->ErrorInfo;
								} else {
								    echo "SUCCESS";
								}
							}
							?>

				</div><!-- #form -->

				</div><!-- #container -->

				<div class="up-mobile">
            			<img src="assets/images/contact/arrow-up.svg" class="up" width="40" alt="Up Arrow" onclick="goTop();">
            	</div>
				<div class="twitter-mobile">
            			<a href="https://www.twitter.com/rvinicius396g"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            	</div>
            	<div class="reserved-mobile">
            			<p>&copy; 2016 - Roberto Vinicius</p>
            	</div>

		</div><!-- #content -->
		
	<footer><!-- footer -->
		<div class="footer-container">

			<div class="footer-image">
				<a href="/"><img src="../img/logo03.png" alt="Roberto Vinicius "></a>
			</div>

			<div class="footer-text">
				<p>&copy; 2016 - Roberto Vinicius</p>
			</div>

			<div class="footer-twitter">
				<a href="https://www.twitter.com/rvinicius396g" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			</div>

		</div>
	</footer><!-- footer -->
		
	</div><!-- #wrapper -->


</body>

</html>