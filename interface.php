<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    if (session_status() != PHP_SESSION_ACTIVE){
        session_start();
        echo "Bonjour dit Marmotte !</br>";
    }

    $n1 = rand(1, $nombreMaxTables);
    $n2 = rand(1, $nombreMaxTables);

    $produit = $n1*$n2;

    $_SESSION["produit"] = $produit;

    echo "Combien font " . $n1 ." * " . $n2 . " ?";
?>

    <form action="check.php" method="post">
    <input type="number" id="produit" name="produit" autofocus>

    </form>

</body>
</html>

<?php
?>