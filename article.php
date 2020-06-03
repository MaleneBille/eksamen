<?php include 'functions/db.php';?>
<?php include 'functions/login-redirect.php';?>
<?php include 'sections/head.php';?>
<?php include 'sections/header.php';?>

<main>
    <div class="hero">
        <div class="container">
            <h1 class="hero__heading">Opret artikel</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="article">
                    <?php include 'sections/breadcrumb.php';?>

                    <div class="article__content">
                        For at oprette en artikel skal du følge denne guide:
                        <br>
                        <br>1)  Gå til Sitecore content editor
                                - Lederne - Forside - Presse & Nyheder - Debat.
                        <br>
                        <img class="responsive_image" src="images/artikel/opret_artikel2.PNG" alt="step 1">
                        <br>
                        <br>2)  Højreklik på "Debat" og vælg "Article".
                        <br>
                        <img class="responsive_image" src="images/artikel/opret_artikel3.PNG" alt="step 1">
                        <br>
                        <br>3)   Herefter indtaster du artiklens titel i pop-up vinduet.
                        <br>
                        <img class="responsive_image" src="images/artikel/opret_artikel4.PNG" alt="step 1">
                        <br>
                        <br>
                        <br>4)  Din artikel er oprettet, og titlen fremgår to steder på siden.
                        <br>
                        <img class="responsive_image" src="images/artikel/opret_artikel5.PNG" alt="step 1">
                        <br>
                        <br>
                        <br>5)  Scroll ned til navigation og dobbeltklik på de tags du skal bruge. Fjern herefter vingen i Navigation - Show in navigation
                        <br>
                        <img class="responsive_image" src="images/artikel/opret_artikel6.PNG" alt="step 1">
                        <br>
                        <br>
                        <br>6)  Gem artiklen
                        <br>
                        <img class="responsive_image" src="images/artikel/opret_artikel7.PNG" alt="step 1">
                        <br>Du er nu klar til næste step, som er at sætte artiklen ind i experience editoren.
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'sections/footer.php';?>
