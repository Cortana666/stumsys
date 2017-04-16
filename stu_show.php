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
    <div class="">
      <form class="" action="conn/stu_search.php" method="post">
        <input type="text" name="keyword" value="">
        <input type="submit" name="sub" value="搜索">
      </form>
    </div>
    <div class="">
      <table>
        <tr>
          <td>学号</td>
          <td>姓名</td>
          <td>年龄</td>
          <td>性别</td>
          <td>专业</td>
          <td>操作</td>
        </tr>
        <?php
          require "conn/stu_show.php";
         ?>
       </table>
    </div>
  </body>
</html>
