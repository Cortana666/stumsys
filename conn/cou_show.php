<?php
  require "conn/conn.php";
  $res = $pdo -> query("select * from course");
  foreach ($res as $key => $row) {
    echo "<tr>";
    echo "<form action='conn/cou_alt.php' method='post'>
            <td><span>".$row['cno']."</span></td>
            <td><input type='text' name='cname' value='".$row['cname']."'></td>
            <td><input type='text' name='ccredit' value='".$row['ccredit']."'></td>
            <td><input type='text' name='cperiod' value='".$row['cperiod']."'></td>
            <td><input type='submit' name='alt' value='修改'>
            <a href='conn/cou_del.php?cno=".$row['cno']."'>删除</a></td>
            <input type='hidden' name='cno' value='".$row['cno']."'>
          </form>";
    echo "</tr>";
  }
?>
