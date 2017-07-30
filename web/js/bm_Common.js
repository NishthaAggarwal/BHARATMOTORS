angular.module("BM_Site", [])
         
         .controller("contact_about", function($scope,$http) {
           $scope.Contact_function=function()
           {
           	$scope.result="chal ke nhi dera kuch";
           	$http({
           		method:'GET',
           		url:'contact1.json'
           	}).success(function(data)
           	{
           		$scope.contact_details=data;
           		//[{'Title':'hi'}];

           	}) ;        
           };
         });