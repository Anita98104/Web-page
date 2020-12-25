<?php
    $conn=mysqli_connect("localhost","root","","mydb");
        //delete from bulletin where did=???
    $sql="delete from bulletin where bid={$_GET[bid]}"; //刪除表格[bulletin]中的資料
    if(!mysqli_query($conn, $sql)){
        echo "刪除錯誤";
        echo "<meta http-equiv='refresh' content='2;url=bulletin.php'>";
    }
    else{
        echo "刪除成功; 回前頁中";
        echo "<meta http-equiv='refresh' content='2;url=bulletin.php'>";
    }



?>