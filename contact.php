<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto&family=Roboto+Serif:opsz,wght@8..144,100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7a4c34e63c.js" crossorigin="anonymous"></script>
    <meta name="description" content="Visite médicale conducteur de train, aptitude médicale">
    <title>EXMED</title>
</head>
<header id="header-contact">
    <a href="index.html"><i class="fa-solid fa-arrow-left"></i></a>
    <h1> EXMES</h1>
</header>
<main>
    <div id="formulaire">
        <div id="contact-banner">
            <p class="contact-banner-text">Besoin de plus d'information, une demande de devis ou prendre rendez vous avec nous ? <br>
                N'hésitez pas à nous contacter avec ce formulaire ! </p>
        </div>
        <h2>Demande de devis</h2>
        <form class="formulaire" action="mail.php
        " method="post" id="form">
            <div>
                <label for="last-name"> Nom</label><br>
                <input type="text" id="lastName" name="user_name">
            </div>
            <div>
                <label for="first-name"> Prénom</label><br>
                <input type="text" id="firstName" name="user_name">
            </div>
            <div>
                <label for="mail">  E-mail&nbsp;:</label><br>
                <input type="email" id="email" name="user_name">
            </div>
            <div>
                <label for="entreprise"> Entreprise (facultatif)</label><br>
                <input type="text" id="entreprise" name="user_name">
            </div>
            <div>
                <label for="msg"> Message</label><br>
                <textarea name="user_message" id="msg" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" id="btn-send"> Envoyer</button>
        </form>
    </div>
</main>
<footer id="footer">
    <div class="mentions">
        <a href="mentions-legales.html">Mentions légales</a>
        <a href="contact.html">Demande de devis</a>
        <a href="mailto:contact@exmes.com"> contact@exmes.com</a>
    </div>
    <div class="address">
        <p>1 boulevard du Générale de Gaulle <br>
            Paris 75000 <br>
            Téléphone: 01 45 46 47 48</p>
    </div>
<?php
$retour = mail("ines.lmahdi@gmail.com", "Demande de contact", "Message!", "");
if($retour){
    echo "<p> l'email a bien été envoyé ! ";
}
?>