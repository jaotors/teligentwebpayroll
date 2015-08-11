<html>
	<table>
		<tr>
			<td><b>Company Name </b></td>
			<td>{{ $input['companyname'] }}</td>
			<td></td>

			<td><b>Hours Required</b></td>
			<td>{{ $input['hoursrequired'] }}</td>
			<td></td>

			<td><b>Semi-monthly Base</b></td>
			<td>{{ $input['semimonthlybase'] }}</td>
		</tr>
		<tr>
			<td><b>Employee Name </b></td>
			<td>{{ $input['employeename'] }}</td>
			<td></td>

			<td><b>Hours Rendered</b></td>
			<td>{{ $input['hoursrendered'] }}</td>
			<td></td>

			<td><b>Hourly Rate</b></td>
			<td>{{ $input['hourlyrate'] }}</td>
		</tr>
		<tr>
			<td><b>Employee Position </b></td>
			<td>{{ $input['employeeposition'] }}</td>
			<td></td>
		</tr>
		<tr>
			<td><b>Employee Type</b></td>
			<td>employeetype</td>
			<td></td>

			<td colspan="5" style="text-align: center"><b>Overtime Pay</b></td>
			<td></td>
			<td colspan="2" style="text-align: center"><b>Deductions</b></td>
		</tr>
		<tr>
			<td><b>Payslip Type</b></td>
			<td>paysliptype</td>
			<td></td>
			
			<td style="text-align: center">No. of Hours</td>
			<td></td>
			<td></td>
			<td></td>
			<td style="text-align: center">Values (PHP)</td>
			<td></td>
			<td></td>
			<td style="text-align: center">Values (PHP)</td>

		</tr>
		<tr>
			<td><b>Start Date </b></td>
			<td>{{ $input['startdate'] }}</td>
			<td></td>

			<td><b>Regular Pay</b></td>
			<td>{{ $input['regularpay'] }}</td>
			<td></td>

			<td></td>
			<td>{{ $input['regularpayphp'] }}</td>
			<td></td>
			<td><b>SSS</b></td>
			<td>{{ $input['sss'] }}</td>

		</tr>
		<tr>
			<td><b>End Date </b></td>
			<td>{{ $input['enddate'] }}</td>
			<td></td>

			<td><b>&gt; 8 Hours</b></td>
			<td>{{ $input['greatereighthours'] }}</td>
			<td></td>
			<td></td>

			<td>{{ $input['greatereighthoursphp'] }}</td>
			<td></td>
			<td><b>PAG-IBIG</b></td>
			<td>{{ $input['pagibig'] }}</td>

		</tr>
		<tr>
			<td><b>Email </b></td>
			<td>{{ $input['email'] }}</td>
			<td></td>
			
			<td><b>Night Diff</b></td>
			<td>{{ $input['nightdiff'] }}</td>
			<td></td>
			<td></td>

			<td>{{ $input['nightdiffphp'] }}</td>
			<td></td>
			<td><b>PHILHEALTH</b></td>
			<td>{{ $input['philhealth'] }}</td>

		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			
			<td><b>&gt; 8 Hours ND</b></td>
			<td>{{ $input['nightdiffeighthours'] }}</td>
			<td></td>
			<td></td>

			<td>{{ $input['nightdiffeighthoursphp'] }}</td>
			<td></td>
			<td><b>Adjustments</b></td>	
			<td>{{ $input['deducadjustments'] }}</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			
			<td><b>Holiday</b></td>
			<td>{{ $input['holidaypay'] }}</td>
			<td></td>
			<td></td>

			<td>{{ $input['holidaypayphp'] }}</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			
			<td><b>Special Holiday</b></td>
			<td>{{ $input['specialholidaypay'] }}</td>
			<td></td>
			<td></td>
			<td>{{ $input['specialholidaypayphp'] }}</td>
		</tr>
		<tr></tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>

			<td><b>Total OT Pay</b></td>
			<td>{{ $input['totalotpay'] }}</td>
			<td></td>
			<td><b>Deductions</b></td>
			<td>{{ $input['deductions'] }}</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>

			<td><b>Gross Pay</b></td>
			<td>{{ $input['grosspay'] }}</td>
			<td></td>
			<td><b>Net Pay</b></td>
			<td>{{ $input['netpay'] }}</td>
		</tr>
	</table>
</html>
