<?php
$lang = $_GET['lang'] ?? 'pt';
$page = $_GET['page'] ?? 1;
$itemsPerPage = 9;

include 'data/projetos.php';
include 'includes/header.php';

// Calcula a paginação
$totalProjetos = count($projetos);
$totalPages = ceil($totalProjetos / $itemsPerPage);
$page = max(1, min($page, $totalPages));
$startIndex = ($page - 1) * $itemsPerPage;
$projetosPagina = array_slice($projetos, $startIndex, $itemsPerPage);
?>

<!-- Hero da Página de Projetos -->
<section class="projects-page-hero">
  <div class="container">
    <div class="row align-items-center min-vh-50">
      <div class="col-lg-8">
        <h1 class="page-title" data-animate="fade-up" data-i18n="projects.allProjects">
          Todos os Projetos
        </h1>
        <p class="page-subtitle" data-animate="fade-up" data-delay="0.1" data-i18n="projects.exploreCollection">
          Explore minha coleção completa de projetos desenvolvidos
        </p>
        <div class="projects-stats" data-animate="fade-up" data-delay="0.2">
          <span class="stat-item">
            <span class="stat-number"><?= $totalProjetos ?></span>
            <span class="stat-label" data-i18n="projects.projects">Projetos</span>
          </span>
        </div>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a href="index.php<?= $lang !== 'pt' ? '?lang=' . $lang : '' ?>#projetos" class="btn-back-to-home" data-animate="fade-up" data-delay="0.3" data-i18n="projects.backHome">
          ← Voltar ao Início
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Filtros -->
<section class="section-padding">
  <div class="container">
    <div class="projects-filters mb-5">
      <div class="filter-tags">
        <button class="filter-tag active" data-filter="all" data-i18n="projects.filters.all">
          Todos
        </button>
        <button class="filter-tag" data-filter="web" data-i18n="projects.filters.web">
          Web
        </button>
        <button class="filter-tag" data-filter="mobile" data-i18n="projects.filters.mobile">
          Mobile
        </button>
        <button class="filter-tag" data-filter="design" data-i18n="projects.filters.design">
          Design
        </button>
        <button class="filter-tag" data-filter="fullstack" data-i18n="projects.filters.fullstack">
          Full Stack
        </button>
      </div>
      
      <div class="projects-search">
        <input type="text" 
               class="search-input" 
               placeholder="Buscar projetos..."
               id="projectsSearch"
               data-i18n-placeholder="projects.search">
      </div>
    </div>

    <!-- Grid de Projetos -->
    <div class="row" id="projectsGrid">
      <?php foreach ($projetosPagina as $p): ?>
        <div class="col-lg-4 col-md-6 mb-4 project-item" 
             data-category="<?= strtolower($p['categoria'] ?? 'web') ?>"
             data-title="<?= strtolower($p['titulo'][$lang]) ?>">
          <div class="project-card-wrapper" data-animate="fade-up">
            <a href="projeto.php?slug=<?= $p['slug'] ?>&lang=<?= $lang ?>" class="project-card">
              <div class="project-image-container">
                <img src="<?= $p['imagem'] ?>" alt="<?= $p['titulo'][$lang] ?>" class="project-image">
                <div class="project-overlay">
                  <span class="view-project-btn"><?= $lang === 'pt' ? 'Ver projeto' : 'View Project' ?> →</span>
                </div>
                <div class="project-badge"><?= $p['categoria'] ?? 'Web' ?></div>
              </div>

              <div class="project-content">
                <div class="project-header">
                  <h3 class="project-titleIndex text-white"><?= $p['titulo'][$lang] ?></h3>
                  <div class="project-year"><?= $p['ano'] ?? '2024' ?></div>
                </div>
                
                <p class="project-description"><?= $p['descricao_curta'][$lang] ?></p>
                
                <div class="project-tech-stack">
                  <?php 
                  if (isset($p['stack']) && !empty($p['stack'])) {
                    $techs = is_array($p['stack']) ? $p['stack'] : explode(',', $p['stack']);
                    foreach ($techs as $tech): 
                      if (trim($tech) !== ''): ?>
                        <span class="tech-tag"><?= trim($tech) ?></span>
                      <?php endif;
                    endforeach; 
                  }
                  ?>
                </div>
                
                <div class="project-footer">
                  <div class="project-links">
                    <?php if (isset($p['link_live']) && !empty($p['link_live'])): ?>
                      <a href="<?= $p['link_live'] ?>" target="_blank" class="project-link" title="<?= $lang === 'pt' ? 'Ver ao vivo' : 'View Live' ?>">
                        🌐
                      </a>
                    <?php endif; ?>
                    <?php if (isset($p['link_repo']) && !empty($p['link_repo'])): ?>
                      <a href="<?= $p['link_repo'] ?>" target="_blank" class="project-link" title="<?= $lang === 'pt' ? 'Código fonte' : 'Source Code' ?>">
                        📂
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Paginação -->
    <?php if ($totalPages > 1): ?>
      <nav class="projects-pagination" aria-label="Page navigation">
        <ul class="pagination justify-content-center">
          <?php if ($page > 1): ?>
            <li class="page-item">
              <a class="page-link" href="projetos.php?lang=<?= $lang ?>&page=<?= $page - 1 ?>" data-i18n="projects.previous">
                ← Anterior
              </a>
            </li>
          <?php endif; ?>
          
          <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= $i == $page ? 'active' : '' ?>">
              <a class="page-link" href="projetos.php?lang=<?= $lang ?>&page=<?= $i ?>"><?= $i ?></a>
            </li>
          <?php endfor; ?>
          
          <?php if ($page < $totalPages): ?>
            <li class="page-item">
              <a class="page-link" href="projetos.php?lang=<?= $lang ?>&page=<?= $page + 1 ?>" data-i18n="projects.next">
                Próxima →
              </a>
            </li>
          <?php endif; ?>
        </ul>
        
        <div class="pagination-info text-center mt-3">
          <span class="text-muted">
            <span data-i18n="projects.page">Página</span> <?= $page ?> <span data-i18n="projects.of">de</span> <?= $totalPages ?>
            (<span data-i18n="projects.showing">Mostrando</span> <?= count($projetosPagina) ?> <span data-i18n="projects.projects">projetos</span>)
          </span>
        </div>
      </nav>
    <?php endif; ?>
  </div>
