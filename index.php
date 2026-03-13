<?php
// index.php — Homepage
$pageTitle = "Home";
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/breadcrumbs.php';
include 'data/projects.php';
include 'data/skills.php';
?>

<!-- ═══════════════════════════════════════
     HERO SECTION
════════════════════════════════════════ -->
<section class="hero">
    <!-- Decorative blobs -->
    <div class="hero-blob hero-blob-1"></div>
    <div class="hero-blob hero-blob-2"></div>

    <div class="hero-content">
        <div class="hero-badge" data-aos="fade-down" data-aos-duration="600">
            <span class="dot"></span>
            Available for freelance work
        </div>

        <h1 data-aos="fade-up" data-aos-delay="100">
            Hi, I'm <span class="highlight">Mohammad</span><br>
            Full-Stack Developer
        </h1>

        <p data-aos="fade-up" data-aos-delay="200">
            I build dynamic, scalable, and visually stunning web experiences
            using PHP, JavaScript, and modern CSS — from concept to deployment.
        </p>

        <div class="hero-btns" data-aos="zoom-in" data-aos-delay="350">
            <a href="projects.php" class="btn btn-accent btn-lg">View My Work</a>
            <a href="contact.php" class="btn btn-ghost btn-lg">Let's Talk</a>
        </div>
    </div>

    <div class="hero-scroll" aria-hidden="true">
        <span>Scroll</span>
        <div class="arrow"></div>
    </div>
</section>


<!-- ═══════════════════════════════════════
     STATS COUNTER SECTION
════════════════════════════════════════ -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <?php foreach ($stats as $i => $stat): ?>
            <div class="stat-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 80; ?>">
                <div class="stat-number"
                     data-target="<?php echo $stat['value']; ?>"
                     data-suffix="<?php echo htmlspecialchars($stat['suffix']); ?>">
                    0<?php echo htmlspecialchars($stat['suffix']); ?>
                </div>
                <div class="stat-label"><?php echo htmlspecialchars($stat['label']); ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════
     FEATURED PROJECTS CAROUSEL
════════════════════════════════════════ -->
<section class="section projects-section">
    <div class="container">

        <div data-aos="fade-left">
            <span class="section-label">Portfolio</span>
            <h2 class="section-title">Featured <span>Projects</span></h2>
            <div class="underline-bar"></div>
            <p class="section-sub left">A selection of my most recent and impactful work.</p>
        </div>

        <div class="carousel-wrap">
            <div class="carousel" id="projectsCarousel">
                <?php foreach ($projects as $i => $project): ?>
                <?php $modalData = json_encode([
                    'title'       => $project['title'],
                    'image'       => $project['image'],
                    'description' => $project['description'],
                    'tags'        => $project['tags'],
                    'link'        => $project['link'],
                    'demo'        => $project['demo'],
                ]); ?>
                <article class="project-card"
                         data-aos="zoom-in"
                         data-aos-delay="<?php echo $i * 120; ?>"
                         data-modal='<?php echo htmlspecialchars($modalData, ENT_QUOTES); ?>'
                         role="button"
                         aria-label="View details for <?php echo htmlspecialchars($project['title']); ?>">
                    <div class="card-img-wrap">
                        <img src="<?php echo htmlspecialchars($project['image']); ?>"
                             alt="<?php echo htmlspecialchars($project['title']); ?>"
                             onerror="this.style.display='none'">
                        <div class="card-overlay">
                            <span class="btn btn-accent btn-sm">View Details</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-tags">
                            <?php foreach ($project['tags'] as $tag): ?>
                            <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                            <?php endforeach; ?>
                        </div>
                        <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                        <p><?php echo htmlspecialchars($project['description']); ?></p>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>

            <div class="carousel-nav">
                <button class="carousel-btn" id="carouselPrev" aria-label="Previous slide">&#8592;</button>
                <div class="carousel-dots" id="carouselDots"></div>
                <button class="carousel-btn" id="carouselNext" aria-label="Next slide">&#8594;</button>
            </div>
        </div>

        <div class="text-center" style="margin-top:2rem;" data-aos="fade-up">
            <a href="projects.php" class="btn btn-outline">See All Projects &rarr;</a>
        </div>

    </div>
</section>


<!-- ═══════════════════════════════════════
     SKILLS SECTION
════════════════════════════════════════ -->
<section class="section skills-section">
    <div class="container">

        <div class="text-center" data-aos="fade-left">
            <span class="section-label">Expertise</span>
            <h2 class="section-title">My <span>Skills</span></h2>
            <div class="underline-bar" style="margin:0.6rem auto 1.2rem;"></div>
            <p class="section-sub">Technologies I use daily to build robust applications.</p>
        </div>

        <div class="skills-grid">
            <?php foreach ($skills as $i => $skill): ?>
            <div class="skill-card" data-aos="fade-up" data-aos-delay="<?php echo $i * 90; ?>">
                <div class="skill-header">
                    <div class="skill-meta">
                        <span class="skill-icon"><?php echo $skill['icon']; ?></span>
                        <span class="skill-name"><?php echo htmlspecialchars($skill['name']); ?></span>
                    </div>
                    <span class="skill-pct"><?php echo $skill['level']; ?>%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-fill" data-level="<?php echo $skill['level']; ?>"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


<!-- ═══════════════════════════════════════
     PROJECT MODAL
════════════════════════════════════════ -->
<div class="modal-overlay" id="projectModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal">
        <button class="modal-close" aria-label="Close modal">&times;</button>
        <img class="modal-img" id="modalImg" src="" alt="">
        <div class="modal-body">
            <div class="modal-tags" id="modalTags"></div>
            <h2 id="modalTitle"></h2>
            <p id="modalDesc"></p>
            <div class="modal-actions">
                <a id="modalLink" href="#" target="_blank" rel="noopener noreferrer" class="btn btn-primary">
                    View on GitHub
                </a>
                <a id="modalDemo" href="#" target="_blank" rel="noopener noreferrer" class="btn btn-outline">
                    Live Demo
                </a>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
