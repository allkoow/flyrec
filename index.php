<!DOCTYPE html>

<html lang="pl">
	<head>
		
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="https://fonts.googleapis.com/css?family=Dosis:400,600&subset=latin-ext" rel="stylesheet">
		
		<link rel="stylesheet" href="stylesheets/style.css" />
		<link rel="stylesheet" href="fontello/css/fontello.css" type="text/css" />

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="jquery.scrollTo.min.js"></script>
		<script src="parallax.min.js"></script>
		<script src="main.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
		<script src="angular.js" type="text/javascript"></script>
		

		<title>MK Sound</title>
	
	</head>

	<body>

		<header>
			<div id="header-container">
				<div id="logo">
					<i class="icon-circle"></i>
					<span>flyrec</span>
				</div>

				<nav>
					<ol>
						<li class="link1 link-current"><a>strona główna</a></li>
						<li class="link2"><a>Posłuchaj</a></li>
						<li class="link3"><a>O mnie</a></li>
						<li class="link4"><a>Usługi</a></li>
						<li class="link5"><a>Kontakt</a></li>
					</ol>
				</nav>

				<div id="nav-mini-symbol">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
		</header>

		<div id="nav-mini">
			<ol>
				<li class="link1"><a>Strona główna</a></li>
				<li class="link2" ><a>Posłuchaj</a></li>
				<li class="link3" ><a>O mnie</a></li>
				<li class="link4"><a>Usługi</a></li>
				<li class="link5" ><a>Kontakt</a></li>
			</ol>
		</div>	

		<div id="main">
			<div id="content1" class="background-image">

				<div id="big-logo">
					<img id="logo-belt" src="images/pasek.png" alt="logo" />
					<img id="logo-ball" src="images/kulka.png" alt="logo" />
					<!-- <span id="logo-ball"><i class="icon-circle"></i></span> -->
					<img id="logo-text" src="images/napis.png" alt="logo" />
					<!-- <span id="logo-text">flyrec</span> -->
				</div>
			
				<div id="text"> 
					<p> Realizujemy nagrania muzyczne oraz dźwiękowe. </p>
					<p>Zakres naszych usług sięga od procesu rejestracji aż do masteringu/ postprodukcji. </p> 
					<p>Niezależnie od tego czy potrzebujesz nagrać płytę, demo zespołu, koncert, czy też dowolne inne dźwięki, z nami zrobisz to na najwyższym poziomie w rozsądnej cenie.</p> 
					<p>Zapraszam do zapoznania się z naszą ofertą. </p>
					<p>Marcin Kowalczyk</p>
				</div>
				
				<div class="arrow">
					<i class="icon-down-open-big"></i>
				</div>


			</div>
			
			<div id="content2" ng-app="myApp" ng-controller="controller">
				<div class="content-center">
					<div id="links">
						 <div ng-repeat="x in covers" class="youtube-link"
						 		ng-mouseenter="hoverIn()"
						 		ng-mouseleave="hoverOut()"
						 		dom-directive
						 		model="x"
						 		ng-click="MouseDown($event,x.audio)">
						 		
							<img ng-src="images/{{x.cover}}" alt="artist" />
							
							<div class="play">
								<i ng-class="iconClass"></i>
							</div>
							
						</div>

						<audio id="demo" ng-src="audio/coldplay.mp3"></audio>
					</div>

					<div id="floating">
						<div id="link-desc">
							<p class="link-artist" ng-show="show"> {{title}} </p>
							<p class="link-year" ng-show="show"> {{year}} </p>
							<p class="link-other" ng-show="show"> {{record}} </p>
							<p class="link-other" ng-show="show"> {{edition}} </p>
							<p class="link-other" ng-show="show"> {{mixing}} </p>
							<p class="link-other" ng-show="show"> {{mastering}} </p>
						</div>
					</div>			
				</div>
			</div>

			<div id="content3" data-parallax="scroll" data-image-src="images/img2_low.png">
				<div class="glass-light">
					<div class="content">
						<h1>O mnie</h1>

						<p>
						Poszukiwanie brzmienia prawdziwego, jednocześnie unikalnego i niespotykanego, brzmienia, które odzwierciedli zamiar przekazu i treści muzycznej jest nieodłącznym elementem pracy nad własną płytą. Nie jest istotne czy nagrywasz muzykę klasyczną, popową, czy też ciężki rock. Muzyka, której z pasją poświęcasz swój czas wymaga szczególnej troski podczas procesu jej rejestracji. Znalezienie porozumienia między realizatorem a wykonawcą jest według mnie kluczowym elementem każdej współpracy. To, co tworzysz, jest wyjątkowe. A moim zadaniem jest tą wyjątkowość pielęgnować i pomóc Ci w jej uzewnętrznieniu. 
						</p>
					</div>
				</div>
			</div>
			
			<div id="content4" data-parallax="scroll" data-image-src="images/img3_low.png">
				<div class="glass-dark">
					<div class="content">
						<h1>Usługi</h1> 

						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper ac lorem nec aliquet. Mauris consequat bibendum risus at sagittis. In hac habitasse platea dictumst. Pellentesque risus libero, venenatis at nibh sed, bibendum feugiat augue. Nam dui odio, interdum at quam quis, eleifend fermentum metus. Vestibulum molestie egestas turpis vel tincidunt. Maecenas auctor pharetra turpis, sed accumsan purus efficitur et. Etiam vel quam nibh. Aenean nec ipsum vel ligula suscipit volutpat et lacinia justo. Sed turpis nulla, suscipit eu sapien in, lobortis pulvinar nibh. Mauris ut sapien nisi. Pellentesque felis neque, facilisis eget lobortis a, facilisis interdum dolor.
						</p>

						<p>Pellentesque sit amet blandit massa, sit amet ultricies massa. Nullam erat purus, volutpat id tristique ut, consectetur vel mauris. Ut pellentesque dignissim diam, vitae finibus metus consequat vel. Duis a nisl hendrerit felis varius lacinia eu sit amet ante. Nam consectetur nulla in scelerisque venenatis. Phasellus dictum, elit ac auctor tempor, lacus felis eleifend eros, ut luctus est ligula rhoncus augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vehicula ac dui ac placerat. Fusce tincidunt felis et elit egestas interdum quis vel quam.
						</p>
					</div>
				</div>
			</div>

			<div id="content5">
				<div class="content">
					<h1>Kontakt</h1>

					<p> <i class="icon-phone"> </i> +48 535 320 007 </p>
					<p> <i class="icon-mail-alt"> </i> 
						<a href="mailto:marcin.pianista@gmail.com">
							marcin.pianista@gmail.com
						</a> 
					</p>
				</div>
			<div>
		</div> 

		<footer>
			<div class="icon"> <i class="icon-facebook"></i> </div>
			<div class="icon"> <i class="icon-twitter"></i> </div>
			<div class="icon"> <i class="icon-youtube-squared"></i> </div>
			<p> Wszelkie prawa zastrzeżone &copy; 2016 MK Sound </p>
		</footer>

	</body>
</html>