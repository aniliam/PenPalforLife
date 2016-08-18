<?php 

include('connection.php');

if(isset($_REQUEST['submit']))
{
	 $users_email = $_POST['email'];
	   echo $query = "select * from users WHERE Email ='".$users_username."'";
	   $sql1= mysql_query($query);	 
	   if($sql1)
	   {
		        $from = "manpreet051993@gmail.com";
				$to =$_GET['email'];
				$Full_Name = $users_fname;
				$subject = "access the site";
				$message = '<html><body>';   
				$message .= '<table>';
			    $message .= "<tr><td><strong>Dear User,</strong></td></tr>";
				$message .= "<tr><td >You can resetyour password</td></tr>";                
				$message .="<tr><td><a href=http://localhost/project/resetpassword.php>Click here to ResetPassword </a></td></tr>";
				$message .= "<tr><td>Thank you.</tr>"; 
				$message .= "</table>";             
				$message .= "</body></html>";   
				$headers = "From: " . $from . "\r\n";
				$headers .= "MIME-Version: 1.0\r\n";
				$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		   		
				$send = mail($to, "$subject", $message, "From:" . $headers);
				header('location:login.php');				
		   
	   }
	   else
	   {
		   echo "your email is not valid";
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

    <title>Forgot password</title>

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
                <h3 class="form-signin-heading"> Forgot Password ?</h3>
                <hr class="colorgraph"><br>
                <p> Enter your email address to get your password</p>
                <input type="email" class="form-control" name="email" placeholder="Email *" required="" autofocus="" />
			
                <input class="btn btn-lg btn-primary btn-block forgot_pwd_submit"  type="submit" name="submit" value="Submit" />           
			
            </form>			
        </div>
    </div>
    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
