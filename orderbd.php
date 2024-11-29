<?php

include 'connect.php';

if(isset($_POST['confirm'])){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Phone-no=$_POST['Phone-no'];
    $Address=$_POST['Address'];
    $Quantity=$_POST['Quantity'];
    $insertQuerry="INSERT INTO orderbatabase(Name,Email,Phonr-no,Address,Quantity)VALUES('$Name','$Email','$Phone-no','$Address','$Quantity')";
    if($conn->query($insertQuery)==TRUE){
        header("location: index.php")
    }
}