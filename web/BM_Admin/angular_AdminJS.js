

var app=angular.module('BM_Site_Admin',['ui.bootstrap']);

app.controller('Admin_controller', ['$scope','$modal','$http',function ($scope, $modal,$http) 
{ 
 showProductInfo();

 function showProductInfo(){
$http.post('productDetails.php').success(function(data){
// Stored the returned data into scope
$scope.details = data;
});
}

$scope.showInsertForm = function ()
 {
console.log('opening pop up');
var modalInstance = $modal.open({
templateUrl: 'form.html',   
controller: Form_controller,
 // resolve: {
 //        productInfo: function () {
 //          return $scope.productInfo;
 //        }
 //      }

});

modalInstance.result.then(function (selectedItem) {
      $scope.msg1 = selectedItem;
    }, function () {
      $log.info('Modal dismissed at: ' + new Date());
    });
}
}]);



app.controller("LoginController",['$scope','$http', function($scope,$http){
  
$scope.validateCredentials = function(info){
$http.post('ValidateDetails.php',{"admin_name":info.username,"admin_psw":info.psw}).success(function(data)
{
  $scope.result=data;
    $('#successMessage').css('display', 'block');
 if (data == '1') {
  $scope.Msg='User Logged In successfully';
  window.location.href="ADMIN_login_next.html"
 }
 else
 {
  $scope.Msg='Entered wrong credentials';
}
//console.log("data inserted successfully");
});
}
  }]);


// Please note that $modalInstance represents a modal window (instance) dependency.
// It is not the same as the $modal service used above.

var Form_controller = function ($scope, $modalInstance) {

 
  $scope.insertInfo = function (productInfo) {
    // $modalInstance.close($scope.selected.item);
    $scope.Something="chlaaaaa ";
    $http.post('insertProductDetails.php',{"product_name":productInfo.product_name}).success(function(data)
      {
        $scope.msg1=data;
      });
  };

  
};