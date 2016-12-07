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
				$scope.get_client_data($scope.client_number);
			}

		}
		$scope.get_client_data = function($id){

				var data = angular.toJson({
					id: $id,
				});
				$scope.file =  $http({
			        method  : 'POST',
			        url     : '../client/get_client_data',
			        data    :  data, //forms user object
			        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
			        })
			        .success(function(data){
			        	console.log(data);
			        	angular.forEach(data.client,function(data){
							$scope.client_number = data.client_id;
							$scope.client_name = data.name;
							$scope.address = data.address;
							$scope.contact_person = data.contact_person;
							$scope.tel_number = data.telephone_number;
							$scope.agn_brn = data.agn_brn;
							$scope.tax_percentage = data.tax;
							$scope.vat_percentage = data.vat;
							$scope.sss = data.sss;
							$scope.n_prn = data.n_prn;
							$scope.effective = new Date(data.effective);
						

			        		
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
				n_prn : $scope.n_prn,
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
		        	console.log(data);
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