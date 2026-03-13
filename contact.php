<?php
// contact.php
$pageTitle = "Contact";

// ── PHP Form Handling ──
$success = $errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation
    if (empty($name))                         $errors['name']    = 'Your name is required.';
    if (empty($email))                        $errors['email']   = 'Your email is required.';
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = 'Please enter a valid email address.';
    if (empty($subject))                      $errors['subject'] = 'A subject is required.';
    if (strlen($message) < 10)               $errors['message'] = 'Message must be at least 10 characters.';

    if (empty($errors)) {
        // In production: use mail() or a library like PHPMailer
        // mail('you@example.com', $subject, $message, "From: $name <$email>");
        $success = true;
    }
}

include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/breadcrumbs.php';
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 data-aos="fade-down">Get In Touch</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            Have a project in mind? Let's talk about it.
        </p>
    </div>
</section>


<!-- ═══════════════════════════════════════
     CONTACT SECTION
════════════════════════════════════════ -->
<section class="section">
    <div class="container">
        <div class="contact-grid">

            <!-- Contact Info -->
            <div data-aos="fade-right">
                <span class="section-label">Contact</span>
                <h2 class="section-title">Let's <span>Work Together</span></h2>
                <div class="underline-bar"></div>
                <p style="color:var(--text-muted);margin-bottom:2rem;">
                    I'm always open to discussing new projects, creative ideas, or
                    opportunities to be part of an amazing team. Fill out the form and
                    I'll get back to you within 24 hours.
                </p>

                <div class="contact-item">
                    <div class="contact-icon">&#128205;</div>
                    <div class="contact-item-text">
                        <strong>Location</strong>
                        Zamboanga City, Philippines
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">&#128231;</div>
                    <div class="contact-item-text">
                        <strong>Email</strong>
                        <a href="mailto:jamilon.mohammad@gmail.com">jamilon.mohammad@gmail.com</a>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">&#128222;</div>
                    <div class="contact-item-text">
                        <strong>Phone</strong>
                        +63 9559952920
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">&#128336;</div>
                    <div class="contact-item-text">
                        <strong>Response Time</strong>
                        Within 24 hours
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div data-aos="fade-left" data-aos-delay="150">
                <div class="contact-form-card">

                    <?php if ($success): ?>
                    <div class="form-feedback success">
                        &#10003; Thank you, <?php echo htmlspecialchars($name); ?>! Your message has been sent. I'll be in touch soon.
                    </div>
                    <?php endif; ?>

                    <form id="contactForm" method="POST" action="contact.php" novalidate>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text"
                                       id="name" name="name"
                                       placeholder="John Doe"
                                       value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                                       data-required data-label="Full Name"
                                       autocomplete="name">
                                <?php if (!empty($errors['name'])): ?>
                                <div class="form-field-error"><?php echo htmlspecialchars($errors['name']); ?></div>
                                <?php endif; ?>
                                <div class="form-field-error" data-error="name"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email"
                                       id="email" name="email"
                                       placeholder="john@example.com"
                                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                                       data-required data-label="Email Address"
                                       autocomplete="email">
                                <?php if (!empty($errors['email'])): ?>
                                <div class="form-field-error"><?php echo htmlspecialchars($errors['email']); ?></div>
                                <?php endif; ?>
                                <div class="form-field-error" data-error="email"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text"
                                   id="subject" name="subject"
                                   placeholder="Project Inquiry / Freelance Work"
                                   value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>"
                                   data-required data-label="Subject">
                            <?php if (!empty($errors['subject'])): ?>
                            <div class="form-field-error"><?php echo htmlspecialchars($errors['subject']); ?></div>
                            <?php endif; ?>
                            <div class="form-field-error" data-error="subject"></div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message"
                                      placeholder="Tell me about your project, timeline, and budget..."
                                      data-required data-label="Message"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                            <?php if (!empty($errors['message'])): ?>
                            <div class="form-field-error"><?php echo htmlspecialchars($errors['message']); ?></div>
                            <?php endif; ?>
                            <div class="form-field-error" data-error="message"></div>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;">
                            Send Message &#8594;
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
