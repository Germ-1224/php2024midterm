<html>

<head>
    <meta charset="utf-8"> 
</head>

<body>
    <center><font size=7><b>reviewer您好，歡迎進入評論網頁 </b></font></center>
</body>

<form action="showreview.php" method="post">
    論文評審決定:
    <input type="radio" name="decision" value="accept" checked>accept
    <input type="radio" name="decision" value="minor revision">minor revision    
    <input type="radio" name="decision" value="major revision">major revision    
    <input type="radio" name="decision" value="reject">reject<br/>
    論文評論評語：<br/>
    <textarea name="sComment" value="" rows="10" cols="40">
    </textarea>

    <input type="submit" value="提交">


</form>

    <a href='logout.php'>登出</a>
</html>
