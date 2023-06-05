<?php session_start() ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="style.css">

    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Verification</title>
    <style>


.notification {
    padding: 15px;
    color: white;
    font-weight: bold;
    border-radius: 5px;
    margin-bottom: 10px;
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
}



        /* Unique theme color */
        :root {
            --theme-color: #00c06e;
        }

        /* Navbar style */
        .navbar-laravel {
            background-color: var(--theme-color);
        }

        .navbar-laravel .navbar-brand {
            color: #fff;
        }

        /* Form style */
        .login-form {
            margin-top: 50px;
        }

        .card-header {
            background-color: var(--theme-color);
            color: #fff;
        }

        .card-body {
            background-color: #f8f9fa;
        }

        /* Button style */
        input[type="submit"] {
            background-color: var(--theme-color);
            color: #fff;
            border: none;
            padding: 8px 20px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00a25e;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Verification Account</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verification Account</div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">OTP Code</label>
                                <div class="col-md-6">
                                    <input type="text" id="otp" class="form-control" name="otp_code" required autofocus>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Verify" name="verify">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>


<?php
    include('config.php');

    // Function to display the notification message
    function displayNotification($message, $theme) {
        echo '<div class="notification" style="background-color: ' . $theme . '">';
        echo $message;
        echo '</div>';
    }

    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
            // Display error notification
            $errorMessage = "Invalid OTP code";
            $themeColor = "red";
            displayNotification($errorMessage, $themeColor);
        }
        else{
            ?>
            <script>
                window.location.replace("welcome.php");
            </script>
            <?php
        }
    }
?>
