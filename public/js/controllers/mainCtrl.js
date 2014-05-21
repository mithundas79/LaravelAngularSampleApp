angular.module('mainCtrl', [])

	
	.controller('mainController', function($scope, $http, Math) {
		// object to hold all the data for the new add form
		$scope.addData = {};
        $scope.result = '';
        $scope.message = '';
        $scope.errors = {};
        $scope.showResult = false;

		// loading variable to show the spinning loading icon
		$scope.loading = false;

		$scope.add = function() {
			$scope.loading = true;

			Math.add($scope.addData)
				.success(function(data) {
                    console.log(data);
                    if(data.success == true){
                        $scope.loading = false;
                        $scope.result = data.result;
                        $scope.showResult = true;
                        $scope.message = '';                        
                        $scope.errors = {};
                    }else{
                        $scope.loading = false;
                        $scope.message = data.message;                        
                        $scope.errors = data.data.errors;
                        $scope.showResult = false;
                    }

				})
				.error(function(data) {
					console.log(data);
                    $scope.loading = false;
                    $scope.showResult = false;
				});
		};
	});