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
		 $sql="INSERT INTO `contact`.`contact` (`name`, `email`, `insta`, `youtube`, `other`,`dt`)
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

<!DOCtype html>
<html>
<head>
     <title>Contact Sub4Sub</title>
	
	 <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="css/contact.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	
	  
	 <link rel="shortcut icon" type="images/jpg" href="images/n81.jpg">
	
	 
</head>

<body>

     <! This Everything for cookie> 

     <div class="popup-screen">
      <div class="popup-box">
        <i class="fas fa-times close-btn"></i>
        <h2>Popup Box</h2>
        <p>You Always remember Share your Youtube channel link with each other and 
		then subscribe each other trustfully.Make Unity and share this website...</p>
        <a href="contact.php" class="btn">Agree</a>
      </div>
    </div>
	
	<script src="js/pop.js"></script>
    
	
    <!This above for cookie>
	
	
     <img class="bg" src="images/ph.jfif" alt="Tour">
     <div class="container">
	    <h3>Welcome to Sub4Sub</h3>
		<p>Enter Your Query and Doubts Regarding Increase Subscribers Or Followers</p>
		<?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see
        		you joining us for the US trip</p>";
        }
        ?>
	
		<form action="main.php" method="post">
	
		   <input type="text" name="name" id="name" placeholder="Enter Your name..." required>   
		   <input type="email" name="email" id="email" placeholder="Enter Your Email..." required>
		   <input type="text" name="insta" id="insta" placeholder="Enter Your Instagram Account Link..." >
		   <input type="text" name="youtube" id="youtube" placeholder="Enter Your Youtube Channel Link...">
		   <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Your Wishes And Doubts..." required></textarea>  
		   
		   <span>
    		  <button class="btn" name="name">Submit</button> 
			  <button class="btn" onkeydown="document.getElementById('from').value=null;document.getElementById('selectform').reset;" type="reset">Reset</button>
		  </span>   
		</form>
		
	 </div>
	 <script src="js/project.js">
	   <INSERT INTO `trip` (`serial`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('1', 'kalp nikunjkumar soni', '12', 'male', 'kalpnsoni13@gmail.com', '9427080543', 'I\'m very happy because first time I created database for my website.', current_timestamp());>
	 </script>
</body>
</html>