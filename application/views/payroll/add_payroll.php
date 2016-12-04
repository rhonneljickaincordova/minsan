<div class="payroll" ng-controller="payrollCtrl" ng-cloak>
	<div class="container-fluid">
		
		<div class="button">
			<a type="button" class="btn btn-default back-button" href="<?php echo base_url();?>staff/dashboard">
				<i class="fa fa-arrow-left" aria-hidden="true"></i> <b>Back</b>
			</a>
			<a type="button" class="btn btn-primary save-button">
				<i class="fa fa-save" aria-hidden="true"></i> <b> Save</b>
			</a>
			<a type="button" class="btn btn-default list-button" href="<?php echo base_url();?>staff/list_employee">
				<i class="fa fa-list" aria-hidden="true"></i> <b> View List</b>
			</a>
		</div>
		<br>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2 class="panel-title"><i class="fa fa-credit-card"></i> <b>Payroll Information</b></h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	<div class="col-lg-6">
					<div class="form-group">
					    <label for="email">Employee Number :</label>
					    <input type="text" class="form-control" id="email" autofocus>
					</div>
					<div class="form-group">
					    <label for="email">Client :</label>
					    <input type="text" class="form-control" id="email" >
					</div>
					<div class="form-group">
					    <label for="email">Agency :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Branch :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Department :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Account Number :</label>
					    <input type="text" class="form-control" id="email">
					</div>
		    		<div class="form-group">
					    <label for="email">Position :</label>
				    	<input type="text" class="form-control" id="email">
					</div>
		    		
		    	
		    	</div>
		    	<div class="col-lg-6">
		    		<div class="form-group">
					    <label for="email">Contract Amount :</label>
				    	<input type="text" class="form-control" id="email">
					</div>
		    		<div class="form-group">
					    <label for="email">OT base on 1 - Gross 2 - Basic:</label>
					    <input type="text" class="form-control" id="email" >
					</div>
					<div class="form-group">
					    <label for="email">Mode :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					
					<div class="form-group">
					    <label for="email">Batch :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Status :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Rate :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					
		    	</div>
		    	
		    </div>
		  </div>
		</div>
		
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2 class="panel-title"><i class="fa fa-credit-card"></i> <b>Breakdown of Earnings ( + ) Deductions( - )</b></h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	<div class="col-lg-4">
					<div class="form-group">
					    <label for="email">Actual Hour(s) :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Overtime Hour(s) :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">NPremium Hour(s) :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">O.T Divisor</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Basic :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Overtime :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Night Premium :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					
		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">Ecola :</label>
					    <input type="date" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">13thMonth :</label>
					    <input type="date" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Incentive :</label>
					    <input type="date" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Uniform Allowance :</label>
					    <input type="date" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Retirement Fee :</label>
					    <input type="date" class="form-control" id="email">
					</div>
		    		<div class="form-group">
					    <label for="email">Other Income :</label>
					    <input type="text" class="form-control" id="email" >
					</div>
		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">0% Bond Deposit :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					
					<div class="form-group">
					    <label for="email">Cash Advance :</label>
					    <input type="date" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Losses (Agency) :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">PAG IBIG Plan :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Insurance :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Donation :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					
		    	</div>
		    	
		    </div>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2 class="panel-title"><i class="fa fa-credit-card"></i> <b>Loans </b></h2>
		  </div>
		  <div class="panel-body">
		    <div class="row">
		    	
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">Salary :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Housing :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">Calamity :</label>
					    <input type="text" class="form-control" id="email">
					</div>
		    		<div class="form-group">
					    <label for="email">SSS Premium :</label>
					    <input type="text" class="form-control" id="email" >
					</div>
					

		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">Medicare :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					
					<div class="form-group">
					    <label for="email">W/Tax :</label>
					    <input type="text" class="form-control" id="email">
					</div>
					<div class="form-group">
					    <label for="email">P.O/Credit :</label>
					    <input type="text" class="form-control" id="email">
					</div>	

					
		    	</div>
		    	<div class="col-lg-4">
		    		<div class="form-group">
					    <label for="email">PAG IBIG Loan :</label>
					    <input type="text" class="form-control" id="email">
					</div>	
					<div class="form-group">
					    <label for="email">Canteen :</label>
					    <input type="text" class="form-control" id="email">
					</div>	
					<div class="form-group">
					    <label for="email">Other Ded :</label>
					    <input type="text" class="form-control" id="email">
					</div>	

		    	</div>
		    </div>
		  </div>
		</div>
	</div>
</div>