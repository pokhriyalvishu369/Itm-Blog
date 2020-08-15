<?php
$conn=mysqli_connect('localhost','root','','itm-social-network');
$result=null;
if(isset($_REQUEST['Create-Account']))
{

	$EnrollmentNumber=$_REQUEST['Enrollment-Number'];
	$Username=$_REQUEST['Username'];
	$EnterFirstname=$_REQUEST['Enter-Firstname'];
	$EnterLasttname=$_REQUEST['Enter-Lasttname'];
	$EnterEmailId=$_REQUEST['Enter-Email-Id'];
	$sex=$_REQUEST['sex'];
	$MobleNumber=$_REQUEST['Moble-Number'];
	$EnterPassword=$_REQUEST['Enter-Password'];
	$CPassword=$_REQUEST['Confirm-Password'];
	$course=$_REQUEST['course'];
	$Security=$_REQUEST['Security'];
	$Answer=$_REQUEST['Answer'];
	$file = addslashes(file_get_contents($_FILES["fileToUpload"]["tmp_name"]));

	//echo $EnrollmentNumber.$Username.$EnterFirstname.$EnterLasttname.$EnterEmailId.$sex.$MobleNumber.$EnterPassword.$CPassword.$course.$Security.$Answer.$file;
	$query="insert into registration(EnrollmentNumber,Username,Firstname,Lastname,Email,Gender,MobileNo,Password,Cpassword,Course,Security,Answer,File) values($EnrollmentNumber,'$Username','$EnterFirstname','$EnterLasttname','$EnterEmailId','$sex',$MobleNumber,'$EnterPassword','$CPassword','$course','$Security','$Answer','$file')";

	$result=mysqli_query($conn,$query);

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>itm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script type="text/javascript" src="js/validation.js"></script>
	<link rel="icon" href="New folder/itm.ico">
	
	
	<script type="text/javascript">
		var check = function() {
  if (document.getElementById('Enter-Password').value ==
    document.getElementById('Confirm-Password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>

<style>

body
{

margin: 0px;
padding: 0px;
background:url(1.jpg);
background-size:cover;
background-position:all;
}
span{
	color: white;
	font-size: 13px;
	font-family: Helvetica;
}



.itm-logo
{width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -30px;
    left: calc(50% - 50px);
}
.create-account-box
{
width:990px;
height:580px;
background:rgba(0,0,0,0.7);
color:#fff;
left:50%;
top:52%;
position:absolute;
transform:translate(-50%, -50%);
box-sizing:border-box;
padding:25px 130px;
border-radius: 10%;
 


}	

.create-account-box input[type="text"], input[type="password"]
{
border:none; 
border-bottom:1px solid #fff;
background:transparent;
outline:none;
height:35px;
color:#fff;
font-size: 12px;
font-family: Helvetica;

}

.alertbox{

			position:absolute;
			top:130px;
			left:650px;
			border:none;
			outline:none;
			height:240px;
			width:240px;
			/*background:red;*/
			border-radius:20px;

		}


		.valibox{

			position:absolute;
			top:280px;
			left:680px;
			border:none;
			outline:none;
			height:240px;
			width:240px;
			/*background:red;*/
			border-radius:20px;
			font-size: 14px;
			padding-left: 10px;
			font-family: Helvetica;

		}

.submit /*input[type="submit"]*/
{
border:none;
outline:none;
height:40px;
width:240px;
background:#1c8adb;
color:#fff;
font-size:13px;
border-radius:20px;
position:relative;
top:500px;
left:550px;
}


.Continue 
{
border:none;
outline:none;
height:40px;
width:240px;
background:#39dc79;
color:#fff;
border-radius:20px;
position:absolute;
top:525px;
left:680px;
}



.Continue:hover
{
color:#fff;
background:#1c8adb;
}



.submit:hover
{
color:#000;
background:#39dc79;
}

.alert {
  padding: 20px;
  background-color: #47A8F5;
  color: white;
  border-radius:20px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


</style>
</head>
<body>
	<div class="create-account-box">

		<img src="itm-logo.png" class="itm-logo">

		
		<form method="post" action="" enctype="multipart/form-data">
		<table cellspacing="1">
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr><td></td></tr>
			<tr>
				<td>
					<span>Enrollment No</span>
				</td>
				<td>
					<input type="text" name="Enrollment-Number" placeholder="Enrollment Number" id="enroll" required>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Username</span>
				</td>
				<td>
					<input type="text" name="Username" placeholder="Username" id="User" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,10}" required>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Enter Firstname</span>
				</td>
				<td>	
					<input type="text" name="Enter-Firstname" placeholder="Enter Firstname" id="firstname" required>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Enter Lastname</span>
				</td>
				<td>
					<input type="text" name="Enter-Lasttname" placeholder="Enter Lastname" id="lastname" required>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Enter Email Id</span>
				</td>
				<td>
					<input type="text" name="Enter-Email-Id" placeholder="Enter Email Id" id="email" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" required>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>

			<tr>
				<td>
					<span>Gender</span>
				</td>
				<td>
					<input type="radio" name="sex" value="Female"><span>Female</span>&nbsp;
					<input type="radio" name="sex" value="Male"><span>Male</span>
					<input type="radio" name="sex" value="Others"><span>Others</span>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
					<td>
						<span>Enter Mobile Number</span>	
					</td>
					<td>
						<input type="text" name="Moble-Number" placeholder="Enter Mobile Number" id="mobile" required>
					</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Enter Password</span>
				</td>
				<td>
					<input type="password" name="Enter-Password" placeholder="Enter Password" id="Enter-Password" onkeyup='check();' pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,8}" required>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Confirm Password</span>
				</td>
				<td>
					<input type="password" name="Confirm-Password" placeholder="Confirm Password" id="Confirm-Password" onkeyup='check();' pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,8}" required>
					<span id=message></span>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Course</span>
				</td>
				<td>
					<select name="course" style="background:transparent;color:#fff;" id="course">
								<option style="background:rgba(0,0,0,0.7);color:#fff;"></option>
								<option style="background:rgba(0,0,0,0.7);color:#fff;">BBA</option>
								<option style="background:rgba(0,0,0,0.7);color:#fff;">BCA</option>
								<option style="background:rgba(0,0,0,0.7);color:#fff;">B.Sc.IT</option>
								<option style="background:rgba(0,0,0,0.7);color:#fff;">M.Sc.IT</option>
								<option style="background:rgba(0,0,0,0.7);color:#fff;">B.Lib</option>
								<option style="background:rgba(0,0,0,0.7);color:#fff;">B.Sc.Animation</option>
								<option style="background:rgba(0,0,0,0.7);color:#fff;">M.Lib</option>
								<option style="background:rgba(0,0,0,0.7);color:#fff;">B.Com</option>
					</select>
				</td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Security Question</span>
				</td>	
				<td>
					<select name="Security" style="background:transparent;color:#fff;" id="security">
							<option style="background:rgba(0,0,0,0.7);color:#fff;"></option>
							<option style="background:rgba(0,0,0,0.7);color:#fff;">In what country do you want to retire?</option>
							<option style="background:rgba(0,0,0,0.7);color:#fff;">What is the name of the first school I attended?</option>
							<option style="background:rgba(0,0,0,0.7);color:#fff;">What was your first pets name?</option>
							<option style="background:rgba(0,0,0,0.7);color:#fff;">Whats the name of the city where you were born?</option>
							<option style="background:rgba(0,0,0,0.7);color:#fff;">What is your mothers maiden name?</option>
							</select></td>
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Enter Answer</span>
				</td>
				<td>
					<input type="text" name="Answer" placeholder="Enter Answer" id="answer" required>
				</td>	
			</tr>
			<tr></tr>
			<tr></tr>
			<tr>
				<td>
					<span>Select Display Pitcure:</span>
				</td>
				<td>	
    				<input type="file" name="fileToUpload" id="fileToUpload" required>
    				<span>
    					
    				</span>
    			</td>
    			
			</tr>
			<div class='alertbox'>
				<?php
						if($result>0)
														{
															echo "<script>
																			function dismiss()
																								{
																									document.getElementById('dismiss').parentElement.style.display='none';
																								};
				 													</script>
				 													<div class='alert'>
				 													<span id='dismiss' class='closebtn' onclick='dismiss();'>&times;</span> 
  				 													<strong>Attention!</strong> Account Created Successfully.
 													 				</div>";


 														}

				?>


			</div>
			<div class="valibox">
				<h3>Password Instructions</h3>
				<ul>
					<li>least one numeric digit</li>
					<li>a special character</li>
					<li>6 to 8 characters</li>
					
				</ul>
				<h3>Username Instructions</h3>
				<ul>
					<li>least one numeric digit</li>
					<li>one uppercase</li>
					<li>one lowercase letter</li>
					<li>4 to 10 characters</li>
					
				</ul>
			</div>			
			<div>
					
					
					
					
					
					<input type="submit" value="Create Account" name="Create-Account" id="Create-Account" class="submit" onclick="validation()">

					

					
					
			</div>

		</table>
		</form>


				<?php
						

						if($result>0)
						{
							echo "


							<input type='submit' value='Continue' name='Continue' id='Continue' class='Continue' onclick='msg()'>
							<script>
										function msg() {
 													 window.location.href='index.php'
														}
							</script>";
						}


 														

				?>

</div>
</body>
</html>