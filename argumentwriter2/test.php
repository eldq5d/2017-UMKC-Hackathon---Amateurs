<?php
require_once('connect.php');
if(!(isset($_POST['firstname'])&&(!empty($_POST['firstname'])))){
    echo "<script>alert('Please input your Firstname');window.location.href='getinfo.php';</script>";
}else if(!(isset($_POST['lastname'])&&(!empty($_POST['lastname'])))){
    echo "<script>alert('Please input your Lastname');window.location.href='getinfo.php';</script>";
}else if(!(isset($_POST['lastname'])&&(!empty($_POST['lastname'])))){
    echo "<script>alert('Please input your Department Name');window.location.href='getinfo.php';</script>";
}else if(!(isset($_POST['departmentname'])&&(!empty($_POST['departmentname'])))){
    echo "<script>alert('Please input your Depoartment Name');window.location.href='getinfo.php';</script>";
}else if(!(isset($_POST['docyear'])&&(!empty($_POST['docyear'])))){
    echo "<script>alert('Please input your Document Year');window.location.href='getinfo.php';</script>";
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$departmentname = $_POST['departmentname'];
$docyear = $_POST['docyear'];
$dateline =  time();
echo "Username:",$firstname," ",$lastname,"\n";
echo $lastname;
echo $departmentname;
echo $docyear;
echo $dateline;
$insertsql = "insert into userinfo(firstname, lastname) values('$firstname', '$lastname')";
if(mysql_query($insertsql)){
    echo "<script>alert('Insert data successfully');window.location.href='getinfo.php';</script>";
}else{
    echo "<script>alert('Insert data failed');window.location.href='getinfo.php';</script>";
}
?>