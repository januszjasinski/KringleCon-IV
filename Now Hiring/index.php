<?php
define('DB_NAME', 'intern');
define('DB_USER', 'intern');
define('DB_PASSWORD', 'polarwinds');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Frost Tower</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
		.nav-link {
			font-size: 35px;
			color: #8fa5ca;
			-webkit-text-stroke: 1.5px #03489f;
		}
	</style>
</head>

<body>
	<div class="bs-component">
		<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
			<nav class="navbar navbar-expand-lg" style="background-color: #d5dfef;">
				<a class="navbar-brand" href="/"><img height="80px" width="auto" src="images/zoomed2.png"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarColor02">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/?p=opportunities">Opportunities</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/?p=apply">Apply</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/?p=about">About</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>

		<br />
		<br />

		<?php

		if (array_key_exists("submit", $_GET)) {
// Applicant submitted application, w00t! Process data.
			$headers=array_keys($_GET);
			if (!preg_match("/^[a-zA-Z0-9' ]+$/", $_GET['inputName'])) {
				die("Invalid name input");
			}

$filename = $_GET['inputName'] . date('Ymdhis') . ".csv"; //filename
$file = fopen($filename, 'a');
if ($file) {
	fputcsv($file, $headers );
	fputcsv($file, $_GET );
	fclose($file);

// Start to display response
	?>

	<div class="container">
		<div class="page-header" id="banner">
			<div class="row">
				<h1></h1>
			</div>
		</div>

		<div class="jumbotron">
			<h1 class="display-3">Submission Accepted</h1>
			<p class="lead"></p>
			<hr class="my-4">

			<?php
		} else {
			die("Unable to open file named $filename");
		}

		if(isset($_GET['inputWorkSample'])) {
			$image_url=$_GET['inputWorkSample'];
			$data = file_get_contents($image_url);
			$new = 'images/' . $_GET['inputName'] . '.jpg';
			$upload = file_put_contents($new, $data);
			if($upload) {
//echo "<img class='rounded mx-auto d-block img-thumbnail' width='200px' src='images/" . $_GET['inputName'] . ".jpg'>";
				?>

				<div class="row">
					<div class="col-sm-4">
						<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
							<div class="card-body">
								<p class="card-text"><h3><br />Naughty list recipients rejoice!<br /><br /><br /></h3></p>
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
							<div class="card-body">
								<img class="rounded mx-auto d-block" src="<?php echo "images/" . $_GET['inputName'] . ".jpg"; ?>" width="200px" />
							</div>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
							<div class="card-body">
								<p class="card-text"><h3><br />We'll be in touch.<br /><br /><br /></h3></p>
							</div>
						</div>
					</div>

				</div>
			</div>

			<?php

		}
	}

} elseif (empty($_GET)) {

// Show the main page

	?>

	<div class="container">
		<div class="page-header" id="banner">
			<div class="row">
				<h1></h1>
			</div>
		</div>

		<div class="jumbotron">
			<h1 class="display-3">Join the Frost Tower Team</h1>
			<p class="lead">An Opportunity that's Out of This World!</p>
			<hr class="my-4">
			<p></p>

			<div class="row">
				<div class="col-sm-4">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
						<div class="card-header">Real experience</div>
						<div class="card-body">
							<img class="rounded mx-auto d-block" src="images/jack.png" width="200px" />
							<p class="card-text">We're looking for individuals that offer the opposite of exemplary service. At Frost Tower, the truly terrible are welcome.</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
						<div class="card-header">Exciting Projects</div>
						<div class="card-body">
							<img class="rounded mx-auto d-block" src="images/lab.png" width="200px" />
							<p class="card-text">Can you offer our guests a demonstrably bad customer experience? Then you'll fit right in working at Frost Tower.</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4">
					<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
						<div class="card-header">Professional Mentorship</div>
						<div class="card-body">
							<img class="rounded mx-auto d-block" src="images/server.png" width="200px" />
							<p class="card-text">At Frist Tower you'll have the chance to work with other colleagues, each collectively providing a sub-par experience to all our guests.</p>
						</div>
					</div>
				</div>
			</div>

			<br />
			<br />

			<div class="row justify-content-center">
				<p class="lead">
					<a class="btn btn-primary btn-lg" href="/?p=apply" role="button">Apply Now</a>
				</p>
			</div>

		</div>

		<?php
	} elseif (isset($_GET['p']) && $_GET['p'] == 'opportunities') {

		?>

		<div class="container">
			<div class="page-header" id="banner">
				<div class="row">
					<h1></h1>
				</div>
			</div>

			<div class="alert alert-primary">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<h4 class="alert-heading">Positions Subject to Availability</h4>
				<p class="mb-0">All psitions at Frost Tower are subject to availability. This website may not reflect the most current positions available.</p>
			</div>

			<div class="jumbotron">

				<div class="card mb-3">
					<h3 class="card-header">Parking Valet</h3>
					<div class="card-body">
						<h5 class="card-title">Professional parking valet in the Frost Tower customer parking lot.</h5>
					</div>
					<img src="images/1.jpg">
					<div class="card-body">
						<p class="card-text">The person hired for this position is expected to park guest conveyances. Subsequent retrieval optional. Must have experience with sleighs.</p>
					</div>
				</div>

				<div class="card mb-3">
					<h3 class="card-header">Wait Staff</h3>
					<div class="card-body">
						<h5 class="card-title">Professional wait staff in the Frost Tower casino gaming areas.</h5>
					</div>
					<img src="images/2.jpg">
					<div class="card-body">
						<p class="card-text">The person hired for this position must be responsible for taking drink orders. Subsequent delivery of ordered beverages optional. Must have experience with hot cocoa.</p>
					</div>
				</div>

				<div class="card mb-3">
					<h3 class="card-header">Head Cashier</h3>
					<div class="card-body">
						<h5 class="card-title">Professional head cashier opportunity in the gaming cage area.</h5>
					</div>
					<img src="images/3.jpg">
					<div class="card-body">
						<p class="card-text">The person hired for this position will coordinate the efforts of the team to finalize cash transactions, maintain the balance in the cash drawer, and interact with guests in a sullen and uninterested mood.</p>
					</div>
				</div>

				<div class="card mb-3">
					<h3 class="card-header">Table Games Scheduler</h3>
					<div class="card-body">
						<h5 class="card-title">Professional coordinator for table games staff scheduling.</h5>
					</div>
					<img src="images/4.jpg">
					<div class="card-body">
						<p class="card-text">The individual hired for this position will be responsible for reviewing and evaluating all employee related scheduling issues, focusing on scheduling the opposite of all expressed employee needs.</p>
					</div>
				</div>



				<br />
				<br />

				<div class="row justify-content-center">
					<p class="lead">
						<a class="btn btn-primary btn-lg" href="/?p=apply" role="button">Apply Now</a>
					</p>
				</div>

			</div>

			<?php
		} elseif (isset($_GET['p']) && $_GET['p'] == 'about') {

			?>

			<div class="container">
				<div class="page-header" id="banner">
					<div class="row">
						<h1></h1>
					</div>
				</div>

				<div class="jumbotron">
					<h1 class="display-3">Careers at Frost Tower</h1>
					<p class="lead"></p>
					<hr class="my-4">
					<p>Frost Tower is an Equal Opportunity Employer. Frost Tower
						does not discriminate on the basis of race, religion, color, sex, gender
						identity, sexual orientation, age, non-disqualifying physical or mental
						disability, national origin, veteran status or any other basis covered by
						appropriate law. All employment is decided on the basis of qualifications,
					merit, and business need.</p>

				</div>
			</div>

			<?php
		} elseif (isset($_GET['p']) && $_GET['p'] == 'apply') {

			?>

			<div class="container">
				<div class="page-header" id="banner">
					<div class="row">
						<h1></h1>
					</div>
				</div>

				<div class="bs-docs-section">
					<div class="row">
						<div class="col-lg-12">
							<div class="page-header">
								<h1 id="forms">Career Application</h1>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6">
							<div class="bs-component">
								<form action="/" method="GET">
									<fieldset>
										<div class="form-group">
											<label for="inputName">Name</label>
											<input type="name" class="form-control" id="inputName" name="inputName" aria-describedby="nameHelp" placeholder="Your name">
										</div>
										<div class="form-group">
											<label for="inputEmail">Email address</label>
											<input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Your email">
											<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else :winkyface:.</small>
										</div>
										<div class="form-group">
											<label for="inputPhone">Phone number</label>
											<input type="phone" class="form-control" id="inputPhone" name="inputPhone" aria-describedby="phoneHelp" placeholder="Your phone">
											<small id="phoneHelp" class="form-text text-muted">We won't call you unless it's absolutely necessary, or when it's the middle of the night.</small>
										</div>
										<div class="form-group">
											<label for="inputField">Field of Expertise</label>
											<select multiple class="form-control" id="inputField" name="inputField" rows="13">
												<option>Aggravated pulling of hair</option>
												<option>Anti-social behavior</option>
												<option>Bedtime violation</option>
												<option>Crayon on walls</option>
												<option>Failure to feed a family pet</option>
												<option>Giving super atomic wedgies</option>
												<option>Naughty words</option>
												<option>Playing ball in house</option>
												<option>Talking back to parents or other adults</option>
												<option>Tantrum in a private facility</option>
												<option>Throwing rocks (at people)</option>
												<option>Throwing rocks (non-person target)</option>
												<option>Unauthorized access to cookie jar</option>
											</select>
											<small id="fieldHelp" class="form-text text-muted">Select all that apply.</small>
										</div>
										<div class="form-group">
											<label for="resumeFile">Resume</label>
											<input type="file" class="form-control-file" id="resumeFile" name="resumeFile" aria-describedby="fileHelp">
										</div>
										<div class="form-group">
											<p>Frost Tower only hires those who have been unjustly put on the naughty list. All applicants must be verify naughty list status by submitting a URL to their public <i>Naughty List Background Investigation</i> (NLBI) report.</p>
										</div>
										<hr> 
										<div class="form-group">
											<label for="inputWorkSample">URL to your public NLBI report</label>
											<input type="worksample" class="form-control" id="inputWorkSample" name="inputWorkSample" aria-describedby="worksampleHelp" placeholder="http://nppd.northpolechristmastown.com/NLBI/YourReportIdGoesHere">
											<small id="worksampleHelp" class="form-text text-muted">Include a link to your public NLBI report.</small>
										</div>
										<div class="form-group">
											<label for="additionalInformation">Any additional information?</label>
											<textarea class="form-control" id="additionalInformation" name="additionalInformation" rows="3" aria-describeby="additionalInformationHelp"></textarea>
											<small id="additionalInformationHelp" class="form-text text-muted">Share any additional information you think is important for your application consideration.</small>
										</div>
										<button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php

			}

			?>

		</body>
		</html>
