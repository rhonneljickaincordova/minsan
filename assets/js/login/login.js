angular.module('misasApp',['ui-notification','ngTable'])
	.controller('loginCtrl', function ($scope,Notification,$http){

		$scope.validation_class = 'form-group';
		$scope.username = '';
		$scope.password = '';
		
		$scope.onclickLogin = function (){

			if($scope.username != '' && $scope.password != ''){
				var data = angular.toJson({
					username: $scope.username,
					password:$scope.password
				});

				$scope.file =  $http({
			        method  : 'POST',
			        url     : 'login/user_authentication',
			        data    :  data, //forms user object
			        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
			        })
			        .success(function(data){
			        	 console.log(data);
			        	if(data.error == '0')
			      		{
			      			Notification.success({message:data.message,delay: 1000});
			      			
			      			if(data.position == '0'){
			      				//admin
				      			setTimeout(function(){ 	
				      				window.location.href ="admin/manage_user";	 
				      			}, 1000);
				    		}
			      			if(data.position == '1'){
			      				//staff
			      				setTimeout(function(){ 	
				      				window.location.href ="staff/dashboard";	 
				      			}, 1000);
			      	
			      			}	
			      		
			      		}else{
	   						Notification.error({message:data.message,delay: 1000});
			      		
			      		}
			      	});
			
			};
			if($scope.username == '' && $scope.password == ''){
				Notification.error({message:'Username and Password is required',delay: 1000});
			}
			if($scope.username == '' && $scope.password != ''){
				Notification.error({message:'Username is required',delay: 1000});
			}
			if($scope.password == '' && $scope.username != ''){
				Notification.error({message:'Password is required',delay: 1000});
			}


		}

		$scope.create_user = function(){
			var count = 0;
			if($scope.firstname == undefined){
				Notification.error({message:'Firstname required',delay: 1000});
				count++;
			}
			if($scope.lastname == undefined){
				Notification.error({message:'Lastname  required',delay: 1000});
				count++;
			}
			if($scope.contact == undefined){
				Notification.error({message:'Contact required',delay: 1000});
				count++;
			}
			if($scope.username == undefined){
				Notification.error({message:'Username required',delay: 1000});
				count++;
			}
			if($scope.password == undefined){
				Notification.error({message:'Password required',delay: 1000});
				count++;
			}
			if($scope.password != $scope.re_password){
				Notification.error({message:'Password mismatch',delay: 1000});
				count++;
			}


			if(count == 0 ){
				var data = angular.toJson({
					firstname: 	$scope.firstname,
					lastname: 	$scope.lastname,
					contact: 	$scope.contact,
					username: 	$scope.username,
					password: 	$scope.password,
				});
				console.log(data);

				$scope.file =  $http({
			        method  : 'POST',
			        url     : 'login/save_new_user',
			        data    :  data, //forms user object
			        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
			        })
			        .success(function(data){
			        	 console.log(data);
			        	if(data.error == '0')
			      		{
			      			Notification.success({message:data.message,delay: 1000});
			      			$('#myModal').modal('hide');
			      			$scope.firstname = '';
							$scope.lastname = '';
							$scope.contact = '';
							$scope.username = '';
							$scope.password = '';
							$scope.password_validation = '';
			      		}else{
	   						Notification.error({message:data.message,delay: 1000});
			      		
			      		}
			      	});	
			}


				
		}

		$scope.validate = function($re_password){
			$scope.re_password = $re_password;
			if($re_password != $scope.password){
				$scope.validation_class = 'form-group has-error';
			}else{
				$scope.validation_class = 'form-group';
			}

		}

	}); 

