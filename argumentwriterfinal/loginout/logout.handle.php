<?php
session_start();
$_SESSION['userid']=0;
$_SESSION['username']='0';
if(($_SESSION['userid']==0)&&($_SESSION['username']=='0'))
{
    echo "<script>alert('Logout successfully');window.location.href='login.php';</script>";
}else{
    echo "Failed.";
}
?>