@extends('layouts.app')

@section('content')
    {{-- ===== HERO SECTION ===== --}}
    <section class="hero" id="home">
        <div class="hero-bg-grid"></div>
        <div class="hero-orbs">
            <div class="orb orb-1"></div>
            <div class="orb orb-2"></div>
            <div class="orb orb-3"></div>
        </div>
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge reveal">
                    <span class="badge-dot"></span>
                    Available for new opportunities
                </div>
                <h1 class="hero-title reveal">
                    <span class="title-line">Khushali</span>
                    <span class="title-line accent-line">Savaliya</span>
                </h1>
                <div class="hero-role reveal">
                    <span class="role-prefix">I build</span>
                    <div class="role-ticker">
                        <span>scalable web apps</span>
                        <span>Laravel backends</span>
                        <span>REST APIs</span>
                        <span>CRM systems</span>
                    </div>
                </div>
                <p class="hero-desc reveal">
                    Results-driven PHP/Laravel Developer with <strong>3+ years</strong> of experience delivering
                    <strong>12+ production-grade projects</strong> across Logistics, CRM, E-commerce & EdTech.
                </p>
                <div class="hero-actions reveal">
                    <a href="#projects" class="btn btn-primary">
                        View My Work <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="btn btn-ghost">Let's Talk</a>
                </div>
                <div class="hero-stats reveal">
                    <div class="stat">
                        <span class="stat-num" data-target="3">0</span><span class="stat-unit">+</span>
                        <span class="stat-label">Years Exp.</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat">
                        <span class="stat-num" data-target="12">0</span><span class="stat-unit">+</span>
                        <span class="stat-label">Projects</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat">
                        <span class="stat-num" data-target="4">0</span><span class="stat-unit"></span>
                        <span class="stat-label">Companies</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual reveal">
                <div class="hero-card-wrapper">
                    <div class="floating-card card-top">
                        <i class="fab fa-laravel"></i>
                        <span>Laravel Expert</span>
                    </div>
                    <div class="hero-avatar">
                        <div class="avatar-ring"></div>
                        <div class="avatar-inner">
                            <span class="avatar-initials">KS</span>
                        </div>
                        <div class="avatar-orbit">
                            <div class="orbit-dot dot-php"><span>PHP</span></div>
                            <div class="orbit-dot dot-vue"><span>Vue</span></div>
                            <div class="orbit-dot dot-mysql"><span>SQL</span></div>
                        </div>
                    </div>
                    <div class="floating-card card-bottom">
                        <i class="fas fa-code"></i>
                        <span>Full-Stack Ready</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-scroll-hint">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
            <span>Scroll to explore</span>
        </div>
    </section>

    {{-- ===== ABOUT SECTION ===== --}}
    <section class="about" id="about">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">// 01 — About</span>
                <h2 class="section-title">Who Am I?</h2>
            </div>
            <div class="about-grid">
                <div class="about-text reveal">
                    <p class="about-lead">
                        I'm a passionate <span class="highlight">PHP/Laravel Developer</span> based in Ahmedabad, Gujarat,
                        with a proven ability to architect and ship complex web systems.
                    </p>
                    <p>
                        From building a full-fledged <strong>Logistics Management System</strong> with real-time route
                        optimization, to engineering a <strong>CRM</strong> integrated with Zoho Books, cPanel & WHM —
                        I love turning complex requirements into clean, performant code.
                    </p>
                    <p>
                        My tech journey started at <strong>St. Xavier's College, Ahmedabad</strong> (BCA) and continued
                        at <strong>GLA University, Mathura</strong> (MCA). Now I'm building production systems at
                        Skyline Infosys as a Laravel Developer.
                    </p>
                    <div class="about-details">
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Ahmedabad, Gujarat, India</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-graduation-cap"></i>
                            <span>MCA – GLA University (2023–2025)</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-briefcase"></i>
                            <span>Currently @ Skyline Infosys</span>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-envelope"></i>
                            <span>khushalisavaliya28@gmail.com</span>
                        </div>
                    </div>
                    <div class="about-actions">
                        <a href="https://github.com/KhushaliSavaliya" target="_blank" class="btn btn-primary">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                        <a href="https://linkedin.com/in/khushali-savaliya-24643a24a" target="_blank" class="btn btn-ghost">
                            <i class="fab fa-linkedin-in"></i> LinkedIn
                        </a>
                    </div>
                </div>
                <div class="about-right reveal">
                    <div class="about-code-block">
                        <div class="code-header">
                            <span class="dot red"></span><span class="dot yellow"></span><span class="dot green"></span>
                            <span class="code-filename">khushali.php</span>
                        </div>
                        <pre class="code-body"><code><span class="c-purple">&lt;?php</span>

