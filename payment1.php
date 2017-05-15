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
         <li><a href="home.php"  ><span>Home</span></a></li>
          <li><a href="bachatgatinfo.html"><span>View Bachat Gat</span></a></li>
          <li><a href="openUpdate.php" ><span>Create Member</span></a></li>
          <li><a href="viewmemberdetails.php" ><span>View Members</span></a></li>
          <li><a href="payment1.php" class="current"><span>Payments</span></a></li>
         <li><a href="viewprofile.html"><span>Profile</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

    <br><br>
    <form class="form-horizontal" action ="payment1.php" method="post">
    <div>
    <div class="container padding-top-10">
<div class="panel panel-default">
<div class="panel-heading">
<br> <br>
          Payment Details
        </div>
        <div class="panel-body">
                   <div class="form-group" border="solid">
              <label class="control-label col-md-2 col-md-offset-2" for="mid">Member Id :</label>

              <div class="col-md-2">    
                <input id="mid" name="mid" type="text" placeholder="Member Id" class="form-control " required=""/>
              </div>
              </div>
            <div class="form-group">
              <label class="control-label padding-top-10 col-md-2 col-md-offset-2" for="father/husband_name">Member Name:</label>

              <div class="col-md-2">    
                <input id="mname" name="mname" type="text" placeholder="Member Name" class="form-control " required=""/>
              </div>
                        
              
            </div>
             <div class="form-group">
							<label class="col-md-4 control-label margin-bottom:20" for="month">For the Month:</label>
							<div class="col-md-2"> 
							<select class="form-control" id="month">
							<option>JANUARY</option>
							<option>FEBUARY</option>
                                                        <option>MARCH</option>
							<option>APRIL</option>
                                                        <option>MAY</option>
							<option>JUNE</option>
                                                        <option>JULY</option>
							<option>AUGUST</option>
                                                        <option>SEPTEMBER</option>
							<option>OCTOBER</option>
                                                        <option>NOVEMBER</option>
							<option>DECEMBER</option>
						</select> 
                                                        </div> </div>
								
		<div class="form-group">						
							</div>
                                                        
                                                        <label class="col-md-4 control-label margin-bottom:20" for="year">For the Year:</label>
							<div class="col-md-2"> 
							<select class="form-control" id="year">
							<option>2017</option>
							<option>2016</option>
                                                        <option>2015</option>
							<option>2014</option>
                                                        <option>2013</option>
							<option>2012</option>
                                                        <option>2011</option>
							<option>2010</option>
                                        	</select> 
								
								
							</div>
                                                        
                                                        
                                                        
						</div> 
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="recno">Receipt No.:</label>

              <div class="col-md-4">    
                <input id="recno" name="recno" type="text"  class="form-control " required=""/>
              </div>
            </div>


            <script type="application/javascript">

              function isNumberKey(evt)
              {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
         {
            return false;
         }
         return true;
              }

          </script>


            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Share">Share Amount:</label>

              <div class="col-md-4">    
                <input id="share" name="share" type="text" onkeypress="return isNumberKey(event)" class="form-control " required=""/>
              </div>
            </div>
              <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="rdate">Receipt Date:</label>

              <div class="col-md-4">    
                <input id="rdate" name="rdate" type="date"  class="form-control " required=""/>
              </div>
            </div>
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20"  for="Total Share Amount to be paid">Total Share Amount to be paid:</label>

              <div class="col-md-4">    
                <input id="tshare" name="tshare" onkeypress="return isNumberKey(event)" type="text"  class="form-control " required=""/>
              </div>
            </div>

            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Total Penalty Amount to be paid">Total Penalty Amount to be paid:</label>

              <div class="col-md-4">    
                <input id="tpen" name="tpen" type="text" onkeypress="return isNumberKey(event)" class="form-control " required=""/>
              </div>
            </div>
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Pay Share ">Pay Share Amount:</label>

              <div class="col-md-4">    
                <input id="payshare" name="payshare" onkeypress="return isNumberKey(event)" type="text"  class="form-control " required=""/>
              </div>
            </div>
            <div class="form-group">
              <label class=" col-md-4 control-label  margin-bottom:20" for="Pay Penalty Amount ">Pay Penalty Amount:</label>

              <div class="col-md-4">    
                <input id="payshare" name="paypenalty" onkeypress="return isNumberKey(event)" type="text"  class="form-control " required=""/>
              </div>
            </div>
            
            </div>
            </div>
     </div>
    
<div class="row">
								<div class="form-group">
									<div class="text-center">
     <input type="submit" class="btn btn-primary" value="View Account Details" name="View Account"> </input>
     <input type="submit" class="btn btn-primary" value="    OK    " name="Ok"> </input>
    

     <input type="Reset"  class="btn btn-primary" value=" Reset " name="Reset"> </input>
	    </div>
	</div>
	</div>
  
    </form>
  <div id="footer"> 
   <a href="Link">homepage</a> | <a href="mailto:ksuresh005@gmail.com">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> 
</div>
<div align=center>Janseva </div></body>
</html>
