<?php 
session_start();
if(($_SESSION['userid']==0)||(empty($_SESSION['userid']))||(!isset($_SESSION['userid']))){
    echo "<script>alert('Please login!');window.location.href='loginout/login.php';</script>";
}else{
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
        <li><a href="loginout/login.php">Student Login</a></li>
        <li class="last"><a href="loginout/logout.handle.php">Logout</a></li>
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
        <li><a href="files.show.php?type=">Browse</a></li>

        <li class="active"><a href="index.php">Upload</a></li>

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
      <div id="left_column">
        <div class="holder"></div>
      </div>
      <!-- ############ -->
      <div id="content">
        <h1 class="title">Upload</h1>
        <div id="respond">


          <form enctype="multipart/form-data" action="upload.handle.php" method="post" >
            <p>
              <label for="firstname">FirstName</label>
              <input type="text" name="firstname" id="firstname" value="<?php echo $_SESSION['firstname']; ?>" size="22" disabled="disabled" style="width:80px;border:none;"/>
            </p>
            <p>  
              <label for="lastname">LastName</label>
              <input type="text" name="lastname" id="lastname" value="<?php echo $_SESSION['lastname']; ?>" size="22" disabled="disabled" style="width:80px;border:none;"/>
            </p>
            <p>
              
            </p>
            <p>
              <label for="departmentname">Department (required)</label>
              <select name="departmentname" id ="departmentname">
                <option value=''></option>
                <option value='Accounting'>Accounting</option>
                <option value='Arts'>Arts</option>
                <option value='Computer Science'>Computer Science</option>
                <option value='EE'>EE</option>
              </select>
            </p>
            <p>
              <label for="docyear">Document year (required)</label>
              <input type="text" name="docyear" id="docyear" value="" size="22" />
            </p>
            <p>
              <label for="HLC">HLC category (required)</label>
              <select name="HLC" id="HLC">
                <option value=''></option>
                <option value='Missouri'>Missouri</option>
                <option value='Kansas'>Kansas</option>
                <option value='Others'>Others</option>
              </select>
            </p>
            <p>
              <input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />
              <label for="HLC">Upload file(required)</label>
              <input type="file" name="userfile"/>
            </p>
            <p>
              <label for="justification" style="display:none;">Justification</label>
              <textarea name="justification" cols="100%" rows="10"></textarea>
            </p>
            <p>
              <input name="submit" type="submit" id="submit" value="Upload" />
              &nbsp;
              <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
            </p>
          </form>
        </div>
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
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div class="rnd">
    <div id="footer" class="clear">
      <!-- ####################################################################################################### -->
      <div class="fl_left clear">
        <div class="fl_left center"><a href="https://www.umkc.edu/" ><img src="images/1.jpg" alt="" /></a><br />
          <a href="https://www.google.com/maps/place/University+of+Missouri-Kansas+City/@39.0335539,-94.5760259,15z/data=!4m5!3m4!1s0x0:0x93f042636b4015c8!8m2!3d39.0335539!4d-94.5760259">Find Us With Google Maps &raquo;</a></div>
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
            <li><a style="background-position:0 0;" href="https://twitter.com/UMKansasCity?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Twitter</a></li>
            <li><a style="background-position:-72px 0;" href="https://www.linkedin.com/edu/university-of-missouri-kansas-city-18723">LinkedIn</a></li>
            <li><a style="background-position:-142px 0;" href="https://www.facebook.com/UMKansasCity/">Facebook</a></li>
            <li><a style="background-position:-212px 0;" href="https://www.flickr.com/photos/umkc/">Flickr</a></li>
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
<?php 
}
?>
