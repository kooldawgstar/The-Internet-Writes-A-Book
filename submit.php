<?php
@mysql_connect("DBHOST","DBUSERNAME","DBPASSWORD");
mysql_select_db("DB");

if(isset($_POST['btn-save']))
{
 // variables for input data
 $Comment = $_POST['Comment'];
 $ip=$_SERVER['REMOTE_ADDR'];
 // variables for input data
 
 // sql query for inserting data into database
 $sql_query = "INSERT INTO sentences(Comment, ipaddress) VALUES('$Comment','$ip')";
 // sql query for inserting data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>

  <?php
 }
 else
 {
  ?>

  <?php
 }
 // sql query execution function
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Internet Writes a Book</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
 <div id="content">
    <label>The Internet Writes a Book</label>
    </div>
</div>

<div id="body">
 <div id="content">
    <form method="post">
    <table align="center">
    <tr>
    <td><input type="Textarea" cols="2" rows="10" name="Comment" placeholder="Sentence" required maxlength="100" /></td>
    </tr>
    <tr>
    <td><button type="submit" name="btn-save"><strong>Add to the Novel</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>
<div id="footer">

</div>
</center>
</body>
</html>


