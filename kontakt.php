<?php   
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta lang="sv"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ARGENTO UF</title>
        <link rel="stylesheet"href="kontakt.css">
        <link rel="stylesheet"href="gyarb.css">
        <link rel="stylesheet"href="allman.css">
        <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    </head>
    
    <body>
        <div id="huvudrubrik">
             <a href="index.php">ARGENTO UF</a>
             <a class="cart" href="cart.php"> <img src="cart.PNG"> </a>
        </div>
        <nav>
            <div class="flexbox">   
            <ul id="navbar">
                <li><a href="index.php">Showroom</a></li>
                
            <li class="helflik">
                <a href="webshop.php">Webshop</a>    
                    <ul class="flik">
                        <li><a href="saljtilfallen.php">Säljtillfällen</a></li>
                        <li><a href="storleksguide.php">Storleksguide</a></li>   
                    </ul>
            </li>
                <li><a href="tillverkning.php">Tillverkning</a></li>
                <li><a href="argentouf.php">ARGENTO UF</a></li>
                <li><a href="kontakt.php">Kontakta oss</a></li>
            </ul>
            </div>
        </nav>
        <div class="subrubrik">
            Kontakta oss
        </div>
        <div class="plattformar">
            <p>
                <a href="https://www.facebook.com/argentouf/">
                <img src="Facelogo.png" id="facelogo"></a> 
                <a href="https://www.instagram.com/argento_uf/">
                <img src="instalogo.jpg" id="instalogo"></a>
            <br>
                @argento_uf
            </p>
            <a class="mail" href="https://www.gmail.com/ufargento@gmail.com/" >ufargento@gmail.com</a>
        </div>
        <footer>
            <img src="Argento.closeup.jpg" id="logo">
            <h2>ARGENT<span style="color:silver;font-weight:bold">O</span> UF</h2>
            <a href="kontakt.php">Kontakta oss</a>
            <a href="">Frakt och Retur</a>
            <a href="storleksguide.php">Storleksguide</a>
            <a href="">Integritetspolicy</a>
            <a href="">Användavillkor</a>
        </footer>

    </body>
</html>