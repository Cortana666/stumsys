<?php
  require "conn.php";
  $user = $_POST['user'];
  $psd = $_POST['psd'];
  $res = $pdo -> query("select * from admin where aname = '$user'");
  $row = $res -> fetch();
  if ($row['aname'] != "") {
    if ($row['apassword'] == $psd) {
      echo "<script>alert(\"登陆成功!\");location = \"../index.php\";</script>";
      session_start();
      $_SESSION['user'] = $user;
    }else{
      echo "<script>alert(\"密码错误!\");location = \"../login.php\";</script>";
    }
  }else{
    echo "<script>alert(\"账户不存在!\");location = \"../login.php\";</script>";
  }
 ?>
