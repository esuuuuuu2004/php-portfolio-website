<?php
// contact.php
$pageTitle = "Contact";
$success   = isset($_GET['success']) && $_GET['success'] === '1';

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
                        &#10003; Your message has been sent! I'll be in touch soon.
                    </div>
                    <?php endif; ?>

                    <!--
                        Web3Forms: free email service — no server config needed.
                        Get your free access key at https://web3forms.com
                        then replace YOUR_ACCESS_KEY_HERE below.
                    -->
                    <form id="contactForm"
                          method="POST"
                          action="https://api.web3forms.com/submit"
                          novalidate>

                        <!-- Web3Forms hidden fields -->
                        <input type="hidden" name="access_key" value="619dd36f-288c-421d-a86b-df536eef3404">
                        <input type="hidden" name="subject" value="New message from your Portfolio">
                        <input type="hidden" name="from_name" value="Portfolio Contact Form">
                        <input type="hidden" name="redirect" value="contact.php?success=1">
                        <input type="checkbox" name="botcheck" style="display:none;">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text"
                                       id="name" name="name"
                                       placeholder="John Doe"
                                       data-required data-label="Full Name"
                                       autocomplete="name" required>
                                <div class="form-field-error" data-error="name"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email"
                                       id="email" name="email"
                                       placeholder="john@example.com"
                                       data-required data-label="Email Address"
                                       autocomplete="email" required>
                                <div class="form-field-error" data-error="email"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject_field">Subject *</label>
                            <input type="text"
                                   id="subject_field" name="subject_field"
                                   placeholder="Project Inquiry / Freelance Work"
                                   data-required data-label="Subject" required>
                            <div class="form-field-error" data-error="subject_field"></div>
                        </div>

                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message"
                                      placeholder="Tell me about your project, timeline, and budget..."
                                      data-required data-label="Message"
                                      required></textarea>
                            <div class="form-field-error" data-error="message"></div>
                        </div>

                        <button type="submit" id="submitBtn" class="btn btn-primary" style="width:100%;justify-content:center;">
                            Send Message &#8594;
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>
