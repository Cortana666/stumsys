<?php
  require "conn/sign.php";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="conn/stu_add.php" method="post">
      <input type="text" name="sno" value="" placeholder="请输入学号"><br />
      <input type="text" name="sname" value="" placeholder="请输入姓名"><br />
      <input type="text" name="sage" value="" placeholder="请输入年龄"><br />
      <select class="" name="ssex"  >
        <option>请选择性别</option>
        <option>男</option>
        <option>女</option>
      </select><br />
      <input type="text" name="sdept" value="" placeholder="请输入专业"><br />
      <input type="submit" name="sub" value="增加">
    </form>
  </body>
</html>
