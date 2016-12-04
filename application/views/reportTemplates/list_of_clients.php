<!DOCTYPE html>
<html lang="en">
<head>
	<title>Client's Master List</title>
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
	<h3 class="report-title">Client's Master List</h3>
	<small>Report Generated : <?php echo date('F d, o H:i:s');?></small>
	<hr>
	<table class="report-table">
		<thead>
			<tr>
				<th rowspan="2" colspan="1" style="width: 50px;">#</th>
				<th colspan="4">Client Information</th>
				<th rowspan="2" colspan="1">Effective Date</th>
			</tr>
			<tr>
				<th>Client Name</th>
				<th>Address</th>
				<th>Contact Person</th>
				<th>Contact Number</th>
			</tr>
		</thead>
		<tbody>
		<?php
			$counter = 0;
			foreach ($report as $key) {
				echo '<tr>';
				echo '<td>'.$counter++.'</td>';
				echo '<td>'.$key['name'].'</td>';
				echo '<td>'.$key['address'].'</td>';
				echo '<td>'.$key['contact_person'].'</td>';
				echo '<td>'.$key['telephone_number'].'</td>';
				echo '<td>'.$key['effective'].'</td>';
				echo '</tr>';
			}
		?>
		</tbody>
	</table>
</body>
</html>