<?php
// about.php
$pageTitle = "About";
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/breadcrumbs.php';
include 'data/skills.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 data-aos="fade-down">About Me</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            Passionate developer, problem solver, and lifelong learner.
        </p>
    </div>
</section>


<!-- ═══════════════════════════════════════
     ABOUT SECTION
════════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="about-grid">

            <!-- Photo -->
            <div class="about-img-wrap" data-aos="fade-right">
                <img class="about-img"
                     src="assets/images/profile.jpg"
                     alt="Mohammad — Full-Stack Developer"
                     onerror="this.src='https://placehold.co/480x560/6a0dad/ffffff?text=Mohammad'">
                <div class="about-img-badge" data-aos="zoom-in" data-aos-delay="300">
                    <strong>3+</strong>
                    Years<br>Experience
                </div>
            </div>

            <!-- Text -->
            <div class="about-text" data-aos="fade-left" data-aos-delay="150">
                <span class="section-label">Who I Am</span>
                <h2>I craft <span style="color:var(--primary)">digital experiences</span><br>that matter.</h2>
                <div class="underline-bar"></div>

                <p>
                    I'm Mohammad, a full-stack web developer specialising in PHP and
                    JavaScript. I build everything from landing pages to complex
                    data-driven applications — always with clean code and user
                    experience at the forefront.
                </p>
                <p>
                    I'm currently available for freelance projects and open-source
                    collaborations. When I'm not coding, you'll find me reading about
                    system design or exploring the latest front-end tooling.
                </p>

                <div class="about-info">
                    <div class="info-item"><span>Name</span>Mohammad</div>
                    <div class="info-item"><span>Location</span>City, Country</div>
                    <div class="info-item"><span>Email</span>mohammad@example.com</div>
                    <div class="info-item"><span>Availability</span>Open to work ✅</div>
                    <div class="info-item"><span>Languages</span>English, Arabic</div>
                    <div class="info-item"><span>Degree</span>BSc Computer Science</div>
                </div>

                <div style="display:flex;gap:1rem;flex-wrap:wrap;">
                    <a href="contact.php" class="btn btn-primary">Hire Me</a>
                    <a href="assets/resume.pdf" download class="btn btn-outline">Download CV</a>
                </div>
            </div>

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
            <h2 class="section-title">Technical <span>Skills</span></h2>
            <div class="underline-bar" style="margin:0.6rem auto 1.2rem;"></div>
            <p class="section-sub">Core technologies I use to bring ideas to life.</p>
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
     STATS SECTION
════════════════════════════════════════ -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <?php
            $stats = [
                ['label' => 'Projects Completed', 'value' => 24,   'suffix' => '+'],
                ['label' => 'Happy Clients',      'value' => 18,   'suffix' => '+'],
                ['label' => 'Years Experience',   'value' => 3,    'suffix' => '+'],
                ['label' => 'GitHub Commits',     'value' => 1200, 'suffix' => '+'],
            ];
            foreach ($stats as $i => $stat): ?>
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


<?php include 'includes/footer.php'; ?>
