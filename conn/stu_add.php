<?php
  require "conn.php";
  $sno = $_POST['sno'];
  $sname = $_POST['sname'];
  $sage = $_POST['sage'];
  $ssex = $_POST['ssex'];
  $sdept = $_POST['sdept'];
  if ($sno != "" && $sname != "" && $sage != "" && $ssex != "" && $sdept != "") {
      if ($ssex == '男' || $ssex == '女') {
        $res = $pdo -> exec("insert into student(sno,sname,sage,ssex,sdept) values('$sno','$sname','$sage','$ssex','$sdept')");
        if ($res) {
          echo "<script>alert('增加成功!');location = '../index.php';</script>";
        }else {
          echo "<script>alert('增加失败!');location = '../stu_add.php';</script>";
        }
      }else {
        echo "<script>alert('请选择性别!');location = '../stu_add.php';</script>";
      }
  }else {
    echo "<script>alert('不能为空!');location = '../stu_add.php';</script>";
  }
 ?>
