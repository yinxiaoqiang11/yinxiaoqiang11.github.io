<?php 

$id=$_GET['id'];

   
//从数据库获取到数据
   function getlist($sql){
    //连接数据库
    $link = mysqli_connect("localhost","root","","house");
    //设置编码格式
    mysqli_query($link, "set names utf8");
    //执行sql
    $res = mysqli_query($link, $sql);
    //取所有数据
 // $list = mysqli_fetch_all($res);//常用
//  $arr = array();
//  while($list = mysqli_fetch_row($res)){
//      $arr[] = $list;
//  }
//常用
    while($list = mysqli_fetch_assoc($res)){
        $arr[] = $list;
    }
    
//  $res = mysqli_num_rows($res);
//  echo $res;
    
//$list = mysqli_fetch_object($res);
    return $arr;
}

function delete($sql){
	$link=mysqli_connect("localhost","root","","house");
	//设置编码格式
	mysqli_set_charset($link,"utf8");
	$res=mysqli_query($link,$sql);
	if($res){
		return true;
	}else{
		return false;
	}
}
$sql="SELECT * FROM shop WHERE id=$id";
$ress=getlist($sql);
$sql2="DELETE FROM shop WHERE id=$id";
$res=delete($sql2);
if(empty($res)){
	echo "<script>alert('删除成功');window.location.href='shopping.php';<script>";
}else{
	echo "<script>alert('删除失败');<script>";
}










 ?>