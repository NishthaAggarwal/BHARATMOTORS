var app=angular.module("BM_Site", ['ngRoute']);
         
app.controller("contact_about", function($scope,$http) {
  //$scope.Contact_function=function(){

      $http({
           		method:'GET',
           		url:'contact1.json'
           	}).success(function(data)
           	{
           		$scope.contact_details=data;
           		//[{'Title':'hi'}];
           	}) ;        
       //   };
         });



    
  
    // configure our routes
    app.config(function($routeProvider) {
        $routeProvider

            // // route for the home page
            // .when('/', {
            //     templateUrl : 'pages/home.html',
            //     controller  : 'mainController'
            // })

            // route for the about page
            .when('/about', {
                templateUrl : 'about.html',
                //controller  : 'aboutController'
            })

            // route for the contact page
            .when('/contact', {
                templateUrl : 'contact_final.html',
                controller  : 'contact_about'
            });
    });

    