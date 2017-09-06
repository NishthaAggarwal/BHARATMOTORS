var app=angular.module("BM_Site_User", []);
         
app.controller("User_controller", function($scope,$http) {
 
showLatestProduct();

function showLatestProduct(){
$http.post('hotProductDetails.php').success(function(data){
// Stored the returned data into scope
$scope.details=data;
});
}
$scope.message="nav";
// $scope.showInsertForm = function ()
//  {
// console.log('opening pop up');
// var modalInstance = $modal.open({
// templateUrl: 'form2.html',   
// controller: 'formController',
//  // resolve: {
//  //        productInfo: function () {
//  //          return $scope.productInfo;
//  //        }
//  //      }

// });

// modalInstance.result.then(function (selectedItem) {
//       $scope.msg1 = selectedItem;
//     }, function () {
//       $log.info('Modal dismissed at: ' + new Date());
//     });
// }






         });
// var app1=angular.module("BM_Site", []);
// app1.controller("fetchingProducts", function($scope,$http) {
//   $scope.result="chalega ya nhi";
//   $scope.allRecords=function(){

//       $http({
//               method:'POST',
//               url:'product.php'
//             }).success(function(data)
//             {
//               $scope.result1=JSON.stringify(data);
//               //[{'Title':'hi'}];
//             }) ;        
//           };
//          });


    
  
//     // configure our routes
//     app.config(function($routeProvider) {
//         $routeProvider

//             // // route for the home page
//             // .when('/', {
//             //     templateUrl : 'pages/home.html',
//             //     controller  : 'mainController'
//             // })

//             // route for the about page
//             .when('/about', {
//                 templateUrl : 'about.html',
//                 //controller  : 'aboutController'
//             })

//             // route for the contact page
//             .when('/contact', {
//                 templateUrl : 'contact_final.html',
//                 controller  : 'contact_about'
//             });
//     });

    