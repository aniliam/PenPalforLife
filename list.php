<?php
 require('connection.php');
 $result=selectUsers();

 

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
    <!--<link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

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
        
        
        
        <div class="container">
          
          <table class="table">
            <thead>
              <tr>
                 <span>  List of Students :<?php echo $result->num_rows ?></span>
              </tr>
            </thead>
            <tbody>
                <?php
        if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo '
              <tr>
                  <td>
                  <div class="row">
                     <div class="col-lg-2">
                        <img src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar02-512.png" class="img-thumbnail" alt="Cinque Terre" width="100" height="100">
                      </div>                      
                      <div class="col-lg-4">
                          <span>
                              Name:'.$row["FirstName"]." " .$row["LastName"].'
                          </span>
                          <br>
                          <span>
                              School:'.$row["School"].'
                              <br>
                              Lo    cation:'.$row["City"].",".$row["State"].",".$row["Country"].'
                              <br>Email:'.$row['Email'].'
                          </span>

                      </div>
                      <div class="col-lg-2">
                        <a href="match.php?q='.$row["UserID"].'" class="btn btn-primary">Match</a>
                      </div>
                    </div>
                    </td>
              </tr>';
    }
} else {
    echo "0 results";
}
            
                     ?>
                
            </tbody>
          </table>
         </div>
        
        
        <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

