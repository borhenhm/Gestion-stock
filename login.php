<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}

require_once "database.php"; 

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = $user;
            if ($user["is_admin"] == 1) { 
                header("Location: gestion.php");
            } else { 
                header("Location: index.php");
            }
            exit();
        } else {
            $errorMessage = "Email or password is incorrect.";
        }
    } else {
        $errorMessage = "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
</head>
<body class="login-page">
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="vendors/images/login-page-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary">Login</h2>
                        </div>
                        <?php if (isset($errorMessage)) : ?>
                            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
                        <?php endif; ?>
                        <form action="login.php" method="post">
                            <div class="select-role">
                                
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn active">
                                        <input type="radio" name="options" id="admin" />
                                        <div class="icon">
                                            <img src="vendors/images/briefcase.svg" class="svg" alt="" />
                                            </div>
											<span>I'm</span>
											Administrator
										</label>
										<label class="btn active">
											<input type="radio" name="options" id="user" />
											<div class="icon">
												 <img src="vendors/images/person.svg" class="svg" alt="" />
											</div>
											<span>I'm</span>
											User
										</label>
									</div>
                            </div>
                            <div class="input-group custom">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" name="password" class="form-control">
                                </div>
                                <div class="form-btn">
                                    <h4><input type="submit" value="connexion" name="login" class="btn btn-primary"></h4>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
</body>
</html>

