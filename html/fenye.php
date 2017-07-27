<?php 
  
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
$p=$_POST['p'];
$perpage=$_POST['perpage'];
$sql = "SELECT * FROM book";
$list = getlist($sql);
$totalCount=count($list);
$startpage=($p-1)*$perpage;
$sql2="SELECT * FROM book LIMIT $startpage,$perpage";
$lists=getlist($sql2);
echo json_encode($lists);






 ?>