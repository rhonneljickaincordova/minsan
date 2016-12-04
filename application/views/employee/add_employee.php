
<div class="add-employee" ng-controller="addEmployeeCtrl" ng-cloak ng-init="initial_values('<?php echo $latest_id == NULL ?"": $latest_id[0]->employee_id;?>','<?php echo $action;?>')">
	<div class="container-fluid">
		
		<div class="button">
			<a type="button" class="btn btn-default back-button" href="<?php echo base_url();?>staff/dashboard">
				<i class="fa fa-arrow-left" aria-hidden="true"></i> <b>Back</b>
			</a>
			<a type="button" class="btn btn-primary save-button" ng-click="save_employee()">
				<i class="fa fa-save" aria-hidden="true"></i> <b> Save</b>
			</a>
			<a type="button" class="btn btn-default list-button" href="<?php echo base_url();?>staff/list_employee">
				<i class="fa fa-list" aria-hidden="true"></i> <b> View List</b>
			</a>
		</div>
		<br>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2 class="panel-title"><i class="fa fa-user"></i> <b>Employee Information</b></h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	<div class="col-lg-4">
					<div class="form-group">
					    <label for="email">Employee Number :</label>
					    <input type="text" class="form-control" id="email" disabled ng-model="employee_number">
					</div>
					<div class="form-group">
					    <label for="email">Family Name :</label>
					    <input type="text" class="form-control" id="email" autofocus ng-model="family_name">
					</div>
					<div class="form-group">
					    <label for="email">Given Name :</label>
					    <input type="text" class="form-control" id="email" ng-model="given_name">
					</div>
					<div class="form-group">
					    <label for="email">Middle Initial :</label>
					    <input type="text" class="form-control" id="email" ng-model="middle_initial">
					</div>
					<div class="form-group">
					    <label for="email">Sex :</label>
					    <input type="text" class="form-control" id="email" ng-model="sex">
					</div>
					<div class="form-group">
					    <label for="email">BirthDate :</label>
					    <input type="date" class="form-control" id="email" ng-model="birthdate">
					</div>
		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">License :</label>
					    <input type="text" class="form-control" id="email" ng-model="license">
					</div>
					<div class="form-group">
					    <label for="email">Expiry :</label>
					    <input type="date" class="form-control" id="email" ng-model="expiry">
					</div>
					
					<div class="form-group">
					    <label for="email">Retirement :</label>
					    <input type="text" class="form-control" id="email" ng-model="retirement">
					</div>
					<div class="form-group">
					    <label for="email">Policy Number :</label>
					    <input type="text" class="form-control" id="email" ng-model="policy_number">
					</div>
					<div class="form-group">
					    <label for="email">Premium :</label>
					    <input type="text" class="form-control" id="email" ng-model="premium">
					</div>
		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">Contact Number :</label>
					    <input type="text" class="form-control" id="email" ng-model="contact" >
					</div>
					<div class="form-group">
					    <label for="email">Position :</label>
					    <input type="text" class="form-control" id="email" ng-model="position">
					</div>
					
					<div class="form-group">
					    <label for="email">Status :</label>
					    <input type="text" class="form-control" id="email" ng-model="status">
					</div>
					<div class="form-group">
					    <label for="email">Date Res :</label>
					    <input type="date" class="form-control" id="email" ng-model="date_res">
					</div>	

		    	</div>
		    </div>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2 class="panel-title"><i class="fa fa-user"></i> <b>Other Information</b></h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	<div class="col-lg-6">
					<div class="form-group">
					    <label for="email">Address :</label>
					    <input type="text" class="form-control" id="email" ng-model="address">
					</div>
					<div class="form-group">
					    <label for="email">Client :</label>
					    <input type="text" class="form-control" id="email" ng-model="client">
					</div>
					
		    	</div>
		    	<div class="col-lg-6">
					<div class="form-group">
					    <label for="email">Agency :</label>
					    <input type="text" class="form-control" id="email" ng-model="agency">
					</div>
					<div class="form-group">
					    <label for="email">Branch :</label>
					    <input type="text" class="form-control" id="email" ng-model="branch" >
					</div>
					
		    	</div>
		    	
		    </div>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2 class="panel-title"><i class="fa fa-user"></i> <b>Legal Information</b></h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	<div class="col-lg-4">
					<div class="form-group">
					    <label for="email">Hou Account :</label>
					    <input type="text" class="form-control" id="email" ng-model="hou_account">
					</div>
					<div class="form-group">
					    <label for="email">CS :</label>
					    <input type="text" class="form-control" id="email" ng-model="cs">
					</div>
					<div class="form-group">
					    <label for="email">Cedula :</label>
					    <input type="text" class="form-control" id="email" ng-model="cedula">
					</div>
					<div class="form-group">
					    <label for="email">Dep.</label>
					    <input type="text" class="form-control" id="email" ng-model="dep">
					</div>
					<div class="form-group">
					    <label for="email">SSS No :</label>
					    <input type="text" class="form-control" id="email" ng-model="sss_no">
					</div>
					<div class="form-group">
					    <label for="email">PAG IBIG No :</label>
					    <input type="text" class="form-control" id="email" ng-model="pagibig_no">
					</div>
					<div class="form-group">
					    <label for="email">ACCT No :</label>
					    <input type="text" class="form-control" id="email" ng-model="acct_no">
					</div>
					<div class="form-group">
					    <label for="email">Date Hire :</label>
					    <input type="date" class="form-control" id="email" ng-model="date_hire">
					</div>
		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">Insurance :</label>
					    <input type="text" class="form-control" id="email" ng-model="insurance" >
					</div>
					<div class="form-group">
					    <label for="email">Policy Number :</label>
					    <input type="text" class="form-control" id="email" ng-model="legal_policy_number">
					</div>
					
					<div class="form-group">
					    <label for="email">Expiry :</label>
					    <input type="date" class="form-control" id="email" ng-model="legal_expiry">
					</div>
					<div class="form-group">
					    <label for="email">Premium :</label>
					    <input type="text" class="form-control" id="email" ng-model="legal_premium">
					</div>
					
		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">Mode of Pay :</label>
					    <input type="text" class="form-control" id="email" ng-model="mode_pay" >
					</div>
					<div class="form-group">
					    <label for="email">Rate / Wages :</label>
					    <input type="text" class="form-control" id="email" ng-model="rate">
					</div>
					
					<div class="form-group">
					    <label for="email">Effectivity :</label>
					    <input type="date" class="form-control" id="email" ng-model="effectivity">
					</div>
					<div class="form-group">
					    <label for="email">SSS Group :</label>
					    <input type="text" class="form-control" id="email" ng-model="sss_group">
					</div>	

					<div class="form-group">
					    <label for="email">PAG IBIG Group :</label>
					    <input type="text" class="form-control" id="email" ng-model="pagibig_group">
					</div>	

		    	</div>
		    </div>
		  </div>
		</div>
	</div>
</div>