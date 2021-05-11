<html>

<head>
    <meta charset="UTF-8" />
    <title>修改會員資料</title>
</head>
<body>
<?php
 include "mysql.php";

 $userID = $_GET['id'];
 
 //請注意，這邊因為 $userID 本身是 integer，所以可以不用加 ''
 $sql_getDataQuery = "SELECT * FROM user WHERE id = $userID";

 $result = mysqli_query($db_link, $sql_getDataQuery);

 $row_result = mysqli_fetch_assoc($result);
 $name = $row_result['username'];
 $password = $row_result['password'];
?>
<form action="" method="post" name="formAdd" id="formAdd">
     
    請輸入姓名：<input type="text" name="username" id="username" value=" <?php echo $name ?>"><br/>
    請輸入密碼：<input type="text" name="password" id="password" value="<?php echo $password ?>"><br/>
    <input type="hidden" name="action" value="update">
    <input type="submit" name="button" value="修改資料">
</form>
<?php
//先檢查請求來源是否是我們上面創建的 form
if (isset($_POST["action"])&&($_POST["action"] == "update")) {

    //引入檔，負責連結資料庫
    include("mysql.php");

    //取得請求過來的資料
    $name = $_POST["username"];
    $password = $_POST['password'];

    //資料表查訪指令，請注意 "" , '' 的位置
    //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
    $sql_query = "update user set username='$name', password='$password' where id=$userID";

    //對資料庫執行查訪的動作
    mysqli_query($db_link,$sql_query);

    //導航回首頁
    header("Location: index.php");
}
?>
</body>
</html>