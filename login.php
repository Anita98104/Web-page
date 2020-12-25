<?php
    error_reporting(0);
    $conn=mysqli_connect("localhost","root","","mydb");
    //連線到資料庫         ip         帳號   密碼 
    if(mysqli_connect_error($conn)) //檢查是否連線成功
        die("資料庫連線錯誤");

    $result=mysqli_query($conn,"select * from user");  //查詢mydb的所有資料
    $login=False;  
    while($row=mysqli_fetch_array($result)){  //從查詢結果中取出要得值

        //echo $row[id];
        //echo $_POST["id"];
        if($_POST["id"]==$row[id] && $_POST["pwd"]==$row[pwd]) //輸入的帳號密碼符合資料庫裡的        
            $login=True;

            
    }    
    if($login==True){
        echo "歡迎登入";
        session_start();
        $_SESSION["id"]=$_POST["id"];
        echo "<meta http-equiv='refresh' content='0.5;url=bulletin.php'>"; //轉跳到
    }
    else{
        echo "帳號密碼錯誤";
        echo "<meta http-equiv='refresh' content='1;url=login.html'>";
    }
    
?>