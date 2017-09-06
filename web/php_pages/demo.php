
<?php  
include '../global.php' ; ?>
<script src="../js/jquery.min.js"></script>
<script src="../js/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
<script src="../js/bm_Common.js"></script>
<?php 
include '../demoPage.html' ; 
// include '../include/dbfunction';
//include '../include/connection.php';

include '../module/function.php';
foreach (glob("../css/*.css") as $filename) {
  echo"<link type='text/css' rel='stylesheet' href='$filename'>\n";
}



 $data = array(
  'product_name' => 'Bottle Jacks',
  'product_desc' => 'We carefully select the packaging supplies to be used for wrapping the products hence, mitigating the risk of damage posed by loading/ unloading, shipping, and other external factors. Our products are the most sought after in the market, as they are specifically made as per global and domestic quality managements systems.',
  'product_price' => '10',
  'product_quantity' => '100');
 $result = add_product($data);
pr($result);
// $data = array(
//   'product_name' => 'Bottle Jacks'
//   );
// $result = get_product();
// pr($result);

?>

<!-- <link href="../css" rel='stylesheet' type='text/css' /> -->
<script src="<?php echo js_url(); ?>/jquery.min.js"></script>
<!-- Custom Theme files -->
<!-- <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="../js/simpleCart.min.js"> </script>
<!-- cart -->
<!-- <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" /> -->

<script type="text/javascript">
// $("#contactUs").click(function(){
//     alert("The paragraph was clicked.");
//     $.ajax({
//             url:"/BHARATMOTORS/web/php_pages/contact.php",
//             data:"id="+1,
//             type:"POST",
//             success:function(suc)
//                     {   alert(suc);

//                         $('#info').html(suc);
       
//                         }
//         })
// });
//  $('#btn').click(function() 
//  {
//  $.ajax({
//   type: "POST",
//   url: "C:/xampp/htdocs/BHARATMOTORS/web/module/function.php",
//   data: { name: "John" }
// }).done(function( msg ) {
//   alert( "Data Saved: " + msg );
// });    

// });

</script>

<?php  ?>