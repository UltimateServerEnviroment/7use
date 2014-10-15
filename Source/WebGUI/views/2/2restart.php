       <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">

						<a class="brand" href="index.php">Ultimate Server Environment<img src="images/logo.png"alt="Zombie Face" height="100" width="100"></a>
                    

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper">

            <div class="container">
                <div class="row">

                    <div class="span12">
                        <div class="content">
                            <div class="btn-controls">
                                  <h2>Event! - <mark>Server Manual Restart Command Sent!</mark> Server will restart shortly, if server is offline it will startup instead</h2>
<!--/.Server Admin Control Buttons-->
<?php include 'modules/serverbuttons.php';?>
<!--/.Server Admin Control Buttons-->
                                <div class="btn-box-row row-fluid">
<!--/.Server Mod Buttons-->
<?php include 'modules/buttons.php';?>
<!--/.Server Mod Buttons-->

<!--/.Server Dev Buttons-->
<!---<?php include 'modules/btn.php';?>--->
<!--/.Server Dev Buttons-->
                                </div>
                            </div>
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
VALUES ('1', 'reboot',$unixtimestamp, $users_id)");
mysqli_close($connection);
?>
                                            </div>

            </div>
        </div>

