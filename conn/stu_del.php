<?php
  require "conn.php";
  $sno = $_GET['sno'];
  $res = $pdo -> exec("delete from student where sno = $sno");
  if ($res) {
    echo "<script>alert('删除成功!');location = '../index.php';</script>";
  }else {
    echo "<script>alert('删除失败!');location = '../stu_show.php';</script>";
  }
 ?>
