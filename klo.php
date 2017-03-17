<html>
<body>

<?php 

mysql_select_db("test", mysql_connect("127.0.0.1", "root", "password"));
if(isset($_POST['submit']) && $_POST['submit']=='Submit'){
    
     $res = mysql_query("SELECT * FROM users WHERE username ='$_POST[fname]' AND password='$_POST[fpass]' ;");

     echo"hello";
     
}


?>

</body>
</html>