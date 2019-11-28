<?php
//connecting to database
$conn=mysqli_connect("localhost","root","","csc316");
if($conn){

    $username=$_POST['Name'];
    $password=$_POST['Gender'];
    $username=$_POST['Email'];
    $username=$_POST['Password'];
    $username=$_POST['Address'];
    //creating an insert query to save data
    $q="insert into upload(Name,Gender,Email,Password,Address) VALUES ('$Name','$Gender','$Email','$Password','$Address')";
    //process the query
    $process=mysqli_query($conn,$q);
    if($process){
        
		echo "Logged in";
  header('Location: ufhomepage.php');
    }
    else{
       echo "insertion failed";
    }


}
else{
    echo"connection to the database failed";
}

echo"Name:".$Name."Gender".$Gender"Email".$Email"Password".$Password"Address".$Address;
?>