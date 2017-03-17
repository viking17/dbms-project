<html>
<head>
<style>
input{font-size:1.2em;}
.efg{font-size:2.5em;background-color:black; width:1600; height:50;}
</style>
</head>
<body>
<body link=white alink=white vlink=white>
<br><br><div class=efg><a href="cbms.html">HOME</a>&#160; &#160; <a href="placement.html">PLACEMENT</a> &#160; &#160;<a href="department.html">DEPARTMENT</a>&#160; &#160; <a href="#">CONTACT</a></div>
<br><br><br><br>
<form method="POST" action="<?=$_SERVER["PHP_SELF"]?>">
&#160;&#160;&#160;&#160;&#160;&#160;&#160;
 <font size=40px>Search by student name:<input type="text" name="stdname"> 
 <input type="submit" value="submit" name="submit">
<br>
<br>
&#160;&#160;&#160;&#160;Search by student id: &#160; &#160;&#160;
 <input type="text" name="stdid"> 
 <input type="submit" value="submit" name="submit"></font>
</form>
</body>
</html>

<?php

mysql_select_db("test", mysql_connect("127.0.0.1", "root", "password"));//insert your dbname in place of test and password in place of passwword

if(isset($_POST['submit']) && $_POST['submit']=='submit'){


$sql = "SELECT * FROM ise ";  
$result = mysql_query($sql);


if (mysql_num_rows($result) > 0) {
    while($row = $result->fetch_assoc()) {
        echo " " . $row['depname']. "  " . $row['instructorname']. "  " . $row['coursename']."  ".$row['studentname']." ".$row['studentid']."<br>";
    }
} else {
    echo "0 results";
}
 }


  ?>