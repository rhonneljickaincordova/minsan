<div class="login-page"  ng-controller="loginCtrl">
  	<div class="form">
	    <form class="login-form">
	      <input type="text" placeholder="Username" ng-model="username" />
	      <input type="password" placeholder="Password" ng-model="password" />
	      <button class="login_button" ng-click="onclickLogin()">login</button>
	      <p class="message">Not registered? <a href="#" data-toggle="modal" data-target="#myModal">Create an account</a></p>
	    </form>
	</div>

	<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title"><i class="fa fa-user-plus" aria-hidden="true"></i> Create account</h4>
		      </div>
		      <div class="modal-body">
		       	<form>
		       		<div class="row">
		       			<div class="col-md-6">
				       		<div class="form-group">
							    <label for="exampleInputEmail1">First name</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" ng-model="firstname" aria-describedby="emailHelp" autofocus>
							</div>
							
							<div class="form-group">
							    <label for="exampleInputPassword1">Last name</label>
							    <input type="text" class="form-control" id="exampleInputPassword1" ng-model="lastname">
							</div>
							
							<div class="form-group">
							    <label for="exampleInputPassword1">Contact number</label>
							    <input type="text" class="form-control" id="exampleInputPassword1" ng-model="contact">
							</div>
		       			</div>
		       			<div class="col-md-6">
				       		<div class="form-group">
							    <label for="exampleInputPassword1">Username</label>
							    <input type="text" class="form-control" id="exampleInputPassword1" ng-model="username">
							</div>

							<div class="form-group">
							    <label for="exampleInputPassword1">Password</label>
							    <input type="password" class="form-control" id="exampleInputPassword1" ng-model="password">
							</div>
							
							<div ng-class="validation_class">
							    <label for="exampleInputPassword1">Repeat password</label>
							    <input type="password" class="form-control" id="exampleInputPassword1" ng-change="validate(password_validation)" ng-model="password_validation">
							</div>
		       			</div>	
		       		</div>
				

				
					 
					 
				</form>
		      </div>
		      <div class="modal-footer"> 
		      	<button type="submit" class="btn btn-primary" ng-click="create_user()">Submit</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
	</div>

</div>
