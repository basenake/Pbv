<?php
$acc='admin';
$pw='1234';

if ($_empty){
    
}

$_POST=['acc'];
$_POST=['pw'];

if($_POST['acc']==$acc && $_POST['pw']==$pw){
    echo "帳密正確 歡迎登入";
}else{
    echo "帳密錯誤 重新輸入";
}

?>
<a href="login.php">登入頁面</a>