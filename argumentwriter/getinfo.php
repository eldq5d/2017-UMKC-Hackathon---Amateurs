<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Argument Writer</title>
    <style type="text/css">
        #div2{
            position:relative;  left:400px;
        }
    </style>
</head>
<body>
<div id="div2">



<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="upload.handle.php" method="POST">


    <img src="1.jpg" height="200" width="200"/><br/>
    <h2 >&nbsp&nbsp&nbspArgument Writer</h2>
    FirstName:    <input type="text" name="firstname" id="firstname"/><br/><br/>
    LastName:    <input type="text" name="lastname" id="lastname"/><br/><br/>
    DepartmentName:    <input type="text" name="departmentname" id="departmentname"/><br/><br/>
    Document year:    <input type="text" name="docyear" id="docyear"/><br/><br/>
    HLC category:<input><br/><br/>


    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

</div>
</body>
</html>