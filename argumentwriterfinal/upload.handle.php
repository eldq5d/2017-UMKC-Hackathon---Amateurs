<?php

session_start();

// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.
$studentid=$_SESSION['userid'];
require_once('config/connect.php');
if(!(isset($_POST['departmentname'])&&(!empty($_POST['departmentname'])))){
    echo "<script>alert('Please select a department');window.location.href='index.php';</script>";
}else if(!(isset($_POST['docyear'])&&(!empty($_POST['docyear'])))){
    echo "<script>alert('Please input the Document Year');window.location.href='index.php';</script>";
}else if(!(isset($_POST['HLC'])&&(!empty($_POST['HLC'])))){
    echo "<script>alert('Please select HLC.');window.location.href='index.php';</script>";
}else if(!(isset($_FILES['userfile']['name'])&&(!empty($_FILES['userfile']['name'])))){
    echo "<script>alert('Please select a file to upload.');window.location.href='index.php';</script>";
}
//data from the user
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$departmentname = $_POST['departmentname'];
$docyear = $_POST['docyear'];
$HLC=$_POST['HLC'];
$justification=$_POST['justification'];
$dateline =  time();
echo $firstname;
echo $lastname;
echo $HLC;
echo $justification;
echo $dateline;
//file from the user
$uploaddir = 'uploads/'.$HLC.'/';
$filename=$departmentname.'_'.$docyear.'_'.basename($_FILES['userfile']['name']);
$uploadfile = $uploaddir .$departmentname.'_'.$docyear.'_'.basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    
    
    $insertsql = "insert into file(FK_studentid,uploaduser,filedir,filename,departmentname,docyear,HLC,justification,uploadtime) values($studentid,'$firstname $lastname','$uploaddir','$filename','$departmentname',$docyear,'$HLC','$justification','$dateline')";
    if(mysql_query($insertsql)){
        echo "<script>alert('Upload file successfully');window.location.href='index.php';</script>";
    }else{
        echo "<script>alert('Upload file failed');window.location.href='index.php';</script>";
    }
    
    
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?>