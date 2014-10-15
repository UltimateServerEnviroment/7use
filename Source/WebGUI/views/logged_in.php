Your logged in as  <?php echo $_SESSION['user_name']; ?> & 
Your Permission Level is Level <?php echo $_SESSION['level']; ?>, Your User ID is <?php echo $_SESSION['user_id']; ?>,
<a href="index.php?logout">Logout</a>?
<?php include 'views/'.$_SESSION['level'].'/2'.$_SERVER['QUERY_STRING'].'.php';?>
