<?php
include('session.php');
?>
<html>
<head>
	<title>Create Member</title>
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
          <li><a href="openUpdate.php" class="current"><span>Create Member</span></a></li>
          <li><a href="viewmemberdetails.php" ><span>View Members</span></a></li>
          <li><a href="payment1.php" ><span>Payments</span></a></li>
          <li><a href="viewprofile.html"><span>Profile</span></a></li>
        </ul>
      </div>
    </div>
  </div>
 
</div>
<!--<form class="form-horizontal" action ="#" method="post">-->
<div class="container padding-top-10">
<div class="panel panel-default">
<div > 
					<h3 Align="center"> Enter Member Details </h3>
				</div>
				<div class="panel-heading" > Personal Details</div>
				<div class="panel-body">
					<form class="form-horizontal" action ="openUpdate.php" method="post">
						<div class="form-group" border="solid">
							<label class="control-label col-md-2 col-md-offset-2" for="first_name">Full name :</label>

							<div class="col-md-2">		
								<input id="first_name" name="first_name" type="text" placeholder="First name" class="form-control " required=""/>
							</div>
							<div class="col-md-2">
								<input id="middle_name" name="middle_name" type="text" placeholder="Middle Name" class="form-control " required="">
							</div>
							<div class="col-md-2">
								<input id="last_name" name="last_name" type="text" placeholder="Last Name" class="form-control " required="">
							</div>

						</div>
						<div class="form-group">
							<label class="control-label padding-top-10 col-md-2 col-md-offset-2" for="father/husband_name">Name of Father/Husband:</label>

							<div class="col-md-2">		
								<input id="father/husband_name" name="father/husband_name" type="text" placeholder="First name" class="form-control " required=""/>
							</div>
							<div class="col-md-2">
								<input id="father/husband_name_middle_name" name="father/husband_name_middle_name" type="text" placeholder="Middle Name" class="form-control " required="">
							</div>
							<div class="col-md-2">
								<input id="father/husband_name_last_name" name="father/husband_name_last_name" type="text" placeholder="Last Name" class="form-control " required="">
							</div>

						</div>
						<div class="form-group">
							<label class=" col-md-4 control-label  margin-bottom:20" for="DOB">Date of Birth:</label>

							<div class="col-md-4">		
								<input id="DOB" name="DOB" type="date"  class="form-control " required=""/>
							</div>
						</div>

						<!-- Multiple Radios (inline) -->
						<div class="form-group">
							<label class="col-md-4 control-label margin-bottom:20" for="Male">Gender:</label>
							<div class="col-md-6"> 
								<label class="radio-inline" for="Male">
									<input type="radio" name="Gender" id="Male" value="Male" checked="checked">
									Male
								</label> 
								<label class="radio-inline" for="Female">
									<input type="radio" name="Gender" id="Female-1" value="Female">
									Female
								</label>
								<label class="radio-inline" for="Other">
									<input type="radio" name="Gender" id="Other" value="Other">
									Other
								</label>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label margin-bottom:20" for="Single">Marital Status:</label>
							<div class="col-md-6"> 
								<label class="radio-inline" for="Single">
									<input type="radio" name="Marital_Status" id="single" value="Single" checked="checked">
									Single
								</label> 
								<label class="radio-inline" for="Married">
									<input type="radio" name="Marital_Status" id="Married" value="Married">
									Married
								</label>
								<label class="radio-inline" for="Other1">
									<input type="radio" name="Marital_Status" id="Other1" value="Other">
									Other
								</label>
							</div>
						
						</div>
						</div>
						</div>
						
						<div class="container padding-top-10">
