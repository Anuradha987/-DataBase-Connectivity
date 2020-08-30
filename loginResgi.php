<?php 

$name= $_REQUEST['uname'];
$email= $_REQUEST['email'];
$phone= $_REQUEST['tp'];
$password= $_REQUEST['pass'];
$cpassword= $_REQUEST['rpass'];
$ccnum= $_REQUEST['ccnum'];
$cname= $_REQUEST['cname'];
$cvv= $_REQUEST['cvv'];
$edate= $_REQUEST['edate'];

$conn= new mysqli('localhost', 'root', '', 'register1');
if($conn ->connect_error)
{
	die('Connection Failed :' .$conn->connect_error);
}
else
{
	$stmt= $conn->prepare("insert into registration(name, email,phone,password, ccnum,cname,cvv,edate )
		values(?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssisisis", $name, $email, $phone, $password, $ccnum, $cname, $cvv, $edate);
	$stmt->execute();
	echo"registration success";
	$stmt->close();
	$conn->close();
}

 ?>

