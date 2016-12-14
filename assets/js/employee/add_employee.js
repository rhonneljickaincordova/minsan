angular.module('misasApp')
	.controller('addEmployeeCtrl', function ($scope,Notification,$http,NgTableParams){
		
		$scope.status = 'Active';

		$scope.initial_values = function($latest_id,$action){
			if($latest_id == ""){
				//no record in the database
				$latest_id = 1;
			}
			$scope.employee_number= $latest_id;
			$scope.general_action = $action;
			if($scope.general_action == 'edit'){
				$scope.get_employee_data($scope.employee_number);
			}
		}
		$scope.get_employee_data = function($id){

				var data = angular.toJson({
					id: $id,
				});
				$scope.file =  $http({
			        method  : 'POST',
			        url     : '../employee/get_employee_data',
			        data    :  data, //forms user object
			        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
			        })
			        .success(function(data){
			        	angular.forEach(data.employees,function(data){
			        		$scope.employee_number = data.employee_id;
							$scope.family_name = data.family_name;
							$scope.given_name = data.given_name;
							$scope.middle_initial = data.middle_initial;
							$scope.sex = data.sex;
							$scope.birthdate = new Date(data.birthdate);
							$scope.license = data.license;
							$scope.expiry = new Date(data.expiry);
							$scope.retirement = data.retirement;
							$scope.policy_number = data.policy_number;
							$scope.premium = data.premium;
							$scope.contact = data.contact_number;
							$scope.position = data.position;
							$scope.status = 'Active';
							$scope.date_res = new Date(data.date_res);
							$scope.address = data.address;
							$scope.client = data.client;
							$scope.agency = data.agency;
							$scope.branch = data.branch;
							$scope.hou_account = data.hou_account;
							$scope.cs = data.cs;
							$scope.cedula = data.cedula;
							$scope.dep = data.dep;
							$scope.sss_no = data.sss_no;
							$scope.pagibig_no = data.pag_ibig_no;
							$scope.acct_no = data.acct_no;
							$scope.date_hire = new Date(data.date_hire);
							$scope.insurance = data.insurance;
							$scope.legal_policy_number = data.legal_policy_number;
							$scope.legal_expiry = new Date(data.legal_expiry);
							$scope.legal_premium = data.legal_premium;
							$scope.mode_pay = data.mode_pay;
							$scope.rate = data.rate;
							$scope.effectivity = new Date(data.effectivity);
							$scope.sss_group = data.sss_group;
							$scope.pagibig_group = data.pag_ibig_group;
			        	});
			       	});	

		}

		$scope.save_employee = function(){

			var data = angular.toJson({
				employee_number : $scope.employee_number,
				family_name : $scope.family_name,
				given_name : $scope.given_name,
				middle_initial : $scope.middle_initial,
				sex : $scope.sex,
				birthdate : $scope.birthdate,
				license : $scope.license,
				expiry : $scope.expiry,
				retirement : $scope.retirement,
				policy_number : $scope.policy_number,
				premium : $scope.premium,
				contact : $scope.contact,
				position : $scope.position,
				status : $scope.status,
				date_res : $scope.date_res,
				address : $scope.address,
				client : $scope.client,
				agency : $scope.agency,
				branch : $scope.branch,
				hou_account : $scope.hou_account,
				cs : $scope.cs,
				cedula : $scope.cedula,
				dep : $scope.dep,
				sss_no : $scope.sss_no,
				pagibig_no : $scope.pagibig_no,
				acct_no : $scope.acct_no,
				date_hire : $scope.date_hire,
				insurance : $scope.insurance,
				legal_policy_number : $scope.legal_policy_number,
				legal_expiry : $scope.legal_expiry,
				legal_premium : $scope.legal_premium,
				mode_pay : $scope.mode_pay,
				rate : $scope.rate,
				effectivity : $scope.effectivity,
				sss_group : $scope.sss_group,
				pagibig_group : $scope.pagibig_group,
				action : $scope.general_action
			});
		
			$scope.file =  $http({
		        method  : 'POST',
		        url     : '../employee/save_employee',
		        data    :  data, //forms user object
		        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
		        })
		        .success(function(data){
		        	// console.log(data);
		        	if(data.error == '0')
			      		{
			      			Notification.success({message:data.message,delay: 1000});
			      			if($scope.general_action == 'add'){
				      			setTimeout(function() {
				      				window.location = 'add_employee';
				      				
				      			}, 1000);
			      			}else{
								setTimeout(function() {
				      				window.location = 'list_employee';
				      				
				      			}, 1000);
			      			}
			      			// $scope.get_all_user();
			      			// $('#myModal').modal('hide');
			      			
			      		}else{
	   						Notification.error({message:data.message,delay: 1000});
			      		
			      		}

	      	});	
		}

	
	}); 