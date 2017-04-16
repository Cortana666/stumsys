<?php
  require "conn.php";
  $sno = $_POST['sno'];
  $cno = $_POST['cno'];
  $grade = $_POST['grade'];
  $res = $pdo -> exec("update sc set grade = '$grade' where sno = $sno and cno = $cno");
  if ($res) {
    echo "<script>alert('修改成功!');location = '../index.php';</script>";
  }else {
    echo "<script>alert('修改失败!');location = '../sc_show.php';</script>";
  }
 ?>
