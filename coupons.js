// app.js
// create angular app
var myFirstApp = angular.module('myFirstApp', []);

// create angular controller
myFirstApp.controller('myFirstController', ['$scope', '$http', function($scope, $http) {
	
	$scope.url = "insertcoupons.php";
  //function to submit the form after all validation has occured	
  $scope.submitForm = function(isValid) {
	  
		if(isValid){
			$http.post($scope.url, {
					'amount': $scope.coupons.amount,
					'quant': $scope.coupons.count,
			})
		}
	}
	
}]);
