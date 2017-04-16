<?php
  require "conn.php";
  $keyword = $_POST['keyword'];
  $res = $pdo -> query("select * from student where sno like '%$keyword%'or
  sname like '%$keyword%'or sage like '%$keyword%'or ssex like '%$keyword%'or
  sdept like '%$keyword%' order by sno");
  foreach ($res as $key => $row) {
    echo "<form action='conn/stu_alt.php' method='post'>
            <span>".$row['sno']."</span>
            <input type='text' name='sname' value='".$row['sname']."'>
            <input type='text' name='sage' value='".$row['sage']."'>
            <input type='text' name='ssex' value='".$row['ssex']."'>
            <input type='text' name='sdept' value='".$row['sdept']."'>
            <input type='submit' name='alt' value='修改'>
            <a href='conn/stu_del.php?sno=".$row['sno']."'>删除</a>
            <input type='hidden' name='sno' value='".$row['sno']."'>
          </form>";
  }
?>
