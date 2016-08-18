<?php 
include('connection.php');

if(isset($_REQUEST['submit']))
{
	   $email = $_REQUEST['Email'];
	   $password = $_REQUEST['Password'];
	   $cpassword = $_REQUEST['CPassword'];
			
	    $query = "select * from users WHERE Email ='".$email."'";
	   $sql= mysql_query($query);	 
		if($sql)
		{
			if($password == $cpassword)
			{
				echo $updatesql = "update users set Password ='".$password."' where Email ='".$email."'";
				  $usql= mysql_query($updatesql);
				  if($usql)
				  {
					  header('location:login.php');
				  }else
				  {
					  echo "Please Try Again";
				  }
			}
			
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

    <title>SB Admin - Bootstrap Admin Template</title>

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
                <a class="navbar-brand" href="index.html">PenPal </a>
            </div>
            <!-- Top Menu Items -->
        </nav>
    </div>
    <!-- /#wrapper -->
    
    <div class = "container">
        <div class="wrapper">
            <form action="" method="post" name="Login_Form" class="form-signin">
                <h3 class="form-signin-heading">Reset Password</h3>
                <hr class="colorgraph"><br>
                
                <input type="email" class="form-control" name="Email" placeholder="Email *" required="" autofocus="" />
                <input type="password" class="form-control" name="Password" placeholder="Password *" required=""/>
				<input type="password" class="form-control" name="CPassword" placeholder="Confirm Password *" required=""/>
                
				<input type="submit" value="Reset Password" name="submit" class="btn btn-lg btn-primary btn-block signin_submit" />
             
            
            </form>			
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
