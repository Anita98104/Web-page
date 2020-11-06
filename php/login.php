<?php
  error_reporting(0); //把警告訊號關掉
  echo $_GET[id]; //回傳id
  echo "<br>";
  echo $_GET[pwd];//回傳pwd
  if(($_GET[id]=="123")&&($_GET[pwd]=="123"))
    echo "welcome";
  else
    echo "login failure";
?>