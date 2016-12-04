angular.module('misasApp')
	.controller('addClientCtrl', function ($scope,Notification,$http,NgTableParams){
		
		$scope.duty_information_list = [];
		// $scope.contract_information_list = [{
		// 	'contract_id ' => ' '
		// }];



		$scope.initial_values = function($lastest_id,$action){
			$scope.client_number= $lastest_id;
			$scope.general_action = $action;
			console.log($scope.general_action);
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
							$scope.status = data.status;
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

		$scope.save_client = function(){

			var data = angular.toJson({
				client_number : $scope.client_number,
				client_name : $scope.client_name,
				address : $scope.address,
				contact_person : $scope.contact_person,
				tel_number : $scope.tel_number,
				agn_brn : $scope.agn_brn,
				tax_percentage : $scope.tax_percentage,
				vat_percentage : $scope.vat_percentage,
				sss : $scope.sss,
				n_prn : $scope.n_prm,
				effective : $scope.effective,
				action : $scope.general_action
			});
			
			$scope.file =  $http({
		        method  : 'POST',
		        url     : '../client/save_client',
		        data    :  data, //forms user object
		        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
		        })
		        .success(function(data){
		        	console.log(data.error);
		        	if(data.error == '0')
		      		{
		      			Notification.success({message:data.message,delay: 1000});
		      			if($scope.general_action == 'add'){
			      			setTimeout(function() {
			      				window.location = 'add_client';
			      				
			      			}, 1000);
		      			}else{
							setTimeout(function() {
			      				window.location = 'list_client';
			      				
			      			}, 1000);
		      			}
		      			// $scope.get_all_user();
		      			// $('#myModal').modal('hide');
		      			
		      		}else{
   						Notification.error({message:data.message,delay: 1000});
		      		
		      		}

	      	});	
		}

		$scope.addRowDutyInformation =function(){

		}

	
	}); 