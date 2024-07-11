<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de gestion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-gestion {
            background-color: #007bff;
            color: #fff;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #fff;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="vendors/images/banner-img.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
        <h1>Menu de gestion</h1>
        <form method="post" action="action.php">
            <button type="submit" name="gestion_demande"class="btn btn-gestion" onclick="window.location.href='gestion_demande.php'; return false;">Gestion utilisateur</button>
            <button type="submit" name="gestion_utilisateur"class="btn btn-gestion" onclick="window.location.href='oui ou non.php'; return false;">Gestion demande</button>
            <button type="submit" name="gestion_stock"class="btn btn-gestion" onclick="window.location.href='gestion_stock.php'; return false;">Gestion stock</button>
        <br>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["gestion_demande"])) {
        header("Location: demande.php");
        exit;
    } elseif (isset($_POST["gestion_utilisateur"])) {
        header("Location: registration.php");
        exit;
    } elseif (isset($_POST["gestion_stock"])) {
        header("Location: stock.php");
        exit;
    }
}
?>



