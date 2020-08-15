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
 	header('location:index.php');
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
 		h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
    color: darkblue;
    text-decoration: underline;
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
 			<button class="btn active">Placement</button>
 			<button class="btn">Important Links</button>
 		
 	</div>
 	<div class="placement-data">
 		<center><h1>Placement Till Now...</h1></center>
 		<table border="1" cellpadding="10" class="tablee">
 			<tr>
 				<th>Company</th>
 				<th>Job Profile</th>
 				<th>Date</th>
 				<th>Package</th>
 				<th>Job Location</th>
 			</tr>
 			<tr>
 				<td><img src="New folder/British.png">British Airways</td>
 				<td>Customer Support Services</td>
 				<td>23/02/18</td>
 				<td>3 LPA</td>
 				<td>Dehli</td>
 			</tr>
 			<tr>
 				<td><img src="New folder/Collabera.png">Collabera</td>
 				<td>Analyst</td>
 				<td>30/11/18</td>
 				<td>2.2 LPA</td>
 				<td>Noida</td>
 			</tr>
 			<tr>
 				<td><img src="New folder/concentrix.jpg">Concentrix</td>
 				<td>Customer Service Executive</td>
 				<td>03/02/18</td>
 				<td>1.8-2.6 LPA</td>
 				<td>Dehli,MCR</td>
 			</tr>
 			<tr>
 				<td><img src="New folder/cryptograhic.jpg">Cryptographic</td>
 				<td>Techincal Support</td>
 				<td>24/11/18</td>
 				<td>1.26 LPA</td>
 				<td>Noida, Mohali, Dehradun</td>
 			</tr>
 			<tr>
 				<td><img src="New folder/infosys.jpg">Infosys</td>
 				<td>Testing Executive</td>
 				<td>01/04/19-02/04/19</td>
 				<td>2.20 LPA</td>
 				<td>Pan India</td>
 			</tr>
 			<tr>
 				<td><img src="New folder/investors.png">Investor Clinic Infratech</td>
 				<td>Sales Marketing Executive</td>
 				<td>03/10/18</td>
 				<td>2.16 LPA</td>
 				<td>Dehli,MCR</td>
 			</tr>
 			<tr>
 				<td><img src="New folder/pcits.png">PCITS</td>
 				<td>Costomer Service Representative</td>
 				<td>12/02/18</td>
 				<td>1.8-2.4 LPA</td>
 				<td>Dehradun, Lucknow</td>
 			</tr>
 			<tr>
 				<td><img src="New folder/dp.png">DP Innovative</td>
 				<td>Multiple Job Profile<br>(Graphic Designer<br>Customer Support<br>Web Developer<br>Data analyst<br>Business Inteligents<br>Marketing Executive)</td>
 				<td>23/08/18</td>
 				<td>Up to 6 LPA</td>
 				<td>Dehradun</td>
 			</tr>
 		</table>
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