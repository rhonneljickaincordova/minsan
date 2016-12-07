angular.module('misasApp')
	.controller('payrollCtrl', function ($scope,Notification,$http,NgTableParams){
			
			$scope.selectedState = "";
			$scope.states = ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"];


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
		
		$scope.get_all_user = function(){

			var data = angular.toJson({
				id: '',
			});
			
			$scope.file =  $http({
		        method  : 'POST',
		        url     : '../employee/get_all_employee',
		        data    :  data, //forms user object
		        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
		        })
		        .success(function(data){
		        	$scope.list_employees = [];
		        	
		        	$scope.employees = data.employees;
		        	angular.forEach(data.employees,function(data){
		        		$scope.list_employees.push(data.employee_id +'  '+ data.given_name +' '+ data.middle_initial +' '+ data.family_name);
		        	});


		      	});	

		}
		$scope.get_all_user();

		$scope.get_all_client = function(){

			var data = angular.toJson({
				id: '',
			});
			
			$scope.file =  $http({
		        method  : 'POST',
		        url     : '../client/get_all_client',
		        data    :  data, //forms user object
		        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
		        })
		        .success(function(data){
		        	$scope.list_clients = [];
			        $scope.employees = data.clients;
			        	angular.forEach(data.clients,function(data){
			        		$scope.list_clients.push(data.client_id +'  '+ data.name);
			        	});
			      	});	

		}
		$scope.get_all_client();

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