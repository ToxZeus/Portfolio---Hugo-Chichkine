<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?? 'fr'; ?>">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $title; ?></title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;500;600&display=swap" rel="stylesheet" />
    
    <!-- Custom CSS -->
    <link href="/assets/css/style.css" rel="stylesheet" />
</head>
<body class="lang-<?php echo $_SESSION['lang'] ?? 'fr'; ?>">
    <!-- Header / Hero -->
    <header>
        <button id="langSwitcher" class="lang-switcher" data-current-lang="<?php echo $_SESSION['lang'] ?? 'fr'; ?>">
            <?php echo $_SESSION['lang'] === 'fr' ? 'EN' : 'FR'; ?>
        </button>

        <div class="container">
            <h1>Hugo Chichkine</h1>
            <p>
                <span class="lang-fr">Étudiant en <strong>BUT Informatique</strong> – IUT d'Orsay, Université Paris-Saclay</span>
                <span class="lang-en">Computer Science Undergraduate – IUT d'Orsay, University of Paris-Saclay</span>
            </p>
        </div>

        <?php include 'navigation.php'; ?>
    </header>