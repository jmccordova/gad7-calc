<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="msapplication-tap-highlight" content="no">
		<title>GAD-7</title>
		<meta name="theme-color" content="#EE6E73">
		<!-- Favicons-->
	    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-152x152.png">
	    <meta name="msapplication-TileColor" content="#FFFFFF">
	    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/images/favicon/mstile-144x144.png">
	    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" type="image/x-icon">
	    <!-- Android 5 Chrome Color -->
		<link rel="stylesheet"  type="text/css" href="<?php echo base_url(); ?>assets/css/icon.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/materialize.css" />
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col s12 m12 l12">
					<h1>GAD-7</h1>
					<hr />
					<h5>Generalized Anxiety Disorder Seven-point Questionnaire</h5>

					<div class="body">
						<p>This questionnaire is lifted from <a href="https://adaa.org/sites/default/files/GAD-7_Anxiety-updated_0.pdf">this website</a>. This project is part of MI 237 requirement for 1<sup>st</sup> Semester AY 2020-2021.</p>

						<p>The formula for this one is the sum of all the weight of the user's chosen options per question.</p>

						<p>Based from the sum, this program will give the appropriate textual analysis of their anxiety level.</p>

					</div>
				</div>
			</div>
			<div class="fixed-action-btn">
				<a href="calculator" class="btn-floating btn-large waves-effect waves-light teal" title="Start">
					<i class="material-icons">add</i>
				</a>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.fixed-action-btn').floatingActionButton();
		});
	</script>
</html>