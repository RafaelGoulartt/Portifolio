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
        <div class="position-relative floating">
          <div class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary rounded-circle opacity-10 blur"></div>
          <img src="/Portifolio/assets/img/hero-illustration" 
               alt="Desenvolvimento Web" 
               class="img-fluid position-relative">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SOBRE COMPLETO -->
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
              <div class="stat-number" data-count="3">3+</div>
              <div class="stat-label" data-i18n="about.years">Anos Exp.</div>
            </div>
            <div class="stat-item">
              <div class="stat-number" data-count="20">20+</div>
              <div class="stat-label" data-i18n="about.projects">Projetos</div>
            </div>
            <div class="stat-item">
              <div class="stat-number" data-count="10">10+</div>
              <div class="stat-label" data-i18n="about.clients">Clientes</div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-6" data-animate="fade-left">
        <div class="skill-highlights">
          <div class="skill-highlight-item p-4 mb-3 rounded-3 bg-dark-alt">
            <h5 class="mb-2" data-i18n="about.specialty.title">Especialização</h5>
            <p class="mb-0 text-muted" data-i18n="about.specialty.text">
              Backend Development • Database Design • API Integration
            </p>
          </div>
          
          <div class="skill-highlight-item p-4 mb-3 rounded-3 bg-dark-alt">
            <h5 class="mb-2" data-i18n="about.methodology.title">Metodologia</h5>
            <p class="mb-0 text-muted" data-i18n="about.methodology.text">
              Clean Code • Agile Development • Documentation Focus
            </p>
          </div>
          
          <div class="skill-highlight-item p-4 rounded-3 bg-dark-alt">
            <h5 class="mb-2" data-i18n="about.tools.title">Ferramentas</h5>
            <p class="mb-0 text-muted" data-i18n="about.tools.text">
              VS Code • Git • Composer • Docker • Postman
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
          'icon' => 'assets/img/skills/php.svg'
        ],
        [
          'nome' => 'ASP Classic',
          'icon' => 'assets/img/skills/asp.svg'
        ],
        [
          'nome' => 'SQL Server',
          'icon' => 'assets/img/skills/sqlserver.svg'
        ],
        [
          'nome' => 'Bootstrap',
          'icon' => 'assets/img/skills/bootstrap.svg'
        ],
        [
          'nome' => 'JavaScript',
          'icon' => 'assets/img/skills/javascript.svg'
        ],
        [
          'nome' => 'jQuery',
          'icon' => 'assets/img/skills/jquery.svg'
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
            <span><?= $skill['nome'] ?></span>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>


<!-- PROJETOS -->
<section id="projetos" class="section-padding bg-dark-alt">
  <div class="container">

    <h2
      class="section-title mb-4"
      data-i18n="projects.title"
      data-animate="fade-up">
    </h2>

    <div class="row">
      <?php foreach ($projetos as $index => $p): ?>
        <div class="col-md-6">
          <a
            href="projeto/<?= $p['slug'] ?>"
            class="project-card mb-4"
            data-animate="fade-up"
           style="transition-delay: .1s"
          >
            <img
              src="<?= $p['imagem'] ?>"
              alt="<?= $p['titulo'][$lang] ?>"
            >

            <div class="project-info">
              <h5><?= $p['titulo'][$lang] ?></h5>
              <p><?= $p['descricao_curta'][$lang] ?></p>
              <span><?= $p['stack'] ?></span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
