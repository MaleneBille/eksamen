<?php include 'functions/db.php';?>
<?php include 'functions/login-redirect.php';?>
<?php include 'sections/head.php';?>
<?php include 'sections/header.php';?>

<main>
    <div class="hero">
        <div class="container">
            <h1 class="hero__heading">Twitter</h1>
            <div class="hero__content">
                <p>Sådan opretter du et link til Twitter.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="article">
                <?php include 'sections/breadcrumb.php';?>
                
                    <div class="article__content">
                        <p class="article__headline">For at linke et billede til Twitter skal du:</p>
                        <p class="article__list">
                        <br>1)	Gå til Experience-editoren i Sitecore
                        <br><br>2)	Under "Home"-fanen er der en knap, der hedder "Page properties", som du skal klikke på
                        <br><br>3)	Du skal scrolle forbi "Navigation", så kommer der en overskrift, der hedder "External scripts" (her burde det første felt hedde ”Head script”)</li>
                        <br><br>4)	Du tilføjer én af følgende koder til feltet "Head script" for den enkelte side:
                        </p>
                        <br>
                        <p class="article__names">Svend Askær</p>
                        <script type="text/plain" class="language-markup">
                        <meta name="twitter:card" content="summary_large_image"><meta name="twitter:image" content="https://www.lederne.dk/-/media/images/some%20billeder/sa-some-1200px.jpg">
                        </script>
                        <br>
                        <p class="article__names">Niklas Praefke</p>
                        <script type="text/plain" class="language-markup">
                        <meta name="twitter:card" content="summary_large_image"><meta name="twitter:image" content=" https://www.lederne.dk/-/media/images/presse/some_niklas.jpg">
                        </script>
                        <br>
                        <p class="article__names">Christina Laugesen</p>
                        <script type="text/plain" class="language-markup">
                        <meta name="twitter:card" content="summary_large_image"><meta name="twitter:image" content=" https://www.lederne.dk/-/media/images/presse/some_christina.jpg">
                        </script>
                        <br>
                        <p class="article__names">Mette Skak-Nielsen</p>
                        <script type="text/plain" class="language-markup">
                        <meta name="twitter:card" content="summary_large_image"><meta name="twitter:image" content=" https://www.lederne.dk/-/media/images/presse/some_mette.jpg">
                        </script>
                        <br>
                        <p class="article__names">Nanna Simone Jensen</p>
                        <script type="text/plain" class="language-markup">
                        <meta name="twitter:card" content="summary_large_image"><meta name="twitter:image" content=" https://www.lederne.dk/-/media/images/presse/some_nanna.jpg">
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'sections/footer.php';?>