<div class="panel panel-default">
						
						<div class="panel-heading">
						Residential Address
					</div>
					<div class="panel-body">
					<!--	<form class="form-horizontal">
							<!-- Text input-->
							<div class="form-group">
								<label class="col-md-4 control-label" for="add1">Address:</label>  
								<div class="col-md-7">
									<input id="add1" name="add1" type="text" placeholder="Address Line 1" class="form-control input-md margin-bottom" required=""></div>
									<div class="col-md-7 col-md-offset-4">
										<input id="add2" name="add2" type="text" placeholder="Address Line 2"" class="form-control input-md">
									</div>

								</div>


								<!-- Text input--check_list[] -->
								<div class="row">
									<div class="form-group">
										<label class="col-md-4 control-label" for="At">At:</label>  
										<div class="col-md-2">
											<input id="At" name="At" type="text" placeholder=" " class="form-control input-md" required="">

										</div>
										<label class="col-md-3 control-label" for="Post">Post:</label>  
										<div class="col-md-2">
											<input id="Post" name="Post" type="text" placeholder=" " class="form-control input-md" required="">

										</div>

									</div>
								</div>


								<div class="row">
									<div class="form-group">
										<label class="col-md-4 control-label" for="Taluka">Taluka:</label>  
										<div class="col-md-2">
											<input id="Taluka" name="Taluka" type="text" placeholder=" " class="form-control input-md" required="">

										</div>

										<label class="col-md-3 control-label" for="Pin_code">Pin Code:</label>  
										<div class="col-md-2">
											<input id="Pin_code" name="Pin_code" type="text" placeholder=" " class="form-control input-md" required="">

										</div>

									</div>
								</div>

								<div class="row">
									<div class="form-group">
										<label class="col-md-4 control-label" for="phone_number">Phone Number:</label>  
										<div class="col-md-2">
											<input id="phone_number" name="phone_number" type="tel" max="10" placeholder="Phone Number" class="form-control input-md" >

										</div>

										<label class="col-md-3 control-label" for="Mobile_number">Mobile Number:</label>  
										<div class="col-md-2">
											<input id="Mobile_number" name="Mobile_number" type="tel" placeholder="Mobile Number" class="form-control input-md" required="">

										</div>
									</div>
								</div>


							</div>
							<div class="container padding-top-10">
<div class="panel panel-default">
						<div class="panel-heading">
									Income Tax PAN or Form 60/61(IT Act)
								</div>
								<div class="panel-body">
									<form class="form-vertical">
										<div class="form-group">
											<label class="control-label col-md-2 col-md-offset-2" for="Pan_no">Income Tax PAN or Form 60/61(IT Act) :</label>

											<div class="col-md-4">		
												<input id="Pan_no" name="Pan_no" type="text" placeholder="" class="form-control" required=""/>
											</div>
										</div>
									</div>
									</div>
									</div>
									
									
									<div class="container padding-top-10">
                  <div class="panel panel-default">
						
						<div class="panel-heading">
									Identification Details(attach copies of document)
								</div>
							
								<div class="panel-body">

									
									
										
											<div class="row">
												<label class="control-label col-md-4 " for="Proof_of_Identity">Proof Of Identity :</label>


												<label class="control-label col-md-6 " for="Proof_of_address">Proof Of Address :</label>
											</div>

											<div class="checkbox">

												<div class="row">
													<label class="control-label col-md-4 " for="Voter_id_card">Voter ID Card</label>
													<div class="checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="Voter_id_card">
													</div>
													


													<label class="control-label col-md-5 " for="Salary_slip">Salary Slip(With Address)</label>
													<div class="checkbox col-md-1 ">
														<input type="checkbox" name="check_list[]" value="Salary_slip">
													</div>
												</div>




												<div class="row">
													<label class="control-label col-md-4 " for="Pan_card">PAN Card</label>
													<div class="checkbox col-md-1 ">
														<input type="checkbox" name="check_list[]" value="Pan_card">
													</div>
													

													<label class="control-label col-md-5 " for="Income_tax">Income Tax/Wealth tax assesment order</label>
													<div class="checkbox col-md-1 ">
														<input type="checkbox" name="check_list[]" value="Income_tax">
													</div>
												</div>


												<div class="row">
													<label class="control-label col-md-4 " for="Govt_ID_card">Government ID Card</label>
													<div class="checkbox col-md-1 ">
														<input type="checkbox" name="check_list[]" value="Govt_ID_card">
													</div>

													<label class="control-label col-md-5 " for="Home_Tax">Home Tax</label>
													<div class="checkbox col-md-1 ">
														<input type="checkbox" name="check_list[]" value="Home_Tax">
													</div>
												</div>


												<div class="row">

													<label class="control-label col-md-4 " for="ID_Card_of_reputed_employer">ID Card of reputed employer</label>
													<div class=" checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="ID_Card_of_reputed_employer">
													</div>

													


													<label class="control-label col-md-5 " for="Electricity_bill">Electricity Bill</label>
													<div class=" checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="Electricity_bill">
													</div>
												</div>



												<div class="row">

													<label class="control-label col-md-4 " for="Driving_License">Driving License</label>
													<div class=" checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="Driving_License">
													</div>

													
													<label class="control-label col-md-5 " for="Bank_account_statement">Bank account statement</label>
													<div class=" checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="Bank_account_statement">
													</div>
												</div>


												<div class="row">

													<label class="control-label col-md-4 " for="Id_given_by_Grampanchayat">Id given by Grampanchayat</label>
													<div class=" checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="Id_given_by_Grampanchayat">
													</div>

													<label class="control-label col-md-5 " for="Letter_from_reputed_employer">Letter from reputed employer</label>
													<div class=" checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="Letter_from_reputed_employer">
													</div>
												</div>


												<div class="row">

													<label class="control-label col-md-4 " for="Aadhar_card_no">Aadhar Card Number:</label>
													<div class=" checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="Aadhar_card_no">
													</div>	

													<label class="control-label col-md-5 " for="Ration_card">Ration Card</label>
													<div class=" checkbox col-md-1">
														<input type="checkbox" name="check_list[]" value="Ration_card">
													</div>										

												</div>

											</div>
										
									</div>
									
									
									</div>
									
									
									<div class="container padding-top-10">
