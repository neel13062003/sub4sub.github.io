<?php
   session_start();
?>

<!this php code is for contact.php>
<?php
$insert=false;
if(isset($_POST['name'])){
	
	     //set connection varibles
		 $server = "localhost";
		 $username="root";
		 $password="";
		 
		 //creat a database connection
		 $con=mysqli_connect($server,$username,$password);
		 
		 //check for connection success
		 if(!$con){
			die("connection to this database failed due to".mysqli_connect_error());
		 }
		 //echo "Successfully connecting to DataBase";
		 
		 
		 //collect post variables
		 //$id=$_method['id'];
		 $name=$_POST['name'];
		 $email=$_POST['email'];
		 $insta=$_POST['insta'];
		 $youtube=$_POST['youtube'];
		 $desc= $_POST['desc'];
		 
		 
		 //first trip database then biju trip table chhe
		 $sql="INSERT INTO `db`.`contact` (`name`, `email`, `insta`, `youtube`, `other`,`dt`)
		 VALUES ('$name', '$email', '$insta', '$youtube','$desc',current_timestamp());";
	     //echo $sql;
		 
		 
		 //Execute The Query
		 if($con->query($sql) == true){
			 //echo "Successfully Inserted";
			 
			 //Flag for successfully insertion
			 $insert=true;
		 }	 
		 else{
			 echo "ERROR: $sql <br> $con->error";
		 }
		 
		 //close the database connection
		 $con->close();	
}		
?>

<!this php code is for "post" of main page to database save>
<?php
$insert=false;
if(isset($_POST['mansi'])){
	
	     //set connection varibles
		 $server = "localhost";
		 $username="root";
		 $password="";
		 
		 //creat a database connection
		 $con=mysqli_connect($server,$username,$password);
		 
		 //check for connection success
		 if(!$con){
			die("connection to this database failed due to".mysqli_connect_error());
		 }
		 //echo "Successfully connecting to DataBase";
		 
		 
		 //collect post variables
		 //$id=$_method['id'];
		 $other=$_POST['other'];
		 
		 /*$email=$_POST['email'];
		 $insta=$_POST['insta'];
		 $youtube=$_POST['youtube'];
		 $desc= $_POST['desc'];*/
		 
		 
		 $getname=$_SESSION['username'];
		 /*$getemail=$_SESSION['email'];*/
		 //first trip database then biju trip table chhe
		 $sql="INSERT INTO `db`.`post` (`name`,`other`,`dt`)
		 VALUES ('$getname','$other',current_timestamp());";
	     //echo $sql;
		 
		 
		 //Execute The Query
		 if($con->query($sql) == true){
			 //echo "Successfully Inserted";
			 
			 //Flag for successfully insertion
			 $insert=true;
		 }	 
		 else{
			 echo "ERROR: $sql <br> $con->error";
		 }
		 
		 //close the database connection
		 $con->close();	
}		
?>



<!DOCtype html>
<html lang="en">
<html>
<head>
     <title>Main Sub4Sub</title>
	 <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <meta name="viewport" content="width=device-width,initial-scale=1">
	 
	 <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/responsive1.css">
	 <link rel="shortcut icon" type="images/jpg" href="images/n81.jpg">
	 
	 
	 <script src="https://kit.fontawesome.com/d50b37fe7b.js" crossorigin="anonymous"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</head>

