

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
   

    <title>Library Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap1.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-static-top navbar-dark bg-inverse">
     
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          
        </li>
        <li class="nav-item">
         
        </li>
        <li class="nav-item">
         
        </li>
      </ul>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Borrow Receipt</h1>
       
      </div>
    </div>
<center>
   



<h2>The Book Issued is : </h2>
<?php //code to insert user credentials in a database
mysql_select_db("test", mysql_connect("127.0.0.1", "root", "password"));

 if(isset($_POST['submit']) && $_POST['submit']=='Submit')
 {


 $sql = mysql_query("INSERT INTO students (name, usn, sem, dept, book_id , o_date) VALUES ('$_POST[name]', '$_POST[usn]', '$_POST[sem]', '$_POST[dept]', '$_POST[book_id]', CURDATE() )" );


$sql1 = "UPDATE books SET no_copies=(no_copies-1) WHERE book_id='$_POST[book_id]'";
 $retval = mysql_query( $sql1);
 
 $result = mysql_query("select * from books where book_id ='$_POST[book_id]'"); 
 $row = mysql_fetch_assoc($result);


 $result1 = mysql_query("select * from students where usn ='$_POST[usn]'"); 
 $row1 = mysql_fetch_assoc($result1);




 echo "<table border='1' style='border-collapse: collapse'>";  
 echo "<th>Name</th><th>USN</th><th>SEM</th><th>DEPT</th><th>Book_id</th><th>Name</th><th>Author</th><th>Quantity</th><th>Dept</th><th>Issue_Date</th>";  
 echo"<tr><td>".$row1['name']."</td><td>".$row1['usn']."</td><td>".$row1['sem']."</td><td>".$row1['dept']."</td><td>".$row['book_id']."</td><td>".$row['name']."</td><td>".$row['author']."</td><td>".$row['no_copies']."</td><td>". $row['dept']."</td><td>".$row1['o_date']."</td></tr>";



 
}
?>

<div style='float: right;'><a href="home.php">Back to Home</a></div>






      <hr>

     
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>