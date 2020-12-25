<?php
    error_reporting(0);
    session_start();
    if(!isset($_SESSION[id])){
        echo "請輸入帳號密碼";
        echo "<meta http-equiv='refresh' content='0.5;url=login.html'>";
    }
    else{
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="update bulletin set title='{$_POST[title]}', content='{$_POST[content]}'
        , type={$_POST[type]}, time='{$_POST[time]}' where bid={$_POST[bid]}";
        //update bulletin set 更新資料表(SQL語法)
        //echo $sql;
        if(!mysqli_query($conn,$sql))
            echo "修改佈告錯誤";
        else
            echo"修改佈告成功";
        
        echo "<meta http-equiv='refresh' content='0.5;url=bulletin.php'>";
    }
    
?>