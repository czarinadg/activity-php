<?php
    $error = false;
    $displayError = "none";
    $logInSuccessful = false;
    $user = "";
    $displaySuccess = "none";

    if (isset($_POST['btnSignIn'])) {
        $position = $_POST['drpPosition'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($position == "Admin" && $username == "admin" && $password == "Pass1234") {
            $logInSuccessful = true;
        } elseif ($position == "Admin" && $username == "renmark" && $password == "Pogi1234") {
            $logInSuccessful = true;
        } elseif ($position == "Content Manager" && $username == "pepito" && $password == "manaloto") {
            $logInSuccessful = true;
        } elseif ($position == "Content Manager" && $username == "juan" && $password == "delacruz") {
            $logInSuccessful = true;
        } elseif ($position == "System User" && $username == "pedro" && $password == "penduko") {
            $logInSuccessful = true;
        } else {
            $error = true;
        }

        $user = $username;

    }
    

    if ($error) {
        $displayError = "block";
    }


    if ($logInSuccessful) {
        $displaySuccess = "block";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom-login.css">
    <title>Login Form</title>
</head>
<body>
        <div class="container">
            <div class="card card-container p-0" style="display:<?php echo $displayError; ?>; background:none; border:none; box-shadow:none">
                <div class="alert alert-danger" role="alert" >
                    Invalid Username / Password
                </div>
            </div>
            <div class="card card-container p-0" style="display:<?php echo $displaySuccess; ?>; background:none; border:none; box-shadow:none">
                <div class="alert alert-success" role="alert" >
                    Welcome to the System: <?php echo $user; ?>
                </div>
            </div>
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="img/avatar_2x.png" />
                <form class="form-signin" method="post">
                    <select name="drpPosition" class="form-control mb-3" required autofocus>
                        <option value="Admin" selected>Admin</option>
                        <option value="Content Manager">Content Manager</option>
                        <option value="System User">System User</option>
                    </select>
                    <input type="text" id="inputEmail" name="username" class="form-control mb-3" placeholder="User Name" required >
                    <input type="password" id="inputPassword" name="password" class="form-control mb-3" placeholder="Password" required>
                    <div id="remember" class="checkbox">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnSignIn">Sign in</button>
                </form>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>