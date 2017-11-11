<?php
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

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

$uploaddir = 'uploads/';
$uploadfile = $uploaddir .$departmentname.'_'.$docyear.'_'.basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
    
    
    $insertsql = "insert into userinfo(firstname, lastname) values('$firstname', '$lastname')";
    if(mysql_query($insertsql)){
        echo "<script>alert('Insert data successfully');window.location.href='getinfo.php';</script>";
    }else{
        echo "<script>alert('Insert data failed');window.location.href='getinfo.php';</script>";
    }
    
    
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);

print "</pre>";

?>