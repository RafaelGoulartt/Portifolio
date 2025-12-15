<?php
$lang = $_GET['lang'] ?? 'pt';
include 'includes/header.php';
?>

<section class="section-padding">
  <div class="container">

    <h1 class="section-title mb-4">Política de Privacidade</h1>

    <p class="text-muted">
      Última atualização: <?= date('d/m/Y') ?>
    </p>

    <p>
      A presente Política de Privacidade descreve como os dados pessoais são
      coletados, utilizados, armazenados e protegidos ao acessar e utilizar
      este site, em conformidade com a Lei Geral de Proteção de Dados
      (Lei nº 13.709/2018 – LGPD).
    </p>

    <h3>1. Quem Somos</h3>
    <p>
      Este site é mantido por <strong>Rafael Goulart</strong>, desenvolvedor
      full stack, com o objetivo de apresentar portfólio profissional,
      projetos realizados e formas de contato.
    </p>

    <h3>2. Dados Coletados</h3>
    <p>Podemos coletar os seguintes dados pessoais:</p>
    <ul>
      <li>Nome</li>
      <li>E-mail</li>
      <li>Telefone</li>
      <li>Mensagem enviada através do formulário de contato</li>
      <li>Dados técnicos como IP, navegador e dispositivo (cookies)</li>
    </ul>

    <h3>3. Finalidade do Uso dos Dados</h3>
    <p>
      Os dados coletados são utilizados exclusivamente para:
    </p>
    <ul>
      <li>Entrar em contato com o usuário</li>
      <li>Responder solicitações e propostas comerciais</li>
      <li>Melhorar a experiência do usuário no site</li>
      <li>Cumprir obrigações legais</li>
    </ul>

    <h3>4. Compartilhamento de Dados</h3>
    <p>
      Os dados pessoais não são vendidos, alugados ou compartilhados com
      terceiros, exceto quando exigido por lei ou mediante consentimento
      expresso do titular.
    </p>

    <h3>5. Armazenamento e Segurança</h3>
    <p>
      Adotamos medidas técnicas e organizacionais adequadas para proteger
      os dados pessoais contra acessos não autorizados, perda, alteração
      ou divulgação indevida.
    </p>

    <h3>6. Cookies</h3>
    <p>
      Este site pode utilizar cookies para melhorar a navegação e
      desempenho. O usuário pode desativar os cookies a qualquer momento
      em seu navegador.
    </p>

    <h3>7. Direitos do Titular</h3>
    <p>
      De acordo com a LGPD, você tem direito a:
    </p>
    <ul>
      <li>Confirmar a existência de tratamento de dados</li>
      <li>Acessar seus dados</li>
      <li>Corrigir dados incompletos ou desatualizados</li>
      <li>Solicitar a exclusão de dados</li>
      <li>Revogar o consentimento</li>
    </ul>

    <h3>8. Alterações nesta Política</h3>
    <p>
      Esta política pode ser atualizada a qualquer momento, sendo recomendada
      a revisão periódica desta página.
    </p>

    <h3>9. Contato</h3>
    <p>
      Em caso de dúvidas sobre esta Política de Privacidade, entre em contato
      pelo e-mail: <strong>rafaelgoulartferreira18@gmail.com</strong>
    </p>

    <a href="<?= BASE_URL ?>" class="btn btn-outline-secondary mt-5">← Voltar para o site</a>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
