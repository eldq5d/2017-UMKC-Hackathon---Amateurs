<?php
require_once('connect.php');
if(($_GET['type']=0)||(empty($_GET['type']))){
    echo 1;
    if(empty($_GET['key'])){
        $sql = "select * from file";
        echo 2;
    }else{
        echo $_GET['type'];
        $keyword=$_GET['key'];
        $sql = "select * from file where filename like '%$keyword%' or departmentname like '%$keyword%' or HLC like '%$keyword%'";
    }
}else if($_GET['type']=1){
    if(empty($_GET['key'])){
        $sql = "select * from file order by FK_studentid";
        echo 4;
    }else{
        //need to be fixed
        echo 5;
        $keyword=$_GET['key'];
        $sql = "select * from file where filename like '%$keyword%' or departmentname like '%$keyword%' or HLC like '%$keyword%'";
    }
}else if($_GET['type']=2){
    if(empty($_GET['key'])){
        $sql = "select * from file order by departmentname";
        echo 6;
    }else{
        echo 7;
        $keyword=$_GET['key'];
        $sql = "select * from file where departmentname like '%$keyword%'";
    }
}else if($_GET['type']=3){
    if(empty($_GET['key'])){
        $sql = "select * from file order by FK_studentid";
        echo 8;
    }else{
        echo 9;
        $keyword=$_GET['key'];
        $sql = "select * from file where HLC like '%$keyword%'";
    }
}
//if(empty($_GET['key'])){
//    $sql = "select * from file";
//}else{
//    $keyword=$_GET['key'];
 //   $sql = "select * from file where $";
//}


$query = mysql_query($sql);
if($query&&mysql_num_rows($query)){
    while($row = mysql_fetch_assoc($query)){
        $data[] = $row;
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head profile="http://gmpg.org/xfn/11">
<title>ArgumentWriter</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<!-- 3 Column Stylesheet Added To The Page And Not To The Layout.css -->
<link rel="stylesheet" href="styles/3_column.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="#">Argument Writer</a></h1>
      <p>HLC Accreditation Reaffirmation</p>
    </div>
    <div class="fl_right right">
      <ul>

        <li><a href="#">Student Login</a></li>
        <li class="last"><a href="#">Staff Login</a></li>
      </ul>
      <form action="#" method="post" id="sitesearch">
        <fieldset>
          <strong>Search:</strong>
          <input type="text" value="Search Our Website&hellip;" onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="image" src="images/search.gif" id="search" alt="Search" />
        </fieldset>
      </form>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div class="rnd">
    <!-- ###### -->
    <div id="topnav">
      <ul>
        <li class="active"><a href="files.show.html">Browse</a></li>

        <li ><a href="index.html">Upload</a></li>
      </ul>
    </div>
    <!-- ###### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row3">
  <div class="rnd">
    <div id="container" class="clear">

      <!-- ####################################################################################################### -->
      <div id="left_column" style="width: 50px">
        <div class="holder"></div>
      </div>
      <!-- ############ -->
      <div id="content"  style="width: 720px">
        <h1 class="title">Files</h1>
        <div id="respond">
        <form method="get" action="files.show.php">
          <fieldset>
            <label for="type">Categories:</label>
            <select name="type" id="type" style="width: 100px">
              <option value="0">All</option>
              <option value="1">Submitter</option>
              <option value="2">Departement</option>
              <option value="3">HLC</option>
            </select>
            <input type="text" id="s" name="key" value="" />
            <input type="submit" id="x" value="Go" style="width: 40px"/>
          </fieldset>
        </form>
          <br/>
        <table summary="Summary Here" cellpadding="0" cellspacing="0" >
          <?php
		    if(empty($data)){
		    	echo "No any files in database.";
		    }else{
			    foreach($data as $value){
	      ?>
          <thead>
            <tr>
              <th>Filename:</th>
              <th>Department</th>
              <th>Document Year</th>
              <th>HLC Category</th>
              <th>Justification</th>
              <th>Upload Time</th>
            </tr>
          </thead>
          <tbody>
            <tr class="light">
              <td><a href="<?php echo $value['filename']?>"><?php echo $value['filename']?></a></td>
              <td><?php echo $value['departmentname']?></td>
              <td><?php echo $value['docyear']?></td>
              <td><?php echo $value['HLC']?></td>
              <td><?php echo $value['justification']?></td>
              <td><?php echo $value['uploadtime']?></td>
            </tr>
            <tr class="dark">
              <td><a href="<?php echo $value['filename']?>"><?php echo $value['filename']?></a></td>
              <td><?php echo $value['departmentname']?></td>
              <td><?php echo $value['docyear']?></td>
              <td><?php echo $value['HLC']?></td>
              <td><?php echo $value['justification']?></td>
              <td><?php echo $value['uploadtime']?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- ############ -->
      <div id="right_column">
        <div class="holder">
        </div>

      </div>
      <!-- ####################################################################################################### -->
      </div>
      </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div class="rnd">
    <div id="footer" class="clear">
      <!-- ####################################################################################################### -->
      <div class="fl_left clear">
        <div class="fl_left center"><img src="images/1.jpg" alt="" /><br />
          <a href="#">Find Us With Google Maps &raquo;</a></div>
        <address>
          University of Missouri-Kansas City<br/>
          5100 Rockhill Rd<br />
          Kansas City<br />
          MO 64110<br />
          <br />
          Tel:816-235-1000<br />
          Email: <a href="#">argumentwriter@umkc.edu</a>
        </address>
      </div>
      <div class="fl_right">
        <div id="social" class="clear">
          <p>Stay Up to Date With Whats Happening</p>
          <ul>
            <li><a style="background-position:0 0;" href="#">Twitter</a></li>
            <li><a style="background-position:-72px 0;" href="#">LinkedIn</a></li>
            <li><a style="background-position:-142px 0;" href="#">Facebook</a></li>
            <li><a style="background-position:-212px 0;" href="#">Flickr</a></li>
            <li><a style="background-position:-282px 0;" href="#">RSS</a></li>
          </ul>
        </div>
        <div id="newsletter">
          <form action="#" method="post">
            <fieldset>
              <legend>Subscribe To Our Newsletter:</legend>
              <input type="text" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
              <input type="text" id="subscribe" value="Submit" />
            </fieldset>
          </form>
        </div>
      </div>
      <!-- ####################################################################################################### -->
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2017 - The Amateurs  </p>
  </div>
</div>
</body>
</html>