<div class="panel panel-default">
										<div class="panel-heading">
									Occupation
								</div>
								</div>
								</div>
								
								
								
								
								
								<div class="panel-body">

									
									<form class="form-horizontal">
										<div class="form-group">





											<div class="row">
												<div class="col-md-10"> 
													<label class="radio-inline" for="Salaried">
														<input type="radio" name="Occupation" id="Salaried" value="Salaried" checked="checked">
														Salaried
													</label> 

													<label class="radio-inline" for="Self_employed_Professional">
														<input type="radio" name="Occupation" id="Self_employed_Professional" value="Self_employed_Professional">
														Self employed/Professional
													</label>
													<label class="radio-inline" for="Business">
														<input type="radio" name="Occupation" id="Business" value="Business">
														Business
													</label>

													<label class="radio-inline" for="Student">
														<input type="radio" name="Occupation" id="Student" value="Student">
														Student
													</label> 

													<label class="radio-inline" for="Retired">
														<input type="radio" name="Occupation" id="Retired" value="Retired">
														Retired
													</label>
													<label class="radio-inline" for="Agriculture_and_Allied">
														<input type="radio" name="Occupation" id="Agriculture_and_Allied" value="Agriculture_and_Allied">
														Agriculture and Allied
													</label>


													<label class="radio-inline" for="Other_occupation">
														<input type="radio" name="Occupation" id="Other_occupation" value="Other_occupation">
														Others </label>
													</div>
													<div class="col-md-2">	
														<input  id="Other_occupation" name="Other_occupation" type="text" placeholder="Specify" class="form-control" >
													</div>
												</div>
											</div>
										</div>
										</div>
										</div>
										
										
										
		<div class="panel-heading">
				Scheme Accepted by Customer
			</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-highlight">
							<thead>
								<th>Year</th>
								<th>Scheme</th>
								<th> Amount</th>
								<th>Total Deposite Amount</th>
								<th>Total amount after Maturity</th>
							</thead>
							<tbody>
								<tr>
									<td><input type="text"  name="Year" id="year_of_scheme" class="form-control"  required="" value=" "/></td>
									<td><input type="text" name="Scheme" id="scheme_of_customer" class="form-control"  required=""value=" "/></td>
									<td><input type="text" name="Amount" id="Amount_of_scheme" class="form-control"  required="" value=""/></td>
									<td><input type="text" name="TotalDepositeAmount" id="total_deposite_amount" class="form-control"  required="" value=""/></td>
									<td><input type="text" name="TotalamountafterMaturity" id="total_amount_after_maturity" class="form-control"  required="" value=""/></td>


								</tr>
							</tbody>
						</table>
					</div>


				</div>
				<div class="panel-heading">
				Form D A 1
			</div>
			<div class="panel-body">
				<form class="form-horizontal">
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<h5>Nomination under section 45ZA of the banking Regulation Act 1949 and Rule 2(1) of the Banking Companies (Nomination) Rules 1985 in respect of Bank Deposits</h5>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="form-group">
							<label class="control-label col-md-2 col-md-offset-2" for="I_we">I or We :</label>

							<div class="col-md-4">		
								<input id="I_we" name="I_we" type="text" placeholder="" class="form-control " required=""/>
							</div>
						</div>
					</div>

					<div class="row">

						<div class="form-group">
							<label class="control-label col-md-2 col-md-offset-2" for="Full_address">Full address</label>

							<div class="col-md-4">		
								<input id="Full_address" name="Full_address" type="text" placeholder="" class="form-control " required=""/>
							</div>
						</div>
					</div>


					<div class="form-group">
						<div class="conatiner">
							<div class="row">
								<div class="col-md-11">
									<h5>Nomination under section 45ZA of the banking Regulation Act 1949 and Rule 2(1) of the Banking Companies (Nomination) Rules 1985 in respect of Bank Deposits</h5>
								</div>
							</div>
						</div>
					</div>


					<div class="row">

						<div class="form-group">
							<label class="control-label col-md-2 col-md-offset-2" for="Nominee_full_name">Nominee Full Name</label>

							<div class="col-md-4">		
								<input id="Nominee_full_name" name="Nominee_full_name" type="text" placeholder="" class="form-control " required=""/>
							</div>
						</div>
					</div>


					<div class="row">

						<div class="form-group">
							<label class="control-label col-md-2 col-md-offset-2" for="Relationship_with_Account_holder">Relationship with Account Holder</label>

							<div class="col-md-4">		
								<input id="Relationship_with_Account_holder" name="Relationship_with_Account_holder" type="text" placeholder="" class="form-control " required=""/>
							</div>
						</div>
					</div>



					<div class="form-group">
						<label class="col-md-4 control-label" for="Address_of_Nominee">Address of Nominee:</label>  
						<div class="col-md-7">
							<input id="Address_of_Nominee" name="Address_of_Nominee" type="text" placeholder="Address of Nominee" class="form-control" required=""></div>

						</div>


						<div class="row">
							<div class="form-group">
								<label class="col-md-4 control-label" for="At_of_Nominee">At:</label>  
								<div class="col-md-2">
									<input id="At_of_Nominee" name="At_of_Nominee" type="text" placeholder=" " class="form-control " required="">

								</div>
								<label class="col-md-3 control-label" for="Post_of_Nominee">Post:</label>  
								<div class="col-md-2">
									<input id="Post_of_Nominee" name="Post_of_Nominee" type="text" placeholder=" " class="form-control " required="">

								</div>

							</div>
						</div>


						<div class="row">
							<div class="form-group">
								<label class="col-md-4 control-label" for="Taluka_of_Nominee">Taluka:</label>  
								<div class="col-md-2">
									<input id="Taluka_of_Nominee" name="Taluka_of_Nominee" type="text" placeholder=" " class="form-control input-md" required="">

								</div>

								<label class="col-md-3 control-label" for="Pin_code_of_Nominee">Pin Code:</label>  
								<div class="col-md-2">
									<input id="Pin_code_of_Nominee" name="Pin_code_of_Nominee" type="text" placeholder=" " class="form-control input-md" required="">

								</div>

							</div>
						</div>



					</div>
					</div>
				
					<input type="submit" name="submit">
                                        
			
