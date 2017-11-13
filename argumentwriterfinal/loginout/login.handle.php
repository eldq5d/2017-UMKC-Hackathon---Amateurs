<?php
require_once('../config/connect.php');
session_start();
if(!(isset($_POST['userid'])&&(!empty($_POST['userid'])))){
    echo "<script>alert('«ÎÃÓ–¥’À∫≈');window.location.href='login.php';</script>";
}else if(!(isset($_POST['userpw'])&&(!empty($_POST['userpw'])))){
    echo "<script>alert('«ÎÃÓ–¥√‹¬Î');window.location.href='login.php';</script>";
}else{

    $userid = $_POST['userid'];
    $selectidsql="select studentid from student where studentid=$userid";
    $query1=mysql_query($selectidsql);
    $data1=mysql_fetch_row($query1);
    if(empty($data1[0])){
        echo "<script>alert('Please input a valid student ID.');window.location.href='login.php';</script>";
    }else{
        $userpw = $_POST['userpw'];
        $selectsql="select studentpw,firstname,lastname,membership from student where studentid=$userid";
        $query=mysql_query($selectsql);
        $data=mysql_fetch_assoc($query);
        if(($data['studentpw']==$userpw)&&($data['membership']==1)){
            $_SESSION['userid']=$userid;
            $_SESSION['firstname']=$data['firstname'];
            $_SESSION['lastname']=$data['lastname'];
            echo $_SESSION['firstname'];
            echo $_SESSION['lastname'];
            echo "<script>alert('Login successfully.');window.location.href='../index.php';</script>";
        }else if(($data['studentpw']==$userpw)&&($data['membership']==0)){
            echo "<script>alert('Your are not a member.');window.location.href='login.php';</script>";
        }else{
            echo "<script>alert('Wrong password.');window.location.href='login.php';</script>";
        }
    }
}
?>