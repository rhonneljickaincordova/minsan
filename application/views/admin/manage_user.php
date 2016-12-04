<div class="manage_user" ng-controller="manageUserCtrl" ng-cloak>
	<div class="container-fluid">
		<table ng-table="tableParams" class="table admin-table" show-filter="true">
		    <tr ng-repeat="user in $data">
		        <td title="'Firstname'" filter="{ first_name: 'text'}" sortable="'first_name'">
		            {{user.first_name}}
		        </td>
		        <td title="'Lastname'" filter="{ last_name: 'text'}" sortable="'last_name'">
		            {{user.last_name}}
	            </td>
	            <td title="'Contact'" filter="{ contact: 'number'}" sortable="'contact'">
		            {{user.contact}}
	            </td>
	            <td title="'Username'" filter="{ username: 'text'}" sortable="'username'">
		            {{user.username}}
	            </td>
	            <td title="'Password'" filter="{ password: 'text'}" sortable="'password'">
		            {{user.password}}
	            </td>
	            <td title="'Status'"  >
			        <span ng-if="user.status == 0">Inactive</span>
		            <span ng-if="user.status == 1">Active</span>
	            </td>
	            <td >
			        <button class="btn btn-default btn-sm" ng-click="edit_row(user)" ><span class="fa fa-pencil"></span></button>
            		<button class="btn btn-danger btn-sm" ng-click="update_status(user)"><span class="fa fa-undo"></span></button>
			    </td>


		    </tr>
		</table>
	</div>	

	<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title"><i class="fa fa-user-plus" aria-hidden="true"></i> Update account</h4>
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
							
			   			</div>	
		       		</div>
				</form>
		      </div>
		      <div class="modal-footer"> 
		      	<button type="submit" class="btn btn-primary" ng-click="update_user()">Submit</button>
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>

		  </div>
	</div>

</div>