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


    <img src="images/1.jpg" height="200" width="200"/><br/>
    <h2 >&nbsp&nbsp&nbspArgument Writer</h2>
    First Name:    <input type="text" name="firstname" id="firstname"/><br/><br/>
    Last Name:    <input type="text" name="lastname" id="lastname"/><br/><br/>
    Department:    
    <select name="departmentname">
    <option value=''></option>
    <option value='Accounting'>Accounting</option>
    <option value='Arts'>Arts</option>
    <option value='Computer Science'>Computer Science</option>
    <option value='EE'>EE</option>
    </select>
<br/><br/>
    Document Year:    <input type="text" name="docyear" id="docyear"/><br/><br/>
    HLC Category:
    <select name="HLC">
    <option value=''></option>
    <option value='Missouri'>Missouri</option>
    <option value='Kansas'>Kansas</option>
    <option value='Others'>Others</option>
    </select><br/><br/>
    Justification:
    <textarea rows="3" cols="40" name="justification"></textarea><br><br>


    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />
    <!-- Name of input element determines name in $_FILES array -->
    Upload file: <input name="userfile" type="file" />
    <input type="submit" value="Upload" />
    <a href="files.show.php">Browse</a>
    <a href="uploads/CS_1994_critique for paper5.docx">Download</a>
</form>

</div>
</body>
</html>