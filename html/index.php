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
$sql = "SELECT * FROM book";
$list = getlist($sql);
$perpage=3;
$totalCount=count($list);
$page=ceil($totalCount/$perpage);
if(empty($_GET['p'])){
        $startpage = 0;
    }else{
        $startpage = ($_GET['p']-1)*$perpage;
    }
    
    
    $sql = "SELECT * FROM book LIMIT $startpage,$perpage";
    $lists = getlist($sql);





 ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>书城</title>
  <link rel="styleSheet" href="css/header.css">
  <link rel="styleSheet" href="css/footer.css">
  <link rel="styleSheet" href="css/index.css">
  <script type="text/javascript" src="jq.js"></script>
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
  <div class="zhu_container">
    <div class="middle">
      <div class="left">
        <h1>我的书城</h1>
        <p>这里拥有世界各地的书籍，只有您想不到，没有我们这里没有的图书。</p>
        <div class="img"><img src="images/10.png"></div>
      </div>
      <div class="right">
        <h2>快速登录</h2>
        <?php 
        session_start();
        if(!empty($_SESSION['username'])){
                echo $_SESSION['username']."欢迎您登陆";
        }else{ ?>
          <form action="login.php" method="post">
            <div class="user">
              <input type="text" name="username" placeholder="用户名">
            </div>
            <div class="user">
              <input type="password" name="password" placeholder="密码">
            </div>
            <div class="button"><input type="submit" value="登陆"><input type="button" value="注册"></div>
        </form>
        <?php } ?>
        
      </div>
      <div class="salee">
        <div class="sale">
          <ul id="shuji">
          <?php foreach ($list as $k => $v) { ?>
               <li>
                <a href="tushuzhanshi.php?id=<?php echo $v['id']; ?>">
                  <div class="top">
                    <div class="top1">
                      <img src="images/<?php echo $v['img']; ?>">
                    </div>
                  </div>
                  <p> <?php echo $v['instruduce']; ?></p>
                  <div class="bottom">
                    <span class="lefte">￥<?php echo $v['price']; ?>
                    </span>
                     <span id="shopsale">立即购买</span>
                  </div>
              </a>
            </li>
          <?php } ?>
           
          </ul>
        </div>
      </div>
      <div class="page">
        <a href="javascript:void(0)"><<</a>
        <?php 
          for($i=1;$i<=$page;$i++){
             echo "<span onclick='getData(".$i.")'>".$i."</span>";
          }
         ?>
        <a href="javascript:void(0)">>></a>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_top"><a href="#">免费条款</a><a href="#">隐私保护</a><a href="#">咨询热点</a><a href="#">联系我们</a><a href="#">公司简介</a><a href="#">批发方案</a><a href="#">配送方式</a></div><span>&copy;2016-2999 &nbsp;SSS版权所有，并保留所有权利</span>
  </div>
</body>
<script type="text/javascript">
  function getData(p){
    $.ajax({
      type:"post",
      url:"fenye.php",
      data:{
        p:p,
        perpage:<?php echo $perpage; ?>
      },
      async:true,
      dataType:'json',
      success:function(data){
        var str="";
        for(var i=0;i<data.length;i++){
        str+="<li><a href='tushuzhanshi.php?id="+data[i].id+"'><div class='top'><div class='top1'>"+"<img src='images/"+data[i].img+"'>"+"</div></div><p>"+data[i].instruduce+"</p><div class='bottom'><span class='lefte'>￥"+data[i].price+"</span><span id='shopsale'>立即购买</span></div></a></li>";
       }
       $('#shuji').html(str);
      }

      })
  }







</script>
</html>