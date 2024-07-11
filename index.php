<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary {
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
    <title>Demande</title>
</head>
<body>
    <div class="container">
        <h1>DEMANDE</h1>
        <a href="demande.php" class="btn btn-primary">Demande de tabliets</a>
        <a href="demande.php" class="btn btn-primary">Demande de gants</a>
        <a href="demande.php" class="btn btn-primary">Demande de sabots</a>
        <a href="congé.php" class="btn btn-primary">Demande de congé</a>
        <br><br>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>

<?php
?>