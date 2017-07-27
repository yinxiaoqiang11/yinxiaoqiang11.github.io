<?php 

function getlist($sql){
	$link=mysqli_connect("localhost","root","","house");
	mysqli_query($link,"set names utf8");
	$res=mysqli_query($link,$sql);
	if($res){
		return true;
	}else{
		return false;
	}
}
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE username='$username' AND password=$password";


$res=getlist($sql);

if(empty($res)){
	echo "<script>alert('用户名或密码错误!');window.location.href='index.php'</script>";
}else{

	session_start();
	$_SEESION['username']=$username;
	header("Location:index.php");

}





 ?>