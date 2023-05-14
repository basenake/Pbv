<h1>目標頁面</h1>
<a href="https://seanphpbook.blogspot.com/2009/10/php-empty-isset-php.html">介紹各種判斷</a>
<?php
// $_GET $_SERVER.... 這種皆為 系統變數 用ISSET 判斷 皆為存在 
// 上面用ISSET 皆為 真的 不管有沒有資料送出 而用 EMPTY 則可以判斷 
// ISSET 可以判斷 變數 是否 被宣告出來 而EMPTY 則是查詢 變數裡面 是否有資料 VALUE
$a=''; 
// 宣告 $a; or $a=null isset 皆判定 沒有值 則為false 陣列 裡面 沒有value 也不會被判定為false
$b[]=null;
// empty 陣列有值 則不會判定為空的 $a=""; 沒有值 則是空的
if(isset($a)){
    echo "true";
}else{
    echo "false";
}

if(empty($b)){
    echo "true";
}else{
    echo "false";
}

if(!empty($_GET)){
    echo "以下資料為post 表單的資料";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

if(!empty($_POST)){
    echo "以下資料為POST 表單的資料";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}















echo $_GET['addr'];
echo $_POST['name'];
echo $_POST['type'];
// 下列不可使用
// echo $_POST['img'];


?>