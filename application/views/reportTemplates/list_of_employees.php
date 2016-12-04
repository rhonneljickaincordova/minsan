<!DOCTYPE html>
<html lang="en">
<head>
	<title>List of Active Employees</title>
	<style type="text/css">
		body{
			font-family: Tahoma;
		}

		h3.report-title{
			margin: 0px;
		}

		small{
			font-size: 9px;
		}

		.report-table{
			font-size: 10px;
			vertical-align: middle;
		}

		thead, th{
			text-transform: uppercase;
			text-align: center;
		}

		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    padding: 8px;
		}

		tbody, td{
		    text-align: left;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
	</style>
</head>
<body>
	<h3 class="report-title">List of Active Employees</h3>
	<small>Report Generated : <?php echo date('F d, o H:i:s');?></small>
	<hr>
	<table class="report-table">
		<thead>
			<tr>
				<th rowspan="2" colspan="1" style="width: 100px;">Employee #</th>
				<th colspan="3">Employee Information</th>
				<th colspan="3">Work Related Information</th>
			</tr>
			<tr>
				<th>Employee Name</th>
				<th>Contact Number</th>
				<th>Gender</th>
				<th>Position</th>
				<th>Client</th>
				<th>Branch</th>
			</tr>
		</thead>
		<tbody>
		<?php
			foreach ($report as $key) {
				echo '<tr>';
				echo '<td>'.$key['employee_id'].'</td>';
				echo '<td>'.$key['full_name'].'</td>';
				echo '<td>'.$key['contact_number'].'</td>';
				echo '<td>'.$key['sex'].'</td>';
				echo '<td>'.$key['position'].'</td>';
				echo '<td>'.$key['client'].'</td>';
				echo '<td>'.$key['branch'].'</td>';
				echo '</tr>';
			}
		?>
		</tbody>
	</table>
</body>
</html>