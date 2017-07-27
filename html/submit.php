<?php 

$title=$_POST['title'];
$intruduce=$_POST['intruduce'];
$author=$_POST['author'];
$publish=$_POST['publish'];
$dateTim=$_POST['datetim'];
$price=$_POST['price'];
$ISBN=$_POST['ISBN'];
$imgPath=$_FILES['img']['name'];


function add($sql){
	$link=mysqli_connect("localhost","root","","house");
	//数据编码格式

	mysqli_query($link,"set names utf8");
	//执行

	$res=mysqli_query($link,$sql);

	if($res){
		return true;
	}else{
		return false;
	}
}
$sql="INSERT INTO book(title,instruduce,author,publish,dateTim,price,ISBN,img)VALUES('$title','$intruduce','$author','$publish','$dateTim','$price','$ISBN','$imgPath')";

$res=add($sql);

if($res){
	echo "成功";
}else{
	echo "失败";
}









 ?>