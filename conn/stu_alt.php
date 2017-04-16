<?php
  require "conn.php";
  $sno = $_POST['sno'];
  $sname = $_POST['sname'];
  $sage = $_POST['sage'];
  $ssex = $_POST['ssex'];
  $sdept = $_POST['sdept'];
  $res = $pdo -> exec("update student set sname = '$sname',sage = '$sage',ssex = '$ssex',sdept = '$sdept' where sno = $sno");
  if ($res) {
    echo "<script>alert('修改成功!');location = '../index.php';</script>";
  }else {
    echo "<script>alert('修改失败!');location = '../stu_show.php';</script>";
  }
 ?>
