<html>
<head>
	<style>
    .form{
    	text-align: center;
    }
    input[type=text]{
    	border:1px solid black;
    	width: 200px;
    	margin-top:200px;
    }
     input[type=number]{
    	border:1px solid black;
    	width: 200px;
    	margin: 10px;
    }
	</style>
	</head>
<body>
	<div class = "form">
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  
	Name:
	<input type = "text" name = "name"><br>
	Age:
	<input type = "number" name = "age"><br>
	<input type = "submit" value = "submit" name="submit">
</form>
</div>
</body>
</html>
<?php

$conn = mysqli_connect("localhost","root" ,"","age");
 if (mysqli_connect_errno()){
 	echo "failed to connect". mysqli_connect_error();
}
if(isset($_POST['submit'])){
	
	$studentname=$_POST['name'];
	$studentage=$_POST['age'];

$insert_query="INSERT INTO student VALUES('$studentname','$studentage')";

$gone = mysqli_query($conn , $insert_query);
if($gone){
    echo "<script>alert('successfully .')</script>";
  }
  else{
    echo "<script>alert('try again.')</script>";
  }
}
  ?>