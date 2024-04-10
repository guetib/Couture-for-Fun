<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couture for Fun</title>     
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include "./view/header.php"; ?>

    <main>
        <div class="container first-block" id="boutique">
            <!-- PREMIER BLOC -->
            <div class="row">
                <div class="col-lg-4" id="img-about-us">
                    <img src="./ressources/weaver.png" alt="About Us" class="img-fluid" />
                </div>
                <div class="col-lg-8" id="aboutus">
                    <h4> About us </h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
            </div>
        </div>

        <div class="container second-block" id="services">
            <!-- DEUXIEME BLOC -->
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="text-center mb-5"> Our services </h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <!-- Premier élément -->
                    <div class="mb-3">
                        <h6 class="niveau">Couture débutant</h6>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>

                    <!-- Deuxième élément -->
                    <div class="mb-3">
                        <h6 class="niveau">Couture avec patrons</h6>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>

                    <!-- Troisième élément -->
                    <div class="mb-3">
                        <h6 class="niveau">Courture avancée</h6>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
            </div>
        </div>

        <section class="mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4">Avis de nos clients</h3>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                        quisquam eum porro a pariatur veniam.
                    </p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="./ressources/avis/avis.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Maria Smantha</h5>
                    <h6 class="text-primary mb-3">Web Developer</h6>
                    <p class="px-xl-3">
                        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
                        tenetur.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center mb-0">
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="./ressources/avis/avis.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Lisa Cudrow</h5>
                    <h6 class="text-primary mb-3">Graphic Designer</h6>
                    <p class="px-xl-3">
                        <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center mb-0">
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 mb-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="./ressources/avis/avis.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">John Smith</h5>
                    <h6 class="text-primary mb-3">Marketing Specialist</h6>
                    <p class="px-xl-3">
                        <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
                        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
                    </p>
                    <ul class="list-unstyled d-flex justify-content-center mb-0">
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="fas fa-star fa-sm text-warning"></i>
                        </li>
                        <li>
                            <i class="far fa-star fa-sm text-warning"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>


    <?php include "./view/footer.php"; ?>

    <script src="./js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>