<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="id">
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
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <header class="hero" id="home">
    <div class="container hero-wrapper">
        <div class="hero-text">
            <span class="badge">Hi there, I'm <?= $profile_name ?></span>
            <h1 class="reveal-text">Building Digital <br> <span class="accent">Experiences.</span></h1>
            <p class="reveal-text delay-1" align="justify"><?= $profile_desc ?></p>
            
            <div class="stats reveal-text delay-3">
                <div class="stat-item">
                    <h3>3+</h3>
                    <p>Years Exp.</p>
                </div>
                <div class="stat-item">
                    <h3>10+</h3>
                    <p>Projects</p>
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
                <h2>What I Do</h2>
                <p>Spesialisasi teknis yang saya tawarkan.</p>
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
                <h2>Featured Projects</h2>
                <p>Beberapa project terbaik yang sudah di-hosting.</p>
            </div>

            <div class="filter-container fade-in">
                <button class="filter-btn active" data-filter="all">All</button>
                <?php 
                // Mengambil kategori unik dari array projects secara otomatis
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
                            <a href="<?= $project['demo_link'] ?>" target="_blank" class="btn-icon" title="View Demo"><i class="fas fa-external-link-alt"></i></a>
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
                            <a href="<?= $project['demo_link'] ?>" target="_blank" class="link-btn">Live Demo <i class="fas fa-arrow-right"></i></a>
                            <a href="<?= $project['repo_link'] ?>" target="_blank" class="link-btn text-muted">Code</a>
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
                    <h2>Have a project in mind?</h2>
                    <p>Let's discuss how I can help bring your digital vision to life.</p>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="footer-content">
                <div class="footer-brand">
                    <h3>SAT Project.</h3>
                    <p>Delivering integrated solutions across Web, Android Apps, IoT, and Networking for a smarter, connected future.</p>
                </div>
                <div class="footer-social">
                    <h4>Connect</h4>
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
                <p>&copy; <?= date('Y') ?> <strong><?= $profile_name ?></strong>. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>