<?php
// data/skills.php

$skills = [
    ['name' => 'PHP',        'level' => 90, 'icon' => '🐘'],
    ['name' => 'JavaScript', 'level' => 85, 'icon' => '⚡'],
    ['name' => 'HTML5',      'level' => 98, 'icon' => '🌐'],
    ['name' => 'CSS3',       'level' => 95, 'icon' => '🎨'],
    ['name' => 'MySQL',      'level' => 80, 'icon' => '🗄️'],
    ['name' => 'Git',        'level' => 88, 'icon' => '🔀'],
    ['name' => 'Flutter',    'level' => 85, 'icon' => '💙'],
];

// Dynamic project count: only count projects that have at least one image
$_projectCount = isset($projects)
    ? count(array_filter($projects, fn($p) => !empty($p['images'])))
    : 4;

$stats = [
    ['label' => 'Projects Completed', 'value' => $_projectCount, 'suffix' => '+'],
    ['label' => 'Happy Clients',      'value' => 6,              'suffix' => '+'],
    ['label' => 'Years Experience',   'value' => 2,              'suffix' => '+'],
    ['label' => 'GitHub Commits',     'value' => 1000,           'suffix' => '+'],
];