</div>
</div>
    
</body>
</html>
				

//<?php 
//
////posted values catched in variables..
//
//			if (isset($_POST['submit'])) {
//			if(isset($_POST['Gender']))
//			{
//				$gender=$_POST['Gender'];
//			}
//			}
//			if (isset($_POST['submit'])) {
//			if(isset($_POST['Marital_Status']))
//			{
//				$Marital_Status=$_POST['Marital_Status'];
//			}
//			}
//
//				$fname=$_POST["first_name"];
//				$mname=$_POST["middle_name"];
//				$lname=$_POST["last_name"];
//				$fatherfname=$_POST["father/husband_name"];
//				$fathermname=$_POST["father/husband_name_middle_name"];
//				$fatherlname=$_POST["father/husband_name_last_name"];
//				$dob=$_POST["DOB"];
//
//
//	 
//				$address1=$_POST["add1"];
//				$address2=$_POST["add2"];
//				$At=$_POST["At"];
//				$post=$_POST["Post"];
//				$tal=$_POST["Taluka"];
//				$pin=$_POST["Pin_code"];
//				$phon_no=$_POST["phone_number"];
//				$mob_no=$_POST["Mobile_number"];
//				$itaxPan=$_POST["Pan_no"];
//
//
//				if(isset($_POST['submit'])){
//				if(!empty($_POST['check_list'])) {
//				// Counting number of checked checkboxes.
//				$checked_count = count($_POST['check_list']);
//				//echo "You have selected following ".$checked_count." option(s): <br/>";
//				// Loop to store and display values of individual checked checkbox.
//				foreach($_POST['check_list'] as $selected) {
//			       $selected;
//				}
//				echo "$selected";
//				}
//				else{
//				echo "<b>Please Select Atleast One Option.</b>";
//				}
//				}
//                                
////                                if(isset($_POST['submit'])){
////				if(!empty($_POST['check_list1'])) {
////				// Counting number of checked checkboxes.
////				$checked_count = count($_POST['check_list1']);
////				//echo "You have selected following ".$checked_count." option(s): <br/>";
////				// Loop to store and display values of individual checked checkbox.
////				foreach($_POST['check_list1'] as $selected) {
////			       $selected;
////				}
////				echo "$selected";
////				}
////				else{
////				echo "<b>Please Select Atleast One Option.</b>";
////				}
////				}
//
//
//				if (isset($_POST['submit'])) {
//				if(isset($_POST['Occupation']))
//				{
//				$Occ=$_POST['Occupation'];
//				//echo "$Occ";
//				}
//				if($Occ=="Other_occupation")
//				{
//				$Occ=$_POST["Other_occupation"];
//				}
//				}
//
//				$Year=$_POST["Year"];
//				$Scheme=$_POST["Scheme"];
//				$Amount=$_POST["Amount"];
//				$TotalDepositeAmount=$_POST["TotalDepositeAmount"];
//				$TotalamountafterMaturity=$_POST["TotalamountafterMaturity"];
//
//				$I_we=$_POST["I_we"];
//				$Full_address=$_POST["Full_address"];
//				$Nominee_full_name=$_POST["Nominee_full_name"];
//				$Relationship_with_Account_holder=$_POST["Relationship_with_Account_holder"];
//				$Address_of_Nominee=$_POST["Address_of_Nominee"];
//				$At_of_Nominee=$_POST["At_of_Nominee"];
//				$Post_of_Nominee=$_POST["Post_of_Nominee"];
//				$Taluka_of_Nominee=$_POST["Taluka_of_Nominee"];
//				$Pin_code_of_Nominee=$_POST["Pin_code_of_Nominee"];
//
//
//
//
////database conection...
//
//			$servername = "localhost";
//			$username = "san";
//			$password = "san123";
//			$dbname = "jansevadb";
//
//// Create connection
//			$conn = new mysqli($servername, $username, $password, $dbname);
//// Check connection
//			if ($conn->connect_error) {
//			die("Connection failed: " . $conn->connect_error);
//			}
////full insert sqlQ
//
////$sql1="select panno from mem_reg where panno='$itaxPan'";
//
//			$sql ="INSERT INTO mem_reg(fname,mname,lname,fhfname,fhmname,fhlname,dob,gender,mstatus,add1,add2,pincode,phone,mob,panno,proofids,occupation,year,scheme,amount,totaldepamt,maturityamt,iwrite,fullnom_name,rel_nom,nom_fulladd) values
//			('$fname','$mname','$lname','$fatherfname','$fathermname','$fatherlname','$dob','$gender','$Marital_Status','$address1','$address2','$pin','$phon_no','$mob_no','$itaxPan','$selected','$Occ','$$Year','$Scheme','$Amount','$TotalDepositeAmount','$TotalamountafterMaturity','$I_we','$Nominee_full_name','$Relationship_with_Account_holder','$Full_address')";
//
//		//	$temp=$conn->query($sql1);
////if ($temp==1){echo "registered..";}
////else
////{
//if ($conn->query($sql) === TRUE) {
// echo "New record created successfully";
//} 
//else 
//{
//	
//	
//   echo "Error:Somthing gone wrong As";
//
////}
//}
//$conn->close();
//
//
//?>
