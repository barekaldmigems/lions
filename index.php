<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Bliv Medlem</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="./images/logo.jpg" alt="" width="auto" height="48">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Klubben
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Bestyrelse</a></li>
                        <li><a class="dropdown-item" href="#">Medlemmer</a></li>
                        <li><a class="dropdown-item" href="#">Udvalg</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Aktiviteter</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nyheder
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Seneste Nyheder</a></li>
                        <li><a class="dropdown-item" href="#">Lions Magasin</a></li>
                        <li><a class="dropdown-item" href="#">Personalepolitik</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Samarbejdspartnere</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Om Lions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakt Klubben</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="..." aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Søg</button>
            </form>
        </div>
    </div>
</nav>

<img src="./images/pic.png" class="img-fluid" alt="Responsive image">

<div class="signup">
    <div class="text">
        <h1>Bliv Medlem</h1>
        <p>Når du bliver medlem, betaler du et månedligt kontingent på 99 kr, dette beløb vil gå til LIONS Club.
            Alle disse midler går ubeskåret til velgørende formål, det være både til LIONS Danmark og til lokalklubben.
            Når man er fuldgyldig medlem af klubben, deltager man i bestyrelsesmøderne og kan vælge bestyrelsesmedlemmer på generalforsamlingen.</p>
        <h1>Bliv Medhjælper</h1>
        <p>Som medhjælper tilbyder man sin hjælp ved salg af lotteri, tombola og øvrige aktiviteter, der udløser donationer til klubben.
            Samtidig får man tilbudt at blive medlem af vores aktivitetsudvalg, festudvalg o.lign. BEMÆRK at ingen af vores midler går til administration.</p>
        <h1>Ungeudvalg</h1>
        <p>Som en del af LIONS Danmark, har vi et ungeudvalg, for at blive en del af det skal du være under 40 år og have interesse for velgørenhed.
            Det eneste du skal gøre er at melde dig til som medhjælper, så klare vi resten.</p>
    </div>
    <figure class="multi">
        <section class="choice">
            <p><strong>Medlem:</strong> Du kan blive medlem af LIONS CLUB for 99kr. pr. måned</p>
        </section>

        <section class="choice">
            <p><strong>Medhjælper:</strong> Du kan blive medhjælper helt gratis</p>
        </section>

        <section class="choice">
            <p><strong>Ungeudvalg:</strong> Bliv en del af ungeudvalget</p>
        </section>

        <div class="btns">
            <button type="button" class="btn btn-primary">Bekræft</button>
            <button type="button" class="btn btn-secondary">Afvis</button>
        </div>
    </figure>

    <button type="button" class="btn btn-info">BLIV SPONSOR</button>

</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
