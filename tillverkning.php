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
        <link rel="stylesheet"href=tillverkning.css>
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
            Tillverkning
        </div>
        <div class="tillverkning">
            <h2>Ringarna är designade och tillverkade i Sverige med silver från Norden.</h2> 
            <img src="argento%20-%20svart%20logga%20liggande.PNG">
            <h2>De är designade att vara enkla men klassiska så de passar till alla tillfällen.</h2>
            <img src="alla%20ringarna.jpg">
            <h2> Motiven är inspirerade av Italien och dess städer och tillverkas i Sundsvall.</h2>
            <div class="container">
                <img class="mySlides" src="rom.JPG">
                <img class="mySlides" src="venedig.JPG">
                <img class="mySlides" src="pelare.JPG">
            </div>
            <div class="arrow" style="width:100%">
                <div class="prev" onclick="plusDivs(-1)">&#10094;</div>
                <div class="next" onclick="plusDivs(1)">&#10095;</div>
            </div>
            <div class="dots">
                <span class="dot" onclick="currentDiv(1)"></span>
                <span class="dot" onclick="currentDiv(2)"></span>
                <span class="dot" onclick="currentDiv(3)"></span>
            </div>
        </div>

    <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
        }

            function currentDiv(n) {
            showDivs(slideIndex = n);
        }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
        }
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" w3-white", "");
        }
            x[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " w3-white";
        }
        
    </script>
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