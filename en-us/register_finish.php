<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$name = $_POST['name'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$birthday = $_POST['birthday'];
$cellphone = $_POST['cellphone'];
$wallet = $_POST['wallet'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "insert into member (name, username, password, cellphone, birthday, wallet) values ('$name','$id', '$pw', '$cellphone', '$birthday', '$wallet')";
        if(mysqli_query($conn,$sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
        else
        {
                echo '新增失敗!';
                echo("Error description: " . mysqli_error($conn));
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
}
else
{
        echo '輸入有誤請在試一次!';
        //echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>