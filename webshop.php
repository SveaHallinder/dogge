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
        <link rel="stylesheet"href="gyarb.css">
        <link rel="stylesheet"href="allman.css">
        <link rel="stylesheet"href="webshop.css">
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
            Webshop
        </div>
        <div class="vaticano"> 
                <img src="ring-kors.JPG">
                <img src="vaticano%20text.PNG">
                <img src="ring%20-%20kors%20fingret.JPG">
                <h1> VATICANO </h1>
                <p>Klackringen, gjord av äkta silver, har ett ingraverat kors för att symbolisera Vatikanstaten och den romersk-katolska kyrkan som bär av ikonisk konst och arkitektur.</p>
                <h4>299kr</h4>
            <a href="webshop.php">
                <form action="cart.php" method="post">
                    <input type="hidden" name="id" value="3">
                    <input type="hidden" name="hidden_name" value="Vaticano">
                    <input type="hidden" name="hidden_price" value="299">
                    <input type="hidden" name="quantity" value="1">
                    <button class="button" type="submit" name="AddToCart"><span>KÖP!</span></button>
                </form>
            </a> 
        </div>
        <div class="venezia">
                <img src=ring-orm.JPG>
                <img src="venezia%20text.PNG">
                <img src="ring%20-%20orm%20haand.jpg">
                <h1> VENEZIA </h1>
                <p>Klackringen är gjord av äkta silver och har en ingravering med en orm för att symbolisera den italienska staden Venedigs vackra och slingriga kanaler.</p>
                <h4>299kr</h4>
            <a href="webshop.php">
                <form action="cart.php" method="post">
                    <input type="hidden" name="id" value="1">
                    <input type="hidden" name="hidden_name" value="Venezia">
                    <input type="hidden" name="hidden_price" value="299">
                    <input type="hidden" name="quantity" value="1">
                    <button class="button" type="submit" name="AddToCart"><span>KÖP!</span></button>
                </form>
            </a>
        </div>
        <div class="roma">
                <img src="ring-randig.JPG">
                <img src="roma%20text.PNG">
                <img src="ring%20-%20randig%20hand.jpg">
                <h1> ROMA </h1>
                <p>Silverringen har graveringar av staplade pelare för att symbolisera den italienska huvudstaden Roms eleganta och historiska kolonner.</p>
                <h4>299kr</h4>
            <a href="webshop.php">
                <form action="cart.php" method="post">
                    <input type="hidden" name="id" value="2">
                    <input type="hidden" name="hidden_name" value="Roma">
                    <input type="hidden" name="hidden_price" value="299">
                    <input type="hidden" name="quantity" value="1">
                    <button class="button" type="submit" name="AddToCart"><span>KÖP!</span></button>
                </form>
            </a>
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