<?php if(session_status() !== PHP_SESSION_ACTIVE) session_start();?>
<!-- <?php if(array_key_exists('email', $_SESSION)) {?>
<?php } else { ?>      
<?php } ?> -->

<header>
    <img src="Pictures/logo.png" alt="Logo Galahas's Forum" class="logo">
    <nav>
        <ul class="nav__links">
            <li><a href="">News</a></li>
            <li><a href="">Sujet</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </nav>
    <a><button id="connect-button">Connexion</button></a>
</header>