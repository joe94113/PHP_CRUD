<html>
<head>
<title>新增資料</title>
</head>
<body>

<form action="" method="POST" name="formadd">
<!-- 輸入id:<input type="number" name="id" id="id"><br/> -->
輸入姓名:<input type="text" name="username" id="username"><br/>
輸入密碼:<input type="text" name="password" id="password"><br/>
<input type="hidden" name="action" value="add">
<input type="submit" name="button" value="新增資料">
<input type="reset" name="button2" value="重新填寫">
</form>
<?php
//先檢查請求來源是否是我們上面創建的 form
if (isset($_POST["action"])&&($_POST["action"] == "add")) {

    //引入檔，負責連結資料庫
    include("mysql.php");

    //取得請求過來的資料
    // $id = $_POST["id"];
    $name = $_POST["username"];
    $password = $_POST['password'];

    //資料表查訪指令，請注意 "" , '' 的位置
    //INSERT INTO 就是新建一筆資料進哪個表的哪個欄位
    $sql_query = "INSERT INTO user(username, password) VALUES ('$name','$password')";

    //對資料庫執行查訪的動作
    mysqli_query($db_link,$sql_query);

    //導航回首頁
    header("Location: index.php");
}
?>
</body>

</html>
