//app.js
//create angular app
var myFirstApp = angular.module('myFirstApp', []);

// create angular controller
myFirstApp.controller("myFirstController", ['$scope', '$http', function($scope, $http) {
    
    $scope.url = 'Custinfo.php';
      
      //function to send data in JSON format to php file  
      $scope.submitForm = function(isValid) { 
            
            if (isValid) {
                    
                  $http.post($scope.url,{
                              "fname": $scope.fname,
                              "mname": $scope.mname,
                              "lname": $scope.lname,
                              "addr1": $scope.addr1,
                              "addr2": $scope.addr2,
                              "city": $scope.city,
                              "state": $scope.state,
                              "zip": $scope.zip,
                              "cn": $scope.cn,
                              "email": $scope.email,
                              "Whatsapp": $scope.Whatsapp,
                              "Emailcheck": $scope.Email,
                              "SMS": $scope.SMS}) 
                            }           
                  }
          }]);
