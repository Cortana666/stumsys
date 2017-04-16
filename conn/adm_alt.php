<?php
  require "conn.php";
  $ano = $_POST['ano'];
  $apsd = $_POST['apsd'];
  $res = $pdo -> exec("update admin set apassword = '$apsd' where ano = $ano");
  if ($res) {
    echo "<script>alert('修改成功!');location = '../index.php';</script>";
  }else {
    echo "<script>alert('修改失败!');location = '../adm_show.php';</script>";
  }
 ?>