</section>

<style>
/* Estilos para a página de projetos */
.projects-page-hero {
  padding: 120px 0 80px;
  background: linear-gradient(135deg, var(--bg-alt) 0%, var(--bg-main) 100%);
  position: relative;
  overflow: hidden;
}

.projects-page-hero::before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 500px;
  height: 500px;
  background: radial-gradient(circle, var(--accent-glow) 0%, transparent 70%);
  filter: blur(80px);
  opacity: 0.3;
}

.min-vh-50 {
  min-height: 50vh;
}

.page-title {
  font-size: clamp(2.5rem, 5vw, 4rem);
  font-weight: 800;
  line-height: 1.1;
  margin-bottom: 1.5rem;
  background: linear-gradient(to right, var(--text-main), var(--accent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.page-subtitle {
  font-size: 1.25rem;
  color: var(--text-muted);
  line-height: 1.8;
  max-width: 600px;
  margin-bottom: 2rem;
}

.projects-stats {
  display: flex;
  gap: 2rem;
  margin-top: 2rem;
}

.stat-item {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  background: var(--gradient-primary);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  line-height: 1;
}

.stat-label {
  font-size: 0.9rem;
  color: var(--text-muted);
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: 0.5rem;
}

.btn-back-to-home {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  background: transparent;
  color: var(--text-main);
  padding: 1rem 2rem;
  border-radius: var(--border-radius);
  text-decoration: none;
  font-weight: 600;
  border: 2px solid rgba(255, 255, 255, 0.2);
  transition: var(--transition-smooth);
}

.btn-back-to-home:hover {
  border-color: var(--accent);
  background: var(--accent-soft);
  color: var(--accent);
  transform: translateY(-3px);
}

/* Filtros */
.projects-filters {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 1.5rem;
  padding: 1.5rem;
  background: var(--bg-card);
  border-radius: var(--border-radius);
  border: 1px solid rgba(255, 255, 255, 0.05);
}

.filter-tags {
  display: flex;
  gap: 0.5rem;
  flex-wrap: wrap;
}

.filter-tag {
  background: rgba(255, 255, 255, 0.05);
  color: var(--text-muted);
  padding: 0.5rem 1.25rem;
  border-radius: 50px;
  border: 1px solid rgba(255, 255, 255, 0.1);
  font-size: 0.9rem;
  font-weight: 500;
  cursor: pointer;
  transition: var(--transition-fast);
}

.filter-tag:hover {
  background: rgba(124, 58, 237, 0.1);
  color: var(--accent);
  border-color: var(--accent);
}

.filter-tag.active {
  background: var(--gradient-primary);
  color: white;
  border-color: transparent;
}

.projects-search {
  flex: 1;
  max-width: 300px;
}

.search-input {
  width: 100%;
  padding: 0.75rem 1.25rem;
  background: var(--bg-alt);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: var(--border-radius);
  color: var(--text-main);
  font-size: 0.95rem;
  transition: var(--transition-fast);
}

.search-input:focus {
  outline: none;
  border-color: var(--accent);
  box-shadow: 0 0 0 3px var(--accent-glow);
}

/* Botão Ver Todos */
.btn-view-all-projects {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  background: var(--gradient-primary);
  color: white;
  padding: 1rem 2.5rem;
  border-radius: var(--border-radius);
  text-decoration: none;
  font-weight: 600;
  transition: var(--transition-smooth);
  border: none;
  cursor: pointer;
  position: relative;
  overflow: hidden;
}

.btn-view-all-projects::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: left 0.5s ease;
}

.btn-view-all-projects:hover::before {
  left: 100%;
}

.btn-view-all-projects:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-accent);
}

