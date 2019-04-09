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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="test/style.css">
      <link rel="stylesheet" type="text/css" href="login/test.css">
      <link rel="stylesheet" type="text/javascript" href="test/test.js">
      <script src="test/test.js">
      </script>
    <title></title>
  </head>
  <body>
    <div class="split left">
      <div class="topnav">
      <div class="centered">
      <h1 style="color:white;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome!</h1>
      <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
      <a href="register.php" class="btn btn-default">Add new user.</a>
      <a href="https://www.arthakoartha.com/">ArthakoArtha</a>


     </div>

</div>

<div class="split right">
   <div class="centered">
    <div class="topnav">
    <a href="#home">Home</a>
    <a href="listevent.php"> Upcoming Events</a>
    <a href="#contact"> Manage Users</a>
      <a href="logout.php" class="btn btn-danger">Log Out</a>
   </div>

</div>
<body onload="startTime()">
  <div class="container">
    <div class="card">
      <div class="front">
        <div class="contentfront">
          <div class="month">
            <table>
              <tr class="orangeTr">
                <th>M</th>
                <th>T</th>
                <th>W</th>
                <th>T</th>
                <th>F</th>
                <th>S</th>
                <th>S</th>
              </tr>
              <tr class="whiteTr">
                <th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
              </tr>
              <tr class="whiteTr">
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
              </tr>
              <tr class="whiteTr">
                <th>14</th>
                <th>15</th>
                <th>16</th>
                <th>17</th>
                <th>18</th>
                <th>19</th>
                <th>20</th>
              </tr>
              <tr class="whiteTr">
                <th>21</th>
                <th>22</th>
                <th>23</th>
                <th>24</th>
                <th>25</th>
                <th>26</th>
                <th>27</th>
              </tr>
              <tr class="whiteTr">
                <th>28</th>
                <th>29</th>
                <th>30</th>
                <th>31</th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </table>
          </div>
          <div class="date">
            <div class="datecont">
              <div id="date"></div>
              <div id="day"></div>
              <div id="month"></div>
              <i class="fa fa-pencil edit" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="back">
        <div class="contentback">
          <div class="backcontainer">
            hhh
          </div>
        </div>--->
       </div>
    </div>
  </div>
</body>

</div>
</div>
  </body>
</html>
 </div>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="register.php" class="btn btn-default">Add new user.</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
  </p>

</body>
</html>
