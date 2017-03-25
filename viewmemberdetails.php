<?php
include('session.php');
?>
<html>
<head>
	<title>View Member Details</title>
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
        <li><a href="home.php"  ><span>Home</span></a></li>
          <li><a href="bachatgatinfo.html"><span>View Bachat Gat</span></a></li>
          <li><a href="openUpdate.php" ><span>Create Member</span></a></li>
          <li><a href="viewmemberdetails.php" class="current"><span>View Members</span></a></li>
          <li><a href="payment1.php" ><span>Payments</span></a></li>
          <li><a href="viewprofile.html"><span>Profile</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  </div>

<form class="form-horizontal" action ="openUpdate.php" method="post">
<div class="container padding-top-10">
<div class="panel panel-default">
<br> <br>
				<div class="panel-heading" style="font-size:180%"> View Member Details</div>
				<div class="panel-body">
				<div class="row">
						<!-- Multiple Radios (inline) -->
						<div class="form-group">
						<label class="col-md-4 control-label  padding-10"></label>

						<div class="col-md-2">    
                <input id="mname" name="mname" type="text" placeholder="Member Name" class="form-control " required=""/>
              </div>
						<input type="submit" value="search" class="btn btn-primary btn-sm glyphicon glyphicon-search">
						</div>
						</div>
						<div class="row">
						<!-- Multiple Radios (inline) -->
						<div class="form-group">
							<label class="col-md-4 control-label margin-bottom:20" for="Dead">Member Status:</label>
							<div class="col-md-2"> 
							<select class="form-control" id="user_type">
							<option>Active</option>
							<option>Dead</option>
						</select> 
								
								
							</div>
						</div>
						</div>
					

						
					</div>
				
				
				
				</div>
</div>
</form>
</body>
</html>
