<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assessment test</title>

    <!-- Usually i use SASS, browserify / webpack for moduler JS -->
    <!-- For assessment purpose i am skipped overhead and using default CSS layouts from foundation framework -->
    <link rel="stylesheet" href="<?= $BASE ?>/assets/css/foundation.min.css">
    <style>
        .headline { padding: 20px 0 10px; }
    </style>
</head>
<body>

<header class="header">
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="dropdown menu">
                <li class="menu-text">Assessment test</li>
                <li><a href="<?= $BASE ?>/tasks">All tasks</a></li>
                <li><a href="<?= $BASE ?>/tasks/create">Add new task</a></li>
            </ul>
        </div>
    </div>
</header>