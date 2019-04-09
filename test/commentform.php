<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Comments</title>
     <?php
        function addComment(){
            echo "<tr>";    
            echo "<td>" . "</td>";   
            echo "<td>" . "</td>";   
            echo "</tr>"; 
            echo '</table>';
        }
     ?>
   </head>
   <body>
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

      $sql = "SELECT name, body FROM comments";
      $result = $conn->query($sql);
      echo"<table border='1'><thead><tr><th>Name</th><th>Comment</th></tr></thead>"; 

      if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
              // echo "Name: " . $row["name"]. " Date: " . $row["date"]. " " . " Description: " . $row["description"]. " location: " . $row["location"]. "<br>";
              echo "<tr>";    
              echo "<td>" . $row['name'] . "</td>";   
              echo "<td>" . $row['body'] . "</td>";   
              echo "</tr>"; 
              echo '</table>';
          }
      } else {
          echo "0 results";
      }
      $conn->close();
      ?>
      <a href="addComment.php">Add Comment</a>
   </body>
 </html>
