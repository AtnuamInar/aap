<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <a href="assign.php">Assign task</a>

     <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "test";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT email, description FROM production";
      $result = $conn->query($sql);
      echo"<table border='1'><thead><tr><th>Email</th><th>Description</th></tr></thead>"; 

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              // echo "Name: " . $row["name"]. " Date: " . $row["date"]. " " . " Description: " . $row["description"]. " location: " . $row["location"]. "<br>";
              echo "<tr>";    
              echo "<td>" . $row['email'] . "</td>";   
              echo "<td>" . $row['description'] . "</td>";   
              echo "</tr>"; 
              echo '</table>';
          }
      } else {
          echo "0 results";
      }
      $conn->close();
      ?>
   </body>
 </html>
