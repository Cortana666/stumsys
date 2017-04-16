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
    <form class="" action="conn/cou_add.php" method="post">
      <input type="text" name="cno" value="" placeholder="请输入课程号"><br />
      <input type="text" name="cname" value="" placeholder="请输入课程名"><br />
      <input type="text" name="ccredit" value="" placeholder="请输入学分"><br />
      <input type="text" name="cperiod" value="" placeholder="请输入学时"><br />
      <input type="submit" name="sub" value="增加">
      </script>
    </form>
  </body>
</html>
