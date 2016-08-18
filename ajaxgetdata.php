<?php
    require('connection.php');
    
    if(isset($_REQUEST['id']))
    {
      $array =  $_REQUEST['id'];
        $result=selectUsers();
        
       $row = $result->fetch_all();
        
      
        if($array<count($row))
        {
              $mydata=$row[$array];
         echo '
         <div class="col-md-5">
            <div class="card">
              <div class="card-block">
                <h4 class="card-title">Matched With</h4>
                <h6 class="card-subtitle text-muted">Name:'.$mydata[2].'</h6>
              </div>
                <div class="col-centered">
                     <img  src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar02-512.png" alt="Card image" 
                   height="200" width="250">
                </div>
            
               
                
              <div class="card-block">
                <p class="card-text">School:'.$mydata[5].'
                              <br>
                              Location:'.$mydata[8].",".$mydata[7].",".$mydata[6].'
                              <br>Email:'.$mydata[4].'<br>Bio:'.$mydata[15]; '</p>
                </div>
            </div>
                
            </div>';
        
   

    }
        else
            echo '';
        
    }
 
 ?> 