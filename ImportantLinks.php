 <?php
 session_start();
 $conn=mysqli_connect('localhost','root','','itm-social-network');
 $r=null;
 if(isset($_SESSION['u']))
 {
 	$r=$_SESSION['u'];
 	//echo $r;
 }
 else
 {
 	header('location:indexphp');
 }
 if(isset($_REQUEST['logout']))
 {
 	session_destroy();
 	header('location:index.php');
 }
 ?>

<!DOCTYPE>
 <html>
 <head>
 	<title>test</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="icon" href="New folder/itm.ico">
 	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
 	<script type="text/javascript" src="js/jquery.js"></script>
 	<script type="text/javascript" src="js/sidebar.js"></script>
 	<style type="text/css">
 		body{
 			background:url("New folder/pic1.jpg");
 			background-size: cover;
    		background-position: center;
 			margin: 0px;
 			padding: 0px;
 			font-family: sans-serif;
 		}
 	</style>
 </head>
 <body>
 	
 	<div class="banner">
 		<img src="itm-logo.png" class="logo"><h1 class="heading">ITM Blog</h1>
 		<form method="post" action="">
 		<input type="submit" name="logout" value="Log Out" class="logout">
 		</form>
 		<a href="aboutus.html" class="aboutus">About Us</a>
 	</div>
 	<div class="menubar">
 		
 			<button class="btn">Post</button>
 			<button class="btn">Placement</button>
 			<button class="btn active">Important Link</button>
 		
 	</div>
 	<div class="important-link">
 		<center><h1 class="H">Important Links</h1></center>
 		<br>
 		<ul>
 			<li><a href="http://hnbgu.ac.in/">HNBGU Site</a></li>
 		</ul>
 		<ul>
		    <li><a href="http://117.239.16.234:8085/hnbguedrp.php/">Examination Form Link</a></li>
	    </ul>
	    <ul>
	    	<li><a href="https://www.onlinesbi.com/sbicollect/icollecthome.htm?corpID=826440">Online Payment</a></li>
	    </ul>
	    <ul>
 			<li><a href="https://www.facebook.com/itm.dehradun.9">ITM Facebook Page</a></li>
 		</ul>
 		<ul>
 			<li><a href="http://www.itmddn.com/">ITM Site</a></li>
 		</ul>
	</div>


 	<ul class="menu" type="none">
 		<li class="menu-icon" >
 			<a href="#"> 
 				<span class="icon-bar"></span> 
 				<span class="icon-bar"></span> 
 				<span class="icon-bar"></span> 
 			</a>
 		</li>
 		
 	</ul>
<div class="overlay">
 	<div class="left-sidebar-menu">
 		<div class="user-data">
 			<?php
			$query="select file from registration where Username='$r' ";
			$result=mysqli_query($conn,$query);
			$row=mysqli_fetch_row($result);
			if($row[0]!=null)
							{
								echo '<img class="user-dp" src="data:image/jpeg;base64,'.base64_encode($row[0]).'">';
		    				}
		    ?>
        <span class="user-name"><?php echo $r;?></span>
 		</div>
 		<ul class="sidebar-menu-items" type="none">
 			<li><a class="active-link" href="post.php">post</a></li>
 			<li><a href="Placement.php">Placement</a></li>
 			<li><a href="ImportantLinks.php">Important Links</a></li>
 		</ul>
	</div> 	
 	
 </div>
 	 
 
 </body>
</html>