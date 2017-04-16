<?php
  require "conn/sign.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>学生管理系统</title>
    <link rel="stylesheet" href="css/index.css" media="screen" title="no title">
  </head>
  <body>
    <div class="">
      <form class="" method="post">
        <span>欢迎:<?php echo @$_SESSION['user']; ?></span>
        <input type="submit" name="signout" value="退出登录">
      </form>
    </div>
    <div class="">
      <ul>
        <li><a href="stu_add.php">增加学生</a></li>
        <li><a href="stu_show.php">学生信息管理</a></li>
        <li><a href="cou_add.php">增加课程</a></li>
        <li><a href="cou_show.php">课程管理</a></li>
        <li><a href="adm_add.php">增加管理员</a></li>
        <li><a href="adm_show.php">管理员管理</a></li>
        <li><a href="sc_add.php">增加成绩</a></li>
        <li><a href="sc_show.php">学生成绩管理</a></li>
      </ul>
    </div>
    <div class="">
      <form class="" action="conn/search.php" method="post">
        <input type="text" name="keyword" value="">
        <input type="submit" name="sub" value="搜索">
      </form>
    </div>
  </body>
</html>
