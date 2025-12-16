<?php
$lang = $_GET['lang'] ?? 'pt';
include 'includes/header.php';
include 'data/projetos.php';
?>

<!-- HERO MODERNO -->
<section id="hero" class="hero-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6" data-animate="fade-right">
        <div class="hero-intro" data-i18n="hero.intro">Olá, eu sou</div>
        
        <h1 class="hero-title">
          <span data-i18n="hero.name">Rafael</span>
          <br>
          <span data-i18n="hero.role">Desenvolvedor Full Stack</span>
        </h1>
        
        <p class="hero-text" data-i18n="hero.description">
          Especialista em desenvolvimento web com PHP, ASP Classic e SQL Server. 
          Transformo ideias em soluções digitais eficientes e escaláveis.
        </p>
        
        <div class="hero-cta">
          <a href="#projetos" class="btn btn-accent" data-i18n="hero.cta.projects">
            Ver Projetos
          </a>
          <a href="#contato" class="btn btn-outline-light" data-i18n="hero.cta.contact">
            Entrar em Contato
          </a>
        </div>
      </div>
      
      <div class="col-lg-6 mt-5 mt-lg-0" data-animate="fade-left">
        <div class="hero-image-container">
          <!-- Moldura decorativa -->
          <div class="image-frame frame-1"></div>
          <div class="image-frame frame-2"></div>
          <div class="image-frame frame-3"></div>
          
          <!-- Container principal da imagem -->
          <div class="image-wrapper">
            <img src="/Portifolio/assets/img/hero-illustration.jpeg" 
                alt="Desenvolvimento Web" 
                class="hero-main-image">
            
            <!-- Efeito de brilho -->
            <div class="image-glow"></div>
            
            <!-- Badge flutuante -->
            <div class="floating-badge">
              <span class="badge-icon">💻</span>
              <span class="badge-text">Full Stack</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SOBRE -->
<section id="sobre" class="section-padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0" data-animate="fade-right">
        <h2 class="section-title" data-i18n="about.title">Sobre Mim</h2>
        
        <div class="about-content">
          <p data-i18n="about.text1">
            Desenvolvedor com experiência em criar soluções web robustas e escaláveis. 
            Especializado em tecnologias backend como PHP e ASP Classic, com forte 
            conhecimento em bancos de dados SQL Server.
          </p>
          
          <p data-i18n="about.text2">
            Meu foco é entregar código limpo, eficiente e bem documentado, 
            sempre buscando as melhores práticas de desenvolvimento e as 
            tecnologias mais adequadas para cada projeto.
          </p>
          
          <div class="stats">
            <div class="stat-item">
              <div class="stat-number" data-count="3">1+</div>
              <div class="stat-label" data-i18n="about.years">Anos Exp.</div>
            </div>
            <div class="stat-item">
              <div class="stat-number" data-count="20">10+</div>
              <div class="stat-label" data-i18n="about.projects">Projetos</div>
            </div>
            <div class="stat-item">
              <div class="stat-number" data-count="10">6+</div>
              <div class="stat-label" data-i18n="about.clients">Clientes</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-animate="fade-left">
        <div class="skill-highlights">
          <div class="skill-highlight-item p-4 mb-3 rounded-3 bg-dark-alt">
            <h5 class="mb-2" data-i18n="about.specialty.title">Especialização</h5>
            <p class="mb-0" data-i18n="about.specialty.text">
              Backend Development • Database Design • API Integration
            </p>
          </div>
          
          <div class="skill-highlight-item p-4 mb-3 rounded-3 bg-dark-alt">
            <h5 class="mb-2" data-i18n="about.methodology.title">Metodologia</h5>
            <p class="mb-0" data-i18n="about.methodology.text">
              Clean Code • Agile Development • Documentation Focus
            </p>
          </div>
          
          <div class="skill-highlight-item p-4 rounded-3 bg-dark-alt">
            <h5 class="mb-2" data-i18n="about.tools.title">Ferramentas</h5>
            <p class="mb-0" data-i18n="about.tools.text">
              VS Code • Git  • Postman
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills" class="section-padding">
  <div class="container">

    <h2
      class="section-title mb-5"
      data-i18n="skills.title"
      data-animate="fade-up">
    </h2>

    <div class="row justify-content-center">

      <?php
      $skills = [
        [
          'nome' => 'PHP',
          'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg'
        ],
        [
          'nome' => 'ASP Classic',
          'icon' => 'assets/img/skills/asp.svg'
        ],
        [
          'nome' => 'SQL Server',
          'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/microsoftsqlserver/microsoftsqlserver-original.svg'
        ],
        [
          'nome' => 'Bootstrap',
          'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original.svg'
        ],
        [
          'nome' => 'JavaScript',
          'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg'
        ],
        [
          'nome' => 'jQuery',
          'icon' => 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/jquery/jquery-original.svg'
        ]
      ];

      foreach ($skills as $index => $skill): ?>
        <div class="col-6 col-md-4 col-lg-2 mb-4">
          <div
            class="skill-card"
            data-animate="fade-up"
            style="transition-delay: <?= $index * 0.1 ?>s"
          >
            <img src="<?= $skill['icon'] ?>" alt="<?= $skill['nome'] ?>">
            <span class="text-white"><?= $skill['nome'] ?></span>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- PROCESS TIMELINE -->
