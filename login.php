<?php
   session_start();
?>

<!If we server like we use server in form action must to sart session>
<!PHP session store data on server not on user's computer>


<!DOCtype html>
<head>
     <title>Creat Account</title> 
	 <link rel="stylesheet" href="css/login.css">
	 <?php include 'links/links.php' ?>
	 
	 <script src="https://kit.fontawesome.com/d50b37fe7b.js" crossorigin="anonymous"></script>

</head>
<body>

  <?php
     include 'data.php';
	 
	 if(isset($_POST['submit'])){
		 $email=$_POST['email'];
		 $password=$_POST['password'];
		 
		 /*Database na email sathe jodva*/
		 $email_search=" select * from  registration where email='$email' "; 
		 
		 /*query thi connection banvyu con<-->emailsearch , con akhu data.php thi work karse */
		 $query=mysqli_query($con,$email_search);
		 
		 /*Ana thi check thay apda dabase ma ke apdo enter karel email database ma chhe?? ke nahi??*/
		/*below meanig ke enter email-id ketli rows ma available chhe*/
		$email_count=mysqli_num_rows($query);
		
		if($email_count){
			$email_pass=mysqli_fetch_assoc($query);
			
			/*db namna ek varible ma apde e password ne store karavim didho*/
			$db_pass=$email_pass['password'];
			
			$_SESSION['username']=$email_pass['username'];
			
			$pass_decode=password_verify($password,$db_pass);
			
			if($pass_decode){
				?>
				  <script>
				        alert("Login Successfully");
				        location.replace("main.php");
				  </script>
				<?php
			}
			else{
				?>
	          <script>
		            alert("Password Incorrect");
	          </script>
	            <?php
			}	
		}
		
		else{
			?>
	          <script>
		            alert("Invalid Email");
	          </script>
	        <?php
		}
			
		
		
	 }
  ?>
  

  <div class="card bg-light">
	 
    <article class="card-body mx-auto" style="max:width:400px;">
          <h2 class="card-title mt-3 text-center">Creat Account</h2>	
	 
	      <p class="text-center">Get Stareted With your free account</p>
	 
	      <p>
	         <a href="" class="btn btn-block btn-gmail" onclick="showAlert()"><i class="fa fa-google"></i>Login Via Gmail</a>
	         <a href="" class="btn btn-block btn-facebook" onclick="showAlert()"><i class="fa fa-facebook-f"></i>Login Via FaceBook</a>
	      </p>
	 
       	  <p class="divider-text">
	         <span class="bg-light">OR</span>
	      </p>
	 
	 
	 <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"> 
	 
		
        <div class="form-group input-group">
             <div class="input-group-prepend">
		      <span class="input-group-text"> <i class="fa fa-envelope"></i></span>
		     </div> 
			<input name="email" class="form-control" placeholder="Email Address" type="email" required>
		</div>
		
       
        <div class="form-group input-group">
             <div class="input-group-prepend">
		      <span class="input-group-text"> <i class="fa fa-lock"></i></span>
		     </div> 
			<input name="password" class="form-control" placeholder="Creat Password" type="password" required>
		</div>
		
		
        <div class="form-group">
		    <button type="submit" name="submit" class="btn btn-primary btn-block" >Login Now</button>
		</div>
		
		<p class="text-center">Don't have an Account??
		     <a href="registration.php">Sign Up Here</a>
		</p>
		
     </form>
   </article>
     
 </div> 	

       <script>
            function showAlert() {
            var myText = "This Feature is available soon";
            alert (myText);
            }
      </script> 

</body>
</html>