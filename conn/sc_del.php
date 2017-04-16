<?php
  require "conn.php";
  $sno = $_GET['sno'];
  $cno = $_GET['cno'];
  $res = $pdo -> exec("delete from sc where sno = $sno and cno = $cno");
  if ($res) {
    echo "<script>alert('删除成功!');location = '../index.php';</script>";
  }else {
    echo "<script>alert('删除失败!');location = '../sc_show.php';</script>";
  }
 ?>
