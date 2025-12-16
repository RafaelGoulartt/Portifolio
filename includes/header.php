<?php
require_once __DIR__ . '/config.php';

$paginaAtual = basename($_SERVER['SCRIPT_NAME']);
$isHome = ($paginaAtual === 'index.php');
?>

<!DOCTYPE html>
<html lang="pt-br" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <title>Rafael | Desenvolvedor Full Stack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Desenvolvedor Web Full Stack especializado em PHP, ASP Classic e SQL Server.">
  
  <!-- Open Graph -->
  <meta property="og:title" content="Rafael | Desenvolvedor Full Stack">
  <meta property="og:description" content="Portfólio de desenvolvedor web especializado em soluções modernas e eficientes.">
  <meta property="og:type" content="website">
  
  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/Portifolio/assets/img/favicon.svg">
  
  <!-- Fonts & Styles -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="/Portifolio/assets/css/style.css">
  
  <!-- Preload -->
  <link rel="preload" href="/Portifolio/assets/js/main.js" as="script">
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-dark custom-navbar">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= BASE_URL ?>">RAFAEL GOULART</span></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <?php if ($isHome): ?>
          <li class="nav-item"><a class="nav-link" href="#hero" data-i18n="nav.home">Início</a></li>
          <li class="nav-item"><a class="nav-link" href="#sobre" data-i18n="nav.about">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#skills" data-i18n="nav.skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link" href="#projetos" data-i18n="nav.projects">Projetos</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato" data-i18n="nav.contact">Contato</a></li>
        <?php endif; ?>

        <li class="nav-item d-flex align-items-center ms-lg-3 mt-2 mt-lg-0">
          <div class="btn-group" role="group">
            <button id="themeToggle" class="btn btn-sm btn-outline-light">
              <i class="bi bi-moon-stars"></i>
            </button>
            <button id="langToggle" class="btn btn-sm btn-outline-light">
              EN
            </button>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>