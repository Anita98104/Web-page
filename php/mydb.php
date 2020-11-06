<?php
 #php跟資料庫連結
 #mysqli_connect必須設定ip(本地端為localhost)，帳號、密碼、以及連接的資料庫(mydb)
  error_reporting(0); #把警告訊號關掉
  $conn=mysqli_connect("localhost","root","","mydb");#root mysqli的帳號
#mysqli_query 從user來找出資料
  $result=mysqli_query($conn,"select * from user");
                              #所又欄位資料
                              #select id,pwd
#mysqli_fetch_array從$result擷取每筆資料
  $row=mysqli_fetch_array($result);#fetch一次抓取一筆資料
  echo $row[id]." ".$row[pwd];#列印出來 #." ".字串連接(.像+號)
  echo "<br>";#分行
  $row=mysqli_fetch_array($result);
  echo $row[id]." ".$row[pwd];
 
?>