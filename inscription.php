<?php 
    require_once('header.php');
    require_once('fonction.php');

    // Todo : Validation du formulaire d'inscription //
    if (isset($_POST['action']) && $_POST['action'] == "register"){
        // Validation de l'inscription
        if(isset($_POST['email']) && !empty($_POST['email'])){
            $form_email = $_POST['email'];
        }
        var_dump($form_email);
    }
?>
<form  method="post">
    <label for="id_mail">Email :</label>
        <input type="hidden" name="action" value="register">
    <input type="email" id="id_email" name="email"/>
    <label for="id_password">Mot de passe :</label>
    <input type="password" id="id_password" name="passeword"/>
    <label for="id_confirmpassword">Confirmer votre mot de passe :</label>
    <input type="passeword" id="id_confirmpassword" name="confirmpassword"/>
    <button type="submit">Enregistrer</button>
</form>

</body>
</html>