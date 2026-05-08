<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$con=mysqli_connect("localhost","root","","bank");
$name=$_POST['name'];
$email=$_POST['email'];
$content=$_POST['content'];

$sql="INSERT INTO contact (name,email,content)
      VALUES('$name','$email','$content')";

if(mysqli_query($con,$sql)){
    echo "database is connected";
}

}

?>