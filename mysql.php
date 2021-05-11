<?php
$db_link = mysqli_connect('localhost', 'root', 'joe2810717', 'good');
if(!$db_link){
    die('資料庫連接失敗');
}
else{
    echo('資料庫連接成功');
}
?>