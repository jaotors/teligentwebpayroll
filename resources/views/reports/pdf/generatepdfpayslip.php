<!DOCTYPE html>
<html>
<head>
    <title>Payslip Information</title>
    <style type="text/css">
		div {position: relative;}
		table { border: 1px solid #999; }
		table.left-table {width: 30%; position: absolute; left: 0;}
		table.right-table {width: 69%; position: absolute; right: 0;}
		td {font-size: 10px;}
		h2 { text-align: center; font-fami}
	</style>
</head>
<body>
	<h2>Logo of the company</h2>
	<div>
		<table class="left-table">
			<tbody>
				<tr>
					<td>Company Name:</td>
					<td><b> <?php echo $companyname; ?> </b></td>
				</tr>
				<tr>
					<td>Employee Name:</td>
					<td><b> <?php echo $employeename; ?> </b></td>
				</tr>
				<tr>
					<td>Position:</td>
					<td><b> <?php echo $employeeposition; ?> </b></td>
				</tr>
				<tr>
					<td>Employee Type:</td>
					<td><b> <?php echo $employeetype; ?> </b></td>
				</tr>
				<tr>
					<td>Payslip Type:</td>
					<td><b> <?php echo $paysliptype; ?> </b></td>
				</tr>
				<tr>
					<td>Start Date:</td>
					<td><b> <?php echo $startdate; ?> </b></td>
				</tr>
				<tr>
					<td>End Date</td>
					<td><b> <?php echo $enddate; ?> </b></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><b> <?php echo $email; ?> </b></td>
				</tr>
			</tbody>
		</table>
		<table class="right-table">
			<tbody>
				<tr>
					<td>Hours Required:</td>
					<td> <?php echo $hoursrequired; ?> </td>
					<td>Semi-Monthly Base:</td>
					<td> <?php echo $semimonthlybase; ?> </td>
				</tr>
				<tr>
					<td>Hours Rendered:</td>
					<td> <?php echo $hoursrendered; ?> </td>
					<td>Hourly Rate:</td>
					<td> <?php echo $hourlyrate; ?> </td>
				</tr>

				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>Hours</td>
					<td>Php</td>
					<td>&nbsp;</td>
					<td>Php</td>
				</tr>
				<tr>
					<td>Regular Pay:</td>
					<td> <?php echo $regularpay; ?> </td>
					<td> <?php echo $regularpayphp; ?> </td>
					<td>Loss Hours: </td>
					<td> <?php echo $losshours; ?> </td>
				</tr>
				<tr>
					<td>&gt; 8 Hours: </td>
					<td> <?php echo $greatereighthours; ?> </td>
					<td> <?php echo $greatereighthoursphp; ?> </td>
					<td>SSS: </td>
					<td> <?php echo $sss; ?> </td>
				</tr>
				<tr>
					<td>Night Diff: </td>
					<td> <?php echo $nightdiff; ?> </td>
					<td> <?php echo $nightdiffphp; ?> </td>
					<td>PAG-IBIG: </td>
					<td> <?php echo $pagibig; ?> </td>
				</tr>
				<tr>
					<td>&gt; 8 Hours ND: </td>
					<td> <?php echo $nightdiffeighthours; ?> </td>
					<td> <?php echo $nightdiffeighthoursphp; ?> </td>
					<td>PhilHealth: </td>
					<td> <?php echo $philhealth; ?> </td>
				</tr>
				<tr>
					<td>Holiday: </td>
					<td> <?php echo $holidaypay; ?> </td>
					<td> <?php echo $holidaypayphp; ?> </td>
					<td>Adjustments: </td>
					<td> <?php echo $deducadjustments; ?> </td>
				</tr>
				<tr>
					<td>Special Holiday: </td>
					<td> <?php echo $specialholidaypay; ?> </td>
					<td> <?php echo $specialholidaypayphp; ?> </td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Total OT Pay: </td>
					<td> <?php echo $totalotpay; ?> </td>
					<td>Deductions: </td>
					<td> <?php echo $deductions; ?> </td>
				</tr>
				<tr>
					<td>Gross Pay:</td>
					<td><?php echo $grosspay; ?></td>
					<td>Net Pay</td>
					<td><b><?php echo $netpay; ?></b></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>