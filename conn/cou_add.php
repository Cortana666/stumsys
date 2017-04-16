<?php
  require "conn.php";
  $cno = $_POST['cno'];
  $cname = $_POST['cname'];
  $ccredit = $_POST['ccredit'];
  $cperiod = $_POST['cperiod'];
  if ($cno != "" && $cname != "" && $ccredit != "" && $cperiod != "") {
    $res = $pdo -> exec("insert into course(cno,cname,ccredit,cperiod)
    values('$cno','$cname','$ccredit','$cperiod')");
    if ($res) {
      echo "<script>alert('增加成功!');location = '../index.php';</script>";
    }else {
      echo "<script>alert('增加失败!');location = '../cou_add.php';</script>";
    }
  }else {
    echo "<script>alert('不能为空!');location = '../cou_add.php';</script>";
  }
 ?>
