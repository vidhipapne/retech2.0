
<?php 

 $name=$_POST['name'];
 $password=$_POST['password'];

 $conn= mysqli_connect('localhost','root','','appointment');
 
 if(!$conn){
            die("connection failed:".mysqli_connect_error());
            }
              echo "connected successfully";

 echo"<br>"; 
 echo"<br>";

$sql =("SELECT name, password FROM doctorlogin WHERE name= '$name' AND  password='$password'");
$result=$conn->query($sql);
 if ($result->num_rows > 0){           

    while($row = $result->fetch_assoc()) {
      $pass=$row["password"] ;
      if($pass==$password){
      echo   "Successfully logged in";   
  }
}  
   }
 
 else
 echo "login failed";
?>
