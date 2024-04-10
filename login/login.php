<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couture for Fun</title>
    <link rel="stylesheet" href="./../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php include "../view/header.php"; ?>

    <main class="mx-auto p-2 mt-3" style="width: 80%;">
        <h1>Connexion</h1>
        <?php
        if (isset($_SESSION['login_error']))
            echo "<p style='color: red; text-align: center;'>" . $_SESSION['login_error'] . "</p>";
        ?>
        <form method="post" action="loginControl.php" name="loginForm" onSubmit="return checkLoginForm();">

            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <span class="error" id="emailError"></span>
            </div>
            <div class="mb-3 ">
                <label for="inputPassword5" class="form-label">Mot de passe</label>
                <input type="password" id="inputPassword5" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </main>
    <?php include "../view/footer.php"; ?>

    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>