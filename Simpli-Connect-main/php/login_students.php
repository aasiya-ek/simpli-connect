
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - 404 page</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Arvo'><link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<section class="page_404">
	<div class="container">
		<div class="row">	
		<div class="col-sm-12 ">
		<div class="col-sm-10 col-sm-offset-1  text-center">
		<div class="four_zero_four_bg">
			<h1 class="text-center ">OOPS !</h1>
		
		
		</div>
		
		<div class="contant_box_404">
		<h3 class="h2">
		Look like you're lost
		</h3>
		
		<p>USERNAME , PASSWORD and PROFFESSION does not match</p><br>
    <p>Go Back And Check</p>
		

	</div>
		</div>
		</div>
		</div>
	</div>
</section>
<!-- partial -->


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $con = mysqli_connect("localhost", "root", "", "bank");
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username=='admin'& $password=='123' ){
    header("Location: ../login2.html");
  }else{
  $sql = "SELECT * FROM users WHERE uname='$username'";
  $result = mysqli_query($con, $sql);
  
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['pword'] === $password) {
      $job = $row['job'];
      if ($job == 'student') {
        header("Location: ../student/");
        exit();
      } elseif ($job == 'entrepreneur') {
        header("Location: ../entrepreneur/");
        exit();
      } else {
        header("Location: ../EMP/");
        exit();
      }
    } 
  }
}
}

 
?>



  
</body>
</html>