.btn-text {
  position: relative;
  z-index: 1;
}

.btn-icon {
  font-size: 1.25rem;
  position: relative;
  z-index: 1;
  transition: transform 0.3s ease;
}

.btn-view-all-projects:hover .btn-icon {
  transform: translateX(5px);
}

/* Paginação */
.projects-pagination {
  margin-top: 4rem;
}

.pagination {
  gap: 0.5rem;
}

.page-link {
  background: var(--bg-card);
  border: 1px solid rgba(255, 255, 255, 0.05);
  color: var(--text-muted);
  padding: 0.75rem 1.25rem;
  border-radius: var(--border-radius) !important;
  transition: var(--transition-fast);
  text-decoration: none;
}

.page-link:hover {
  background: var(--accent-soft);
  color: var(--accent);
  border-color: var(--accent);
}

.page-item.active .page-link {
  background: var(--gradient-primary);
  color: white;
  border-color: transparent;
}

.pagination-info {
  font-size: 0.9rem;
}

/* Animações para filtros */
.project-item {
  transition: all 0.3s ease;
}

.project-item.hidden {
  opacity: 0;
  transform: scale(0.8);
  height: 0;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

/* Responsividade */
@media (max-width: 991px) {
  .projects-page-hero {
    padding: 100px 0 60px;
  }
  
  .page-title {
    font-size: clamp(2rem, 4vw, 3rem);
  }
  
  .projects-filters {
    flex-direction: column;
    align-items: stretch;
  }
  
  .projects-search {
    max-width: 100%;
  }
}

@media (max-width: 768px) {
  .projects-stats {
    flex-direction: column;
    gap: 1.5rem;
  }
  
  .stat-item {
    align-items: center;
  }
}

@media (max-width: 576px) {
  .filter-tags {
    justify-content: center;
  }
  
  .page-link {
    padding: 0.5rem 0.75rem;
    font-size: 0.9rem;
  }
}
</style>

<script>
// Filtro de projetos
document.addEventListener('DOMContentLoaded', function() {
  // Filtro por categoria
  const filterTags = document.querySelectorAll('.filter-tag');
  const projectItems = document.querySelectorAll('.project-item');
  const searchInput = document.getElementById('projectsSearch');
  
  filterTags.forEach(tag => {
    tag.addEventListener('click', function() {
      // Remove active de todos
      filterTags.forEach(t => t.classList.remove('active'));
      // Adiciona active no clicado
      this.classList.add('active');
      
      const filterValue = this.getAttribute('data-filter');
      
      // Filtra os projetos
      projectItems.forEach(item => {
        if (filterValue === 'all') {
          item.classList.remove('hidden');
        } else {
          const category = item.getAttribute('data-category');
          if (category.includes(filterValue)) {
            item.classList.remove('hidden');
          } else {
            item.classList.add('hidden');
          }
        }
      });
    });
  });
  
  // Busca de projetos
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      const searchTerm = this.value.toLowerCase();
      
      projectItems.forEach(item => {
        const title = item.getAttribute('data-title');
        const description = item.querySelector('.project-description').textContent.toLowerCase();
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
          item.classList.remove('hidden');
        } else {
          item.classList.add('hidden');
        }
      });
    });
  }
  
  // Animações
  const animateElements = document.querySelectorAll('[data-animate]');
  
  function animateOnScroll() {
    animateElements.forEach(el => {
      const rect = el.getBoundingClientRect();
      const isVisible = rect.top <= window.innerHeight * 0.8;
      
      if (isVisible && !el.classList.contains('show')) {
        const delay = el.getAttribute('data-delay') || 0;
        
        setTimeout(() => {
          el.classList.add('show');
        }, parseFloat(delay) * 1000);
      }
    });
  }
  
  animateOnScroll();
  window.addEventListener('scroll', animateOnScroll);
});
</script>

<?php include 'includes/footer.php'; ?>