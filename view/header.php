<?php
session_start();

function estConnecte()
{
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

function rootPath($depth = 0)
{
    $rootPath = '';
    $directoryDepth = substr_count($_SERVER['PHP_SELF'], '/') - 1;
    $depthAdjustment = $directoryDepth - $depth;
    if ($depthAdjustment > 0) {
        $rootPath = str_repeat('../', $depthAdjustment);
    }
    return $rootPath;
}
?>

<header>
    <nav class="navbar navbar-expand-sm bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?php echo rootPath(1); ?>index.php">
                <img src="<?php echo rootPath(1); ?>ressources/weaver.png" alt="Logo Couture for Fun">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo rootPath(1); ?>index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo rootPath(1); ?>view/cours.php">Cours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Devis personnalisé</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo rootPath(1); ?>view/contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <?php if (estConnecte()) { ?>
                    <a class="nav-link" href="<?php echo rootPath(1); ?>login/logout.php">Déconnexion</a>
                <?php } else { ?>
                    <a class="nav-link" href="<?php echo rootPath(1); ?>login/login.php">Login</a>
                    <span class="nav-separator">/</span>
                    <a class="nav-link" href="<?php echo rootPath(1); ?>view/inscription.php">Register</a>
                <?php } ?>
            </div>
        </div>
    </nav>
</header>