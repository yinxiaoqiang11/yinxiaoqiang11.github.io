<?php 

   
//从数据库获取到数据
   function getlist($sql){
    //连接数据库
    $link = mysqli_connect("localhost","root","","house");
    if($)
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
    return $arr;
}
   
//从数据库获取到数据
   function add($sql){
    //连接数据库
    $link = mysqli_connect("localhost","root","","house");
    //设置编码格式
    mysqli_query($link, "set names utf8");
    //执行sql
    $res = mysqli_query($link, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
}
 function update($sql){
    //连接数据库
    $link = mysqli_connect("localhost","root","","house");
    //设置编码格式
    mysqli_query($link, "set names utf8");
    //执行sql
    $res = mysqli_query($link, $sql);
    if($res){
      return true;
    }else{
      return false;
    }
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
//接收列表页传来的新闻id
$id = $_GET['id'];
$sql = "SELECT * FROM book WHERE id=$id";
$two = getlist($sql);
$bookimg=$two[0]['img'];
$bookname=$two[0]['title'];
$bookprice=$two[0]['price'];
$sql4="SELECT bookname FROM shop WHERE bookname='$bookname' ";
$sql6="SELECT num FROM shop WHERE bookname='$bookname' ";
$sql7=getlist($sql6)[0]['num'];
$sql5=getlist($sql4)[0]['bookname'];
if($bookname==$sql5){
    $sql7++;
    $sql2="UPDATE shop SET num=$sql7 WHERE bookname='$sql5'";
    update($sql2);

}else{
  $sql2="INSERT INTO shop(bookimg,bookname,bookprice)VALUES('$bookimg','$bookname','$bookprice')";
  $res2=add($sql2);
}
$sql3 = "SELECT * FROM shop";
$three = getlist($sql3);

$sqll="SELECT * FROM shop WHERE id=$id";
$ress=getlist($sqll);
$sql22="DELETE FROM shop WHERE id=$id";
$res=delete($sql22);
if(empty($res)){
  echo "<script>alert('删除成功');window.location.href='shopping.php';<script>";
}else{
  echo "<script>alert('删除失败');<script>";
}



?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>书城</title>
  <link rel="styleSheet" href="css/header.css">
  <link rel="styleSheet" href="css/footer.css">
  <link rel="styleSheet" href="css/shopping.css">
</head>
<body style="overflow:-Scroll;overflow-x:hidden">
  <div class="header">
    <div class="header1">
      <div class="header2">
        <h2><a href="#">书吧</a></h2>
        <ul>
          <li><a id="shu" href="index.php" class="shouye">网站首页</a></li>
          <li><a href="#">关于我们</a></li>
          <li><a id="bookshow" href="tushuzhanshi.php">图书展示</a></li>
          <li><a href="#">联系我们</a></li>
          <li><a id="gou" href="shopping.php">购物车</a></li>
          <li><a id="tianjia" href="tushu.html">添加图书</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="shop_main">
    <h1>购物车</h1>
    <div class="shop_bottom">
      <table cellspacing="0" cellpadding="0" border="1px" bordercolor="#dddddd">
        <tr id="head">
          <td class="td1">图书</td>
          <td class="td2">书名</td>
          <td>数量</td>
          <td>价格</td>
          <td>结算</td>
          <td>删除</td>
        </tr>
        <?php 
          foreach ($three as $kk => $vv) { ?>
              <tr id="footer">
              <td><?php echo "<img src='"."images/".$vv["bookimg"]."'/>"; ?></td>
              <td><?php echo $vv['bookname']; ?></td>
              <td><?php echo $vv['num']+1; ?>本</td>
              <td><?php echo $vv['bookprice']*($vv['num']+1); ?></td>
              <td> <a href="#">付款</a></td>
              <td> <a href="shopping.php?id=<?php echo $vv['id'] ?>">删除</a></td>
        </tr>
         <?php } ?>
      
      </table>
    </div>
  </div>
  <div class="footer">
    <div class="footer_top"><a href="#">免费条款</a><a href="#">隐私保护</a><a href="#">咨询热点</a><a href="#">联系我们</a><a href="#">公司简介</a><a href="#">批发方案</a><a href="#">配送方式</a></div><span>&copy;2016-2999 &nbsp;SSS版权所有，并保留所有权利</span>
  </div>
</body>
</html>