<div class="list-employee" ng-controller="listEmployeeCtrl" ng-cloak>
	<div class="container-fluid">
		<div class="button">
			<a type="button" class="btn btn-default back-button" href="<?php echo base_url();?>staff/dashboard">
				<i class="fa fa-arrow-left" aria-hidden="true"></i> <b>Back</b>
			</a>
		</div>	
		<br>
		<div class="row">
			<div class="col-lg-6">
				<div class=" panel panel-default">
				  <div class="panel-heading">
				    <h2 class="panel-title"><i class="fa fa-print"></i> <b>Generate</b></h2>
				  </div>
				  <div class="panel-body">
				    <div class="row">
				    	<div class="col-lg-6">
							<div class="form-group">
							    <label for="email">Start Date :</label>
							    <div class="input-group">
								    <!-- <input type="text" class="form-control" id="email" > -->
								    <input type="date" class="form-control" ng-model="start" id="s_date">
							  	</div>
							</div>
							
							<div class="form-group">
							    <label for="email">End Date :</label>
							     <!-- <input type="text" class="form-control" id="email"> -->
							     <div class="input-group">
								    <input type="date" class="form-control" ng-model="end"  id="e_date">
							  	</div>

							</div>
							<div class="button">
								<a type="button" class="btn btn-primary back-button" id="generateComputingReport" ><b>Generate</b></a>
							</div>	
							
							
				    	</div>
				    	
				    </div>
				  </div>
				</div>
			</div>
			<div class="col-lg-6"></div>
		</div>
		
		
		
	</div>
</div>		