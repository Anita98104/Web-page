<?php
    error_reporting(0);
    session_start();
    unset($_SESSION["id"]);//指定清除//session_destroy:session variable全部清除
    echo "登出中.....";
    echo "<meta http-equiv='refresh' content='1;url=login.html'>";

?>