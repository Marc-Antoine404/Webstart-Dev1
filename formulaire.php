<?php
    require_once(__DIR__ . '/header.php');
    require_once(__DIR__ . '/header.php');
    require_once('inc/functions.php');
?>

<pre>
<?php

//var_dump($_POST);
if (isset($_POST['pseudo'])) {
    echo htmlentities($_POST['pseudo']);
}

echo __LINE__;

?>
</pre>

<form method="POST">
    <select name="civilite">
        <option value="Madame">Madame</option>
        <option value="Monsieur">Monsieur</option>
    </select>
    <input type="text" name="pseudo" value="<?php echo isset($_POST['pseudo']) ? htmlentities($_POST['pseudo']) : ''; ?>"/>
    <textarea name="contenu"></textarea>
    <input type="email" name="email" />
    <button type="submit">Envoyer</button> // Bouton pour envoyer le formulaire
</form>

<?php
    $array = ['un', 'deux', 'trois', 'quatre'];
    while ($i++ < count($array)) {
        if (!($i % 2)) { // évite les membres impairs
            continue;
        }
        echo $array[$i]; // Affichera : deux quatre
    }

    $mon_menu = array('menu1', 'menu2');
    // Exécute la fonction utilisateur
    echo '<ul>';
    affiche_menu($mon_menu);
    echo '</ul>';

?>
