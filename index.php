<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wesley Samuel | Portfólio</title>
    <!-- Google Fonts: Inter & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="dark-theme">
    <div class="bg-gradient-shapes">
        <div class="shape shape-1"></div>
        <div class="shape shape-2"></div>
        <div class="shape shape-3"></div>
    </div>

    <main class="app-container">
        <!-- Navigation Tabs -->
        <nav class="glass-nav">
            <ul class="tab-list">
                <li class="tab-item active" data-tab="about">
                    <i class="fa-solid fa-user-tie"></i>
                    <span>Sobre Mim</span>
                </li>
                <li class="tab-item" data-tab="projects">
                    <i class="fa-solid fa-code"></i>
                    <span>Projetos</span>
                </li>
                <li class="tab-item" data-tab="resume">
                    <i class="fa-solid fa-file-pdf"></i>
                    <span>Currículo</span>
                </li>
            </ul>
        </nav>

        <!-- Content Area -->
        <section class="content-wrapper">
            <div id="tab-content" class="fade-in">
                <!-- Tab 1: Sobre Mim (Loaded by default) -->
                <div class="tab-pane active" id="about">
                    <div class="about-grid">
                        <!-- Hero Section -->
                        <div class="hero-card glass-card">
                            <div class="profile-header">
                                <div class="profile-img-container">
                                    <div class="profile-glow"></div>
                                    <img src="files/eu.jpg" alt="Wesley Samuel" class="profile-img">
                                </div>
                                <div class="profile-info">
                                    <h1>Wesley Samuel Ferreira Rodrigues</h1>
                                    <h2 class="typing-text">Full Stack Developer & Analista de Sistemas</h2>
                                    <p class="tagline">Graduando em Ciência da Computação (FPB)</p>
                                </div>
                            </div>
                        </div>

                        <!-- Who I Am -->
                        <div class="glass-card section-card">
                            <h3><i class="fa-solid fa-id-card"></i> Quem Sou</h3>
                            <p>
                                Sou Wesley Samuel Ferreira Rodrigues, graduando em Ciência da Computação pela Faculdade Internacional da Paraíba (FPB). Minha trajetória é marcada pela transição de funções operacionais para o desenvolvimento de soluções tecnológicas robustas e personalizadas.
                            </p>
                        </div>

                        <!-- Contatos & Redes -->
                        <div class="glass-card section-card">
                            <h3><i class="fa-solid fa-address-book"></i> Contatos & Redes</h3>
                            <div class="contact-grid">
                                <a href="https://www.linkedin.com/in/wesley-samuel-ferreira-rodrigues-265aba2b4" target="_blank" class="contact-btn linkedin">
                                    <i class="fa-brands fa-linkedin"></i> LinkedIn
                                </a>
                                <a href="https://www.instagram.com/wsistemasfr" target="_blank" class="contact-btn instagram">
                                    <i class="fa-brands fa-instagram"></i> Instagram
                                </a>
                                <button class="contact-btn email shadow-btn" data-copy="wesleysamuelfr@outlook.com">
                                    <i class="fa-solid fa-envelope"></i> E-mail (Copiar)
                                </button>
                                <button class="contact-btn whatsapp shadow-btn" data-copy="83996029026">
                                    <i class="fa-brands fa-whatsapp"></i> WhatsApp (Copiar)
                                </button>
                            </div>
                        </div>

                        <!-- Skills (Moving back up as per user request to replace "O que faço" with links) -->
                        <div class="glass-card section-card skills-card">
                            <h3><i class="fa-solid fa-screwdriver-wrench"></i> Competências</h3>
                            <div class="skill-groups">
                                <div class="skill-group">
                                    <h4>Linguagens</h4>
                                    <div class="tags">
                                        <span class="tag">PHP</span>
                                        <span class="tag">JavaScript</span>
                                        <span class="tag">Kotlin</span>
                                        <span class="tag">Java</span>
                                        <span class="tag">Python</span>
                                    </div>
                                </div>
                                <div class="skill-group">
                                    <h4>Tecnologias</h4>
                                    <div class="tags">
                                        <span class="tag">CSS3</span>
                                        <span class="tag">Bootstrap</span>
                                        <span class="tag">Tailwind</span>
                                        <span class="tag">Git</span>
                                        <span class="tag">APIs REST</span>
                                        <span class="tag">Bancos de Dados SQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Interests -->
                        <div class="glass-card section-card">
                            <h3><i class="fa-solid fa-heart"></i> Interesses</h3>
                            <ul class="interests-list">
                                <li><i class="fa-solid fa-vr-cardboard"></i> Desenvolvimento de Software (Web & Mobile)</li>
                                <li><i class="fa-solid fa-vr-cardboard"></i> Inovação (IA & Realidade Virtual)</li>
                                <li><i class="fa-solid fa-chart-line"></i> Análise de Sistemas</li>
                                <li><i class="fa-solid fa-wand-magic-sparkles"></i> UX (Interfaces Dinâmicas e Intuitivas)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tab 2: Projetos -->
                <div class="tab-pane" id="projects">
                    <div class="projects-grid">
                        <!-- Projeto Kurta -->
                        <div class="glass-card project-card">
                            <div class="project-icon"><i class="fa-solid fa-users-viewfinder"></i></div>
                            <h3>Projeto Kurta</h3>
                            <p>Rede social focada em conexões autênticas e comunidades dinâmicas (Clãs). Design imersivo e arquitetura MVC.</p>
                            <div class="project-tags">
                                <span>PHP 8.4</span>
                                <span>MySQL</span>
                                <span>JS ES6+</span>
                            </div>
                            <a href="https://github.com/WSamuelFR/Projeto_Kurta.git" target="_blank" class="repo-btn">
                                <i class="fa-brands fa-github"></i> Ver Repositório
                            </a>
                        </div>

                        <!-- Projeto Memorize -->
                        <div class="glass-card project-card">
                            <div class="project-icon"><i class="fa-solid fa-brain"></i></div>
                            <h3>Projeto Memorize</h3>
                            <p>Aplicação desktop para organização e memorização de informações via flashcards interativos.</p>
                            <div class="project-tags">
                                <span>Java SE</span>
                                <span>Swing</span>
                            </div>
                            <a href="https://github.com/WSamuelFR/Projeto_memorize.git" target="_blank" class="repo-btn">
                                <i class="fa-brands fa-github"></i> Ver Repositório
                            </a>
                        </div>

                        <!-- PayGuardian -->
                        <div class="glass-card project-card">
                            <div class="project-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <h3>PayGuardian</h3>
                            <p>Sistema de gestão financeira pessoal para monitoramento de entradas com foco em usabilidade móvel.</p>
                            <div class="project-tags">
                                <span>Kotlin</span>
                                <span>Jetpack Compose</span>
                                <span>Android</span>
                            </div>
                            <a href="https://github.com/WSamuelFR/PayGuardian.git" target="_blank" class="repo-btn">
                                <i class="fa-brands fa-github"></i> Ver Repositório
                            </a>
                        </div>

                        <!-- Movie Analytics Pro -->
                        <div class="glass-card project-card">
                            <div class="project-icon"><i class="fa-solid fa-clapperboard"></i></div>
                            <h3>Movie Analytics Pro</h3>
                            <p>Análise de dados cinematográficos e aplicação de Machine Learning (IA) para predição de tendências.</p>
                            <div class="project-tags">
                                <span>Python</span>
                                <span>Pandas</span>
                                <span>Scikit-learn</span>
                            </div>
                            <a href="https://github.com/WSamuelFR/Movie-Analytics-Pro.git" target="_blank" class="repo-btn">
                                <i class="fa-brands fa-github"></i> Ver Repositório
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Tab 3: Currículo -->
                <div class="tab-pane" id="resume">
                    <div class="resume-container">
                        <div class="glass-card resume-card">
                            <div class="resume-icon">
                                <i class="fa-solid fa-file-lines"></i>
                            </div>
                            <h2>Currículo Profissional</h2>
                            <p>Wesley Samuel Ferreira Rodrigues</p>
                            <div class="resume-actions">
                                <a href="files/Currículo_Samuel.pdf" target="_blank" class="resume-btn view">
                                    <i class="fa-solid fa-eye"></i> Visualizar Online
                                </a>
                                <a href="files/Currículo_Samuel.pdf" download="Currículo_Wesley_Samuel.pdf" class="resume-btn download">
                                    <i class="fa-solid fa-download"></i> Baixar PDF
                                </a>
                            </div>
                        </div>
                        
                        <!-- Mini Preview / Info -->
                        <div class="glass-card resume-info-card">
                            <h3><i class="fa-solid fa-circle-info"></i> Resumo das Qualificações</h3>
                            <ul>
                                <li>Desenvolvedor Full Stack com foco em PHP, Kotlin e Python.</li>
                                <li>Experiência em sistemas de gestão (ERP) e automação.</li>
                                <li>Graduando em Ciência da Computação (FPB).</li>
                                <li>Certificações em IA, Redes e Sistemas Distribuídos.</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Toast Notification Container -->
        <div id="toast-container"></div>

        <!-- Footer -->
        <footer class="glass-footer">
            <p>&copy; 2026 Wesley Samuel. Criado com <i class="fa-solid fa-heart accent-color"></i> e Tecnologia.</p>
        </footer>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
