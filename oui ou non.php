<!DOCTYPE html>
<html>
<head>
    <title>Tableau d'affichage</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            height: 100vh;
        }
        h2 {
            background-color: #3498db;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .btn-Confirmer, .btn-Refusée {
            padding: 6px 12px;
            margin: 2px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .btn-Confirmer {
            background-color: #5cb85c;
            color: white;
        }
        .btn-Refusée {
            background-color: #d9534f;
            color: white;
        }
        .btn-Confirmer:hover, .btn-Refusée:hover {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
        <h2>Tableau d'affichage</h2>
<table>
    <tr>  
        <th>Nom</th>
        <th>Email</th>
        <th>Produit</th>
        <th>Quantité</th>
        <th>Taille</th>
        <th>Action</th>
    </tr>
    <?php
    // Exemple de données
    $donnees = array(
        array("Alice", "alice@example.com", "gants", 2, "M"),
        array("Bob", "bob@example.com", "tabliets", 1, "L"),
        array("Charlie", "charlie@example.com", "sabot", 3, "42")
    );
    

    foreach ($donnees as $row) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "<td>" . $row[4] . "</td>";
        echo '<td class="btn-container"><button class="btn-Confirmer">Confirmer</button><button class="btn-Refusée">Refusée</button></td>';
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
           

