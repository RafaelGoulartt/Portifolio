<!-- CONTATO COMPLETO -->
<section id="contato" class="section-padding">
  <div class="container">
    <h2 class="section-title text-center mb-5" data-i18n="contact.title">Vamos Trabalhar Juntos</h2>
    
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="contact-form">
          <form id="contactForm">
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" 
                       class="form-control" 
                       placeholder="Seu nome" 
                       required
                       data-i18n-ph="contact.form.name">
              </div>
              <div class="col-md-6">
                <input type="email" 
                       class="form-control" 
                       placeholder="Seu e-mail" 
                       required
                       data-i18n-ph="contact.form.email">
              </div>
              <div class="col-12">
                <input type="text" 
                       class="form-control" 
                       placeholder="Assunto" 
                       required
                       data-i18n-ph="contact.form.subject">
              </div>
              <div class="col-12">
                <textarea class="form-control" 
                          rows="5" 
                          placeholder="Sua mensagem" 
                          required
                          data-i18n-ph="contact.form.message"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-accent w-100" data-i18n="contact.form.submit">
                  Enviar Mensagem
                </button>
              </div>
            </div>
          </form>
          
          <div class="text-center mt-5 pt-4 border-top">
            <p class="mb-4" data-i18n="contact.alternative">Ou entre em contato diretamente:</p>
            
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
              <a href="mailto:seuemail@email.com" class="btn btn-outline-light">
                <i class="bi bi-envelope me-2"></i>
                <span data-i18n="contact.email">E-mail</span>
              </a>
              
              <a href="https://linkedin.com/in/seuperfil" target="_blank" class="btn btn-outline-light">
                <i class="bi bi-linkedin me-2"></i>
                LinkedIn
              </a>
              
              <a href="https://github.com/seuperfil" target="_blank" class="btn btn-outline-light">
                <i class="bi bi-github me-2"></i>
                GitHub
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="py-4">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
        <p class="mb-0 text-muted" data-i18n="footer.copyright">
          © 2024 Rafael. Todos os direitos reservados.
        </p>
      </div>
      
      <div class="col-md-6">
        <div class="social-links justify-content-center justify-content-md-end">
          <a href="https://github.com/seuperfil" target="_blank" class="social-link" title="GitHub">
            <i class="bi bi-github"></i>
          </a>
          <a href="https://linkedin.com/in/seuperfil" target="_blank" class="social-link" title="LinkedIn">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://instagram.com/seuperfil" target="_blank" class="social-link" title="Instagram">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://twitter.com/seuperfil" target="_blank" class="social-link" title="Twitter">
            <i class="bi bi-twitter"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/Portifolio/assets/js/main.js"></script>
<script src="/Portifolio/assets/js/animations.js"></script>
</body>
</html>