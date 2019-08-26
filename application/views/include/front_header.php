<html>
	<head>
	<title></title>
	<meta charset="UTF-8" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<?php //echo '<pre/>'; print_r($_SERVER['HTTP_HOST']); ?>
	<style type="text/css">

	@font-face {
		  font-family: Avenir;
		  src: url("font/Avenir-Roman.ttf");
		}
		
	body{
	    height: 1700px;
		width: 1920px;
		background-color: #090D15;
		max-width: 100%;
		padding-top: 30px;
		margin: 0 auto;
		}
	
	
		.rectangle-copy {
			height: 1700px;
			width: 1920px;
			background-color: #090D15;
			max-width: 100%;
			padding-top : 30px;	
		}
		.center-rectangle{
			height: 25px;
			width: 1000px;
			max-width: 100%;
			margin: 0 auto;
		}
		.center-rectangle a{
			text-decoration: none;
			float: right;
		}
		.privacy {
			height: 48px;
			width: 164px;
			max-width: 100%;
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 20px;
			font-weight: 300;
			line-height: 27px;
			text-align: center;
		}
		.terms-conditions {
			height: 48px;
			width: 254px;
			max-width: 100%;
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 20px;
			font-weight: 300;
			line-height: 27px;
			text-align: center;
		}
		.full-name {	height: 16px;	width: 703px;	color: #FFFFFF;	font-family: Avenir;	font-size: 12px;	font-weight: 300;	line-height: 16px;}
		.email-address-copy {	height: 16px;	width: 703px;	color: #FFFFFF;	font-family: Avenir;	font-size: 12px;	font-weight: 300;	line-height: 16px;}
		.company-name-optio-copy {	height: 16px;	width: 344px;	color: #FFFFFF;	font-family: Avenir;	font-size: 12px;	font-style: oblique;	font-weight: 300;	line-height: 16px;}
		.phone-number-optio-copy {	height: 16px;	width: 344px;	color: #FFFFFF;	font-family: Avenir;	font-size: 12px;	font-style: oblique;	font-weight: 300;	line-height: 16px;}
		
		.masaaki-komori-lu-9-z-9-q-s-8- {
			height: 1726px;
			width: 1222px;
			max-width: 100%;
			background-image: url("uploads/comingsoonpageimages/new.jpeg");
			background-repeat: no-repeat;	
			background-position: right top;
			float: right;
		}
		.group-40-copy {
			height: 314px;
			width: 794px;
			max-width: 100%;
			margin-top: 65px;
		}
		.line-3-copy {
			box-sizing: border-box;
			height: 1px;
			width: 508px;
			border: 5px solid #0078FF;
			margin-top: 20px;
			margin-bottom: 20px;
		}
		.line-3-copy-2 {
			box-sizing: border-box;
			height: 1px;
			width: 164px;
			border: 1px solid #FFFFFF;
			margin-bottom: 55px;
		}
		.underwater-mapping-i {
			height: 374px;
			width: 900px;
			max-width: 100%;
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 100px;
			line-height: 95px;
			/*background-color: #044714;*/
			/*margin-top: 40px;*/
		}
		.rectangle-copy-12 {
			height: 270px;
			width: 1424px;
			max-width: 100%;
			opacity: 0.9;
			border-radius: 10px;
			background-color: #FFFFFF;
			margin-top: -60px;
		}
		.combined-shape {
			height: 137.51px;
			width: 143.75px;
			background-color: #00FF4B;
		}
		.thank-you-for-submi {
			/*height: 370px;*/
			width: 1020px;
			color: #1E1E1E;
			font-family: Avenir;
			font-size: 30px;
			font-weight: 300;
			line-height: 55px;
			text-align: center;
			/*padding-top: 80px;*/
			margin-left: -140px;
		}
		.imagine-if-we-really {
			height: 243px;
			width: 1064px;
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 20px;
			/*font-weight: 900;*/
			line-height: 27px;
		}
		.sign-up-to-recieve {
			height: 41px;
			width: 703px;
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 30px;
			font-weight: 900;
			line-height: 41px;
			margin-bottom: 15px;
		}
		.sign-up-to-recieve-mob{
			display: none;
		}
		.rectangle-copy-14 {
			height: 45px;
			width: 343px;
			border: 1px solid #FFFFFF;
			border-radius: 2px;
			background-color: rgba(30,30,30,0.2);
			color: #FFFFFF;
		}
		.about {
			height: 31px;
			width: 385px;
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 20px;
			font-weight: 900;
			line-height: 27px;
			padding-top: 50px;
			margin-left: 300px;
		}
		placeholder{ color:#1E1E1E; }
		::-webkit-input-placeholder { /* Edge */
		 color:#1E1E1E;
		}

		:-ms-input-placeholder { /* Internet Explorer 10-11 */
		  color:#1E1E1E;
		}

		::placeholder {
		 color:#1E1E1E;
		}
		.rectangle {
			height: 400px;
			width: 1920px;
			background-color: #1E1E1E;
			max-width: 100%;
		}
		.lorem-ipsum-dolor-si {
			/*height: 35px;*/
			/*width: 385px;*/
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 16px;
			font-weight: 500;
			margin-left: 300px;
		}
		.contact {
			height: 31px;
			width: 279px;
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 20px;
			font-weight: 900;
			line-height: 27px;
			margin-left: 800px;
		}
		.e-info-uamtec-com {
			/*height: 25px;*/
			/*width: 120px;*/
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 20px;
			font-weight: 900;
			line-height: 27px;
			margin-left: 783px;
			margin-top: -210px;
		}
		.lorem{
			color: #FFFFFF;
			margin-left: 281px;
			width: 500px;
			margin-top: 20px;
		}
		.all-rig {
			height: 17px;
			width: 916px;
			color: #FFFFFF;
			font-family: Avenir;
			font-size: 12px;
			font-weight: 900;
			line-height: 16px;
			text-align: center;
			margin-top: 180px;
			margin-left: 250px;
		}
		.company-field{
			height: 45px;
			width: 344px;
			border-radius: 2px;
			background-color:#FFFFFF;
		}
		.phone-field{
			height:45px;
			width:344px;
			border-radius:2px;
			background-color:#FFFFFF;
		}
		.modal-display{
			opacity: 0.9 !important;
			margin-top:15%
		}
		@media screen and (max-width: 1151px and min-width: 990px) {
			.modal-content{
				width: 110%;
				margin-left: -18px;
			}
		}
		@media screen and (max-width: 989px) {
			.modal-content{
				width: 175%;
				margin-left: -117px;
			}
		}
		
		@media screen and (max-width: 1070px) {
			.center-rectangle{
				margin-left: -96px;
			}
			.company-field{
				width: 290px;
				/*margin-left: 10px;*/
			}
			.rectangle-copy{
				height: 1450px;
			}
			.rectangle{
				height: 500px;
			}
			.masaaki-komori-lu-9-z-9-q-s-8-{
				height: 1375px;
			}
			.line-3-copy {
				display: none
			}
		}
		@media screen and (max-width: 1151px) {
			.center-rectangle{
				margin-left: -80px;
			}
			.company-field{
				width: 290px;
			}
		}
		@media screen and (max-width: 1151px) {
			body{
				max-width: 140%;
			}
			.group-40-copy{
				margin-left: 165px;
			}
			.underwater-mapping-i{
				font-size: 48px;
				margin-left: 65px;
				height: 170px;
				margin-bottom: 55px;
			}
			.line-3-copy-2{
				margin-left: 65px;
			}
			.imagine-if-we-really{
				margin-left: 60px;
				font-size: 24px;
				margin-top: -80px;
			}
			.line-3-copy{
				display: none
			}
			.signUpForm{
				margin-left: 238px;
			}
			.sign-up-to-recieve{
				margin-top: 50px;
			}
			.line-3-copy-mob {
				box-sizing: border-box;
				height: 1px;
				width: 508px;
				border: 5px solid #0078FF;
				margin-top: 20px;
				margin-bottom: 20px;
				margin-left: 180px;
			}
			.company-name-optio-copy{
				margin-left: 10px;
			}
			.line-3-copy-2{
				display: none
			}
			.phone-field{
				margin-left: 17px;
				width: 324px;
			}
			.sign-up-to-recieve-mob{
				height: 41px;
				width: 703px;
				color: #FFFFFF;
				font-family: Avenir;
				font-size: 30px;
				font-weight: 900;
				line-height: 41px;
				margin-bottom: 15px;
				margin-top: 50px;
				display: block;
			}
			.sign-up-to-recieve{
				display: none;	
			}
			.thank-you-for-submi{
				height: 270px;
				width: 528px;
				font-size: 40px;
				padding-top: 18px;
				margin-left: 145px;
			}
			.modal-close{
				font-size: 65px;
			}
			/*.modal-display{
				padding-top: 45%;
			}*/
			/*.modal-content{
				width: 175%;
				margin-left: -170px;
			}*/
		}
	</style>
	</head>
	<body>
		<div class="contaier">
			<div class="rectangle-copy">
				<div class="center-rectangle">
					<a href="#" class="terms-conditions">TERMS & CONDITIONS</a>
					<a href="#" class="privacy">PRIVACY</a>
				</div>