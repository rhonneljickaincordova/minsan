<div class="list-client" ng-controller="listClientCtrl" ng-cloak>
	<div class="container-fluid">
		<div class="button">
			<a type="button" class="btn btn-default back-button" href="<?php echo base_url();?>staff/add_client">
				<i class="fa fa-arrow-left" aria-hidden="true"></i> <b>Back</b>
			</a>
		</div>	
		<br>
		<table ng-table="tableParams" class="table admin-table" show-filter="true" ng-cloak>
		    <tr ng-repeat="user in $data">
		        <td title="'Client Number'" filter="{ client_id: 'text'}" sortable="'client_id'">
		            <center>{{user.client_id}}</center>
		        </td>
		        <td title="'Name'" filter="{ name: 'text'}" sortable="'name'">
		           <center> {{user.name}}</center>
	            </td>
	            <td title="'Address'" filter="{ address: 'number'}" sortable="'address'">
		           <center> {{user.address}}</center>
	            </td>
	            <td title="'Contact Person'" filter="{ contact_person: 'text'}" sortable="'contact_person'">
		            <center>{{user.contact_person}}</center>
	            </td>
	            <td title="'Telephone'" filter="{ telephone_number: 'text'}" sortable="'telephone_number'">
		            <center>{{user.telephone_number}}</center>
	            </td>
	            <td>
	            	<a type="button" class="btn btn-primary edit-button" href="add_client?id={{user.client_id}}">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>
	            </td>
	         
		    </tr>
		</table>
		
	</div>
</div>		