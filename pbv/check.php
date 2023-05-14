<?php
$acc='admin';
$pw='1234';

$_POST=['acc'];
$_POST=['pw'];
if($_POST['acc']==$acc && $_POST['pw']==$pw){
    echo "帳密正確 歡迎登入";
}else{
    header("location:login.php?error=帳密錯誤 重新輸入");
}


?>
<a href="login.php">登入頁面</a>