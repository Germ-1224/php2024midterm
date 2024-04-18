<html>

<head>
    <meta charset="utf-8"> 
    <title> 高大資管論文投稿系統 </title>
</head>

<body>
    <center><font size=7><b>高大資管論文投稿系統 </b></font></center>
</body>

<form action="check.php" method="post">
    請選擇您的角色 : 
    <select name="character">
    <option value="chair">chair</option>
    <option value="reviewer">reviewer</option>
    <option value="author">author</option>
    </select>
    <br/>
    帳號 : <input type = "text" name = "uId"><br/>
    密碼 : <input type = "password" name = "uPwd"><br/>

    <input type="submit" value="提交">

</form>
</html>

<?php
if(isset($_COOKIE["userName"])){
    echo $_COOKIE["userName"]."歡迎回來";
}else{
    echo "這是你第一次到網站";
}

?>