

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
   

    <title>search B</title>

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
        <h1 class="display-3">Search by B.</h1>
       
      </div>
    </div>
<center>

<?php



mysql_select_db("test", mysql_connect("127.0.0.1", "root", "password"));
$res = mysql_query("SELECT * FROM books WHERE name LIKE 'b%'");
echo "<table border='1' style='border-collapse: collapse'>";  
echo "<th>Book_id</th><th>BOOK_Name</th><th>Author</th><th>Quantity</th><th>Dept</th>";  
while ($row1 = mysql_fetch_assoc($res))  
{  
echo"<tr><td>".$row1['book_id']."</td><td>".$row1['name']."</td><td>".$row1['author']."</td><td>".$row1['no_copies']."</td><td>". $row1['dept']."</td></tr>"; //print te table on the webpage
}  

?>

<center>
   <h2>To borrow click the below link with the book id.</h2>

<u><h3><a href = "credentials.php">SELECT BOOK</a></h2><br><br></u>
</center>

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