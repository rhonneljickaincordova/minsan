<div class="add-client" ng-controller="addClientCtrl" ng-cloak  ng-init="initial_values('<?php echo  $latest_id == NULL ? "" : $latest_id[0]->client_id;?>','<?php echo $action;?>')">
	<div class="container-fluid">
		
		<div class="button">
			<a type="button" class="btn btn-default back-button" href="<?php echo base_url();?>staff/dashboard">
				<i class="fa fa-arrow-left" aria-hidden="true"></i> <b>Back</b>
			</a>
			<a type="button" class="btn btn-primary save-button" ng-click="save_client()">
				<i class="fa fa-save" aria-hidden="true"></i> <b> Save</b>
			</a>
			<a type="button" class="btn btn-default list-button" href="<?php echo base_url();?>staff/list_client">
				<i class="fa fa-list" aria-hidden="true"></i> <b> View List</b>
			</a>
		</div>
		<br>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2 class="panel-title"><i class="fa fa-building"></i> <b>Client Information</b></h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	<div class="col-lg-4">
					<div class="form-group">
					    <label for="email">Client Number :</label>
					    <input type="text" class="form-control"  autofocus ng-model="client_number" readonly>
					</div>
					<div class="form-group">
					    <label for="email">Name :</label>
					    <input type="text" class="form-control" ng-model="client_name">
					</div>
					<div class="form-group">
					    <label for="email">Address :</label>
					    <input type="text" class="form-control" ng-model="address">
					</div>
					<div class="form-group">
					    <label for="email">Contact Person :</label>
					    <input type="text" class="form-control" ng-model="contact_person">
					</div>
					<div class="form-group">
					    <label for="email">Telephone Number :</label>
					    <input type="text" class="form-control" ng-model="tel_number">
					</div>

		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">AGN - BRN :</label>
					    <input type="text" class="form-control"  ng-model="agn_brn">
					</div>
					<div class="form-group">
					    <label for="email">TAX %:</label>
					    <input type="text" class="form-control" ng-model="tax_percentage">
					</div>
					
					<div class="form-group">
					    <label for="email">VAT % :</label>
					    <input type="text" class="form-control" ng-model="vat_percentage">
					</div>
					<div class="form-group">
					    <label for="email">SSS :</label>
					    <input type="text" class="form-control" ng-model="sss">
					</div>
					<div class="form-group">
					    <label for="email">MODE :</label>
					    <input type="text" class="form-control" ng-model="percentage">
					</div>
		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">N_PRM :</label>
					    <input type="text" class="form-control" ng-model="n_prm" >
					</div>
					<div class="form-group">
					    <label for="email">Effective :</label>
					    <input type="date" class="form-control" ng-model="effective">
					</div>
		    	</div>
		    </div>
		  </div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title"><i class="fa fa-building"></i> <b>Contract Information</b></h2>
			</div>
		 	<div class="panel-body">
				<table class="table table-striped ">
				    <thead>
				      <tr>
				        <th>CONTRACT AMOUNT</th>
				        <th>GUARD</th>
				        <th>OIC</th>
				        <th>AOIC</th>
				        <th>JANITOR</th>
				        <th>DRIVER</th>
				        <th>MESSENGER</th>
				        <th>HELPER</th>

				      </tr>
				    </thead>
				    <tbody>
				    <tr>
				        <td>
				        	<input type="text" class="form-control">	
				        </td>
				        <td>
				        	<input type="text" class="form-control">
				        </td>
				        <td>
				        	<input type="text" class="form-control">
				        </td>
				    	<td>
				    		<input type="text" class="form-control">
				    	</td>
				    	<td>
				    		<input type="text" class="form-control">
				    	</td>
				    	<td>
				    		<input type="text" class="form-control">
				    	</td>
				    	<td>
				    		<input type="text" class="form-control">
				    	</td>
				    	<td>
				    		<input type="text" class="form-control">
				    	</td>
				    	<td>
				    		<a type="button" class="btn btn-primary save-button pull-right" ng-click="addRowContractInformation()"> 
								<i class="fa fa-plus" aria-hidden="true"></i> 
							</a>
				    	</td>

				    </tr>
				     
				    </tbody>
				</table>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title"><i class="fa fa-building"></i> <b>Duty Information</b></h2>
			</div>
		 	<div class="panel-body">
				<table class="table table-striped ">
				    <thead>
				      <tr>
				        <th>HOURS</th>
				        <th>DAYS</th>
				        <th>TOTAL</th>
				      </tr>
				    </thead>
				    <tbody>
				    <tr>
				        <td>
				        	<input type="text" class="form-control">	
				        </td>
				        <td>
				        	<input type="text" class="form-control">
				        </td>
				        <td>
				        	<input type="text" class="form-control">
				        </td>
				        <td >
				        	<a type="button" class="btn btn-primary save-button pull-right" ng-click="addRowDutyInformation()">
								<i class="fa fa-plus" aria-hidden="true"></i> 
							</a>
				        </td>
				    </tr>
				     
				    </tbody>
				</table>
			</div>
		</div>
			
		
		
	</div>
</div>