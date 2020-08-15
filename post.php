 <?php
 session_start();
 $conn=mysqli_connect('localhost','root','','itm-social-network');
 $pub=null;
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
 if(isset($_REQUEST['Publish']))
    {
	$post_topic=$_REQUEST['post_topic'];
	$post=$_REQUEST['post'];
	$image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$user=$r;
	$query="insert into post(Username,post_topic,post,image)values('$user','$post_topic','$post','$image')";
	$pub=mysqli_query($conn,$query);

  }
 ?>
 <!DOCTYPE>
 <html>
 <head>
 	<title>test</title>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="New folder/itm.ico">
 	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
 	
 	<script type="text/javascript" src="js/jquery.js"></script>
 	<script type="text/javascript" src="js/sidebar.js"></script>
 	<style type="text/css">
 		.test{
 			
 			background-color:rgba( 1, 177, 226,0.59);
 			width: 90%;
 			height: auto;
 			position:absolute;
 			top: 150px;
 			left:70px;
 			border-radius: 3%;
 			
 			
 		}

 		.postbox{
 			border-style: hidden;
            margin-top: 20px;
 			margin-left: 300px;
 			color: #fff;
 			background-color:rgba(252, 205, 27,0.7);
 			width:600px;
 			height:350px;
 			border-radius:5%;
 			
 			
 			
 		}
 		.file{width:400px;}
 		.topic{margin-left: 100px;width:300px;height:30px;border:2px solid #fff;background:transparent;outline:none;border-radius: 4px;}
 		.image{margin-left: 100px; width: 400px;height: 200px;}
 		.heading1{margin-left: 100px; }
 		.heading2{margin-left: 100px;color:#fff;}
 		.publish{margin-left: 100px;background-color:rgba( 1, 177, 226);border:none;outline:none;height:30px;width:100px;color:#fff;font-size:13px;border-radius:20px;}
 		.post{margin-left: 100px;font-size:20px;color}
 		.User{font-size:17px;text-decoration:underline;color:red;}
 		.User1{font-size:17px;color:#fff;}

 		


 		
 		body{
 			background:url("New folder/pic1.jpg");
 			background-size: cover;
    		background-position: center;
    		background-repeat:round;
 			margin: 0px;
 			padding: 0px;
 			font-family: sans-serif;
 		}
 		.area{
  width: 60%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #fff;
  border-radius: 4px;
  background:transparent;
  font-size: 16px;
  resize: none;
  margin-left: 100px;

}


.alert {
  padding: 20px;
  background-color:#4CAF50;
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
 		
 			<button class="btn active">Post</button>
 			<button class="btn">Placement</button>
 			<button class="btn">Important Links</button>
 		
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
 			<li><a class="active-link" href="">post</a></li>
 			<li><a href="Placement.php">Placement</a></li>
 			<li><a href="ImportantLinks.php">Important Links</a></li>
 		</ul>
	</div> 	
 	
 </div>

 <div class="test">

 	<div class="postbox">
 	<form method="post" action=" " enctype="multipart/form-data">
 		<h1 class="heading1">What's on your mind?</h1>
 		<input type="text" name="post_topic" placeholder="Post Topic" class="topic"><br>
 		<span class="image">Choose post Image:<input type="file" name="image"></span><br><br>
 		<textarea name="post" class="area" placeholder="Write Something Here..."></textarea><br><br>
 		
 		<input type="submit" name="Publish" value="Publish" class="publish">
 	</div><br><br>
 		<?php
 	$display="select * from post order by id desc";
 	$print=mysqli_query($conn,$display);
 	while($pst=mysqli_fetch_array($print))
 	{
 		echo "<p>";

 		echo "<h2 class='heading2'>".$pst['post_topic']."</h2>";

 		echo '<img src="data:image/jpeg;base64,'.base64_encode($pst['image']).'"class="image" ><br>';
 		echo "<span class='post'>".$pst['post']."</span><br><br>";
		echo "<span style='margin-left: 900px;'><span class='User1'>Published by:</span><span class='User'><strong>".$pst['Username']."</strong></span></span><br>";
 		echo "<p>";
 		echo "<hr width='90%' size='5' style='background:rgba(252, 205, 27,0.6);border:none;'>";

 	}




 	?>

 	</form>
 	
 </div>
 <div>
 	
 </div>	
 <div class="alertbox">
 	
 	<?php
	


						if($pub>0)
						{
															echo "<script>
																			function dismiss()
																								{
																									document.getElementById('dismiss').parentElement.style.display='none';
																								};
				 													</script>
				 													<div class='alert'>
				 													<span id='dismiss' class='closebtn' onclick='dismiss();'>&times;</span> 
  				 													<strong>Successfull!</strong> Post Published.
 													 				</div>";


 														}

				?>

 </div>
 	 
 
 </body>
</html>