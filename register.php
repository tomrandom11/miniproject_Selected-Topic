<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
	crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 
		integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" 
		crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" 
		integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" 
        crossorigin="anonymous"></script>
        <!--ส่วนหัว-->
        <header>
        <img src="img/logo1.jpg" >
        </header>
        <div class="header">
        <h2>สมัครสมาชิก</h2>
        </div>


    <form class="form" action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        username<input type="text" name="username" class="form-control" 
        style="background:  #ffffff;" >

        Email<input type="email" name="email" class="form-control" 
        style="background:  #ffffff;" >


        Password<input type="password" name="password_1" class="form-control" 
        style="background:  #ffffff;" >

        
        
        Confirm Password<input type="password" name="password_2" class="form-control" 
        style="background:  #ffffff;">
        <br>
        <button type="submit" name="reg_user" class="btn btn-success">สมัคร</button>
		สมัครสมาชิก <a href="login_user.php">login</a>

    </form>

</body>
</html>