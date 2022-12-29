<?php 
$con = mysqli_connect("localhost", "root", "", "subham");
$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];

$sql = "select * from datatable23 where email='$email' limit 1";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)==0){
	$sql2 = "INSERT INTO datatable23 (fname, email, password, contact) VALUES ('$fname', '$email', '$password', '$contact')";
	if(mysqli_query($con, $sql2)){
		echo "Record Inserted Successfully";
	}else{
		echo "Failed";
	}
}else{
	echo "This email is already registered";
}





 ?>