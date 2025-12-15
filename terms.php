<?php
$lang = $_GET['lang'] ?? 'pt';
include 'includes/header.php';
?>

<section class="section-padding">
  <div class="container">

    <h1 class="section-title mb-4">Termos de Uso</h1>

    <p class="text-muted">
      Última atualização: <?= date('d/m/Y') ?>
    </p>

    <p>
      Ao acessar e utilizar este site, você concorda com os presentes
      Termos de Uso. Caso não concorde com algum ponto, recomenda-se
      não utilizar o site.
    </p>

    <h3>1. Objetivo do Site</h3>
    <p>
      Este site tem como finalidade apresentar o portfólio profissional,
      projetos desenvolvidos e permitir contato para oportunidades
      comerciais e profissionais.
    </p>

    <h3>2. Uso Permitido</h3>
    <p>
      O usuário compromete-se a utilizar este site de forma lícita,
      ética e em conformidade com a legislação vigente.
    </p>

    <h3>3. Propriedade Intelectual</h3>
    <p>
      Todo o conteúdo presente neste site, incluindo textos, imagens,
      códigos-fonte, layout e identidade visual, é de propriedade de
      <strong>Rafael Goulart</strong>, salvo quando indicado o contrário.
    </p>

    <p>
      É proibida a reprodução, distribuição ou modificação de qualquer
      conteúdo sem autorização prévia e expressa.
    </p>

    <h3>4. Responsabilidades</h3>
    <p>
      Não garantimos que o site estará disponível de forma ininterrupta
      ou livre de erros. O uso das informações aqui contidas é de inteira
      responsabilidade do usuário.
    </p>

    <h3>5. Links para Terceiros</h3>
    <p>
      O site pode conter links para sites de terceiros. Não nos
      responsabilizamos pelo conteúdo, políticas ou práticas desses sites.
    </p>

    <h3>6. Limitação de Responsabilidade</h3>
    <p>
      Em nenhuma hipótese o responsável pelo site será responsável por
      danos diretos ou indiretos decorrentes do uso ou da impossibilidade
      de uso deste site.
    </p>

    <h3>7. Alterações nos Termos</h3>
    <p>
      Estes Termos de Uso podem ser modificados a qualquer momento,
      sendo recomendada a consulta periódica.
    </p>

    <h3>8. Legislação Aplicável</h3>
    <p>
      Estes termos são regidos pelas leis da República Federativa do Brasil.
    </p>

    <a href="<?= BASE_URL ?>" class="btn btn-outline-secondary mt-5">← Voltar para o site</a>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
