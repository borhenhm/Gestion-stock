<!DOCTYPE html>
<html>
<head>
<style>
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

    .table-container {
        max-width: 800px;
        margin: auto;
    }

    .table-title {
        font-size: 24px;
        font-weight: bold;
        color: #3366cc; /* Couleur bleue */
    }

    table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


    .table td {
        border: 1px solid #e0e0e0;
        padding: 12px;
        text-align: left;
    }

    .table th {
        background-color: #f2f2f2;
    }

    .table tbody tr:nth-child(odd) {
        background-color: #f7f7f7;
    }

    .table td:first-child {
        text-align: center;
    }

    .no-data {
        text-align: center;
        padding: 12px;
        color: #555;
    }
    .footer {
            padding: 20px;
            text-align: center;
        }

        .button-link {
            display: block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
</style>
</head>
<body>
</style>
</head>
<body>

<div class="table-container">
    <div class="table-title">Tableau des Employeurs Inscrits</div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Mot de passe</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $hostName = "localhost";
            $dbUser = "root";
            $dbPassword = "";
            $dbName = "login_register";
            $conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
            if (!$conn) {
                die("Something went wrong: " . mysqli_connect_error());
            }

            $sql = "SELECT id, full_name, email, password FROM users";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["full_name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='no-data'>Aucun résultat trouvé.</td></tr>";
            }

            mysqli_close($conn);
            ?>
        </tbody>
        </div>
    <div class="footer">
        <a class="button-link" href="registration.php">Ajouter un employeur</a>
    </div>
</body>
    </table>
</div>

</body>
</html>

