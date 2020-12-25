<?php
    error_reporting(0);
    session_start();
    if(!isset($_SESSION[id])){
        echo "請輸入帳號密碼";
        echo "<meta http-equiv='refresh' content='0.5;url=login.html'>";
    }
    else{
        $conn=mysqli_connect("localhost","root","","mydb");
        $sql="insert into bulletin(title,content,type,time) values('{$_POST[title]}','{$_POST[content]}',{$_POST[type]},'{$_POST[time]}')";
        //insert into bulletin新增資料[bulletin]
        //echo $sql;
        if(!mysqli_query($conn,$sql))
            echo "新增佈告錯誤";
        else
            echo"新增佈告成功";
        
        echo "<meta http-equiv='refresh' content='0.5;url=bulletin.php'>";
    }
    
?>