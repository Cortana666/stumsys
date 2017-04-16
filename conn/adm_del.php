<?php
  require "conn.php";
  $ano = $_GET['ano'];
  $res = $pdo -> exec("delete from admin where ano = $ano");
  if ($res) {
    echo "<script>alert('删除成功!');location = '../index.php';</script>";
  }else {
    echo "<script>alert('删除失败!');location = '../adm_show.php';</script>";
  }
 ?>
