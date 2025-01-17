<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        require_once "database.php"; 

        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                if (password_verify($password, $user["password"])) {
                    if ($user["is_admin"] == 1) { 
                        $_SESSION["user"] = $user; 
                        header("Location: gestion.php");
                        exit();
                    } else {
                        if (password_verify($password, $user["password"])) {
                            if ($user["is_admin"] == 0) { 
                                $_SESSION["user"] = $user; 
                                header("Location: index.php");
                                exit();
                            }
                        } else {
                            echo "<div class='alert alert-danger'>Email does not match</div>";
                        }
                    }
                } else {
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <center><h1>Login</h1></center><br>
                <input type="email" placeholder="Email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <center><input type="submit" value="connexion" name="login" class="btn btn-primary"></center>
            </div>
        </form>
    </div>
</body>
</html>
