<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="penpal";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

function selectUsers(){
    $sql = "SELECT * from users";
    $result=$GLOBALS["conn"]->query($sql);
    return $result;
}
function selectSpecificUser($id){
    $sql = "SELECT * from users WHERE UserID=".$id;
    $result=$GLOBALS["conn"]->query($sql);
    return $result;
}
function compareUsers(){
    
}

?>