<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="msapplication-tap-highlight" content="no">
		<title>GAD-7: Questionnaire</title>
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
			<h2>Questionnaire</h2>
			<hr />

			<form action="calculator/compute" method="POST">
				<div class="row">
					<div class="col s12 m12 l12">
						<h5>Over the last two weeks, how often have you been bothered by the following problems? </h5>
						<table class="table highlight responsive-table">
							<thead>
								<tr>
									<th style="width:60%;">Question</th>
									<th style="width:40%;"></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Feeling nervous, anxious, or on edge</td>
									<td>
										<p>
											<strong id="q1-a">Not at all</strong>
										</p>
										<p class="range-field">
											<input type="range" class="range questions" min="0" max="3" name="q1" value="0"/>
										</p>
									</td>
								</tr>
								<tr>
									<td>Not being able to stop or control worrying</td>
									<td>
										<p>
											<strong id="q2-a">Not at all</strong>
										</p>
										<p class="range-field">
											<input type="range" class="range questions" min="0" max="3" name="q2" value="0"/>
										</p>
									</td>
								</tr>
								<tr>
									<td>Worrying too much about different things</td>
									<td>
										<p>
											<strong id="q3-a">Not at all</strong>
										</p>
										<p class="range-field">
											<input type="range" class="range questions" min="0" max="3" name="q3" value="0"/>
										</p>
									</td>
								</tr>
								<tr>
									<td>Trouble relaxing</td>
									<td>
										<p>
											<strong id="q4-a">Not at all</strong>
										</p>
										<p class="range-field">
											<input type="range" class="range questions" min="0" max="3" name="q4" value="0"/>
										</p>
									</td>
								</tr>
								<tr>
									<td>Being so restless that it's hard to sit still</td>
									<td>
										<p>
											<strong id="q5-a">Not at all</strong>
										</p>
										<p class="range-field">
											<input type="range" class="range questions" min="0" max="3" name="q5" value="0"/>
										</p>
									</td>
								</tr>
								<tr>
									<td>Becoming easily annoyed or irritable</td>
									<td>
										<p>
											<strong id="q6-a">Not at all</strong>
										</p>
										<p class="range-field">
											<input type="range" class="range questions" min="0" max="3" name="q6" value="0"/>
										</p>
									</td>
								</tr>
								<tr>
									<td>Feeling afraid as if something awful might happen</td>
									<td>
										<p>
											<strong id="q7-a">Not at all</strong>
										</p>
										<p class="range-field">
											<input type="range" class="range questions" min="0" max="3" name="q7" value="0"/>
										</p>
									</td>
								</tr>
							</tbody>
						</table>					
					</div>
				</div>
				<div class="row">
					<div class="col s5 m8 l9"></div>
					<div class="col s7 m4 l3">
						<input type="submit" name="submit" class="btn waves-effect waves-light teal darken-2" value="Submit" />
						<a class="btn waves-effect waves-light red darken-4" href="<?php echo base_url(); ?>">Back</a>
					</div>
				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/materialize.js"></script>
	<script type="text/javascript">
		function getMeaning(answer) {
			var meaning
			switch(answer) {
				case 0:
					meaning = "Not at all";
					break;
				case 1:
					meaning = "Several days";
					break;
				case 2:
					meaning = "More than half the days";
					break;
				case 3:
					meaning = "Nearly everday";
					break;
				default:
					break;
			}

			return meaning;
		}

		$(document).ready(function(){
			$(".range.questions").on('input', function(){
				var value = parseInt($(this).val())
				var name = $(this).attr('name')
				$("#" + name + "-a").text(getMeaning(value))
			});
		});
	</script>
</html>