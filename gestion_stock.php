<!DOCTYPE html>
<html>
<head>
    <title>Gestion de Stock</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            text-align: left;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="number"] {
            width: 60px;
        }

        button {
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

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
        if (isset($_POST["submit"])) {
           $ID_Produit= $_POST["ID_Produit"];
           $Nom_Produit = $_POST["Nom_Produit"];
           $Quantité_Restante = $_POST["Quantité_Restante"];
           $Modifier_Quantité = $_POST["Modifier_Quantité"];
           

           $errors = array();
           
           
            
        }else{
            require_once "database.php";
            $sql = "INSERT INTO stock (ID_Produit, Nom_Produit, Quantite_Restante,Modifier_Quantite) VALUES ( ?, ?, ?,  ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
       
           }
          

        
        ?>


    </style>
</head>
<body>
<?php
 $produits = [
    ['id' => 1, 'nom' => 'Gants', 'quantite' => 0],
    ['id' => 2, 'nom' => 'Tabliers', 'quantite' => 0],
    ['id' => 3, 'nom' => 'Sabots', 'quantite' => 0],
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($produits as $index => $produit) {
        $id = $produit['id'];
        if (isset($_POST['quantite'][$id])) {
            $produits[$index]['quantite'] = intval($_POST['quantite'][$id]);
        }
    }
}

    ?>

<div class="container">
    <h1>Gestion de Stock</h1>
    <form method="post">
        <table>
            <thead>
            <tr>
                <th>ID_Produit</th>
                <th>Nom_Produit</th>
                <th>Quantité_Restante</th>
                <th>Modifier_Quantité</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produits as $produit): ?>
                <tr>
                    <td><?php echo $produit['id']; ?></td>
                    <td><?php echo $produit['nom']; ?></td>
                    <td><?php echo $produit['quantite']; ?></td>
                    <td><input type="number" name="quantite[<?php echo $produit['id']; ?>]" value="<?php echo $produit['quantite']; ?>" min="0"></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <button type="submit">Confirmer</button>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </form>
</div>
</body>
</html>
