<?php include 'functions/db.php';?>
<?php include 'functions/login-redirect.php';?>
<?php include 'sections/head.php';?>
<?php include 'sections/header.php';?>

<main>
    <div class="hero">
        <div class="container">
            <h1 class="hero__heading">Artikel</h1>
            <div class="hero__content">
                <p>Her finder du guides til alt, der<br>omhandler artikler i Sitecore.<br>Det være sig i debatindlæg, analyser,<br>pressemeddelelser og høringssvar.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="section-navigation">
                    <a class="section-navigation__wrapper" href="article.php">
                        <div class="section-navigation__step">1</div>
                        <div class="section-navigation__content">
                            <h2 class="section-navigation__content__headline">Opret artikel</h2>
                            <p class="section-navigation__content__text">Sådan opretter du en artikel</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="section-navigation">
                    <a class="section-navigation__wrapper" href="#">
                        <div class="section-navigation__step">2</div>
                        <div class="section-navigation__content">
                            <h2 class="section-navigation__content__headline">Indsæt quote <span class="dummy-link">(dummy link)</span></h2>
                            <p class="section-navigation__content__text">Sådan indsætter du quotes</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="section-navigation">
                    <a class="section-navigation__wrapper" href="#">
                        <div class="section-navigation__step">3</div>
                        <div class="section-navigation__content">
                            <h2 class="section-navigation__content__headline">Indsæt kontakt <span class="dummy-link">(dummy link)</span></h2>
                            <p class="section-navigation__content__text">Sådan opretter du en boks til pressekontakt</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'sections/footer.php';?>