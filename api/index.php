<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAT Project</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="container nav-wrapper">
            <div class="logo">SAT Project</div>
            <ul class="nav-links">
                <li><a href="#home"><?= $text['home'] ?></a></li>
                <li><a href="#services"><?= $text['services'] ?></a></li>
                <li><a href="#projects"><?= $text['projects'] ?></a></li>
                <li><a href="#contact"><?= $text['contact'] ?></a></li>
                
                <li class="lang-switch-container">
                    <span class="lang-label <?= $lang == 'id' ? 'active' : '' ?>">ID</span>
                    <label class="switch">
                        <input type="checkbox" id="langToggle" <?= $lang == 'en' ? 'checked' : '' ?>>
                        <span class="slider round"></span>
                    </label>
                    <span class="lang-label <?= $lang == 'en' ? 'active' : '' ?>">EN</span>
                </li>
            </ul>
        </div>
    </nav>

    <header class="hero" id="home">
    <div class="container hero-wrapper">
        <div class="hero-text">
            <span class="badge"><?= $text['greeting'] ?> <?= $profile_name ?></span>
            <h1 class="reveal-text"><?= $text['hero_title_1'] ?> <br> <span class="accent"><?= $text['hero_title_2'] ?></span></h1>
            <p class="reveal-text delay-1" align="justify"><?= $text['hero_desc'] ?></p>
            
            <div class="stats reveal-text delay-3">
                <div class="stat-item">
                    <h3>3+</h3>
                    <p><?= $text['exp_years'] ?></p>
                </div>
                <div class="stat-item">
                    <h3>10+</h3>
                    <p><?= $text['total_projects'] ?></p>
                </div>
            </div>
        </div>

        <div class="hero-image fade-in">
            <div class="image-box">
                <img src="<?= $profile_photo ?>" alt="<?= $profile_name ?>">
            </div>
        </div>
    </div>
</header>

    <section class="services section-padding" id="services">
        <div class="container">
            <div class="section-header fade-in">
                <h2><?= $text['what_i_do'] ?></h2>
                <p><?= $text['what_i_do_desc'] ?></p>
            </div>

            <div class="services-grid">
                <?php foreach ($services as $service): ?>
                <div class="service-card fade-in">
                    <div class="icon-box">
                        <i class="fas <?= $service['icon'] ?>"></i>
                    </div>
                    <h3><?= $service['title'] ?></h3>
                    <span class="service-subtitle"><?= $service['desc'] ?></span>
                    
                    <ul class="service-list">
                        <?php foreach ($service['items'] as $item): ?>
                            <li><i class="fas fa-check-circle"></i> <?= $item ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <div class="container">
            <div class="section-header">
                <h2><?= $text['featured_projects'] ?></h2>
                <p><?= $text['featured_projects_desc'] ?></p>
            </div>

            <div class="filter-container fade-in">
                <button class="filter-btn active" data-filter="all"><?= $text['filter_all'] ?></button>
                <?php 
                $categories = array_unique(array_column($projects, 'category'));
                foreach ($categories as $category): 
                ?>
                    <button class="filter-btn" data-filter="<?= $category ?>"><?= $category ?></button>
                <?php endforeach; ?>
            </div>

            <div class="project-grid">
                <?php foreach ($projects as $project): ?>
                <div class="card fade-in project-item" data-category="<?= $project['category'] ?>">
                    <div class="card-image">
                        <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
                        <div class="overlay">
                            <a href="<?= $project['demo_link'] ?>" target="_blank" class="btn-icon" title="<?= $text['view_demo'] ?>"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <span class="category"><?= $project['category'] ?></span>
                        <h3><?= $project['title'] ?></h3>
                        <p><?= $project['desc'] ?></p>
                        <div class="tags">
                            <?php foreach ($project['stack'] as $tech): ?>
                                <span class="tag"><?= $tech ?></span>
                            <?php endforeach; ?>
                        </div>
                        <div class="card-actions">
                            <a href="<?= $project['demo_link'] ?>" target="_blank" class="link-btn"><?= $text['live_demo'] ?> <i class="fas fa-arrow-right"></i></a>
                            <a href="<?= $project['repo_link'] ?>" target="_blank" class="link-btn text-muted"><?= $text['code'] ?></a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer id="contact">
        <div class="container">
            <div class="footer-cta fade-in">
                <div class="cta-text">
                    <h2><?= $text['cta_title'] ?></h2>
                    <p><?= $text['cta_desc'] ?></p>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>SAT Project.</h3>
                    <p><?= $text['footer_brand_desc'] ?></p>
                </div>
                <div class="footer-social">
                    <h4><?= $text['connect'] ?></h4>
                    <div class="social-icons">
                        <a href="https://wa.me/6281234567890" target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" target="_blank" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/syariif.at" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:business.syarifahsanit@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
                        <a href="https://github.com/" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> <strong><?= $profile_name ?></strong>. <?= $text['rights'] ?></p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>