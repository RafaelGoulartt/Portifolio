<?php
$lang = $_GET['lang'] ?? 'pt';
$slug = $_GET['slug'] ?? '';

include 'data/projetos.php';
include 'includes/header.php';

/* valida slug */
if (!$slug || !isset($projetos[$slug])) {
  echo '<div class="container section-padding">';
  echo '<h2>Projeto não encontrado</h2>';
  echo '<a href="index.php" class="btn btn-outline-secondary mt-3">Voltar</a>';
  echo '</div>';
  include 'includes/footer.php';
  exit;
}

$projeto = $projetos[$slug];
?>

<section class="section-padding project-hero">
  <div class="container">
    <h1><?= $projeto['titulo'][$lang] ?></h1>
    <p class="lead mt-3"><?= $projeto['descricao_curta'][$lang] ?></p>
  </div>
</section>

<section class="section-padding">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-6 mb-4">
        <img src="<?= $projeto['imagem'] ?>" class="img-fluid rounded" alt="">
      </div>

      <div class="col-lg-6">
        <h3><?= $lang === 'pt' ? 'Sobre o projeto' : 'About the project' ?></h3>

        <p class="mt-3"><?= $projeto['descricao_longa'][$lang] ?></p>

        <p class="mt-3">
          <strong>Stack:</strong> <?= $projeto['stack'] ?>
        </p>

        <a href="<?= $baseUrl ?>" class="btn btn-outline-secondary mt-4">
          ← <?= $lang === 'pt' ? 'Voltar' : 'Back' ?>
        </a>

      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
