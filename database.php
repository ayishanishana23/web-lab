<?php
 $host="localhost";
 $user="root";
 $pass="";
 $database="class";
 
$connection=mysqli_connect($host,$user,$pass,$database);
if ($connection){
 echo "Succussfully connected";
}
else{
 echo"could not connect";
}
$sql="insert into student(NAME,PHONE,EMAIL)values('Ayisha','1234567890','ayishanishanakk@gmail')";
mysqli_query($connection,$sql);
mysqli_close($connection);
?>
</body>
</html>
