 
<?php

$conn=mysqli_connect('localhost','root','','itm-social-network');
$r=null;
$security=null;

?>
 <!DOCTYPE>
 <html>
 <head>
 	<title>test</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 	
 	<link rel="icon" href="New folder/itm.ico">
 	
	
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
 	
 	<style type="text/css">
 		.test{
 			color: green;
 			border: double;
 			background-color:rgba(252, 205, 27,0.7);
 			width: 650px;
 			height: 475px;
 			position:absolute;
 			border-radius: 10%;
 			top: 140px;
 			left: 340px;
 		}
 		
 		body{
 			background:url("New folder/pic1.jpg");
 			background-size: cover;
    		background-position: center;
 			margin: 0px;
 			padding: 0px;
 		}

 		span{

 			font-family:"Comic Sans MS";
 		}
 	</style>
 </head>
 <body>

 	
 	<div class="banner">
 		<img src="itm-logo.png" class="logo"><h1 class="heading">ITM Blog</h1>

 		<a href="" class="aboutus">About Us</a>
 		<a href="index.php" class="logout">Back to login</a>
 	</div>

 <div class="test">
 	<form method="post" action="">
 		<span class="span"><center><h1 style="color:#fff;">Retrive your Password</h1></center>
 			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Username:<input type="text" name="Username"><input type="submit" name="Submit" value="Check"></strong><br></span>
 		<span><br>
 			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 			<?php
 				if(isset($_REQUEST['Submit']))
 				{
 					$user=$_REQUEST['Username'];
 					$query="select Security from registration where Username='$user'";
 					$result=mysqli_query($conn,$query);
 					$r=mysqli_fetch_row($result);
 					if($r[0]!=null)
 					{
 						$security=$r[0];
 						echo "<strong>Your Security Question is:&nbsp;<span style='color:purple;'>".$security."<span></strong><br>";
 						echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name='ans'  placeholder='Type your Answer'><input type='submit' name='pass' value='Retrive Password'><br><br>";
 						
 						
					}
 				}
 			?>

 		
 		</form>
 		

                <?php

                if(isset($_REQUEST['pass']))
 						{
 							$ans=$_REQUEST['ans'];
 							$query="select Password from registration where Answer='$ans'";
 							$res=mysqli_query($conn,$query);
 							$s=mysqli_fetch_row($res);
 							if($s[0]!=null)
 										{		
 											$pass=$s[0];
 											echo "<strong>Your Password is:&nbsp;<span style='color:red;'>".$pass."</span></strong><br>";
 										}
 										else
 										{
 											echo "<strong><span style='color:red;>Answer You Entered Not Found!!!</span><br></strong>";
 										}
 						}
 						
				


           ?>
	
	</span>
 	</div>	
 </body>
</html>