<?php
  require "conn.php";
  $sno = $_POST['sno'];
  $cno = $_POST['cno'];
  $grade = $_POST['grade'];
  if ($sno != "" && $cno != "" && $grade != "") {
    $res = $pdo -> exec("insert into sc(sno,cno,grade)
    values('$sno','$cno','$grade')");
    if ($res) {
      echo "<script>alert('增加成功!');location = '../index.php';</script>";
    }else {
      echo "<script>alert('增加失败!');location = '../sc_add.php';</script>";
    }
  }else {
    echo "<script>alert('不能为空!');location = '../sc_add.php';</script>";
  }
 ?>
