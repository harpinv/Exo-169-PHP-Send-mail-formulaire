<form method="post" action="index.php">
    <div>
        <label for="mail">Entrer votre adresse mail</label>
        <input type="text" name="mail" id="mail">
    </div>
    <div>
        <label for="objet">Entrer un objet</label>
        <textarea id="objet" name="def_objet"></textarea>
    </div>
    <div>
        <label for="message">Entrer votre message</label>
        <textarea id="message" name="mon_message"></textarea>
    </div>
    <div>
        <input type="submit" name="envoye" value="Envoyer">
    </div>
</form>


<?php
if(isset($_POST['mail']) && isset($_POST['objet']) && isset($_POST['message'])) {
    $to = $_POST['mail'];
    $subject = $_POST['objet'];
    $message = $_POST['message'];

    mail($to, $subject, $message);
}
