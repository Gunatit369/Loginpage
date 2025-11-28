<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="POST" id="myform">
    Name:<input type="text" name="name">
    Email:<input type="text" name="email">
    Password:<input type="password" name="password">
    <input type="submit" window.location.href="display.php" name="sb">

</form>
<a href="display.php">display</a>
<?php
    $con = mysqli_connect('localhost','root','','login');
    if(isset($_POST['sb'])){
         $name=$_POST['name'];
         $email=$_POST['email'];
         $password=$_POST['password'];
         $query = "insert into mydata(name,email,password)values('$name','$email','$password')";
         $execute=mysqli_query($con,$query);
    }
?>
</body>
<script>
	const form = document.getElementById('myform');
	

	form.addEventListener('sb',(e)=>{
	e.preventDefault();
	const email = document.getElementById('email').value;
	const password = document.getElementById('password').value;


	alert("submit is successfully");
	window.location.href="display.php";


});
</script>
</html>