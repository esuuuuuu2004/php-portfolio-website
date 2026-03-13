<?php
// data/projects.php
// 'images' => array of image paths (first image is used as card thumbnail)
// 'link'   => GitHub URL, or null if no public repo
// 'role'   => your contribution / role in the project

$projects = [
    [
        'id'          => 1,
        'title'       => 'Al-Furqan Islamic Institute — Enrollment & Academic Management System',
        'images'      => [
            'assets/images/projects/madrasa.png',
            'assets/images/projects/madrasalogo.png',
        ],
        'description' => 'A comprehensive enrollment and academic management system for Al-Furqan Islamic Institute (Madrasa). Handles student enrollment, class scheduling, grade management, and reporting — built as a full web application.',
        'role'        => 'System Analyst & Assistant Frontend Engineer',
        'tags'        => ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'],
        'link'        => 'https://github.com/YzrSaid/Al-Furqan-Islamic-Institute-Enrollment-and-Academic-Management-System',
        'featured'    => true,
    ],
    [
        'id'          => 2,
        'title'       => 'Barangay Legal Aid (BLA) AI Chatbot Legal Advisory',
        'images'      => [
            'assets/images/projects/blachatbot.png',
            'assets/images/projects/bladashboard.png',
        ],
        'description' => 'A Flutter-based mobile application that provides AI-powered legal advisory for barangay residents. Features an intelligent chatbot interface and an admin dashboard for managing legal inquiries and case tracking.',
        'role'        => 'Frontend & Backend Developer',
        'tags'        => ['Flutter', 'Dart', 'AI/Chatbot', 'Firebase'],
        'link'        => 'https://github.com/Fwhoop/BLA',
        'featured'    => true,
    ],
    [
        'id'          => 3,
        'title'       => 'AceMoneyQuest',
        'images'      => [
            'assets/images/projects/acemoneyquestfeature1.png',
            'assets/images/projects/acemoneyquestfeature2.png',
        ],
        'description' => 'My first solo Flutter project — a financial saving and money tracker app. Helps users set savings goals, track daily expenses, and visualize spending habits with clean charts and a friendly UI.',
        'role'        => 'Solo Developer',
        'tags'        => ['Flutter', 'Dart', 'Finance', 'Mobile'],
        'link'        => null,
        'featured'    => true,
    ],
    [
        'id'          => 4,
        'title'       => 'PHP Portfolio Website',
        'images'      => [
            'assets/images/projects/portfolio.png',
        ],
        'description' => 'This very portfolio — a dynamic, enterprise-level site built with PHP. Features AOS animations, dark mode toggle, a draggable project carousel, animated skill bars, stat counters, a modal project viewer, and a PHP-validated contact form.',
        'role'        => 'Solo Developer',
        'tags'        => ['PHP', 'CSS3', 'JavaScript', 'AOS'],
        'link'        => null,
        'featured'    => false,
    ],
    [
        'id'          => 5,
        'title'       => 'Coming Soon',
        'images'      => [],
        'description' => 'More projects are on the way. Stay tuned for updates — or reach out if you want to collaborate on something exciting.',
        'role'        => '',
        'tags'        => [],
        'link'        => null,
        'featured'    => false,
    ],
];
