// angular.module('BM_Site_Admin', ['ui.bootstrap']);
// var Admin_controller = function ($scope, $modal, $log) {

//   $scope.items = ['item1', 'item2', 'item3'];

//   $scope.open = function (size) {

//     var modalInstance = $modal.open({
//       templateUrl: 'myModalContent.html',
//       controller: ModalInstanceCtrl,
//       size: size,
//       resolve: {
//         items: function () {
//           return $scope.items;
//         }
//       }
//     });

//     modalInstance.result.then(function (selectedItem) {
//       $scope.selected = selectedItem;
//     }, function () {
//       $log.info('Modal dismissed at: ' + new Date());
//     });
//   };
// };

var app=angular.module('BM_Site_Admin',['ui.bootstrap']);

 angular.module('BM_Site_Admin').controller('Admin_controller', ['$scope','$modal',function ($scope, $modal) {
$scope.showInsertForm = function () {
console.log('opening pop up');
var modalInstance = $modal.open({
templateUrl: 'form.html',   
});
}
}]);

app.controller("LoginController",['$scope','$http', function($scope,$http){
  
$scope.validateCredentials = function(info){
$http.post('ValidateDetails.php',{"admin_name":info.username,"admin_psw":info.psw}).success(function(data)
{
  $scope.result=data;
 if (data == '1') {
  $scope.message='User Logged In successfully';
// // getInfo();
// // Hide details insertion form
// $('#categoryForm').css('display', 'none');
// //console.log("data inserted successfully");
 }
 else
  $scope.message='Entered wrong credentials';
//console.log("data inserted successfully");
});
}
  }]);


// Please note that $modalInstance represents a modal window (instance) dependency.
// It is not the same as the $modal service used above.

// var ModalInstanceCtrl = function ($scope, $modalInstance, items) {

//   $scope.items = items;
//   $scope.selected = {
//     item: $scope.items[0]
//   };

//   $scope.ok = function () {
//     $modalInstance.close($scope.selected.item);
//   };

//   $scope.cancel = function () {
//     $modalInstance.dismiss('cancel');
//   };
// };