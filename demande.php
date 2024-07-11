<!DOCTYPE html>
<html>
<head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
        margin: 0;
        padding: 20px;
    }

    .form-container {
        max-width: 400px;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
        color: #3366cc;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #666;;
    }

    .form-input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-weight: bold;
    }

    .form-button {
        background-color: #3366cc;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
    }

    .form-button:hover {
        background-color: #285ea5;
    }
</style>
</head>
<body>

<div class="form-container">
    <div class="form-title">Formulaire de Demande de Produits</div>
    <form action="traitement_formulaire.php" method="post">
        <div class="form-group">
            <label class="form-label">Produit :</label>
            <select name="produit" class="form-input">
                <option value="tablier">Tablier</option>
                <option value="gants">Gants</option>
                <option value="sabots">Sabots</option>
            </select>
        </div>
        <div class="form-group">
            <label for="quantite" class="form-label">Quantité :</label>
            <input type="number" id="quantite" name="quantite" class="form-input">
        </div>
        <div class="form-group">
            <label for="taille" class="form-label">Taille :</label>
            <input type="text" id="taille" name="taille" class="form-input">
        </div>
        <div class="form-group">
            <label for="etat" class="form-label">État :</label>
            <input type="text" id="etat" name="etat" class="form-input">
        </div>
        <button type="submit" class="form-button">Soumettre</button>
        <p class="mt-3">Pour vous déconnecter, <a href="logout.php">cliquez ici</a>.</p>
</div>

    </form>
</div>

</body>
</html>
