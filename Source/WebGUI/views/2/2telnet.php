<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="brand" href="index.php">Ultimate Server Environment<img src="images/logo.png"alt="Zombie Face" height="100" width="100"></a>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="content">
                    <div class="btn-controls">
					
<!---------------------Server Control Buttons------------------->
                     <?php include 'modules/serverbuttons.php';?>
<!---------------------Server Control Buttons------------------->

                         <div class="btn-box-row row-fluid">
						 
<!------------------------Mod Control Buttons------------------->
                     <?php include 'modules/buttons.php';?>
<!------------------------Mod Control Buttons------------------->

<!------------------------Side Widget Space--------------------->
<!-------------------<?php include 'modules/btn.php';?>--------->
<!------------------------Side Widget Space--------------------->
                         </div>
                     </div>

<!--Main Page Content-->
<?php
$users_id = $_SESSION['user_id'];
$unixtimestamp = time();
//require 'config/db.php';
// set database server access variables: 
	$connection=mysqli_connect($host,$user,$pass,$db);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_query($connection,"INSERT INTO core_request (Type, Request, Time, users_id)
VALUES ('1', 'telnet_start',$unixtimestamp, $users_id)");
mysqli_close($connection);
?>
<!--Main Page Content-->

                 </div>

            </div>

        </div>
