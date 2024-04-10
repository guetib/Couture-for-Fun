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

    <main class="mx-auto p-2 mt-3">
        <h1 class="text-center m-3">Contact</h1>

        <div class="mb-5 ">
            <h4 class="mb-3">Coordonnées</h4>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <p class="m-0 fw-bold">Téléphone:</p>
                    <p class="m-0">+3366737588</p>
                </div>
                <div class="col-md-6">
                    <p class="m-0 fw-bold">Email:</p>
                    <p class="m-0"><a href="mailto:coutureforfun@yahoo.com" class="text-decoration-none">coutureforfun@yahoo.com</a></p>
                </div>
            </div>
        </div>


        <h2 class="text-center m-3 ">Envoyer nous un message</h2>
        <form method="post" action="contactControl.php" name="contactForm" onSubmit="return checkForm();">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" placeholder="Votre message ici" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </main>


    <?php include "./footer.php"; ?>

    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>