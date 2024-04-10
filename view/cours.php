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
        <h1 class="text-center m-3">Nos Cours</h1>
        <div class="container">
            <div class="card mb-3">
                <img src="../ressources/cours/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Couture pour débutants</h5>
                    <p class="card-text">Couture pour débutants : pour apprendre les techniques de base, telles que l’utilisation de la
                        machine à coudre, la réalisation d’ourlets, la pose de fermeture éclair, de boutons, etc. Le
                        cours est tenu par Michelle Legrand, une couturière professionnelle.</p>
                    <p class="card-text"><small class="text-body-secondary">Il est structuré sur 4
                            semaines, avec des cours en ligne d’une heure par semaine. </small></p>
                    <?php if (estConnecte()) { ?>
                        <a href="#" class="btn btn-primary">s'inscrire à ce cours</a>
                    <?php } ?>
                </div>
            </div>
            <div class="card mb-3">
                <img src="../ressources/cours/2.jfif" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Couture avec patrons</h5>
                    <p class="card-text">pour apprendre à utiliser les patrons. Le cours offre des patrons de
                        base pour des modèles de pantalons, jupes et pulls. Il est tenu par Lucas Chardons, un
                        couturier professionnel.</p>
                    <p class="card-text"><small class="text-body-secondary">Il est structuré sur 6 semaines avec des cours en ligne d’une heure
                            par semaine. </small></p>
                    <?php if (estConnecte()) { ?>
                        <a href="#" class="btn btn-primary">s'inscrire à ce cours</a>
                    <?php } ?>
                </div>
            </div>
            <div class="card mb-3">
                <img src="../ressources/cours/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Couture avancée</h5>
                    <p class="card-text">pour apprendre à créer les patrons et à coudre des modèles plus difficiles.
                        Le cours est tenu par Marion Mai, couturière professionnelle qui a travaillé dans la haute
                        couture pendant de nombreuses années.</p>
                    <p class="card-text"><small class="text-body-secondary">Il est structuré sur 10 semaines avec des cours en
                            ligne d’une heure par semaine. </small></p>
                    <?php if (estConnecte()) { ?>
                        <a href="#" class="btn btn-primary">s'inscrire à ce cours</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="text-center mt-3 pt-3">
            <?php if (!estConnecte()) { ?>
                <a href="#" class="btn btn-primary"> Les utilisateurs doivent créer un compte pour pouvoir s’inscrire aux
                    cours</a>
            <?php } ?>
        </div>
    </main>

    <?php include "./footer.php"; ?>

    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>