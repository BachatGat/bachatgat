<?php
include('session.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>*Janseva Parivar*</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/vendor/formvalidation/dist/js/formValidation.min.js"></script>
	<script src="/vendor/formvalidation/dist/js/framework/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/account-opening-form.css"/>

</head>
<body>

<div id="wrap">
  <div id="masthead">
    <h2>Janseva Parivar Bachat Gat</h2>
    <div  align="right">
      <b  id="welcome"> Welcome : <i><?php echo $login_session; ?></i></b>
      <b id="logout"><a href="logout.php" > Log Out</a></b>
    </div>
  <div id="menucontainer">
      <div id="menunav">
        <ul>
          <li><a href="home.php" class="current" ><span>Home</span></a></li>
          <li><a href="bachatgatinfo.html"><span>View Bachat Gat</span></a></li>
          <li><a href="openUpdate.php" ><span>Create Member</span></a></li>
          <li><a href="viewmemberdetails.php" ><span>View Members</span></a></li>
          <li><a href="payment1.php" ><span>Payments</span></a></li>
          <li><a href="viewprofile.html"><span>Profile</span></a></li>
        </ul>
      </div>
    </div>
  </div>
 
</div>
    <br> <br>
  
<div id="footer"> <a href="home.php">homepage</a> | <a href="mailto:ksuresh005@gmail.com">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> 
</div>
</body>
</html>
