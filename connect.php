<?php
//database records
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];


//DB connect
$servername ='localhost';
$username ='root';
$password ='';
$dbname ='bcs';


$conn = new mysqli("localhost","root",'',"bcs");

//insert into DB

if($conn-> connect_error)
{
    die('connection failed :' .$conn-> $connect_error);
}
    else{
      $sql = ("INSERT INTO stud(firstname,lastname,email,phone)
      VALUES ('$firstname','$lastname','$email','$phone')");
    
 }
//   var_dump($sql); 'exit';
// //   saving statements
$sql = mysqli_query($conn, $sql);

if($sql == true)
{
    echo "records saved successfully";
}
else
{
    echo "Records not saved  successfully";
}

?> 
