angular.module('misasApp')
	.controller('manageUserCtrl', function ($scope,Notification,$http,NgTableParams){
	
		$scope.get_all_user = function(){

				var data = angular.toJson({
					id: '',
				});
				
				$scope.file =  $http({
			        method  : 'POST',
			        url     : 'get_all_user',
			        data    :  data, //forms user object
			        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
			        })
			        .success(function(data){
			        	console.log(data);

			        	$scope.tableParams = new NgTableParams({}, { dataset: data.users});
			        	// console.log(0)
			      	});	

		}
		$scope.get_all_user();

		$scope.edit_row = function($users_info){
			console.log($users_info);
			$scope.user_id = $users_info.user_id;
			$scope.firstname = $users_info.first_name;
			$scope.lastname = $users_info.last_name;
			$scope.contact = $users_info.contact;
			$scope.username = $users_info.username;
			$scope.password = $users_info.password;
			$('#myModal').modal('show');	
		}
		$scope.update_user = function(){
			
			var data = angular.toJson({
					user_id: 	$scope.user_id,
					firstname: 	$scope.firstname,
					lastname: 	$scope.lastname,
					contact: 	$scope.contact,
					username: 	$scope.username,
					password: 	$scope.password
				});

				$scope.file =  $http({
			        method  : 'POST',
			        url     : 'update_user',
			        data    :  data, //forms user object
			        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
			        })
			        .success(function(data){
			        	console.log(data);
			        	if(data.error == '0')
			      		{
			      			Notification.success({message:data.message,delay: 1000});
			      			$scope.get_all_user();
			      			$('#myModal').modal('hide');
			      			$scope.firstname = '';
							$scope.lastname = '';
							$scope.contact = '';
							$scope.username = '';
							$scope.password = '';
			      		}else{
	   						Notification.error({message:data.message,delay: 1000});
			      		
			      		}
			      	});	
			
		}

		$scope.update_status = function($users_info){
			var temp_status = '';
			if($users_info.status == 1){
				temp_status = 0;
			}else{
				temp_status = 1;
			}
			var data = angular.toJson({
					user_id: 	$users_info.user_id,
					status: 	temp_status,
				});
				$scope.file =  $http({
			        method  : 'POST',
			        url     : 'update_status',
			        data    :  data, //forms user object
			        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
			        })
			        .success(function(data){
			        	console.log(data);
			        	if(data.error == '0')
			      		{
			      			Notification.success({message:data.message,delay: 1000});
			      			$scope.get_all_user();
			      		}else{
	   						Notification.error({message:data.message,delay: 1000});
			      		
			      		}
			      	});	
			
		}
	}); 