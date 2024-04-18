<?php
ob_start();
session_start();
?>

<meta charest="utf-8">
<?php
$aId="chair";
$aPwd="123";
$bId="reviewer";
$bPwd="234";
$cId="author";
$cPwd="345";

$uId=$_POST["uId"];
$uPwd=$_POST["uPwd"];
$character=$_POST["character"];

if($character=="chair" && $aId==$uId && $aPwd==$uPwd){
    $_SESSION["check"]="Yes";
    setcookie("userName",$aId);
    header("Location:successchair.php");
}else if($character=="reviewer" && $bId==$uId && $bPwd==$uPwd){
    $_SESSION["check"]="Yes";
    setcookie("userName",$bId);
    header("Location:successreviewer.php");
}else if($character== "author" && $cId==$uId && $cPwd==$uPwd){
    $_SESSION["check"]="Yes";
    setcookie("userName",$cId);
    header("Location:successauthor.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}
    
ob_flash();

?>