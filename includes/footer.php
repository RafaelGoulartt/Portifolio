<!-- CONTACT ENHANCED -->
<section id="contato" class="section-padding bg-dark-alt">
  <div class="container">
    <h2 class="section-title text-center" data-i18n="contact.title">Vamos Conversar</h2>
    
    <div class="contact-info-grid">
      <div class="contact-method">
        <div class="contact-icon">📧</div>
        <h3 data-i18n="contact.email.title">Email</h3>
        <p>rafael.dev@email.com</p>
        <a href="mailto:rafael.dev@email.com" class="btn btn-accent btn-sm mt-2" data-i18n="contact.email.button">
          Enviar Email
        </a>
      </div>
      
      <div class="contact-method">
        <div class="contact-icon">💼</div>
        <h3 data-i18n="contact.linkedin.title">LinkedIn</h3>
        <p data-i18n="contact.linkedin.text">Conecte-se profissionalmente</p>
        <a href="https://linkedin.com/in/seuperfil" target="_blank" class="btn btn-accent btn-sm mt-2">
          Ver Perfil
        </a>
      </div>
      
      <div class="contact-method">
        <div class="contact-icon">📱</div>
        <h3 data-i18n="contact.whatsapp.title">WhatsApp</h3>
        <p>+55 (11) 99999-9999</p>
        <a href="https://wa.me/5511999999999" target="_blank" class="btn btn-accent btn-sm mt-2">
          Enviar Mensagem
        </a>
      </div>
    </div>
    
    <!-- Formulário de contato existente -->
    <div class="row justify-content-center mt-5">
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

<!-- FOOTER ENHANCED -->
<footer class="enhanced-footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-about">
        <span class="footer-logo">Rafael Goulart</span>
        <p class="footer-tagline" data-i18n="footer.tagline">
          Desenvolvedor Full Stack especializado em criar soluções digitais
          eficientes e escaláveis para empresas de todos os tamanhos.
        </p>
      </div>
      
      <div class="footer-links">
        <h3 data-i18n="footer.links.title">Links Rápidos</h3>
        <ul>
          <li><a href="#sobre" data-i18n="nav.about">Sobre</a></li>
          <li><a href="#projetos" data-i18n="nav.projects">Projetos</a></li>
          <li><a href="#skills" data-i18n="nav.skills">Skills</a></li>
          <li><a href="#contato" data-i18n="nav.contact">Contato</a></li>
        </ul>
      </div>
      
      <div class="footer-links">
        <h3 data-i18n="footer.tech.title">Tecnologias</h3>
        <ul>
          <li><a href="#">PHP Development</a></li>
          <li><a href="#">ASP Classic</a></li>
          <li><a href="#">SQL Server</a></li>
          <li><a href="#">Web APIs</a></li>
        </ul>
      </div>
    
    <div class="copyright-bar">
      <p data-i18n="footer.copyright">© 2024 Rafael Goulart. Todos os direitos reservados.</p>
      <p><a href="/privacy" data-i18n="footer.privacy">Política de Privacidade</a> • 
         <a href="/terms" data-i18n="footer.terms">Termos de Uso</a></p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="/Portifolio/assets/js/main.js"></script>
<script src="/Portifolio/assets/js/animations.js"></script>
</body>
</html>