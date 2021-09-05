<?php
session_start();
?>

<!DOCtype html>
<head>
     <title>Creat Account</title> 
	 <link rel="stylesheet" href="css/registration.css">
	 <?php include 'links/links.php' ?>
	 
	 <script src="https://kit.fontawesome.com/d50b37fe7b.js" crossorigin="anonymous"></script>

</head>
<body>


<!This below is for taking values from user via php>

<?php

   
   include 'data.php';
   /*Jena par click karta php work karavani hoy enu name lakhavanu*/
   if(isset($_POST['submit']))
{
	   $username=mysqli_real_escape_String($con,$_POST['username']);
	   $email=mysqli_real_escape_String($con,$_POST['email']);
	   $mobile=mysqli_real_escape_String($con,$_POST['mobile']);
	   $password=mysqli_real_escape_String($con,$_POST['password']);
	   $cpassword=mysqli_real_escape_String($con,$_POST['cpassword']);
   
   
      $pass=password_hash($password,PASSWORD_BCRYPT);
      $cpass=password_hash($cpassword,PASSWORD_BCRYPT);
   
      $emailquery="  select * from registration where email='$email'  ";
      $query=mysqli_query($con,$emailquery);
   
      $emailcount=mysqli_num_rows($query);
   
      if($emailcount>0)
	  {
		  ?>
	          <script>
		            alert("Emial Alredy Exist");
	          </script>
	      <?php
		  /*echo "email already exist";*/
	  }
	  else
	  {
		  /*Ahiya registration name chhe je me signup-database ni andar rakyu hatu */
		  if($password === $cpassword)
		  {
			 
			 $insertquery="INSERT INTO `registration`(`username`, `email`, `mobile`, `password`, 
			 `cpassword`)  VALUES ('$username','$email','$mobile','$pass','$cpass')";
		  
		    $iquery=mysqli_query($con,$insertquery);
		    
            if($iquery)
			   {
	            ?>
	               <script>
		              alert("Inserted Successfully");
					  location.replace("login.php");
	                </script>
	            <?php	
                }
            else
		     	{
	            ?>
	              <script>
		             alert("Not Inserted");
	              </script>
	            <?php
		        }
	       }    
          else
		   {
			   ?>
			 <! echo "Password are not matching";>
			 <script>
		             alert("Password are not matching");
	         </script>
			 <?php
	       }
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
		      <span class="input-group-text"> <i class="fa fa-user"></i></span>
		   </div> 
			<input name="username" class="form-control" placeholder="Name" type="text" required>
		</div>	
		
        <div class="form-group input-group">
             <div class="input-group-prepend">
		      <span class="input-group-text"> <i class="fa fa-envelope"></i></span>
		     </div> 
			<input name="email" class="form-control" placeholder="Email Address" type="email" required>
		</div>
		
        <div class="form-group input-group">
             <div class="input-group-prepend">
		      <span class="input-group-text"> <i class="fa fa-phone"></i></span>
		     </div> 
			<input name="mobile" class="form-control" placeholder="Phone No." type="number" required>
		</div>	
		
        <div class="form-group input-group">
             <div class="input-group-prepend">
		      <span class="input-group-text"> <i class="fa fa-lock"></i></span>
		     </div> 
			<input name="password" class="form-control" placeholder="Creat Password" type="password" required>
		</div>
		
        <div class="form-group input-group">
             <div class="input-group-prepend">
		      <span class="input-group-text"> <i class="fa fa-lock"></i></span>
		     </div> 
			<input name="cpassword" class="form-control" placeholder="Repeat password" type="password" required>
		</div>
		
        <div class="form-group">
		    <button type="submit" name="submit" class="btn btn-primary btn-block" >Creat Account</button>
		</div>
		
		<p class="text-center">Have an Account??
		     <a href="login.php">Log In</a>
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