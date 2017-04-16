<?php
  require "conn/conn.php";
  require "conn/signout.php";
  session_start();
  if (@$_SESSION['user'] == "") {
    echo "<script>location = \"login.php\";alert(\"请登录!\");</script>";
  }
  if (@isset($_POST['signout'])) {
    signout();
    echo "<script>location = \"login.php\";alert(\"退出成功!\");</script>";
  }
 ?>
