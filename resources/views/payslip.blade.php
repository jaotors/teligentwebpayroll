<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Payroll</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/template.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- NAVIGATION goes here -->
	<header>
		<nav>
			<div class="navigation-wrapper">
				<ul class="navigation">
					<li>Home</li>
					<li>Payroll Registry</li>
					<li>Payroll Calculator</li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- MAIN CONTENTS or etc goes here -->
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="content-container">
					<div class="content-container-title">
						<h3>Payslip Information</h3>
					</div>
						<div class="input-container">
							<div class="input-hold-lg">
								<span class="input-label">Company Name</span>
								<input type="text">
							</div>
							<div class="input-hold-lg">
								<span class="input-label">Employee Name</span>
								<input type="text">
							</div>
							<div class="input-hold-lg">
								<span class="input-label">Position</span>
								<input type="text">
							</div>
							<div class="input-hold-lg">
								<span class="input-label">Employee Type</span>
								<select name="" id=""></select>
							</div>
							<div class="input-hold-lg">
								<span class="input-label">Payslip Type</span>
								<select name="" id=""></select>
							</div>
							<div class="input-hold-lg">
								<span class="input-label">Start Date</span>
								<input type="text">
							</div>
							<div class="input-hold-lg">
								<span class="input-label">End Date</span>
								<input type="text">
							</div>
							<div class="input-hold-lg">
								<span class="input-label">Email</span>
								<input type="text">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="content-container">
						<div class="content-container-title">
							<h3>Payslip Calculation</h3>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-hold-md">
									<span class="input-label">Hours Required</span>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-hold-md">
									<span class="input-label">Semi-monthly Base</span>
									<input type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="input-hold-md">
									<span class="input-label">Hours Rendered</span>
									<input type="text">
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-hold-md">
									<span class="input-label">Hourly Rate</span>
									<input type="text">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-7 ot-hold">
								<div class="sub-container-title">
									<h4>Overtime Pay</h4>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<div class="input-hold-title">
											<h5>No. Of Hours</h5>
										</div>
									</div>
									<div class="col-xs-4">
										<div class="input-hold-title">
											<h5>Values (PHP)</h5>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<div class="input-hold-md">
											<span class="input-label">Regular Pay</span>
											<input type="text">
										</div>
									</div>
									<div class="col-xs-4">
										<div class="input-hold-md">
											<input type="text" class="input-border">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<div class="input-hold-md">
											<span class="input-label">&gt; 8 Hours</span>
											<input type="text">
										</div>
									</div>
									<div class="col-xs-4">
										<div class="input-hold-md">
											<input type="text" class="input-border">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<div class="input-hold-md">
											<span class="input-label">Night Diff</span>
											<input type="text">
										</div>
									</div>
									<div class="col-xs-4">
										<div class="input-hold-md">
											<input type="text" class="input-border">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<div class="input-hold-md">
											<span class="input-label">&gt; 8 Hours ND</span>
											<input type="text">
										</div>
									</div>
									<div class="col-xs-4">
										<div class="input-hold-md">
											<input type="text" class="input-border">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<div class="input-hold-md">
											<span class="input-label">Holiday</span>
											<input type="text">
										</div>
									</div>
									<div class="col-xs-4">
										<div class="input-hold-md">
											<input type="text" class="input-border">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-8">
										<div class="input-hold-md">
											<span class="input-label">Special Holiday</span>
											<input type="text">
										</div>
									</div>
									<div class="col-xs-4">
										<div class="input-hold-md">
											<input type="text" class="input-border">
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-5 deduc-hold">
								<div class="sub-container-title">
									<h4>Deductions</h4>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="input-hold-title">
											<h5>Values (PHP)</h5>
										</div>
										<div class="input-hold-md">
											<span class="input-label">SSS</span>
											<input type="text">
										</div>
										<div class="input-hold-md">
											<span class="input-label">Pag-ibig</span>
											<input type="text">
										</div>
										<div class="input-hold-md">
											<span class="input-label">Philhealth</span>
											<input type="text">
										</div>
										<div class="input-hold-md">
											<span class="input-label">Adjustments</span>
											<input type="text">
										</div>
										<div class="input-hold-md">
											<span class="input-label">Total Deductions</span>
											<input type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<!-- FOOTER goes here but we don't have footer so empty space -->
	<footer></footer>
	

	<!-- js goes here -->
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>