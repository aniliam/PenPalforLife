<?php 
ob_start();
include('connection.php');

if(isset($_REQUEST['submit']))
{
	   $email = $_REQUEST['Email'];
	   $password = $_REQUEST['Password'];
	 
	  $query = "select * from users WHERE Email ='".$email."' and Password = '".$password."'";
	  $sql1= mysql_query($query);
       	 
	  $count = mysql_num_rows($sql1);
      
				  if($count == 1)
				   {
					  header('location:signup.php');
				   }
				   else
				   {
					   
					$message = "Please Enter Correct Email and Password";
				   }		 
}	
  
   
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PenPal</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">PenPal for Life</a>
            </div>
            <!-- Top Menu Items -->
        </nav>
    </div>
    <!-- /#wrapper -->
    
    <div class = "container">
        <div class="wrapper">
            <form method="post" class="form-signin">
               <h5> <?php 
			   if(isset($message))
			   {
				   echo $message;
			   }
			   ?></h5>
				<h3 class="form-signin-heading"> Sign In here</h3>
                <hr class="colorgraph"><br>
                
                <input type="email" class="form-control" name="Email" placeholder="Email *" required="" autofocus="" />
                <input type="password" class="form-control" name="Password" placeholder="Password *" required=""/>
				
                
				<input type="submit" class="btn btn-lg btn-primary btn-block signin_submit" value="Sign In "  name="submit" />
              
                <a href="forgot_password.html" class="forgot_password"> Forgot password?</a>
				<br>
				</br>
				<p> If you are a new User </P>
				        <a href="SignUp.html" class="forgot_password">Sign Up </a>
            </form>			
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
