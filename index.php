<?php 

include 'islem.php';

?>
<!DOCTYPE html>
<html lang="tr">

<head>
	<title><?php echo $siteCek["Site_baslik"]; ?> </title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Succinct Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta Tags -->
	<!-- Style Sheets -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--// Bootstrap-CSS -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--// Font-Awesome-CSS -->
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<!--// Responsive tabs -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Style Sheets -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Cinzel+Decorative:400,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
	<!--// web-fonts -->
</head>

<body>
	<!--banner-->
	<div class="banner" id="home">
		<div class="container">
			<!-- header -->
			<div class="header">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a href="index.php"><span>B</span><?php echo $anasafyaCek["Anasayfa_baslik"]; ?></a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">

						<?php	foreach($menuCek as $menuRow){ ?>
							<li><a href=<?php echo $menuRow["menu_yonlendirme"]; ?> class="hvr-underline-from-center scroll">
							 <?php  echo $menuRow["menu"]; ?></a></li>
						<?php }	?>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</nav>
			</div>
			<!-- //header -->

			<!-- banner-text-w3layouts -->
			<div class="banner-text-w3layouts">
				<h3><?php echo $anasafyaCek["Anasayfa_yazi1"]; ?></h3>
				<h2><?php echo $anasafyaCek["Anasayfa_yazi2"]; ?></h2>
				<a href="#"><?php echo $anasafyaCek["Anasayfa_cv"]; ?></a>
			</div>
		</div>

		<!--banner-Slider-->
	</div>
	<!--//banner-->
	<div class="about-section" id="hakkimda">
		<div class="container">
			<h5 class="title-main-w3ls">Hakkımda</h5>
			<!--responsive-tabs-->
			<div id="horizontalTab">

				<ul class="resp-tabs-list">
						<?php foreach($hakkimdaAlanCek as $hakkimdaAlanRow) { ?>
								<li><span></span><?php echo $hakkimdaAlanRow["hakkimda_alan"]; ?></li>
							<?php } ?>
				
				</ul>
				<div class="resp-tabs-container">

					<div class="tab1">
						<div class="col-md-10 about-left-w3layouts">
							<ul>
								<?php foreach($hakkimdaCek as $hakkimdaRow) { ?>
								<li><span><?php echo $hakkimdaRow["hakkimda_alan"]; ?></span>
									<?php echo $hakkimdaRow["hakkimda_deger"]; ?></li>
							<?php } ?>
							</ul>
							<div class="pos-grid-agileinfo">	
								<h5>About Me</h5>
							</div>
						</div>
					</div>

					<div class="tab2">
		
						<div class="col-md-10 about-left-w3layouts">

                  <?php  foreach ($yetenekCek as $yetenekRow) { ?>

        				<h6><?php echo $yetenekRow['yetenek_adi']; ?><span><?php echo $yetenekRow['yetenek_deger']; ?> </span></h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped active" style="width: <?php echo $yetenekRow['yetenek_deger']; ?>">
								</div>
							</div>
							<?php } ?>
							<div class="pos-grid-agileinfo">
								<span class="fa fa-line-chart" aria-hidden="true"></span>
								<h5>Yetenekler</h5>
							</div>
						</div>
					</div>

					<div class="tab3">
						<div class="col-md-10 about-left-w3layouts">
							
							
					
						<?php foreach ($egitimCek as $egitimRow) { ?>
							<div class="about-info-w3-agileits mid-bar-agileits-w3layouts">
								<h6><?php echo $egitimRow['okul_degeri']; ?> <span><?php echo $egitimRow['okul_tarih'] ?></span></h6>
								<div class="clearfix"> </div>
								<p><?php echo $egitimRow['okul_adi'] ?></p>
							</div>
					<?php	} ?>		
							<div class="pos-grid-agileinfo">
								<span class="fa fa-graduation-cap" aria-hidden="true"></span>
								<h5>Eğitim</h5>
							</div>
						</div>
					</div>

					<div class="tab4">
						<div class="col-md-10 about-left-w3layouts">
							
							<div class="about-info-w3-agileits">
								<h6>Baslık<span>Tarih</span></h6>
								<div class="clearfix"> </div>
								<p>Yakında Gelecek</p>
							</div>
							<div class="pos-grid-agileinfo">
								<span class="fa fa-shield" aria-hidden="true"></span>
								<h5>Hizmetler</h5>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- //Work -->
	<!-- Modal1 -->
		

	<!--// Clients -->
	<!-- contact -->
	<div class="contact-section" id="iletisim">
		<div class="container">
			<div class="contact-form">
				<h5 class="title-main-w3ls"></h5>
				<form action="#" method="post">
					<div class="col-md-6 styled-input-w3-agile">
						<input type="text" name="Full Name" placeholder="Ad-Soyad Giriniz" required="">
					</div>
					<div class="col-md-6 styled-input-w3-agile">
						<input type="email" name="Email" placeholder="E-posta Adresinizi Giriniz" required="">
					</div>
					<div class="clearfix"> </div>
					<div class="styled-input-w3-agile">
						<input type="text" name="Subject" placeholder="Konu Giriniz" required="">
					</div>	
					<div class="styled-input-w3-agile textarea-grid">
						<textarea name="Message" placeholder="Mesaj Giriniz" required=""></textarea>
					</div>
					<input type="submit" value="Gönder" name="gonder">
				</form>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- Footer -->
	<div class="copyright">
		<div class="container">
			<p> <?php echo $siteCek["Site_footer"]; echo $siteCek["Site_footer_tasarimYazi1"];  ?>
			<a href="<?php echo $siteCek["Site_footer_URL"];  ?>"> <?php echo $siteCek["Site_footer_tasarimYazi2"];  ?></a></p>
		</div>
	</div>
	<!-- //Footer -->
	<!-- Move-top arrow -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- // Move-top arrow -->
	<!--  Scripts -->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- start-smoth-scrolling -->

	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!--responsive-tabs-script-->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--//responsive-tabs-script-->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- // Scripts -->
</body>

</html>