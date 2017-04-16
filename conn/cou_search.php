<?php
  require "conn.php";
  $keyword = $_POST['keyword'];
  $res = $pdo -> query("select * from course where cno like '%$keyword%' or
  cname like '%$keyword%'or ccredit like '%$keyword%'or cperiod like '%$keyword%' order by cno");
  foreach ($res as $key => $row) {
    echo "<form action='conn/cou_alt.php' method='post'>
            <span>".$row['cno']."</span>
            <input type='text' name='cname' value='".$row['cname']."'>
            <input type='text' name='ccredit' value='".$row['ccredit']."'>
            <input type='text' name='cperiod' value='".$row['cperiod']."'>
            <input type='submit' name='alt' value='修改'>
            <a href='conn/cou_del.php?cno=".$row['cno']."'>删除</a>
            <input type='hidden' name='cno' value='".$row['cno']."'>
          </form>";
  }
?>
