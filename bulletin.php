<?php
include("head.php");
error_reporting(0);
session_start();  //Session：儲存資料於伺服器端 //要使用session variable時宣告
if(!isset($_SESSION["id"])){ //isset判斷變數 //isset($_SESSION["id"]:在伺服器端中找尋[id]
    echo "請登入系統";
    echo "<meta http-equiv='refresh' content='1;url=login.html'>";
}
else{
    echo"歡迎{$_SESSION["id"]} 登入[<a href=logout.php>登出</a>]<p>[<a href=bulletin_add_form.php>新增佈告</a>]<p>"; //超連結

    $conn=mysqli_connect("localhost","root","","mydb");
    $result=mysqli_query($conn,"select * from bulletin");
    //$row=mysqli_fetch_array($result);
    echo "<table border=2><tr><td>佈告操作</td><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈日期</td></tr>";
    while($row=mysqli_fetch_array($result)){
        echo "<tr><td>";
        echo "<a href=bulletin_edit_form.php?bid={$row[bid]}>修改</a>";//連結到bulletin_edit_form.php
        echo "<a href=delete.php?bid={$row[bid]}>刪除</a>";//連結到delete.php
        echo "</td><td>";
        echo $row[bid];
        echo "</td><td>";
        echo $row[type];
        echo "</td><td>";
        echo $row[title];
        echo "</td><td>";
        echo $row[content];
        echo "</td><td>";
        echo $row[time];
        echo "</td></tr>";
    }
    echo "</table>";
}
include("footer.php");

?>