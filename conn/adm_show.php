<?php
  require "conn/conn.php";
  $res = $pdo -> query("select * from admin");
  foreach ($res as $key => $row) {
    echo "<form action='conn/adm_alt.php' method='post'>
            <span>".$row['aname']."</span>
            <input type='text' name='apsd' value='".$row['apassword']."'>
            <input type='submit' name='alt' value='修改'>
            <a href='conn/adm_del.php?ano=".$row['ano']."'>删除</a>
            <input type='hidden' name='ano' value='".$row['ano']."'>
          </form>";
  }
?>
