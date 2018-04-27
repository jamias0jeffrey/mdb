<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Header!</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="container" id="loginform">
        <div class="card-block">

            <form action="session_home.php" method="POST">
                <!--Header-->
                <div class="text-center">
                    <h3><i class="fa fa-lock"></i> Login:</h3>
                    <hr class="mt-2 mb-2">
                </div>

                <!--Body-->
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="usr-name" class="form-control" name="username">
                    <label for="usr-name">Enter Username/Email</label>
                </div>

                <div class="md-form">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" id="pass" class="form-control" name="password">
                    <label for="pass">Enter Passowrd</label>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary">Login</button>
                </div>
            </form>

            <div id=errormessage>
                <?php
                    if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
                        echo $_SESSION['message'];
                        session_unset();
                        session_destroy();
                    }
                ?>
            </div>

        </div>

        <!--Footer-->
        <div class="modal-footer">
            <div class="options">
                <p>Not a member? <a href="signup.php">Sign Up</a></p>
                <p>Forgot <a href="#">Password?</a></p>
            </div>
        </div>
    </div>






<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

</body>
</html>
