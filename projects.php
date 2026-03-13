<?php
// projects.php
$pageTitle = "Projects";
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/breadcrumbs.php';
include 'data/projects.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 data-aos="fade-down">My Projects</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            A complete look at everything I've built — from side projects to client work.
        </p>
    </div>
</section>


<!-- ═══════════════════════════════════════
     PROJECTS GRID
════════════════════════════════════════ -->
<section class="section">
    <div class="container">

        <div class="text-center" data-aos="fade-up">
            <span class="section-label">Portfolio</span>
            <h2 class="section-title">All <span>Projects</span></h2>
            <div class="underline-bar" style="margin:0.6rem auto 1.2rem;"></div>
            <p class="section-sub">Click any card to see full details.</p>
        </div>

        <div class="projects-grid">
            <?php foreach ($projects as $i => $project):
                $thumb     = !empty($project['images']) ? $project['images'][0] : '';
                $modalData = json_encode([
                    'title'       => $project['title'],
                    'images'      => $project['images'] ?? [],
                    'description' => $project['description'],
                    'tags'        => $project['tags'],
                    'role'        => $project['role'] ?? '',
                    'link'        => $project['link'],
                ]);
            ?>
            <article class="project-card"
                     data-aos="zoom-in"
                     data-aos-delay="<?php echo ($i % 3) * 100; ?>"
                     data-modal='<?php echo htmlspecialchars($modalData, ENT_QUOTES); ?>'
                     role="button"
                     aria-label="View details for <?php echo htmlspecialchars($project['title']); ?>">
                <div class="card-img-wrap">
                    <?php if ($thumb): ?>
                    <img src="<?php echo htmlspecialchars($thumb); ?>"
                         alt="<?php echo htmlspecialchars($project['title']); ?>"
                         onerror="this.style.display='none'">
                    <?php endif; ?>
                    <div class="card-overlay">
                        <span class="btn btn-accent btn-sm">View Details</span>
                    </div>
                    <?php if (!empty($project['featured'])): ?>
                    <div style="position:absolute;top:.75rem;left:.75rem;background:var(--accent);color:var(--primary-dark);font-size:.7rem;font-weight:700;padding:.2rem .65rem;border-radius:50px;">
                        Featured
                    </div>
                    <?php endif; ?>
                    <?php if (!empty($project['images']) && count($project['images']) > 1): ?>
                    <div style="position:absolute;top:.75rem;right:.75rem;background:rgba(0,0,0,.45);color:#fff;font-size:.7rem;font-weight:600;padding:.2rem .6rem;border-radius:50px;">
                        <?php echo count($project['images']); ?> photos
                    </div>
                    <?php endif; ?>
                </div>
                <div class="card-body">
                    <?php if (!empty($project['role'])): ?>
                    <div class="card-role"><?php echo htmlspecialchars($project['role']); ?></div>
                    <?php endif; ?>
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

    </div>
</section>


<!-- ═══════════════════════════════════════
     PROJECT MODAL
════════════════════════════════════════ -->
<div class="modal-overlay" id="projectModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal">
        <button class="modal-close" aria-label="Close modal">&times;</button>
        <div class="modal-img-carousel" id="modalImgCarousel"></div>
        <div class="modal-body">
            <div class="modal-tags" id="modalTags"></div>
            <div class="modal-role" id="modalRole" hidden></div>
            <h2 id="modalTitle"></h2>
            <p id="modalDesc"></p>
            <div class="modal-actions">
                <a id="modalLink" href="#" target="_blank" rel="noopener noreferrer" class="btn btn-primary" hidden>
                    View on GitHub
                </a>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