<body>

	 <nav> 
	 
	    <div class="mainresponsive">
		    <div class="responsive1">
			
	            <div class="nav-left">
		           <img src="images/n81.jpg" class="logo" width="160" height="50">
		             <ul>  
		               <li><a href="index.php">Logout</a></li>
		               <li><a href="contact.php"><i class="fas fa-user"></i>Contact</a></li>  
		             </ul>
		        </div>
				
			</div>
        </div>			
				
		
        <div class="mainresponsive">
		    <div class="responsive1">
		
		        <div class="nav-right">
		
		           <div class="search">
		              <input type="text" name="" id="" placeholder="Search here..." >
				         <a href="thanks/index.php"><button class="btn" onclick="whatsapp()"> Search</button></a>
		           </div>
			
			
			       <div class="nav-user-icon online" onclick="settingsMenuToggle()">     
			          <?php 
				           echo $_SESSION['username'];
				      ?>
				      <img src="images/p.png" width="8px" height="45px">
				      <!<i class="fas fa-user-circle"><!</i>
			        </div>
			
		         	<!<div class="nav-user-icon online" onclick="settingsMenuToggle()">     
			            <!<span id="profile"> <!ahiya php vali line lakhi ladhi > <!</span>
				        <!<img src="images/neel.jpeg">
			        <!</div>
		         	<!<div class="nav-user-icon online" onclick="settingsMenuToggle()">
			           <!<img src="images/neel.jpeg">
		         	<!</div>
			
	     	    </div>	
				
			</div>
		</div>	
		
		
		<div class="clearfix"></div>
		<br><br><br><br><br>	
			
		
		
		<!........Setting Menu.........>
		<div class="settings-menu">
		   
		    <div id="dark-btn" class="dark-btn-on">
			   <span></span>
			</div>
		
		
		    <div class="settings-menu-inner">
			
			     <div class="user-profile">
			      <!<img src="images/profile-pic.png">
			      <!<img src="images/neel.jpeg">
				  <img src="images/p.png" width="80px" height="45px">
		            <div> 
					  <?php 
                        echo "<link rel='stylesheet' type='text/css' href='css/php.css'>";					  
					    echo $_SESSION['username']; 
					  ?>
					  <a href="#">See Your Profile</a>
		            </div>
		        </div>
			    <hr>
			 
			    <div class="user-profile">
			      <img src="images/feedback.png">
		            <div>
					  <p>Give Feed Back</p>
					  <a href="#">Help Us to Improve the new design</a>
		            </div>
		       </div>
			   <hr>
			   
			   <div class="setting-links">
			      <img src="images/setting.png" class="setting-icon">
				  <a href="#">Setting & Privacy	<img src="images/arrow.png" width="10px"></a>
			   </div>
			   <div class="setting-links">
			      <img src="images/help.png" class="setting-icon">
				  <a href="#">Help & Support<img src="images/arrow.png" width="10px"></a>
			   </div>
			   <div class="setting-links">
			      <img src="images/display.png" class="setting-icon">
				  <a href="contact.php">contact<img src="images/arrow.png" width="10px"></a>
			   </div>
                <div class="setting-links">
			      <img src="images/logout.png" class="setting-icon">
				  <a href="index.php">LogOut<img src="images/arrow.png" width="10px"></a>
			   </div>				   
			   
			  
			</div>
		     
		</div>	
	 </nav>
	 
	  <div class="responsive">
			<div class="gallery" align="center"> 					
				<font color="#4A235A" face="Yamuna">
				    <font size="6" class="ml3">					
                        Sub4Sub Website is World's First Biggest platform's feature to increase Subscribes Using Personal						
			   		</font>
	             	<font size="6">
			           <span class="txt-rotate" data-period="2000" data-rotate='[ "Chatting Individuals...","Post In Website...", "Contact With Us team...", "Use All Features... "]'></span>
     	            </font>		
			    </font>	
	        </div>
       </div>
	   
	   <script src="js/op.js"> </script>
	 
	 <div class="clearfix"></div>
		
		
	 <div class="container">
	 
			<!-----------------left-sidebar-------------------->
	     <div class="left-sidebar">
		 
		    <div class="imp-links">
			    <span id="dis1">
				     <a href="thanks/index.php"><img  class="photo1" src="images/n10.jfif" width="290" height="220" ></a>
				     <p>Grow YouTube Subscriber
     					 Views joining chatting now</p>
						<a href="thanks/index.php"><span id="clickspan">Click Here</span></a>
				  </span>
			</div>
			
			<div class="shortcut-links">
			   <span id="dis2">
				       <a href="thanks/index.php"><img class="photo" src="images/n16.jfif" width="290" height="215"></a	>
				       <p>Instagram Followers for
					      join chatting group</p>
						  <a href="thanks/index.php"><span id="clickspan">Click Here</span></a>
				  </span>	
			</div>
		 </div>
		 
		 
		 <div class="clearfix"></div>
		<br><br><br><br><br>	
		
		
		 
		 <!-----------------main-content-------------------->
	     <div class="main-content">
		 	   
		   <div class="write-post-container">
		   
		       <div class="user-profile">
			      <!<img src="images/profile-pic.png">
			      <!<img src="images/neel.jpeg">
				  <img src="images/p.png" width="110" height="45">
		            <div>
					  <!p><!Ahiya name><!/p>
					  <p>
					  <?php 
				           echo $_SESSION['username'];
				      ?>
					  </p>
					  <small>Public <i class="fas fa-caret-down"></i></small>
		            </div>
		       </div>
			   
			   
			   
			   <div class="post-input-container">
			  	
					<form action="main.php" method="post">   
					    
					    <textarea name="other" id="other"  rows="2" placeholder="Enter Your Wishes And Give Your Youtube channel link!!!" required></textarea>  
				   
					    <div class="add-post-links">
					         <a href="#"><img src="images/live-video.png" onclick="comingsoon()"> Video</a>
					         <a href="#"><img src="images/photo.png" onclick="comingsoon()">  Photo</a>
					         <!<a href="#"><!<img src="images/feeling.png" onclick="comingsoon()"><! Feeling/Acivity><!/a>
 						
					    	 <button class="btn" onclick="showthanks()" name="mansi"> POST </button>
				    </form>    
                        </div>	
                     					
			   </div>
			   	   
		   </div>
		   
		   
		   <div class="post-container">
		        <div class="post-row">
				   <div class="user-profile">
			         <img src="images/neel.jpeg">
					 <!<img src="images/p.png" width="110px" height="45px">
		              <div>
					     <p>Soni Neel Nikunjkumar</p>
						 
					     <span>August 19 2021,1:30 pm</span>
		              </div>
		            </div>
					<a href="#"> <i class="fas fa-ellipsis-v"></i> </a>
				</div>
		        
			   
			   <p class="post-text">This is Amazing Website for<a href="#"> YouTubeChannel</a> <span>@Sub4Sub</span> made by Soni Neel.This Website 
			   make your friends and grow your YouTubeChannel. We all Subscribe each other channel,Like My channel
			   name is "Unstoppable Inspiration" & link is --><a href="https://youtu.be/y0aqyspGsdA">"https://youtu.be/y0aqyspGsdA" </a>
			   </p>
			   <img src="images/feed-image-1.png" class="post-img">
			   
			   <div class="post-row">
			       <div class="activity-icons">
				       <div><img src="images/like-blue.png"><! 120></div>
				       <div><img src="images/comments.png"><!50></div>
				       <div><img src="images/share.png"><!20></div>
				   </div>
				   <div class="post-profile-icons">
				       <img src="images/neel.jpeg"><!<img src="images/p.png" width="50px" height="20px"><i class="fas fa-caret-down"></i>
				   </div>
			   </div>
		   </div>
		   
		   <!2 post container>
		   
		    <div class="post-container">
		        <div class="post-row">
				   <div class="user-profile">
			        <img src="images/jay.jpeg"  width="50" height="50">
					 <!<img src="images/p.png" width="110px" height="45px">
		              <div>
					     <p>Jay</p>
						 
					     <span>August 25 2021,5:00 pm</span>
		              </div>
		            </div>
					<a href="#"> <i class="fas fa-ellipsis-v"></i> </a>
				</div>
		        
			   
			   <p class="post-text">Hello Friends I want to reach quickly 1000 subscriber.My channel name is 
			   <a href="https://youtu.be/4gGj1_f4e6s">Jay Music</a>.Pls subbscribe my channel I will definetly subscribe your channel,
                We make unity and support to grow me and your channel---><a href="https://youtu.be/4gGj1_f4e6s">https://youtu.be/4gGj1_f4e6s</a>.
				Then reply on comment on youtube channel I will subscribe your channel.
			   </p>
			   <img src="images/feed-image-2.png" class="post-img">
			   
			   <div class="post-row">
			       <div class="activity-icons">
				       <div><img src="images/like.png"> <!120></div>
				       <div><img src="images/comments.png"> <!50></div>
				       <div><img src="images/share.png"> <!20></div>
				   </div>
				   <div class="post-profile-icons">
				       <img src="images/jay.jpeg" width="80" height="30"><!img src="images/p.png" width="50px" height="20px"><i class="fas fa-caret-down"></i>
				   </div>
			   </div>
		   </div>
		   
		   <! 3rd Post Container>
		   
		    <div class="post-container">
		        <div class="post-row">
				   <div class="user-profile">
			        <img src="images/hetav.jpeg">
					<!img src="images/p.png" width="110px" height="45px">
		              <div>
					     <p>Shah Hetav</p>
						 
						 
						 
					     <span>August 19 2021,1:30 pm</span>
		              </div>
		            </div>
					<a href="#"> <i class="fas fa-ellipsis-v"></i> </a>
				</div>
		        
			   
			   <p class="post-text">Hello Sub4Sub friends,This is time to show unity.I want to reach quickly 1000 subscriber.My channel name is 
			   <a href="https://youtu.be/p5CoA_gR1nA">MAGICAL FINGERS PIANO TUTORIALS</a>.Pls subbscribe my channel I will definetly subscribe your channel,
                We make unity and support to grow me and your channel---><a href="https://youtu.be/p5CoA_gR1nA">https://youtu.be/p5CoA_gR1nA</a>.
				Then reply on comment on youtube channel I will subscribe your channel.
			   </p>
			   <img src="images/feed-image-3.png" class="post-img">
			   
			   <div class="post-row">
			       <div class="activity-icons">
				       <div><img src="images/like-blue.png"> <!120></div>
				       <div><img src="images/comments.png"> <!50></div>
				       <div><img src="images/share.png"> <!20></div>
				   </div>
				   <div class="post-profile-icons">
				       <img src="images/hetav.jpeg"><!img src="images/p.png" width="50px" height="20px"><i class="fas fa-caret-down"></i>
				   </div>
			   </div>
		   </div>
		   
		   <div class="load">
		     <a href="main.php"><button type="button" class="load-more-btn">Load More</button></a>
		   </div>
		  
		      
		 </div>
		 
		 
		 
		 <div class="clearfix"></div>
		<br><br><br><br><br>	
		
		
		
	
		  <!-----------------right-sidebar-------------------->
	     <div class="right-sidebar">
		    <div class="sidebar-title">
			    <h4>Events</h4>
				<a href="#">See All</a>
			</div>
			
			<div class="event">
			     <div class="left-event">
				    <h3>5</h3>
					<span>September</span>
				 </div>
				 <div class="right-event">
				    <h4>Biggest Sub4Sub Online Platform Launch</h4>
					<p><i class="fas fa-map-marker-alt"></i> Gujarat </p>
					<a href="#">More Info</a>
				 </div>
			</div>
			
			<div class="event">
			     <div class="left-event">
				    <h3>14</h3>
					<span>November</span>
				 </div>
				 <div class="right-event">
				    <h4>World's Revolutionary Product will Launch</h4>
					<p><i class="fas fa-map-marker-alt"></i> Gujarat</p>
					<a href="#">More Info</a>
				 </div>
			</div>
			
			<div class="sidebar-title">
			    <h4>Advertisement</h4>
				<a href="#">Close</a>
			</div>
			
			<img src="images/advertisement.png" class="sidebar-ads">
			<div class="haben">If You want to give your advertisement then contact our team.<br><br>
			    <a href="contact.php" color="blue">Contact</a> Our Team <br><br>
				Email-<b>sub4sub13062003@gmail.com</b>
			</div>
		 </div>
			 
	 </div>
	 
	 
	 <script src="js/script.js"><script>
	 
	 <script>
            function whatsapp() {
            var myText = "Go to Website chatting platform to send your channel link and subscribe channel each other";
            alert (myText);
            }
     </script>
	 
	 
	 <script>
            function showthanks() {
            var myText = "Your Post Submitted, Lookin in Sometime";
            alert (myText);
            }
     </script>
	 
	 <script>
            function  comingsoon() {
            var myText = "Features is coming soon, Give Your channel name, We display your channel name in our websie";
            alert (myText);
            }
     </script>
	 
	 
	  <footer>
	         <div class="text1">Copyright &copy; Sub4Sub.com</div>
			 <div class="text2">Contact Us Team- sub4sub13062003@gmail.com </div>
	  </footer>
	
	
</body>

</html>