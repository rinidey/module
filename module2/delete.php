<?php
$dbname="rinika";
$username="root";
$servername="localhost";
$password="";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo "success";
    $sid=$_GET['id'];
    echo $sid;
    $query= "DELETE FROM student WHERE id ='$sid'";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
        echo "Deleted";
    }
    else{
        echo "Not Deleted";
    }
}
?>