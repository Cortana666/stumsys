<?php
  require "conn.php";
  $aname = $_POST['aname'];
  $apsd = $_POST['apsd'];
  $re_apsd = $_POST['re_apsd'];
  if ($aname != "" && $apsd != "" && $re_apsd != "") {
      if ($apsd == $re_apsd) {
        $res = $pdo -> query("select * from admin where aname = '$aname'");
        $row = $res -> fetch();
        if ($row == "") {
          $res = $pdo -> exec("insert into admin(aname,apassword) values('$aname','$apsd')");
          if ($res) {
            echo "<script>alert('增加成功!');location = '../index.php';</script>";
          }else {
            echo "<script>alert('增加失败!');location = '../adm_add.php';</script>";
          }
        }else {
          echo "<script>alert('账户已存在!');location = '../adm_add.php';</script>";
        }
      }else {
        echo "<script>alert('两次密码不同!');location = '../adm_add.php';</script>";
      }
  }else {
    echo "<script>alert('不能为空!');location = '../adm_add.php';</script>";
  }
 ?>
