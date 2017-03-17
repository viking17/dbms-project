




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
        <h1 class="display-3">Book Index</h1>
        <p>Choose the book of your need from the thousands of volumes available..</p>
       
      </div>
    </div>
<center>
   <h1>To borrow click the below link with the book id.</h2>

<u><h2><a href = "credentials.php">SELECT BOOK</a></h2><br><br></u>
</center>
        
      </div>

    </div><!-- /.container -->
<center>
    <a href = "a.php">A</a>
	<a href = "b.php">B</a>
	<a href = "c.php">C</a>
	<a href = "d.php">D</a>
	<a href = "e.php">E</a>
	<a href = "f.php">F</a>
	<a href = "g.php">G</a>
	<a href = "h.php">H</a>
	<a href = "i.php">I</a>
	<a href = "j.php">J</a>
	<a href = "k.php">K</a>
	<a href = "l.php">L</a>
	<a href = "m.php">M</a>
	<a href = "n.php">N</a>
	<a href = "o.php">O</a>
	<a href = "p.php">P</a>
	<a href = "q.php">Q</a>
	<a href = "r.php">R</a>
	<a href = "s.php">S</a>
	<a href = "t.php">T</a>
	<a href = "u.php">U</a>
	<a href = "v.php">V</a>
	<a href = "w.php">W</a>
	<a href = "x.php">X</a>
	<a href = "y.php">Y</a>
	<a href = "z.php">Z</a>
</center>

<center>
<?php
mysql_select_db("test", mysql_connect("127.0.0.1", "root", "password"));

$result = mysql_query("select * from books");  
echo "<table border='1' style='border-collapse: collapse'>";  
echo "<th>Book_id</th><th>Name</th><th>Author</th><th>Quantity</th><th>Dept</th>";  
while ($row = mysql_fetch_assoc($result))  
{  
echo"<tr padding : 5px 5px><td>".$row['book_id']."</td><td>".$row['name']."</td><td>".$row['author']."</td><td>".$row['no_copies']."</td><td>". $row['dept']."</td></tr>"; //print te table on the webpage
}  
echo "</table>";  
?>
</center>


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