<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $description = "";
$email_err = $description_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
        // Prepare a select statement
        // $sql = "SELECT email FROM users WHERE email = ?";

        // if($stmt = mysqli_prepare($link, $sql)){
        //     // Bind variables to the prepared statement as parameters
        //     mysqli_stmt_bind_param($stmt, "s", $param_email);

        //     // Set parameters
        //     $param_email = trim($_POST["email"]);

        //     // Attempt to execute the prepared statement
        //     if(mysqli_stmt_execute($stmt)){
        //         /* store result */
        //         mysqli_stmt_store_result($stmt);

        //         if(mysqli_stmt_num_rows($stmt) == 1){
        //             $email_err = "This email is already taken.";
        //         } else{
                    $email = trim($_POST["email"]);
                // }
            // } else{
            //     echo "Oops! Something went wrong. Please try again later.";
            // }

            // Close statement
            // mysqli_stmt_close($stmt);
        // }


    }

    // Validate description
    if(empty(trim($_POST["description"]))){
        $confirm_description = "Please provide description.";
    } else{
        $description = trim($_POST["description"]);
    }

    // Check input errors before inserting in database
    if(empty($email_err) && empty($description_err)) {
        // Prepare an insert statement
        $sql = "INSERT INTO production (email, description) VALUES (?,?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_description);

            // Set parameters
            $param_email = $email;
            $param_description = $description;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: listproductiontasks.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta email="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign task in Production</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Assign task</h2>
        <p>Please fill this form to assign a task.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                <label>Description</label>
                <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                <span class="help-block"><?php echo $description_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>