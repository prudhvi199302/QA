//app.js
//create angular app
var myapp = angular.module('myapp', []);

// create angular controller
myapp.controller("mycontroller", ['$scope', '$http', function($scope, $http) {

   $scope.url = 'delivery.php';

     //function to send data in JSON format to php file
     $scope.submitform = function(isValid) {

           if (isValid) {
             $http.post($scope.url, {
                             "order": $scope.order,
                             "currentdate": $scope.currentdate,
                             "streetname": $scope.streetname,
                             "cityname": $scope.cityname,
                             "areacode": $scope.areacode,
                             "amt": $scope.amt,
                             "salesamt": $scope.salesamt,
                             "totalamt": $scope.totalamt,
                             "deliveryname": $scope.deliveryname})
                           }
                 }
         }]);

