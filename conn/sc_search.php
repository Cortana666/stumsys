<?php
  require "conn.php";
  $keyword = $_POST['keyword'];
  $res = $pdo -> query("select * from view_grade where sno like '%$keyword%' or
  sname like '%$keyword%' or cno like '%$keyword%' or cname like '%$keyword%' or
  ccredit like '%$keyword%' or cperiod like '%$keyword%' or grade like '%$keyword%'
  order by sno");
  foreach ($res as $key => $row) {
    echo "<form action='sc_alt.php' method='post'>
            <span>".$row['sno']."</span>
            <span>".$row['sname']."</span>
            <span>".$row['cno']."</span>
            <span>".$row['cname']."</span>
            <span>".$row['ccredit']."</span>
            <span>".$row['cperiod']."</span>
            <input type='text' name='grade' value='".$row['grade']."'>
            <input type='submit' name='alt' value='修改'>
            <a href='conn/sc_del.php?sno=".$row['sno']."&cno=".$row['cno']."'>删除</a>
            <input type='hidden' name='sno' value='".$row['sno']."'>
            <input type='hidden' name='cno' value='".$row['cno']."'>
          </form>";
  }
?>
