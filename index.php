<?php include 'functions/db.php';?>
<?php include 'functions/login-redirect.php';?>
<?php include 'sections/head.php';?>
<?php include 'sections/header.php';?>

<main>
    <div class="hero">
        <div class="container">
            <h1 class="hero__heading">Guides</h1>
            <div class="hero__content">
                <p>Her finder du guides til design<br>og struktur i Sitecore.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="section-navigation">
                    <a class="section-navigation__wrapper" href="section.php">
                        <div class="section-navigation__content mt-3">
                            <h2 class="section-navigation__content__headline">Artikel</h2>
                            <p class="section-navigation__content__text">Sådan opretter du en artikel</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="section-navigation">
                    <a class="section-navigation__wrapper" href="#">
                        <div class="section-navigation__content mt-3">
                            <h2 class="section-navigation__content__headline">Billeder <span class="dummy-link">(dummy link)</span></h2>
                            <p class="section-navigation__content__text">Sådan indsætter du billeder<br>i din artikel</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="section-navigation">
                    <a class="section-navigation__wrapper" href="twitter.php">
                        <div class="section-navigation__content mt-3">
                            <h2 class="section-navigation__content__headline">Twitter</h2>
                            <p class="section-navigation__content__text">Sådan opretter du et twitter-link</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'sections/footer.php';?>