<?php
include("head.php");
error_reporting(0);
    $conn=mysqli_connect("localhost","root","","mydb");
    $sql="select * from bulletin where bid={$_GET[bid]}";//從bulletin抓出所有資料 //where找出符合條件資料
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
echo "
<h1>修改佈告</h1>
<form method=post action=bulletin_edit.php>
<input type=hidden name=bid value={$row[bid]}>
佈告標題:<input type=text name=title size=88 value={$row[title]}><P>
佈告內容:<p><textarea cols=100 rows=20 name=content>{$row[content]}</textarea><p>
佈告類型:
<input type=radio name=type value=1";
if($row[type]=="1") echo " checked";
echo">系上公告
    <input type=radio name=type value=2";
if($row[type]=="2") echo " checked";
echo">招生訊息
    <input type=radio name=type value=3";
if($row[type]=="3") echo " checked";
echo ">企業徵才
    <p>
    發佈時間:<input type=date name=time value={$row[time]}><p>  
    <input type=submit value=發佈公告>
</form>
";
//<input type=hidden name=bid value={$row[bid]}> 儲存表單[bid]資料，但不顯示在表單上
//input type=hidden 隱藏表單
?>