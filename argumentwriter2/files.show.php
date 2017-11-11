<?php
require_once('connect.php');
if($_GET['type']=1){
  
}
if(empty($_GET['key'])){
    $sql = "select * from file";
}else{
    $keyword=$_GET['key'];
    $sql = "select * from file where $";
}


$query = mysql_query($sql);
if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
        $data[] = $row;
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Browse files</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>

<!-- start page -->
<div id="page">
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2>Files</h2>
				<form method="get" action="files.show.php">
					<fieldset>
					Categories:
					<select name="type">
					<option value="0">All</option>
					<option value="1">Submitter</option>
					<option value="2">Departement</option>
					<option value="3">HLC</option>
					</select>
					<input type="text" id="s" name="key" value="" />
					<input type="submit" id="x" value="Go" />
					</fieldset>
				</form>
			</li>
		</ul>
	</div>
	<!-- end sidebar -->
	<!-- start content -->
	<div id="content">
	<table>
	<?php
		if(empty($data)){	
			echo "No any files in database.";
		}else{
			foreach($data as $value){
	?>
		<div class="post">

		<tr>
		<th>Filename:</th>
		<th>Department:</th>
		<th>Document Year</th>
		<th>HLC Category</th>
		<th>Justification</th>
		<th>Upload Time</th>
		</tr>
		<tr>
		<td><a href="<?php echo $value['filename']?>"><?php echo $value['filename']?></a></td>
		<td><?php echo $value['departmentname']?></td>
		<td><?php echo $value['docyear']?></td>
		<td><?php echo $value['HLC']?></td>
		<td><?php echo $value['justification']?></td>
		<td><?php echo $value['uploadtime']?></td>
		</tr>
	
	
		</div>
	<?php
			}
		}
	?>
	</table>
	</div>
	<!-- end content -->

	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
	<p id="legal"></p>
</div>
<!-- end footer -->
</body>
</html>