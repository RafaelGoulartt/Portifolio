<?php
$lang = $_GET['lang'] ?? 'pt';
include 'includes/header.php';
?>

<section class="section-padding">
  <div class="container">
    <h1 class="section-title mb-4" data-i18n="privacy.title">Política de Privacidade</h1>
    
    <p data-i18n="privacy.intro">
      A presente Política de Privacidade descreve como os dados pessoais são
      coletados, utilizados, armazenados e protegidos ao acessar e utilizar
      este site, em conformidade com a Lei Geral de Proteção de Dados
      (Lei nº 13.709/2018 – LGPD).
    </p>

    <h3 data-i18n="privacy.section1.title">1. Quem Somos</h3>
    <p data-i18n="privacy.section1.content">
      Este site é mantido por <strong>Rafael Goulart</strong>, desenvolvedor
      full stack, com o objetivo de apresentar portfólio profissional,
      projetos realizados e formas de contato.
    </p>

    <h3 data-i18n="privacy.section2.title">2. Dados Coletados</h3>
    <p data-i18n="privacy.section2.intro">Podemos coletar os seguintes dados pessoais:</p>
    <ul>
      <li data-i18n="privacy.list.item1">Nome</li>
      <li data-i18n="privacy.list.item2">E-mail</li>
      <li data-i18n="privacy.list.item3">Telefone</li>
      <li data-i18n="privacy.list.item4">Mensagem enviada através do formulário de contato</li>
      <li data-i18n="privacy.list.item5">Dados técnicos como IP, navegador e dispositivo (cookies)</li>
    </ul>

    <h3 data-i18n="privacy.section3.title">3. Finalidade do Uso dos Dados</h3>
    <p data-i18n="privacy.section3.intro">
      Os dados coletados são utilizados exclusivamente para:
    </p>
    <ul>
      <li data-i18n="privacy.section3.list1">Entrar em contato com o usuário</li>
      <li data-i18n="privacy.section3.list2">Responder solicitações e propostas comerciais</li>
      <li data-i18n="privacy.section3.list3">Melhorar a experiência do usuário no site</li>
      <li data-i18n="privacy.section3.list4">Cumprir obrigações legais</li>
    </ul>

    <h3 data-i18n="privacy.section4.title">4. Compartilhamento de Dados</h3>
    <p data-i18n="privacy.section4.content">
      Os dados pessoais não são vendidos, alugados ou compartilhados com
      terceiros, exceto quando exigido por lei ou mediante consentimento
      expresso do titular.
    </p>

    <h3 data-i18n="privacy.section5.title">5. Armazenamento e Segurança</h3>
    <p data-i18n="privacy.section5.content">
      Adotamos medidas técnicas e organizacionais adequadas para proteger
      os dados pessoais contra acessos não autorizados, perda, alteração
      ou divulgação indevida.
    </p>

    <h3 data-i18n="privacy.section6.title">6. Cookies</h3>
    <p data-i18n="privacy.section6.content">
      Este site pode utilizar cookies para melhorar a navegação e
      desempenho. O usuário pode desativar os cookies a qualquer momento
      em seu navegador.
    </p>

    <h3 data-i18n="privacy.section7.title">7. Direitos do Titular</h3>
    <p data-i18n="privacy.section7.intro">
      De acordo com a LGPD, você tem direito a:
    </p>
    <ul>
      <li data-i18n="privacy.section7.list1">Confirmar a existência de tratamento de dados</li>
      <li data-i18n="privacy.section7.list2">Acessar seus dados</li>
      <li data-i18n="privacy.section7.list3">Corrigir dados incompletos ou desatualizados</li>
      <li data-i18n="privacy.section7.list4">Solicitar a exclusão de dados</li>
      <li data-i18n="privacy.section7.list5">Revogar o consentimento</li>
    </ul>

    <h3 data-i18n="privacy.section8.title">8. Alterações nesta Política</h3>
    <p data-i18n="privacy.section8.content">
      Esta política pode ser atualizada a qualquer momento, sendo recomendada
      a revisão periódica desta página.
    </p>

    <h3 data-i18n="privacy.section9.title">9. Contato</h3>
    <p data-i18n="privacy.section9.content">
      Em caso de dúvidas sobre esta Política de Privacidade, entre em contato
      pelo e-mail: <strong>rafaelgoulartferreira18@gmail.com</strong>
    </p>

    <a href="index.php?lang=<?= $lang ?>" class="btn btn-outline-secondary mt-5" data-i18n="privacy.backButton">
      ← Voltar para o site
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>