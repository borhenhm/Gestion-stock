<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Sélection de Date de Congé</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/jquery-asColorPicker/dist/css/asColorPicker.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <style>
        /* Centrer le contenu */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f6fa;
        }
        .form-container {
            text-align: center;
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            font-size: 18px;
            color: #007bff; /* Couleur bleue */
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            color: white;
            font-size: 14px;
        }
        /* Couleur gris pour les champs "Début" et "Fin" */
        .form-group label[for="start_date"],
        .form-group label[for="end_date"] {
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2 style="font-size: 24px; color: #007bff;">Sélection de Date de Congé</h2>
    <form>
        <div class="form-group mb-2">
            <label for="start_date">Début :</label>
            <input type="date" id="start_date" class="form-control" />
        </div>
        <div class="form-group mb-2">
            <label for="end_date">Fin :</label>
            <input type="date" id="end_date" class="form-control" />
        </div>
        <button class="btn btn-primary mt-2">Sélectionner</button>
    </form>
    
    <p class="mt-3">Pour vous déconnecter, <a href="logout.php">cliquez ici</a>.</p>
</div>

<!-- JavaScript -->
<script src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85" async></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258" crossorigin="anonymous"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-GBZ3SGGX85");
</script>

<!-- Google Tag Manager -->
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
</script>
<!-- End Google Tag Manager -->

</body>
</html>

