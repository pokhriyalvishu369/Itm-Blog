<?php
session_start();
$conn=mysqli_connect('localhost','root','','itm-social-network');
if(isset($_REQUEST['submit']))
{
	$user=$_REQUEST['Username'];
	$pass=$_REQUEST['Password'];
	$query="select UserName,Password from registration where UserName='$user' and Password='$pass'";
	$res=mysqli_query($conn,$query);
	$fetch=mysqli_fetch_row($res);
	if($fetch[0]!=null)
	{
		$_SESSION['u']=$fetch[0];
		header('location:post.php');
		//echo $_SESSION['u']=$fetch[0];
	}
	else
	{
		echo "<script>alert('!Invalid username/password or Account does not exist...');</script>";
	}
}
?>




<HTML>
<HEAD>
<TITLE>LOGIN-PAGE</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="icon" href="New folder/itm.ico">
<STYLE>
body
{
margin: 0px;
padding: 0px;
background:url(1.jpg);
background-size:cover;
background-position:center;
font-family: sans-serif;

}
.login-box
{
	width: 320px;
    height: 420px;
    background:rgba(0,0,0,0.8);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    border-radius: 10%;
    opacity: 0.9;

}
h1{
	margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.itm-logo
{
	width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

.login-box input
{
width:100%;
margin-bottom:20px;
}

.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}

.login-box input[type="submit"]
{
	

	 border: none;
    outline: none;
    height: 40px;
    background:#1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}

.login-box input[type="submit"]:hover
{
	cursor: pointer;
    background:#39dc79;
    color: #000;


}

.login-box a
{


text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.login-box a:hover
{
color:#39dc79;
}


</STYLE>
</HEAD>
<BODY>
<div class="login-box">
<img src="itm-logo.png" class="itm-logo">
<h1>Login Here</h1>
<form method="post" action=" ">
<p>Username</p>
<input type="text" name="Username" placeholder="Enter Username" (?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,10} required>
<p>Password</p>
<input type="password" name="Password" placeholder="Enter Password" pattern="(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,8}" required>
<input type="submit" name="submit" value="Login">
<a href="forgetpassword.php">Forget Password?</a>
<a href="create-account.php" class="create-account">Create account</a>
</form>
</div>
</BODY>
</HTML>