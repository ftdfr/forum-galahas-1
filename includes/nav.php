<?php
    if(session_status() !== PHP_SESSION_ACTIVE) session_start();
?>
<nav>
    <li class="items"><a class="menu-links" href="#">News</a></li>
    <li class="items"><a class="menu-links" href="subject.php">Sujets</a></li>
    <li class="items"><a class="menu-links" href="#">Contact</a></li>

    <?php if(array_key_exists('email', $_SESSION)) {?>

        <li class="items"><a class="menu-links" href="#">S'inscrire</a></li>
        <li class="items"><a class="menu-links" href="#">Se connecter</a></li>

    <?php } else { ?>
        
        <li class="items"><a class="menu-links" href="#">Se déconnecter</a></li>
        <li class="items"><a class="menu-links" href="#">Profil</a></li>
        <li class="items"><a class="menu-links" href="#">Messages</a></li>
        <img class="logo" src="Pictures/utilisateur.jpeg">

    <?php } ?>
</nav>


