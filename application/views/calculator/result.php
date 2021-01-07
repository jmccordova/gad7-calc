<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="msapplication-tap-highlight" content="no">
		<title>GAD-7: Result</title>
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
			<h1>GAD-7</h1>
			<h2>Result</h2>

			<div class="body">
				<div class="row">
					<h6>Over the last two weeks, how often have you been bothered by the following problems? </h6>
				</div>
				<div class="row">
					<div class="col s7 m7 l9">
						<table class="table highlight">
							<thead>
								<tr>
									<th>Question</th>
									<th>Your answer</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Feeling nervous, anxious, or on edge</td>
									<td><?php echo $ans1; ?></td>
								</tr>
								<tr>
									<td>Not being able to stop or control worrying</td>
									<td><?php echo $ans2; ?></td>
								</tr>
								<tr>
									<td>Worrying too much about different things</td>
									<td><?php echo $ans3; ?></td>
								</tr>
								<tr>
									<td>Trouble relaxing</td>
									<td><?php echo $ans4; ?></td>
								</tr>
								<tr>
									<td>Being so restless that it's hard to sit still</td>
									<td><?php echo $ans5; ?></td>
								</tr>
								<tr>
									<td>Becoming easily annoyed or irritable</td>
									<td><?php echo $ans6; ?></td>
								</tr>
								<tr>
									<td>Feeling afraid as if something awful might happen</td>
									<td><?php echo $ans7; ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col s5 m5 l3">
						<div class="card">
							<div class="card-image">
								<img src="<?php echo base_url() . 'assets/images/' . $analysis . '.jpg'; ?>" />
								<span class="card-title">Findings</span>
								<a class="btn-floating halfway-fab waves-effect waves-light red" href="https://www.livestrong.com/article/97139-different-levels-anxiety/" target="_blank" title="Read more details here.">
									<i class="material-icons">launch</i>
								</a>
							</div>
							<div class="card-content">
								<p>You got a total of <b><?php echo $result;?></b>. Based from the analysis, your level of anxiety is at <b><u><?php echo $analysis; ?></u></b>. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fixed-action-btn">
				<a href="<?php echo base_url(); ?>" class="btn-floating btn-large waves-effect waves-light teal" title="Back">
					<i class="material-icons">arrow_back</i>
				</a>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
</html>