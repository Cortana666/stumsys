<?php
  require "conn.php";
  $cno = $_GET['cno'];
  $res = $pdo -> exec("delete from course where cno = $cno");
  if ($res) {
    echo "<script>alert('删除成功!');location = '../index.php';</script>";
  }else {
    echo "<script>alert('删除失败!');location = '../cou_show.php';</script>";
  }
 ?>
