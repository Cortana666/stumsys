<?php
  require "conn.php";
  // $res = $pdo -> query("select * from student,course,sc where student.sno = sc.sno
  // and course.cno = sc.cno order by sc.sno");
  $res = $pdo -> query("select * from view_grade");
  foreach ($res as $key => $row) {
    echo "<tr>";
    echo "<form action='conn/sc_alt.php' method='post'>
            <td><span>".$row['sno']."</span></td>
            <td><span>".$row['sname']."</span></td>
            <td><span>".$row['cno']."</span></td>
            <td><span>".$row['cname']."</span></td>
            <td><span>".$row['ccredit']."</span></td>
            <td><span>".$row['cperiod']."</span></td>
            <td><input type='text' name='grade' value='".$row['grade']."'></td>
            <td><input type='submit' name='alt' value='修改'>
            <a href='conn/sc_del.php?sno=".$row['sno']."&cno=".$row['cno']."'>删除</a></td>
            <input type='hidden' name='sno' value='".$row['sno']."'>
            <input type='hidden' name='cno' value='".$row['cno']."'>
          </form>";
    echo "</tr>";
  }
?>
