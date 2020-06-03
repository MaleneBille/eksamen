<?php include 'functions/db.php';?>
<?php
    $output = "";

    if(isset($_POST['submit'])){
        $userName = mysqli_real_escape_string($conn, $_POST['username']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM login WHERE user_name = '$userName' AND pass = '$pass'"; 

        $result = mysqli_query($conn, $sql) or die("Query virker ikke!: " . $sql); 

        if(mysqli_num_rows($result) == 1){
        session_start(); 

        $_SESSION['access'] = "access";

        header("location:index.php");
    
        $output = "Du er logget ind";
        }else{
        $output = "Forkert login"; 
        }
    }
?>
<?php include 'sections/head.php';?>
<?php include 'sections/header.php';?>

<main>
    <div class="hero">
        <div class="container">
            <h1 class="hero__heading">Login</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="article">
                    <form class="login" action="login.php" method="POST">
                        <div class="login__section">
                            <label class="login__label" for="username">Brugernavn</label>
                            <input class="login__input" placeholder="F.eks. Ole" type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="login__section">
                            <label class="login__label" for="password">Password</label>
                            <input class="login__input" placeholder="F.eks. Jensen" placeholder="F.eks. Hansen" type="password" class="form-control" name="password" id="password">
                        </div>
                        <button class="login__button" name="submit" type="submit" id="sendlogin">Login</button>
                        <h3  class="login__output"><?= $output ?></h3>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'sections/footer.php';?>
