<?php 
ob_start();

include('connection.php');

session_start();
 if(isset($_POST['Submit']))
 {
	 
	   $firstname = $_POST['firstname'];
	   $lastname = $_POST['lastname'];
	   $email = $_POST['email'];
	   $password = $_POST['password'];
	   $_SESSION['firstname'] = $firstname;
	   $_SESSION['lastname'] = $lastname;
	   $_SESSION['email'] = $email;
       $_SESSION['password'] = $password;
	   header('location:SignUp2.php');
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
			
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
          
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
          
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" >

            <div class="container-fluid">

<div class="container">
		
	</div>
	
	</div>

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Forms
                        </h1>
                        <ol class="breadcrumb">
                          
                            <li class="active">
                                <i class="fa fa-edit"></i>Sign Up 
                            </li>
							
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
              <a href="Login.php" >Login</a>
                <div class="row">
                    <div class="col-lg-6">
					<form name="form" method="post">
						<div class="form-group row">
						  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">FirstName</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="firstname" placeholder="Enter your firstname">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">LastName</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control form-control-sm" id="smFormGroupInput" name="lastname" placeholder="Enter Your lastname">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email</label>
						  <div class="col-sm-10">
							<input type="email" class="form-control form-control-lg" id="lgFormGroupInput" name="email" placeholder="you@example.com">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Password</label>
						  <div class="col-sm-10">
							<input type="password" class="form-control form-control-sm" id="smFormGroupInput" name="password" placeholder="password contain numeric and alphabets">
						  </div>
						</div>
						
						<input type="submit" name="Submit" value="Submit" class="btn btn-default" />
						<input type="reset" name="Reset" value="Reset" class="btn btn-default" />
						  
					  </form>

                    </div>
                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
