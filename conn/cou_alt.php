<?php
  require "conn.php";
  $cno = $_POST['cno'];
  $cname = $_POST['cname'];
  $ccredit = $_POST['ccredit'];
  $cperiod = $_POST['cperiod'];
  $res = $pdo -> exec("update course set cname = '$cname',ccredit = '$ccredit',cperiod = $cperiod where cno = $cno");
  if ($res) {
    echo "<script>alert('修改成功!');location = '../index.php';</script>";
  }else {
    echo "<script>alert('修改失败!');location = '../cou_show.php';</script>";
  }
 ?>
