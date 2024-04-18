<?php
session_start();
?>

<meta charest = "utf-8">

<?php

if($_SESSION["check"]=="Yes"){
    echo "歡迎進入網頁</br>";
    echo "<a href='logout.php'>登出</a>";
}else{
    echo "非法進入網頁</br>";
    echo "3秒之後回登入頁面";
    header("Refresh:3; url=index.php");
}

?>
