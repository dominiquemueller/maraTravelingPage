<?php 

if(isset($_POST['submit'])){


    $to = "mara_tomaschett@bluewin.ch"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Du hast eine Nachricht via maratomaschett.ch bekommen";
    $message = $name  . " hat folgendes geschrieben:" . "\n\n" . $_POST['message'];
    $message2 = "Versandbestätigung für Deine Nachricht über maratomaschett.ch" . " \n\n " . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    $msg= "msgsend"; 
    $_POST['submit'] = '';
}

else{
	$msg="msgNotSend";
}

?>

<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Mara Tomaschett</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">

					<ul class="icons" style="float: left; margin-left: 35px">
						<li><a href="https://www.linkedin.com/in/mara-tomaschett-5551b818b/"  target="_blank" class="icon fa-linkedin"><span class="label">Twitter</span></a></li>
						<li><a href="https://www.instagram.com/maralucia___/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="tel:+41764054558"  class="icon fa-phone"><span class="label">Mobile</span></a></li>		
						<li><a href="mailto:mara_tomaschett@bluewin.ch"  class="icon fa-paper-plane"><span class="label">Mail</span></a></li>


															
					</ul>
			</header>


		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Mara Tomaschett</h1>
						<p>Touristikerin aus Leidenschaft. </p><p><em>Mein Traum: Mit dem Velo bis ans Meer.</em></p><br>
					</header>
					<a href="#main" class="button big scrolly">Witerluege</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
								<div class="flex flex-2">
									<div class="col col1">
										<div class="image round fit">
											<img src="images/mara-kuba.jpg" alt="Ferien in Kuba" />
										</div>
									</div>
									<div class="col col2">
										<h3>Herzlich Willkommen auf meiner eigenen kleinen Webseite. Vielen Dank für deinen Besuch! </h3>
										<p> Das Reisen ist der Mara’s Lust.  Am liebsten packe ich meine Sieben Sachen (okay vielleicht sind es eher 37 Sachen) und auf geht’s mit dem Zug. Backpacking ist eine meiner Leidenschaften. Beim Backpacken erlebt man meiner Meinung nach das Reisen am intensivsten. Es ist jedes Mal ein Abenteuer und jedes Mal einzigartig. Ich hoffe ich kann euch ein wenig mit meiner Reiselust anstecken und vielleicht geht ihr ja auf eurer nächsten Reise backpacken. Who knows? :-)  Reisen bedeutet für mich Freiheit, Abenteuer, Fremdes entdecken, Neues lernen aber auch über seine Grenzen hinaus gehen. Das ist es was mich immer wieder antreibt, das Fremde, Neue, und Unbekannte zu entdecken und dabei aber auch seine eigenen Grenzen zu überwinden. </p>
									</div>
								</div>
						</div>
					</section>

				<!-- Section -->
					<section class="wrapper style2">
						<div class="inner">

							<div class="flex flex-2">
								<div class="col col2">
									<h3>Zuhause ist es am schönsten</h3>
									<p>So toll es auch ist zu Reisen, zu Hause ist es immer noch am schönsten. Ich geniesse es die Schweiz mit dem Fahrrad zu erkunden und freue mich schon darauf die Stadt Bern bald meine neue Heimat nennen zu dürfen. Ausserdem versuche ich meine Lebensweise möglichst nachhaltig zu gestalten, in dem ich vor allem den ÖV oder mein Fahrrad nutze, lokale und saisonale Produkte konsumiere und Foodwaiste möglichst vermeide. Beim Reisen achte ich darauf, möglichst mit Zug und Bus unterwegs zu sein und viele lokale Produkte auszuprobieren.
									</p>


								</div>
								<div class="col col1 first">
									<div class="image round fit">
										<img src="images/mara-gleitschirm.jpeg" alt="" />
									</div>
								</div>
							</div>
						</div>
					</section>

				<!-- Section -->
			<section id="one" class="wrapper">

				<h2 style="text-align: center">Mein Rucksack ist gepackt!</h2>
				<br><br>
				<div class="inner flex flex-3"> 
				
					<div class="flex-item left">
						<div>
							<h3>Sprachen</h3>
							<p>Ich verständige mich in Deutsch, Englisch, <br>Französisch und Spanisch. </p>
						</div>
						<div>

							<h3>Begeisterung</h3>
							<p>Mich kann man für vieles gewinnen! </p>


						</div>
						<div>
						</div>
					</div>
					<div class="flex-item image fit round" alt="Maras Rucksack" style="max-width: 30%" /">
						<img src="images/mara-rucksack2.jpg" class="round">
					</div>
					<div class="flex-item right">
						<div>
							<h3>Grenzen überwinden</h3>
							<p>Du bist deine eigene Grenze. Erhebe dich darüber.</p>
						</div>
						<div>			
							<h3>Nachhaltigkeit</h3>
							<p>Meine Bachelor-Arbeit habe ich im Bereich nachhaltiger <br> Tourismus geschrieben.  Ich interessiere mich besonders <br> für lokale Reisen und Produkte.  </p>
						</div>
					</div>
				</div>
			</section>
				
					
			<section id="messagebanner" class="wrapper style1">
				<div class="inner">					

				<!-- Form -->
					

					<header class="align-center">
						<h2>Vielen Dank für Deine Nachricht!</h2>
						<p>
						</p>
					</header>										

					<form action="#messagebanner" method="post" class="customform">
						<div class="row uniform">
							<div class="6u 12u$(xsmall)">
								<input type="text" name="name" id="name" value="" placeholder="Di Name" />
							</div>
							<div class="6u$ 12u$(xsmall)">
								<input type="email" name="email" id="email" value="" placeholder="Dini Email Adräss" />
							</div>
							<!-- Break -->


							<!-- Break -->
							<div class="12u$">
								<textarea name="message" id="message" placeholder="Dini Nachricht" rows="6"></textarea>
							</div>
							<!-- Break -->
							<div class="12u$ custombuttoncontainer">
								<ul class="actions">
									<li><input type="submit" name="submit" value="Nachricht schickä" /></li>
								</ul>
								<span class="<?php echo "msg-info " . $msg;?>">
									<em>Vielen Dank für deine Nachricht. Ich melde mich bei dir! </em>
								</span>
							</div>
						</div>
					</form>
				</div>
			</section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">

					<p>All rights reserved. Design: <a href="https://templated.co" target="_blank">TEMPLATED</a>.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>