<span class="c-blue">class</span> <span class="c-green">KhushaliSavaliya</span>
{
    <span class="c-blue">public</span> <span class="c-purple">string</span> $role = <span class="c-orange">'Laravel Developer'</span>;
    <span class="c-blue">public</span> <span class="c-purple">int</span> $experience = <span class="c-orange">3</span>;

    <span class="c-blue">public function</span> <span class="c-yellow">skills</span>(): <span class="c-purple">array</span>
    {
        <span class="c-blue">return</span> [
            <span class="c-orange">'Laravel'</span>, <span class="c-orange">'PHP'</span>,
            <span class="c-orange">'Vue.js'</span>, <span class="c-orange">'Inertia.js'</span>,
            <span class="c-orange">'MySQL'</span>, <span class="c-orange">'REST APIs'</span>,
        ];
    }

    <span class="c-blue">public function</span> <span class="c-yellow">passion</span>(): <span class="c-purple">string</span>
    {
        <span class="c-blue">return</span> <span class="c-orange">'Building scalable systems'</span>;
    }
}</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== SKILLS SECTION ===== --}}
    <section class="skills" id="skills">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">// 02 — Skills</span>
                <h2 class="section-title">Tech Stack</h2>
            </div>
            <div class="skills-grid">
                <div class="skill-category reveal">
                    <div class="skill-cat-header">
                        <i class="fas fa-code"></i>
                        <h3>Languages</h3>
                    </div>
                    <div class="skill-pills">
                        <span class="pill pill-primary">PHP</span>
                        <span class="pill">JavaScript</span>
                        <span class="pill">jQuery</span>
                        <span class="pill">SQL</span>
                        <span class="pill">HTML5</span>
                        <span class="pill">CSS3</span>
                    </div>
                </div>
                <div class="skill-category reveal">
                    <div class="skill-cat-header">
                        <i class="fas fa-layer-group"></i>
                        <h3>Frameworks</h3>
                    </div>
                    <div class="skill-pills">
                        <span class="pill pill-primary">Laravel</span>
                        <span class="pill pill-primary">Livewire</span>
                        <span class="pill">Inertia.js</span>
                        <span class="pill">Vue.js</span>
                        <span class="pill">Nuxt.js</span>
                    </div>
                </div>
                <div class="skill-category reveal">
                    <div class="skill-cat-header">
                        <i class="fas fa-palette"></i>
                        <h3>Frontend</h3>
                    </div>
                    <div class="skill-pills">
                        <span class="pill">Tailwind CSS</span>
                        <span class="pill">Bootstrap</span>
                        <span class="pill">Vue.js</span>
                    </div>
                </div>
                <div class="skill-category reveal">
                    <div class="skill-cat-header">
                        <i class="fas fa-tools"></i>
                        <h3>Tools & DB</h3>
                    </div>
                    <div class="skill-pills">
                        <span class="pill pill-primary">MySQL</span>
                        <span class="pill">Git / GitHub</span>
                        <span class="pill">Postman</span>
                        <span class="pill">Composer</span>
                        <span class="pill">XAMPP</span>
                        <span class="pill">VS Code</span>
                    </div>
                </div>
            </div>

            <div class="skill-bars reveal">
                <h3 class="skill-bars-title">Proficiency</h3>
                <div class="bar-list">
                    <div class="bar-item">
                        <div class="bar-label"><span>Laravel / PHP</span><span>95%</span></div>
                        <div class="bar-track">
                            <div class="bar-fill" data-width="95"></div>
                        </div>
                    </div>
                    <div class="bar-item">
                        <div class="bar-label"><span>MySQL / Database</span><span>88%</span></div>
                        <div class="bar-track">
                            <div class="bar-fill" data-width="88"></div>
                        </div>
                    </div>
                    <div class="bar-item">
                        <div class="bar-label"><span>Vue.js / Inertia.js</span><span>80%</span></div>
                        <div class="bar-track">
                            <div class="bar-fill" data-width="80"></div>
                        </div>
                    </div>
                    <div class="bar-item">
                        <div class="bar-label"><span>REST API Integration</span><span>90%</span></div>
                        <div class="bar-track">
                            <div class="bar-fill" data-width="90"></div>
                        </div>
                    </div>
                    <div class="bar-item">
                        <div class="bar-label"><span>Tailwind / Bootstrap</span><span>85%</span></div>
                        <div class="bar-track">
                            <div class="bar-fill" data-width="85"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== EXPERIENCE SECTION ===== --}}
    <section class="experience" id="experience">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">// 03 — Experience</span>
                <h2 class="section-title">Work History</h2>
            </div>
            <div class="timeline">

                <div class="timeline-item reveal active">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Jan 2025 – Present</div>
                    <div class="timeline-card">
                        <div class="timeline-badge current">Current</div>
                        <h3>Laravel Developer</h3>
                        <h4>Skyline Infosys</h4>
                        <ul>
                            <li>Developing and maintaining robust web applications using Laravel in a high-impact, on-site
                                environment.</li>
                            <li>Engineering scalable backend solutions and participating in the full Software Development
                                Life Cycle (SDLC).</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item reveal">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Dec 2023 – Jan 2025</div>
                    <div class="timeline-card">
                        <h3>PHP / Laravel Developer</h3>
                        <h4>Planics Dev Infotech LLP</h4>
                        <ul>
                            <li>Spearheaded development of 12+ production-grade projects, including complex CRM and
                                Logistics systems.</li>
                            <li>Integrated REST APIs for real-time data sync with Zoho Books, cPanel, and WHM.</li>
                            <li>Optimized database performance and streamlined admin workflows for operational efficiency.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item reveal">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">May 2023 – Nov 2023</div>
                    <div class="timeline-card">
                        <h3>PHP Junior Developer</h3>
                        <h4>HorizonCore Infosoft, Ahmedabad</h4>
                        <ul>
                            <li>Gained extensive hands-on experience in PHP development, contributing to web application
                                features and bug fixes.</li>
                            <li>Mastered modern coding standards and best practices while building user-friendly
                                applications.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item reveal">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Dec 2022 – Apr 2023</div>
                    <div class="timeline-card">
                        <h3>PHP Trainee</h3>
                        <h4>Grownix Ventures, Ahmedabad</h4>
                        <ul>
                            <li>Completed an intensive apprenticeship focused on PHP and PhpMyAdmin, building a strong
                                foundation in database management.</li>
                            <li>Developed core web technology skills in a hybrid work environment.</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== PROJECTS SECTION ===== --}}
    <section class="projects" id="projects">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">// 04 — Projects</span>
                <h2 class="section-title">Project Portfolio</h2>
            </div>

            <div class="project-filters reveal">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="logistics">Logistics</button>
                <button class="filter-btn" data-filter="ecommerce">E-commerce</button>
                <button class="filter-btn" data-filter="crm">CRM</button>
                <button class="filter-btn" data-filter="management">Management</button>
            </div>

            <div class="projects-grid">

                <div class="project-card reveal" data-category="logistics">
                    <div class="project-icon"><i class="fas fa-truck"></i></div>
                    <div class="project-content">
                        <span class="project-tag">Logistics</span>
                        <h3>Draygo</h3>
                        <p>Logistics Management System with real-time route optimization, role-based dashboards for admins,
                            drivers & customers, automated status notifications and payment modules.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>MySQL</span><span>REST API</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal featured" data-category="crm">
                    <div class="project-icon"><i class="fas fa-users-cog"></i></div>
                    <div class="project-content">
                        <span class="project-tag">CRM</span>
                        <h3>Infuse-CRM</h3>
                        <p>Centralized system to manage client domains and customer data with automated reporting
                            dashboards. Integrated REST APIs for real-time sync with Zoho Books, cPanel & WHM.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>Zoho API</span><span>cPanel</span><span>WHM</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal" data-category="ecommerce">
                    <div class="project-icon"><i class="fas fa-store"></i></div>
                    <div class="project-content">
                        <span class="project-tag">E-Commerce</span>
                        <h3>Swati Textile</h3>
                        <p>Comprehensive e-commerce platform with complex product catalogs, real-time inventory tracking,
                            and optimized admin workflows for high-volume order management.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>Vue.js</span><span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal" data-category="management">
                    <div class="project-icon"><i class="fas fa-plane-departure"></i></div>
                    <div class="project-content">
                        <span class="project-tag">Management</span>
                        <h3>Skylab – Airline</h3>
                        <p>End-to-end airline management system with secure authentication, multi-role access for admins,
                            airlines & users, custom dashboards and integrated payment gateways.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>Livewire</span><span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal" data-category="management">
                    <div class="project-icon"><i class="fas fa-hotel"></i></div>
                    <div class="project-content">
                        <span class="project-tag">Hotel Management</span>
                        <h3>Atithi Bhavan</h3>
                        <p>Platform connecting users with hotels via subscription plans and exclusive discounts. Integrated
                            Razorpay payment gateway for secure, seamless booking transactions.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>Razorpay</span><span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal" data-category="crm">
                    <div class="project-icon"><i class="fas fa-funnel-dollar"></i></div>
                    <div class="project-content">
                        <span class="project-tag">Lead Management</span>
                        <h3>Web Lead Navigator</h3>
                        <p>Backend APIs to manage lead campaigns, balances & recurring payments. Automated lead matching and
                            sales tracking algorithms to improve conversion rates.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>REST API</span><span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal" data-category="management">
                    <div class="project-icon"><i class="fas fa-cogs"></i></div>
                    <div class="project-content">
                        <span class="project-tag">Engineering</span>
                        <h3>Maxell</h3>
                        <p>Platform automating complex calculations for motor capacities and AC fan engineering specs.
                            Intuitive quote generation module with bulk Excel data import & validation.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>Excel Import</span><span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal" data-category="ecommerce">
                    <div class="project-icon"><i class="fas fa-shopping-bag"></i></div>
                    <div class="project-content">
                        <span class="project-tag">E-Commerce</span>
                        <h3>Nquiree</h3>
                        <p>Customized e-commerce logic handling intricate pricing structures and automated tax calculations.
                            Reliable end-to-end order tracking system for post-purchase support.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>Inertia.js</span><span>Vue.js</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal" data-category="management">
                    <div class="project-icon"><i class="fas fa-tasks"></i></div>
                    <div class="project-content">
                        <span class="project-tag">Project Management</span>
                        <h3>eProject Manager</h3>
                        <p>Collaborative project management tool improving team productivity and task transparency.
                            Real-time notifications for task assignments and project updates.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>Livewire</span><span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="project-card reveal" data-category="management">
                    <div class="project-icon"><i class="fas fa-leaf"></i></div>
                    <div class="project-content">
                        <span class="project-tag">Service Platform</span>
                        <h3>Lawn Care</h3>
                        <p>Real-time scheduling system and service booking module with interactive UI for service selection
                            and a streamlined checkout process for enhanced UX.</p>
                        <div class="project-tech">
                            <span>Laravel</span><span>Vue.js</span><span>Tailwind</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ===== CONTACT SECTION ===== --}}
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-header reveal">
                <span class="section-tag">// 05 — Contact</span>
                <h2 class="section-title">Let's Connect</h2>
                <p class="section-sub">Have a project in mind? Let's build something amazing together.</p>
            </div>
            <div class="contact-grid">
                <div class="contact-info reveal">
                    <div class="contact-card">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <span>Email</span>
                            <a href="mailto:khushalisavaliya28@gmail.com">khushalisavaliya28@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <i class="fas fa-phone"></i>
                        <div>
                            <span>Phone</span>
                            <a href="tel:7405553705">+91 7405553705</a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <i class="fab fa-github"></i>
                        <div>
                            <span>GitHub</span>
                            <a href="https://github.com/KhushaliSavaliya" target="_blank">KhushaliSavaliya</a>
                        </div>
                    </div>
                    <div class="contact-card">
                        <i class="fab fa-linkedin-in"></i>
                        <div>
                            <span>LinkedIn</span>
                            <a href="https://linkedin.com/in/khushali-savaliya-24643a24a"
                                target="_blank">khushali-savaliya</a>
                        </div>
                    </div>
                </div>
                <div class="contact-form-wrap reveal">
                    <form class="contact-form" id="contactForm">
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Your Name</label>
                                <input type="text" id="name" name="name" placeholder="John Doe" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="john@example.com"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="Project Inquiry" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Tell me about your project..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
