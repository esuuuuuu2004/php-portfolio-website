<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mohammad Jamilon — Resume</title>
    <style>
        /* ── Reset & Base ─────────────────────────────── */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            font-size: 10pt;
            color: #1a1a2e;
            background: #f4f5f7;
            line-height: 1.55;
        }

        a { color: inherit; text-decoration: none; }

        /* ── Page Wrapper ─────────────────────────────── */
        .page {
            max-width: 900px;
            margin: 24px auto;
            background: #fff;
            box-shadow: 0 4px 24px rgba(0,0,0,.12);
        }

        /* ── Sidebar + Main layout ────────────────────── */
        .layout {
            display: grid;
            grid-template-columns: 260px 1fr;
            min-height: 100%;
        }

        /* ── Sidebar ──────────────────────────────────── */
        .sidebar {
            background: #1a1a2e;
            color: #e8e8f0;
            padding: 36px 24px 32px;
        }

        .profile-photo {
            width: 108px;
            height: 108px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #6a0dad;
            display: block;
            margin: 0 auto 16px;
        }

        .profile-initials {
            width: 108px;
            height: 108px;
            border-radius: 50%;
            background: #6a0dad;
            color: #fff;
            font-size: 2.2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }

        .sidebar-name {
            font-size: 17pt;
            font-weight: 700;
            color: #fff;
            text-align: center;
            line-height: 1.2;
        }

        .sidebar-title {
            font-size: 9pt;
            color: #a78bfa;
            text-align: center;
            letter-spacing: .08em;
            text-transform: uppercase;
            margin-top: 4px;
            margin-bottom: 24px;
        }

        .sidebar-divider {
            border: none;
            border-top: 1px solid rgba(255,255,255,.12);
            margin: 18px 0;
        }

        .sidebar-section-title {
            font-size: 8pt;
            font-weight: 700;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: #a78bfa;
            margin-bottom: 10px;
        }

        /* Contact */
        .contact-list { list-style: none; }
        .contact-list li {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            font-size: 8.5pt;
            color: #c8c8d8;
            margin-bottom: 8px;
        }
        .contact-list .icon {
            font-size: 10pt;
            line-height: 1.3;
            flex-shrink: 0;
        }

        /* Skills */
        .skill-item { margin-bottom: 10px; }
        .skill-row {
            display: flex;
            justify-content: space-between;
            font-size: 8.5pt;
            color: #e0e0f0;
            margin-bottom: 3px;
        }
        .skill-bar-bg {
            height: 5px;
            background: rgba(255,255,255,.12);
            border-radius: 10px;
            overflow: hidden;
        }
        .skill-bar-fill {
            height: 100%;
            background: linear-gradient(90deg, #6a0dad, #a78bfa);
            border-radius: 10px;
        }

        /* Languages */
        .lang-list { list-style: none; }
        .lang-list li {
            font-size: 8.5pt;
            color: #c8c8d8;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .lang-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #6a0dad;
            flex-shrink: 0;
        }

        /* ── Main Content ─────────────────────────────── */
        .main {
            padding: 36px 32px 32px;
        }

        /* Section */
        .section {
            margin-bottom: 26px;
        }

        .section-title {
            font-size: 11pt;
            font-weight: 700;
            color: #6a0dad;
            letter-spacing: .06em;
            text-transform: uppercase;
            padding-bottom: 5px;
            border-bottom: 2px solid #6a0dad;
            margin-bottom: 14px;
        }

        /* Summary */
        .summary-text {
            font-size: 9.5pt;
            color: #3a3a5a;
            line-height: 1.65;
        }

        /* Experience / Education entries */
        .entry { margin-bottom: 16px; }
        .entry-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 8px;
        }
        .entry-title {
            font-size: 10pt;
            font-weight: 700;
            color: #1a1a2e;
        }
        .entry-date {
            font-size: 8pt;
            color: #6a0dad;
            white-space: nowrap;
            font-weight: 600;
            background: #f3e8ff;
            padding: 2px 8px;
            border-radius: 50px;
        }
        .entry-sub {
            font-size: 8.5pt;
            color: #6a6a8a;
            margin: 2px 0 6px;
        }
        .entry-desc {
            font-size: 9pt;
            color: #3a3a5a;
            line-height: 1.6;
        }
        .entry-desc ul {
            margin: 4px 0 0 16px;
        }
        .entry-desc ul li { margin-bottom: 3px; }

        /* Tags */
        .tags { display: flex; flex-wrap: wrap; gap: 5px; margin-top: 7px; }
        .tag {
            font-size: 7.5pt;
            background: #f3e8ff;
            color: #6a0dad;
            border: 1px solid #d8b4fe;
            padding: 2px 8px;
            border-radius: 50px;
            font-weight: 600;
        }

        /* Stats row */
        .stats-row {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
            margin-top: 14px;
        }
        .stat-box {
            text-align: center;
            background: #f9f5ff;
            border: 1px solid #e9d5ff;
            border-radius: 8px;
            padding: 10px 18px;
            flex: 1;
            min-width: 90px;
        }
        .stat-num {
            font-size: 15pt;
            font-weight: 700;
            color: #6a0dad;
        }
        .stat-lbl {
            font-size: 7.5pt;
            color: #6a6a8a;
        }

        /* ── Print ────────────────────────────────────── */
        @media print {
            body { background: #fff; font-size: 9pt; }
            .page { box-shadow: none; margin: 0; max-width: 100%; }
            .no-print { display: none !important; }
            .section { page-break-inside: avoid; }
        }

        /* ── Print button (screen only) ───────────────── */
        .print-bar {
            max-width: 900px;
            margin: 0 auto 0;
            padding: 10px 0;
            text-align: right;
        }
        .print-btn {
            background: #6a0dad;
            color: #fff;
            border: none;
            padding: 9px 22px;
            border-radius: 6px;
            font-size: 9pt;
            font-weight: 600;
            cursor: pointer;
            letter-spacing: .04em;
        }
        .print-btn:hover { background: #7c3aed; }
    </style>
</head>
<body>

<div class="print-bar no-print">
    <button class="print-btn" onclick="window.print()">&#128424; Print / Save as PDF</button>
</div>

<div class="page">
    <div class="layout">

        <!-- ════════════ SIDEBAR ════════════ -->
        <aside class="sidebar">

            <!-- Photo / Initials -->
            <img class="profile-photo"
                 src="images/projects/ProfilePic.png"
                 alt="Mohammad"
                 onerror="this.style.display='none';document.getElementById('initials').style.display='flex'">
            <div class="profile-initials" id="initials" style="display:none;">MJ</div>

            <div class="sidebar-name">Mohammad Jamilon</div>
            <div class="sidebar-title">Full-Stack Developer</div>

            <hr class="sidebar-divider">

            <!-- Contact -->
            <div class="sidebar-section-title">Contact</div>
            <ul class="contact-list">
                <li>
                    <span class="icon">📍</span>
                    <span>Zamboanga City, Philippines</span>
                </li>
                <li>
                    <span class="icon">✉️</span>
                    <span>jamilon.mohammad<br>@gmail.com</span>
                </li>
                <li>
                    <span class="icon">📞</span>
                    <span>+63 9559952920</span>
                </li>
                <li>
                    <span class="icon">🔗</span>
                    <span>github.com/esuuuuuu2004</span>
                </li>
            </ul>

            <hr class="sidebar-divider">

            <!-- Skills -->
            <div class="sidebar-section-title">Technical Skills</div>

            <div class="skill-item">
                <div class="skill-row"><span>HTML5</span><span>98%</span></div>
                <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:98%"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-row"><span>CSS3</span><span>95%</span></div>
                <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:95%"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-row"><span>PHP</span><span>90%</span></div>
                <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:90%"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-row"><span>Git</span><span>88%</span></div>
                <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:88%"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-row"><span>JavaScript</span><span>85%</span></div>
                <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:85%"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-row"><span>Flutter / Dart</span><span>85%</span></div>
                <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:85%"></div></div>
            </div>
            <div class="skill-item">
                <div class="skill-row"><span>MySQL</span><span>80%</span></div>
                <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:80%"></div></div>
            </div>

            <hr class="sidebar-divider">

            <!-- Languages -->
            <div class="sidebar-section-title">Languages</div>
            <ul class="lang-list">
                <li><span class="lang-dot"></span>English — Proficient</li>
                <li><span class="lang-dot"></span>Filipino — Native</li>
            </ul>

            <hr class="sidebar-divider">

            <!-- Availability -->
            <div class="sidebar-section-title">Availability</div>
            <p style="font-size:8.5pt;color:#86efac;">✅ Open to freelance &amp; full-time</p>

        </aside>

        <!-- ════════════ MAIN ════════════ -->
        <main class="main">

            <!-- Summary -->
            <div class="section">
                <div class="section-title">Profile</div>
                <p class="summary-text">
                    Full-stack web developer with 2+ years of hands-on experience building dynamic,
                    scalable, and visually engaging web applications. Specialises in PHP and JavaScript,
                    with strong proficiency across the full stack — from database design in MySQL to
                    responsive front-end interfaces. Also experienced in cross-platform mobile development
                    with Flutter. Passionate about clean code, user experience, and delivering real
                    solutions to real problems. Currently available for freelance projects and
                    open-source collaborations.
                </p>
            </div>

            <!-- Key Achievements -->
            <div class="section">
                <div class="section-title">Achievements at a Glance</div>
                <div class="stats-row">
                    <div class="stat-box">
                        <div class="stat-num">4+</div>
                        <div class="stat-lbl">Projects Completed</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">6+</div>
                        <div class="stat-lbl">Happy Clients</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">2+</div>
                        <div class="stat-lbl">Years Experience</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-num">1000+</div>
                        <div class="stat-lbl">GitHub Commits</div>
                    </div>
                </div>
            </div>

            <!-- Projects / Experience -->
            <div class="section">
                <div class="section-title">Projects &amp; Experience</div>

                <!-- Project 1 -->
                <div class="entry">
                    <div class="entry-header">
                        <div class="entry-title">Al-Furqan Islamic Institute — Enrollment &amp; Academic Management System</div>
                        <span class="entry-date">2024</span>
                    </div>
                    <div class="entry-sub">System Analyst &amp; Assistant Frontend Engineer</div>
                    <div class="entry-desc">
                        <ul>
                            <li>Designed and implemented a comprehensive web-based enrollment and academic management system for Al-Furqan Islamic Institute (Madrasa).</li>
                            <li>Handled student enrollment workflows, class scheduling, grade management, and report generation.</li>
                            <li>Contributed to UI/UX decisions and built responsive front-end components.</li>
                        </ul>
                    </div>
                    <div class="tags">
                        <span class="tag">PHP</span>
                        <span class="tag">MySQL</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">HTML</span>
                        <span class="tag">CSS</span>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="entry">
                    <div class="entry-header">
                        <div class="entry-title">Barangay Legal Aid (BLA) AI Chatbot Legal Advisory</div>
                        <span class="entry-date">2024</span>
                    </div>
                    <div class="entry-sub">Frontend &amp; Backend Developer</div>
                    <div class="entry-desc">
                        <ul>
                            <li>Built a Flutter mobile application providing AI-powered legal advisory services to barangay residents.</li>
                            <li>Developed an intelligent chatbot interface using Firebase and integrated an admin dashboard for case tracking.</li>
                            <li>Handled both UI layer and backend data architecture end-to-end.</li>
                        </ul>
                    </div>
                    <div class="tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">Dart</span>
                        <span class="tag">Firebase</span>
                        <span class="tag">AI / Chatbot</span>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="entry">
                    <div class="entry-header">
                        <div class="entry-title">AceMoneyQuest — Financial Saving &amp; Money Tracker App</div>
                        <span class="entry-date">2023</span>
                    </div>
                    <div class="entry-sub">Solo Developer</div>
                    <div class="entry-desc">
                        <ul>
                            <li>Independently designed and built a Flutter mobile app for personal finance tracking.</li>
                            <li>Implemented savings goal setting, daily expense tracking, and spending visualisation with charts.</li>
                        </ul>
                    </div>
                    <div class="tags">
                        <span class="tag">Flutter</span>
                        <span class="tag">Dart</span>
                        <span class="tag">Finance</span>
                        <span class="tag">Mobile</span>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="entry">
                    <div class="entry-header">
                        <div class="entry-title">PHP Portfolio Website</div>
                        <span class="entry-date">2025</span>
                    </div>
                    <div class="entry-sub">Solo Developer</div>
                    <div class="entry-desc">
                        <ul>
                            <li>Built this enterprise-level personal portfolio using PHP, CSS3, and vanilla JavaScript.</li>
                            <li>Features include AOS scroll animations, dark mode, a draggable project carousel, animated skill bars, stat counters, multi-image modal viewer, and a server-side validated contact form.</li>
                        </ul>
                    </div>
                    <div class="tags">
                        <span class="tag">PHP</span>
                        <span class="tag">CSS3</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">AOS</span>
                    </div>
                </div>

            </div>

            <!-- Education -->
            <div class="section">
                <div class="section-title">Education</div>

                <div class="entry">
                    <div class="entry-header">
                        <div class="entry-title">Bachelor of Science in Information Technology</div>
                        <span class="entry-date">2022 – Present</span>
                    </div>
                    <div class="entry-sub">Western Mindanao State University,Zamboanga City, Philippines</div>
                    <div class="entry-desc">
                        Focused on web application development, database systems, software engineering principles,
                        and mobile application development.
                    </div>
                </div>

            </div>

        </main>

    </div>
</div>

</body>
</html>
