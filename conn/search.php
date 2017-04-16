<?php
  require "conn.php";
  $keyword = $_POST['keyword'];
  $res = $pdo -> query("select * from view_all where sno like '%$keyword%' or
  sname like '%$keyword%' or sage like '%$keyword%' or ssex like '%$keyword%' or
  sdept like '%$keyword%' or cno like '%$keyword%' or cname like '%$keyword%' or
  ccredit like '%$keyword%' or cperiod like '%$keyword%' or grade like '%$keyword%'
  order by sno");
  echo "<table>
  <tr>
    <td>学号</td>
    <td>姓名</td>
    <td>年龄</td>
    <td>性别</td>
    <td>专业</td>
    <td>课程号</td>
    <td>课程名</td>
    <td>学分</td>
    <td>学时</td>
    <td>成绩</td>
  </tr>";
  foreach ($res as $key => $row) {
    echo "<tr>
            <td><span>".$row['sno']."</span></td>
            <td><span>".$row['sname']."</span></td>
            <td><span>".$row['sage']."</span></td>
            <td><span>".$row['ssex']."</span></td>
            <td><span>".$row['sdept']."</span></td>
            <td><span>".$row['cno']."</span></td>
            <td><span>".$row['cname']."</span></td>
            <td><span>".$row['ccredit']."</span></td>
            <td><span>".$row['cperiod']."</span></td>
            <td><span>".$row['grade']."</span></td>
          </tr>";
  }
  echo "</table>";
?>
