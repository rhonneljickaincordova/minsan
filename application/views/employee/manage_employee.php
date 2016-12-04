<div class="list-employee" ng-controller="listEmployeeCtrl" ng-cloak>
	<div class="container-fluid">
		<div class="button">
			<a type="button" class="btn btn-default back-button" href="<?php echo base_url();?>staff/add_employee">
				<i class="fa fa-arrow-left" aria-hidden="true"></i> <b>Back</b>
			</a>
		</div>	
		<br>
		<table ng-table="tableParams" class="table admin-table" show-filter="true" ng-cloak>
		    <tr ng-repeat="user in $data">
		        <td title="'Employee Number'" filter="{ employee_id: 'text'}" sortable="'employee_id'">
		            <center>{{user.employee_id}}</center>
		        </td>
		        <td title="'Family Name'" filter="{ family_name: 'text'}" sortable="'family_name'">
		           <center> {{user.family_name}}</center>
	            </td>
	            <td title="'Given Name'" filter="{ given_name: 'number'}" sortable="'given_name'">
		           <center> {{user.given_name}}</center>
	            </td>
	            <td title="'Client Name'" filter="{ client: 'text'}" sortable="'client'">
		            <center>{{user.client}}</center>
	            </td>
	            <td title="'Status'" filter="{ status: 'text'}" sortable="'status'">
		            <center>{{user.status}}</center>
	            </td>
	            <td>
	            	<a type="button" class="btn btn-primary edit-button" href="add_employee?id={{user.employee_id}}">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
	            </td>
	         
		    </tr>
		</table>
		
	</div>
</div>		