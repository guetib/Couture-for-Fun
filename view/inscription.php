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
    <?php include "./header.php"; ?>

    <main class="mx-auto p-2 mt-3" style="width: 80%;">
        <h1>Inscription</h1>

        <?php
        // confirmer l'inscription
        if (isset($_SESSION['inscription_message'])) {
            echo "<h2 style='color: green'>" . $_SESSION['inscription_message'] . "</h2>";
            unset($_SESSION['inscription_message']);
        }
        ?>

        <form method="post" action="addclient.php" name="addClientForm" onSubmit="return checkForm();">
            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="radio" name="genre" id="flexRadioDefault1" value="Mr">
                <label class="form-check-label" for="flexRadioDefault1">
                    Mr
                </label>
            </div>
            <div class="form-check form-check-inline mb-3">
                <input class="form-check-input" type="radio" name="genre" id="flexRadioDefault2" value="Mme" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Mme
                </label>
            </div>
            <div class="mb-3">
                <label for="firstName" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
                <span class="error" id="firstNameError"></span>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nom</label>
                <input type="text" class="form-control" id="name" name="lastName">
                <span class="error" id="nameError"></span>
            </div>
            <div class="mb-3">
                <label for="phoneNumber" class="form-label">Téléphone</label>
                <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber">
                <span class="error" id="phoneNumberError"></span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                <span class="error" id="emailError"></span>
            </div>
            <div class="mb-3 ">
                <label for="inputPassword5" class="form-label">Mot de passe</label>
                <input type="password" id="inputPassword5" class="form-control" name="password" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Votre mot de passe doit comporter 8 à 20 caractères, contenir des lettres et des chiffres, et ne doit pas contenir d'espaces, de caractères spéciaux ou d'emoji.
                </div>
            </div>
            <div class="mb-3">
                <label for="inputPassword6" class="form-label">Répéter le mot de passe</label>
                <input type="password" id="inputPassword6" class="form-control" name="repeatPassword">
                <span class="error" id="repeatPasswordError"></span>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Adresse</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                <span class="error" id="addressError"></span>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </main>

    <?php include "./footer.php"; ?>

    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>