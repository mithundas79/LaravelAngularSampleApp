angular.module('mathService', [])

	.factory('Math', function($http) {

		return {
			add : function(addData) {
				return $http({
					method: 'POST',
					url: 'api/maths',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(addData)
				});
			}
		}

	});
	