<style type="text/css">
	/* Fields */
body #messagebanner .customform input[type=date], body #messagebanner .customform input[type=datetime], body #messagebanner .customform input[type=datetime-local], body #messagebanner .customform input[type=email], body #messagebanner .customform input[type=month],input[type=number], body #messagebanner .customform input[type=password], input[type=range], body #messagebanner .customform input[type=search], input[type=tel], body #messagebanner .customform input[type=text], body #messagebanner .customform input[type=time], body #messagebanner .customform input[type=url], body #messagebanner .customform input[type=week], select {
    background-color: transparent; /* Remove background fill */
    text-transform: uppercase; /* Make text all uppercase */
    border-radius: 0; /* Remove corner curve */
    border: 2px solid #fff; /* 2px white border */
    color: #fff; /* White text */
    height: 45px; /* Increase input height */
}
::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #fff;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #fff;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #fff;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #fff;
}
::-ms-input-placeholder { /* Microsoft Edge */
   color:    #fff;
}

#messagebanner h2 {color: white;}
body #messagebanner .customform  textarea {
    background-color: transparent; /* Remove background fill */
    text-transform: uppercase; /* Make text all uppercase */
    border-radius: 0; /* Remove corner curve */
    border: 2px solid #fff; /* 2px white border */
    color: #fff; /* White text */

}

/*section#messagebanner {display: none}*/
#messagebanner {

    display: -ms-flexbox;
    -ms-flex-pack: center;
    -ms-flex-align: center;
    padding: 8em 0 6em 0;
    -moz-align-items: center;
    -webkit-align-items: center;
    -ms-align-items: center;
    align-items: center;
    display: -moz-flex;
    display: -webkit-flex;
    display: -ms-flex;
    display: flex;
    -moz-justify-content: center;
    -webkit-justify-content: center;
    -ms-justify-content: center;
    justify-content: center;
    background-image: url(images/messagebanner.jpg);
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    border-top: 0;
    min-height: 100vh;
    height: 100vh !important;
    position: relative;
    text-align: center;
    overflow: hidden;
}

#messagebanner:before {
    -moz-transition: opacity 3s ease;
    -webkit-transition: opacity 3s ease;
    -ms-transition: opacity 3s ease;
    transition: opacity 3s ease;
    -moz-transition-delay: 1.25s;
    -webkit-transition-delay: 1.25s;
    -ms-transition-delay: 1.25s;
    transition-delay: 1.25s;
    content: '';
    display: block;
    background-color: #000;
    height: 100%;
    left: 0;
    opacity: 0.65;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1;
}
.custombuttoncontainer {text-align: left;}
span.msg-info {color: #20CC82}
span.msg-info.msgsend {display: inline-block;}
span.msg-info {display: none;}
</style>		
</html>