
<!DOCTYPE html>
<html>
<head>
  <title>Working with the database </title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/bootstrap" >
    <link rel="stylesheet" href="css/style.css" type="text/css" >
</head>
<body>
  <div class="flip_card">
  <h6 class="w3l-title">Saving Data into the database</h6>
     <form action="connect.php" method="POST">
  <div class="container">
   Firstname
    <input type="text" placeholder="Enter firstname" name="firstname" required ="true">
      <br> <br>
    Lastname
    <input type="text" placeholder="Enter lastname" name="lastname" required ="true">
      <br> <br>
      Email
    <input type="email" placeholder="Enter email" name="email" required ="true">
      <br> <br>
    <label for="psw"><b>Phone</b></label>
    <input type="phone" placeholder="Enter Phone" name="phone" required ="true">
     <br> 
      <button type="submit" class="btn btn-lg btn-primary btn-block">  Save </button>
  </div>
</form> 
<br> <br>
  </div>
   <div class="panel_title">
     <h6>Fetching Data from database</h6>
  </div>
    <div class="panel_body">
     <table align="center" style="width:300px;">
        <tr>
         <th>id</th>
         <th>Firstname</th>
         <th>Lastname</th>
         <th>Email</th>
         <th>Phone</th>
        </tr>
       
        <?php
        //database connection
           $conn = new mysqli("localhost","root",'',"bcs");
          //checking for errors
          if($conn->connect_error)
          {
            die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
          }
          
          $select = "SELECT * FROM `stud` ORDER BY id";
          $result = $conn->query($select);
          //displaying on a browser using while loop
          while($row = mysqli_fetch_array($result))  
          {  
          ?> 
     
          <tr>  
          
               <td><?php echo $row["id"]; ?></td>  
               <td><?php echo $row["firstname"]; ?></td>  
               <td><?php echo $row["lastname"]; ?></td> 
               <td><?php echo $row["email"]; ?></td> 
               <td><?php echo $row["phone"]; ?></td> 
              
          </tr>  
          <?php  
          }  
          ?> 
        
     </table>
  </div>
   <style>
   table, td, th {
    border: 1px solid white;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
    color: blue;
}
   body
  {
   
    text-align: center;
    padding-top: 20px;
    background-color: black;
  }
  h6{
    color: white;
  }
</styles>

</body>
</html>