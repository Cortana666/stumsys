<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <form class="" action="conn/sc_search.php" method="post">
        <input type="text" name="keyword" value="">
        <input type="submit" name="sub" value="搜索">
      </form>
    </div>
    <div class="">
      <table>
        <tr>
          <td>学号</td>
          <td>姓名</td>
          <td>课程号</td>
          <td>课程名</td>
          <td>学分</td>
          <td>学时</td>
          <td>成绩</td>
          <td>操作</td>
        </tr>
        <?php
          require "conn/sc_show.php";
         ?>
       </table>
    </div>
  </body>
</html>
