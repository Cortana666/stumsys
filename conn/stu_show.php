<?php
  require "conn.php";
  $res = $pdo -> query("select * from student order by sno");
  foreach ($res as $key => $row) {
    echo "<tr>";
    echo "<form action='conn/stu_alt.php' method='post'>
            <td><span>".$row['sno']."</span></td>
            <td><input type='text' name='sname' value='".$row['sname']."'></td>
            <td><input type='text' name='sage' value='".$row['sage']."'></td>
            <td><input type='text' name='ssex' value='".$row['ssex']."'></td>
            <td><input type='text' name='sdept' value='".$row['sdept']."'></td>
            <td><input type='submit' name='alt' value='修改'>
            <a href='conn/stu_del.php?sno=".$row['sno']."'>删除</a></td>
            <input type='hidden' name='sno' value='".$row['sno']."'>
          </form>";
    echo "</tr>";
  }
?>
