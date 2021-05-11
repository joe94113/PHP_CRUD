<?php
    include("mysql.php");
    $sql_query = "select * from user order by id asc";
    $result = mysqli_query($db_link, $sql_query);
    $total_records = mysqli_fetch_row($result);
?>

<html>
<head>
<title>CRUD練習</title>
</head>
<body>
<a href="create.php">新增資料</a>
<table>
<tr>
<th>ID</th>
<th>姓名</th>
<th>密碼</th>
</tr>

<?php
while($row = mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['id']."</td>";
    echo"<td>".$row['username']."</td>";
    echo"<td>".$row['password']."</td>";
    echo"<td><a href='update.php?id=".$row['id']."'>修改</td>";
    echo"<td><a href='delete.php?id=".$row['id']."'>刪除</td>";
    echo"</tr>";
}
?>

</table>
</body>
</html>