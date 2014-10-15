<?php
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
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
                         <div class="btn-box-row row-fluid">
                         </div>
                     </div>
<ul class="widget widget-usage unstyled span12">		
<!-- login form box -->
<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input type="submit"  name="login" value="Log in" />

</form>
Log in using Username: test0 or test1 or test2 & Password: test123  (0 = basic user, 1 = mod, 2 = server admin)
</ul>
