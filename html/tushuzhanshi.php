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
//接收列表页传来的新闻id
$id = $_GET['id'];
$sql = "SELECT * FROM book WHERE id=$id";
$one = getlist($sql); 
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>书城</title>
  <link rel="styleSheet" href="css/header.css">
  <link rel="styleSheet" href="css/footer.css">
  <link rel="styleSheet" href="css/tushuzhanshi.css">
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
  <div class="main">
    <div class="left">
      <?php 
        echo "<img src='"."images/".$one[0]["img"]."'/>";

       ?>
    </div>
    <div class="right">
      <h1><?php echo $one[0]['title']; ?></h1>
      <p><?php echo $one[0]['instruduce']; ?></p>
      <div class="right_bottom">
        <div class="right_t"><span>作者:<a href="#"><?php echo $one[0]['author']; ?></a></span><span>出版社:<a href="#"><?php echo $one[0]['publish']; ?></a></span><span>出版时间：<?php echo $one[0]['dateTim']; ?></span><span>国家标准书号ISBN：<?php echo $one[0]['ISBN']; ?></span>
          <div>友情价格：<a href="#">￥<?php echo $one[0]['price']; ?></a></div>
        </div>
      </div>
      <div class="right_footer">
        <?php foreach ($one as $kk => $val) { ?>
          <a href="shopping.php?id=<?php echo $val['id']; ?>" id="che">加入购物车</a><a href="#" id="lijigouwu">立即购物  </a>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_top"><a href="#">免费条款</a><a href="#">隐私保护</a><a href="#">咨询热点</a><a href="#">联系我们</a><a href="#">公司简介</a><a href="#">批发方案</a><a href="#">配送方式</a></div><span>&copy;2016-2999 &nbsp;SSS版权所有，并保留所有权利</span>
  </div>
</body>
</html>