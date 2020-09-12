<link rel="stylesheet" href="style.css">


<?php
    session_start();
    $produitEnter = $_POST["produit"];
    $produitSession = $_SESSION["produit"];

    if ($produitEnter == $produitSession) {
?>
        Bonne réponse ! (<?=$produitSession?>)
<?php
    } else {
        echo "Mauvaise réponse. Réponse attendue : " . $produitSession;
    }
?>

</br>
</br>

<?php

include "index.php";

?>