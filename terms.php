<?php
$lang = $_GET['lang'] ?? 'pt';
include 'includes/header.php';
?>

<section class="section-padding">
  <div class="container">
    <h1 class="section-title mb-4" data-i18n="terms.title">Termos de Uso</h1>

    <p data-i18n="terms.intro">
      Ao acessar e utilizar este site, você concorda com os presentes
      Termos de Uso. Caso não concorde com algum ponto, recomenda-se
      não utilizar o site.
    </p>

    <h3 data-i18n="terms.section1.title">1. Objetivo do Site</h3>
    <p data-i18n="terms.section1.content">
      Este site tem como finalidade apresentar o portfólio profissional,
      projetos desenvolvidos e permitir contato para oportunidades
      comerciais e profissionais.
    </p>

    <h3 data-i18n="terms.section2.title">2. Uso Permitido</h3>
    <p data-i18n="terms.section2.content">
      O usuário compromete-se a utilizar este site de forma lícita,
      ética e em conformidade com a legislação vigente.
    </p>

    <h3 data-i18n="terms.section3.title">3. Propriedade Intelectual</h3>
    <p data-i18n="terms.section3.content">
      Todo o conteúdo presente neste site, incluindo textos, imagens,
      códigos-fonte, layout e identidade visual, é de propriedade de
      <strong>Rafael Goulart</strong>, salvo quando indicado o contrário.
    </p>

    <p data-i18n="terms.section3.content2">
      É proibida a reprodução, distribuição ou modificação de qualquer
      conteúdo sem autorização prévia e expressa.
    </p>

    <h3 data-i18n="terms.section4.title">4. Responsabilidades</h3>
    <p data-i18n="terms.section4.content">
      Não garantimos que o site estará disponível de forma ininterrupta
      ou livre de erros. O uso das informações aqui contidas é de inteira
      responsabilidade do usuário.
    </p>

    <h3 data-i18n="terms.section5.title">5. Links para Terceiros</h3>
    <p data-i18n="terms.section5.content">
      O site pode conter links para sites de terceiros. Não nos
      responsabilizamos pelo conteúdo, políticas ou práticas desses sites.
    </p>

    <h3 data-i18n="terms.section6.title">6. Limitação de Responsabilidade</h3>
    <p data-i18n="terms.section6.content">
      Em nenhuma hipótese o responsável pelo site será responsável por
      danos diretos ou indiretos decorrentes do uso ou da impossibilidade
      de uso deste site.
    </p>

    <h3 data-i18n="terms.section7.title">7. Alterações nos Termos</h3>
    <p data-i18n="terms.section7.content">
      Estes Termos de Uso podem ser modificados a qualquer momento,
      sendo recomendada a consulta periódica.
    </p>

    <h3 data-i18n="terms.section8.title">8. Legislação Aplicável</h3>
    <p data-i18n="terms.section8.content">
      Estes termos são regidos pelas leis da República Federativa do Brasil.
    </p>

    <a href="index.php?lang=<?= $lang ?>" class="btn btn-outline-secondary mt-5" data-i18n="terms.backButton">
      ← Voltar para o site
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>