<section class="section-padding">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title" data-i18n="process.title">Metodologia de Trabalho</h2>
    </div>
    
    <div class="process-timeline">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h3 class="step-title" data-i18n="process.step1.title">Análise & Planejamento</h3>
          <p class="step-description" data-i18n="process.step1.desc">
            Entendimento completo dos requisitos, análise técnica e definição
            da arquitetura ideal para o projeto.
          </p>
        </div>
      </div>
      
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h3 class="step-title" data-i18n="process.step2.title">Desenvolvimento</h3>
          <p class="step-description" data-i18n="process.step2.desc">
            Implementação seguindo boas práticas, clean code e com foco em
            performance e manutenibilidade.
          </p>
        </div>
      </div>
      
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h3 class="step-title" data-i18n="process.step3.title">Testes & Qualidade</h3>
          <p class="step-description" data-i18n="process.step3.desc">
            Testes rigorosos, revisão de código e garantia de qualidade antes
            de cada entrega.
          </p>
        </div>
      </div>
      
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h3 class="step-title" data-i18n="process.step4.title">Entrega & Suporte</h3>
          <p class="step-description" data-i18n="process.step4.desc">
            Implantação controlada, documentação completa e suporte pós-entrega.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="container">
  <div class="cta-section">
    <h2 class="cta-title" data-i18n="cta.title">Pronto para Iniciar seu Projeto?</h2>
    <p class="cta-subtitle" data-i18n="cta.subtitle">
      Vamos transformar suas ideias em soluções digitais eficientes e escaláveis.
    </p>
    <div class="cta-buttons">
      <a href="#contato" class="btn-white" data-i18n="cta.button1">
        Solicitar Orçamento
      </a>
    </div>
  </div>
</section>

<!-- PROJETOS -->
<section id="projetos" class="section-padding bg-dark-alt">
  <div class="container">
    <h2 class="section-title mb-5" data-i18n="projects.title" data-animate="fade-up">
      Meus Projetos
    </h2>

    <div class="row">
      <?php 
      // Limita a exibição a 6 projetos
      $projetos_limitados = array_slice($projetos, 0, 3);
      foreach ($projetos_limitados as $index => $p): 
      ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="project-card-wrapper" data-animate="fade-up">
            <a href="projeto.php?slug=<?= $p['slug'] ?>&lang=<?= $lang ?>" class="project-card">
              <div class="project-image-container">
                <img src="<?= $p['imagemProject'] ?>" alt="<?= $p['titulo'][$lang] ?>" class="project-image">
                <div class="project-overlay">
                  <span class="view-project-btn">Ver projeto →</span>
                </div>
                <div class="project-badge"><?= $p['categoria'] ?? 'Web' ?></div>
              </div>

              <div class="project-content">
                <div class="project-header">
                  <h3 class="project-titleIndex"><?= $p['titulo'][$lang] ?></h3>
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
                      <a href="<?= $p['link_live'] ?>" target="_blank" class="project-link" title="Ver ao vivo">
                        🌐
                      </a>
                    <?php endif; ?>
                    <?php if (isset($p['link_repo']) && !empty($p['link_repo'])): ?>
                      <a href="<?= $p['link_repo'] ?>" target="_blank" class="project-link" title="Código fonte">
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
      <div class="text-center mt-5" data-animate="fade-up">
        <a href="allprojetos.php?lang=<?= $lang ?>" class="btn-view-all-projects">
          <span class="btn-accent"><?= $lang === 'pt' ? 'Ver Todos os Projetos' : 'View All Projects' ?></span>
        </a>
      </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
