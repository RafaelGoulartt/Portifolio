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

<!-- Hero Section do Projeto -->
<section class="project-detail-hero">
  <div class="container">
    <div class="row align-items-center min-vh-60">
      <div class="col-lg-8">
        <div class="hero-content">
          <div class="project-meta mb-4">
            <span class="project-category"><?= $projeto['categoria'] ?? 'Web Development' ?></span>
            <span class="project-yearIndex"><?= $projeto['ano'] ?? '2024' ?></span>
          </div>
          
          <h1 class="project-titlePage" data-animate="fade-up">
            <?= $projeto['titulo'][$lang] ?>
          </h1>
          
          <p class="project-subtitle" data-animate="fade-up" data-delay="0.1">
            <?= $projeto['descricao_curta'][$lang] ?>
          </p>
          
          <div class="project-tags mt-4" data-animate="fade-up" data-delay="0.2">
            <?php 
            if (isset($projeto['stack'])) {
              $techs = is_array($projeto['stack']) ? $projeto['stack'] : explode('·', $projeto['stack']);
              foreach ($techs as $tech):
                if (trim($tech) !== ''): ?>
                  <span class="project-tag"><?= trim($tech) ?></span>
                <?php endif;
              endforeach;
            }
            ?>
          </div>
        </div>
      </div>
      
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <div class="project-actions" data-animate="fade-up" data-delay="0.3">
          <?php if (isset($projeto['link_live']) && $projeto['link_live'] != '#'): ?>
            <a href="<?= $projeto['link_live'] ?>" target="_blank" class="btn-project-action btn-live">
              <span class="action-icon">🌐</span>
              <span class="action-text"><?= $lang === 'pt' ? 'Ver Projeto' : 'View Project' ?></span>
            </a>
          <?php endif; ?>
          
          <?php if (isset($projeto['link_repo']) && $projeto['link_repo'] != '#'): ?>
            <a href="<?= $projeto['link_repo'] ?>" target="_blank" class="btn-project-action btn-repo">
              <span class="action-icon">📂</span>
              <span class="action-text"><?= $lang === 'pt' ? 'Código Fonte' : 'Source Code' ?></span>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Background Gradient -->
  <div class="hero-gradient"></div>
</section>

<!-- Banner do Projeto -->
<section class="project-banner">
  <div class="container">
    <div class="project-banner-image" data-animate="fade-up">
      <img 
        src="<?= $projeto['imagemProject'] ?? $projeto['imagem'] ?>" 
        alt="<?= $projeto['titulo'][$lang] ?>" 
        class="img-fluid"
        onerror="this.src='https://images.unsplash.com/photo-1551650975-87deedd944c3?w=1200&auto=format&fit=crop'"
      >
    </div>
  </div>
</section>

<!-- Detalhes do Projeto -->
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="project-content-card">
          <h2 class="section-heading">
            <span class="heading-number">01</span>
            <?= $lang === 'pt' ? 'Sobre o Projeto' : 'About the Project' ?>
          </h2>
          
          <div class="project-description">
            <?= $projeto['descricao_longa'][$lang] ?>
          </div>
          
          <?php if (isset($projeto['features']) && !empty($projeto['features'])): ?>
            <div class="project-features mt-5">
              <h3 class="features-title">
                <span class="heading-number">02</span>
                <?= $lang === 'pt' ? 'Funcionalidades' : 'Features' ?>
              </h3>
              
              <div class="features-grid">
                <?php 
                $features = is_array($projeto['features']) ? $projeto['features'][$lang] : explode(',', $projeto['features']);
                foreach ($features as $feature):
                  if (trim($feature) !== ''): ?>
                    <div class="feature-item">
                      <div class="feature-icon">✓</div>
                      <span class="feature-text"><?= trim($feature) ?></span>
                    </div>
                  <?php endif;
                endforeach;
                ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="project-sidebar">
          <!-- Detalhes Técnicos -->
          <div class="sidebar-card">
            <h3 class="sidebar-title">
              <span class="title-icon">⚙️</span>
              <?= $lang === 'pt' ? 'Detalhes Técnicos' : 'Technical Details' ?>
            </h3>
            
            <div class="sidebar-details">
              <div class="detail-item">
                <span class="detail-label"><?= $lang === 'pt' ? 'Categoria' : 'Category' ?></span>
                <span class="detail-value"><?= $projeto['categoria'] ?? 'Web' ?></span>
              </div>
              
              <div class="detail-item">
                <span class="detail-label"><?= $lang === 'pt' ? 'Ano' : 'Year' ?></span>
                <span class="detail-value"><?= $projeto['ano'] ?? '2024' ?></span>
              </div>
              
              <div class="detail-item">
                <span class="detail-label"><?= $lang === 'pt' ? 'Status' : 'Status' ?></span>
                <span class="detail-value status-completed"><?= $lang === 'pt' ? 'Concluído' : 'Completed' ?></span>
              </div>            
            </div>
          </div>        
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>