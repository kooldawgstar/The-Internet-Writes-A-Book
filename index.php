<html
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
<br>
<h2>What is this website about?</h2>
<h4>The goal of this website to collectively write a book with various people on the internet. To contribute to the book all you need to do is read the story and then click the button to type up your sentence and contribute to the book. According to popular writing sites and publishers a book is considered to be 75,000 words, once there is 75,000 words we will put up a notice reminding users we have reached our goal and then 7 days after the notice has been posted the novel will be taken down from the website and published. In the meantime you can work on the next novel that the internet wrote. Please consider turning off your ad blocker to help pay for better hosting and the continuation of this website. Also currently we accept donations through Bitcoin: 1HqZcEP6hCm8vggTbcZADQmowf8cem3Gyb  </h4>
<br>
</html>

<?php
@mysql_connect("DBHOST","DBUSERNAME","DBPASS");
mysql_select_db("DB");

$query = mysql_query("SELECT `Comment` FROM `sentences`");
while ($row = mysql_fetch_assoc($query)) {
    echo $row["Comment"];
    echo '<br>';
}
?> 

<br>
<div id="footer">
<a href="submit.php">Click here to submit your own sentence to the novel!</a>
</div>

