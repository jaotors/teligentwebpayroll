<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				<ul class="main-navigation">
					<li><a href="">Home</a></li>
				</ul>
				<ul class="navigation">
					<li><a href="">Payroll Registry</a></li>
					<li><a href="">Payslip Calculator</a></li>
				</ul>
			</div>
		</nav>
	</header>

	<!-- MAIN CONTENTS or etc goes here -->
	<main>
		{!! Form::open(['url' => 'generatepayslip']) !!}
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="content-container payroll-info">
							<div class="content-container-title">
								<h3>Payslip Information</h3>
							</div>
							<div class="input-container">
								<div class="input-hold-lg">
									<span class="input-label">Company Name</span>
									{!! Form::text('companyname') !!}
								</div>
								<div class="input-hold-lg">
									<span class="input-label">Employee Name</span>
									{!! Form::text('employeename') !!}
								</div>
								<div class="input-hold-lg">
									<span class="input-label">Position</span>
									{!! Form::text('employeeposition') !!}
								</div>
								<div class="input-hold-lg">
									<span class="input-label">Employee Type</span>
									{!! Form::select('employeetype', ['Regular' => 'Regular','Contractual' => 'Contractual']) !!}
								</div>
								<div class="input-hold-lg">
									<span class="input-label">Payslip Type</span>
									{!! Form::select('paysliptype', ['Monthly' => 'Monthly', 'Semi-Monthly' => 'Semi-Monthly']) !!}
								</div>
								<div class="input-hold-lg">
									<span class="input-label">Start Date</span>
									{!! Form::text('startdate') !!}
								</div>
								<div class="input-hold-lg">
									<span class="input-label">End Date</span>
									{!! Form::text('enddate') !!}
								</div>
								<div class="input-hold-lg">
									<span class="input-label">Email</span>
									{!! Form::text('email') !!}
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="content-container payslip-calc">
							<div class="content-container-title">
								<h3>Payslip Calculation</h3>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-hold-md">
										<span class="input-label">Hours Required</span>
										{!! Form::text('hoursrequired') !!}
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-hold-md">
										<span class="input-label">Semi-monthly Base</span>
										{!! Form::text('semimonthlybase') !!}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="input-hold-md">
										<span class="input-label">Hours Rendered</span>
										{!! Form::text('hoursrendered') !!}
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-hold-md">
										<span class="input-label">Hourly Rate</span>
										{!! Form::text('hourlyrate') !!}
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
												<h5 class="hidden-xs">Values (PHP)</h5>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<div class="input-hold-md">
												<span class="input-label">Regular Pay</span>
												{!! Form::text('regularpay') !!}
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-hold-md">
												{!! Form::text('regularpayphp', '', ['class'=>'input-border']) !!}
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<div class="input-hold-md">
												<span class="input-label">&gt; 8 Hours</span>
												{!! Form::text('greatereighthours') !!}
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-hold-md">
												{!! Form::text('greatereighthoursphp', '', ['class'=>'input-border']) !!}
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<div class="input-hold-md">
												<span class="input-label">Night Diff</span>
												{!! Form::text('nightdiff') !!}
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-hold-md">
												{!! Form::text('nightdiffphp', '', ['class'=>'input-border']) !!}
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<div class="input-hold-md">
												<span class="input-label">&gt; 8 Hours ND</span>
												{!! Form::text('nightdiffeighthours') !!}
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-hold-md">
												{!! Form::text('nightdiffeighthoursphp', '', ['class'=>'input-border']) !!}
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<div class="input-hold-md">
												<span class="input-label">Holiday</span>
												{!! Form::text('holidaypay') !!}
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-hold-md">
												{!! Form::text('holidaypayphp', '', ['class'=>'input-border']) !!}
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-8">
											<div class="input-hold-md">
												<span class="input-label">Special Holiday</span>
												{!! Form::text('specialholidaypay') !!}
											</div>
										</div>
										<div class="col-sm-4">
											<div class="input-hold-md">
												{!! Form::text('specialholidaypayphp', '', ['class'=>'input-border']) !!}
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
												<h5 class="hidden-xs">Values (PHP)</h5>
											</div>
											<div class="input-hold-md">
												<span class="input-label">Loss Hours</span>
												{!! Form::text('losshours') !!}
											</div>
											<div class="input-hold-md">
												<span class="input-label">SSS</span>
												{!! Form::text('sss') !!}
											</div>
											<div class="input-hold-md">
												<span class="input-label">Pag-ibig</span>
												{!! Form::text('pagibig') !!}
											</div>
											<div class="input-hold-md">
												<span class="input-label">Philhealth</span>
												{!! Form::text('philhealth') !!}
											</div>
											<div class="input-hold-md">
												<span class="input-label">Adjustments</span>
												{!! Form::text('deducadjustments') !!}
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="content-container custom-container">
							<div class="row">
								<div class="col-md-6">
									<div class="input-container">
										<div class="input-hold-lg">
											<span class="input-label">Total OT Pay</span>
											{!! Form::text('totalotpay') !!}
										</div>
										<div class="input-hold-lg">
											<span class="input-label">Gross Pay</span>
											{!! Form::text('grosspay') !!}
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-container">
										<div class="input-hold-lg">
											<span class="input-label">Deductions</span>
											{!! Form::text('deductions') !!}
										</div>
										<div class="input-hold-lg">
											<span class="input-label">Net Pay</span>
											{!! Form::text('netpay') !!}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row btn-wrapper">
					<div class="btn-hold">
						{!! Form::select('generatetype', ['xls' => 'Excel','pdf' => 'PDF']) !!}
					</div>
					<div class="btn-hold">
						{!! Form::submit('Generate', ['class'=>'box-whole']) !!}
					</div>
				</div>
			</div>
		{!! Form::close() !!}
	</main>

	<!-- FOOTER goes here but we don't have footer so empty space -->
	<footer></footer>
	

	<!-- js goes here -->
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>