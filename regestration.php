<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    if (isset($_REQUEST['emp_id'])) {
		$emp_id   = stripslashes($_REQUEST['emp_id']);
		$emp_id = mysqli_real_escape_string($con, $emp_id);
        $username = stripslashes($_REQUEST['name']);
        $username = mysqli_real_escape_string($con, $username);
		$dept    = stripslashes($_REQUEST['dept']);
		$dept    = mysqli_real_escape_string($con, $dept);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
		$phno = stripslashes($_REQUEST['phno']);
		$phno = mysqli_real_escape_string($con, $phno);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (emp_id, name, dept, email, password, phone_no,date)
                     VALUES ('$emp_id','$username','$dept', '$email', '" . md5($password) . "', '$phno','$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
			echo "hi";
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
			echo "no";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="emp_id" placeholder="Employee id" required />
		<input type="text" class="login-input" name="name" placeholder="Employee name" required />
		<input type="text" class="login-input" name="dept" placeholder="Department Name" required>
        <input type="email" class="login-input" name="email" placeholder="Email Adress" required>
        <input type="password" class="login-input" name="password" placeholder="Password" required>
		<input type="tel" class="login-input" name="phno" placeholder="phno" required>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>