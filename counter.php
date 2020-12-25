<?php
    error_reporting(0);
    session_start();//要使用session variable時宣告
    if(!isset($_SESSION["counter"])){ //isset判斷變數
        $_SESSION["counter"]=1;  //定義變數
    }
    else{
    $_SESSION["counter"]++;
    }
    echo "登入{$_SESSION["counter"]}人次";
?>