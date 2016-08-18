<?php 
ob_start();

include('connection.php');

session_start();

$firstname =$_SESSION['firstname'];
$lastname=$_SESSION['lastname'];
$email=$_SESSION['email'] ;
$password=   $_SESSION['password'];


if(isset($_POST['submit']))
 {	
	   $school = $_POST['school'];
	   $country = $_POST['country'];
	   $state = $_POST['state'];
	   $city = $_POST['city'];
	   $postalcode = $_POST['postalcode'];
	   
	 $sql = "INSERT INTO `users` (`UserID`, `TypeID`, `FirstName`, `LastName`, `Email`, `School`, `Country`, `State`, `City`, `PostalCode`, `matchRequested`, `isVerified`, `ReportedbyID`, `Password`, `Grade`, `Bio`, `Points`)
	  VALUES ( '', '1', '$firstname', '$lastname', '$email', '$school', '$country', '$state', '$city', '$postalcode', '1', '1', '1', '$password', '1', '1', '1')"; 
	
    $result = mysql_query($sql);
	
	if($result)
	{
		echo "data inserted";
	}
	else
	{
		echo"data not inserted";
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

    <title>PenPal System</title>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <script src="http://lab.iamrohit.in/js/location.js"></script>

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
                <a class="navbar-brand" href="index.html">PenPal  </a>
            </div>
            <!-- Top Menu Items -->
           
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

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

                <div class="row">
                    <div class="col-lg-6">
					<form method="post">
						<div class="form-group row">
						  <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">School</label>
						  <div class="col-sm-10">
							<input type="text" class="form-control form-control-lg" name="school" id="lgFormGroupInput" placeholder="Enter your school name">
						  </div>
						</div>
					
							
							     <div class="form-group row">
                              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Country</label>
								<div class="col-sm-10">
                                <select name="country" class="countries"  id="countryId" style="height:45px;width:670px">
							<option value="">Select Country</option>
							</select>
								</div>
                            </div>
						 <div class="form-group row">
                              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">State</label>
								<div class="col-sm-10">
                              	<select name="state" class="states" id="stateId" style="height:45px;width:670px">
							<option value="">Select State</option>
							</select>
								</div>
                            </div>
							 <div class="form-group row">
                              <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">City</label>
								<div class="col-sm-10">
                               <select name="city" class="cities" id="cityId" style="height:45px;width:670px">
							<option value="">Select City</option>
							</select>
								</div>
								</div>
					
						<div class="form-group row">
						  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Postal Code</label>
						  <div class="col-sm-10">
							<input type="password" name="postalcode" class="form-control form-control-sm" id="smFormGroupInput" placeholder="">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Captcha</label>
						  <div class="col-sm-10">
							<input type="password" class="form-control form-control-sm" id="smFormGroupInput" placeholder="">
						  </div>
						</div>
							
							<input type="submit" name="submit" value="Submit" class="btn btn-default" />
						    
                            <button type="reset" class="btn btn-default">Reset Button</button>
							
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
