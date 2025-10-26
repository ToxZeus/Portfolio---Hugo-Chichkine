<?php
// Script to generate static version of the portfolio

require_once __DIR__ . '/../app/bootstrap.php';

function generateStaticSite() {
    // Ensure output directory exists (public/)
    $outputDir = __DIR__;
    if (!file_exists($outputDir)) {
        mkdir($outputDir, 0777, true);
    }

    // Generate both language versions
    generateLanguageVersion('fr', $outputDir);
    generateLanguageVersion('en', $outputDir);

    // Copy assets
    copyAssets($outputDir);
}

function generateLanguageVersion($lang, $outputDir) {
    $_SESSION['lang'] = $lang;
    
    // Create language-specific directory
    $langDir = $outputDir . ($lang === 'fr' ? '' : "/$lang");
    if (!file_exists($langDir)) {
        mkdir($langDir, 0777, true);
    }

    // Capture the output of index.php
    // Simulate minimal web server vars so Router works in CLI
    $_SERVER['REQUEST_METHOD'] = 'GET';
    $_SERVER['REQUEST_URI'] = '/';
    ob_start();
    include __DIR__ . '/index.php';
    $content = ob_get_clean();

    // Save the content
    $outputFile = $langDir . '/index.html';
    file_put_contents($outputFile, $content);
}

function copyAssets($outputDir) {
    $assetsDir = __DIR__ . '/assets';
    $outputAssetsDir = $outputDir . '/assets';

    // Create assets directory if it doesn't exist
    if (!file_exists($outputAssetsDir)) {
        mkdir($outputAssetsDir, 0777, true);
    }

    // Recursive copy of assets
    copyDirectory($assetsDir, $outputAssetsDir);
}

function copyDirectory($source, $destination) {
    if (!is_dir($destination)) {
        mkdir($destination, 0777, true);
    }
    
    $dir = dir($source);
    while (false !== ($entry = $dir->read())) {
        if ($entry == '.' || $entry == '..') {
            continue;
        }
        
        $sourcePath = $source . '/' . $entry;
        $destPath = $destination . '/' . $entry;
        
        if (is_dir($sourcePath)) {
            copyDirectory($sourcePath, $destPath);
        } else {
            copy($sourcePath, $destPath);
        }
    }
    $dir->close();
}

// Generate the static site
generateStaticSite();