<?php
    require('connection.php');
    if(isset($_GET['q'])){
    $result=selectSpecificUser($_GET['q']);
     $row = $result->fetch_assoc();   
    
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">

    <!-- Custom CSS -->
    <!--<link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script>
    var value=0;
    function loadDoc(id) 
        {
            
        //    alert(id);
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
            //    alert(xhttp.responseText);
                if(xhttp.responseText.trim()==""){
                    value=0;
                }
                else{
                     document.getElementById("matcheddata").innerHTML = xhttp.responseText;
                }
            
            }
              
          };
         //   alert("ajaxgetdata.php?id="+id);
          xhttp.open("GET", "ajaxgetdata.php?id="+value, true);
          xhttp.send();
            value++;
          
        }
        
    </script>

</head>
    <body>
        <div class="container ">
        <div class="row row-right">
            <div class="col-md-1  dropdown">
                  <button class="btn btn-primary  btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Grades
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">10</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">8</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">1</a></li>
                      
                  </ul>
            </div>
            <div class="col-md-1  dropdown">
              <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Language
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
              </ul>
            </div>
             <div class="col-md-2  dropdown">
              <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Location
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">HTML</a></li>
                <li><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
              </ul>
            </div>
                        

            </div>
        <div class="row row-centered card-pad">
            <div class="col-md-5">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Your Student</h4>
                <h6 class="card-subtitle text-muted">Name:<?php echo $row['FirstName']." " .$row["LastName"];  ?></h6>
              </div>
                <div class="col-centered">
                     <img  src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar02-512.png" alt="Card image" 
                   height="200" width="250">
                </div>
             
              <div class="card-block">
                <p class="card-text"><?php echo 'School:'.$row["School"].'
                              <br>
                              Location:'.$row["City"].",".$row["State"].",".$row["Country"].'
                              <br>Email:'.$row['Email'].'<br>Bio:'.$row["Bio"]; } ?></p>
                </div>
            </div>
        </div>
            <div id="matcheddata">
            
                <div class="col-md-5">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Matched With</h4>
                <h6 class="card-subtitle text-muted">Name:xxxxxx</h6>
              </div>
                <div class="col-centered">
                     <img  src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar02-512.png" alt="Card image" 
                   height="200" width="250">
                </div>
            
               
                
              <div class="card-block">
               
                </div>
            </div>
                
            </div>
                
            </div>
            
            
            </div>
            
            <div class="row row-centered">
                <a type="button" class="btn btn-primary" href>Match</button>
                <button class="btn btn-primary" onclick="loadDoc(<?php echo $_REQUEST['q'];?>)">Next</button>
            </div>

            
    
    <!--/.Card content-->

</div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
</html>