<?php
// File: index.php
// Purpose: home page
require_once ('./dbsetup.php');
?> <html>
<head>
    <title>Game Library</title>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!-- BOOTSTRAP Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- BOOTSTRAP Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- BOOTSTRAP Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<div class="gamelibrary-masthead">
    <div class="container">
        <nav class="gamelibrary-nav">
            <a class="gamelibrary-nav-item active" href="./index.php">Game <i style="font-size: 18px;" class="fa fa-gamepad" aria-hidden="true"></i> Library  </a>
            <div class="pull-right">
                <a class="gamelibrary-nav-item" href="./list.php?entity=platforms">Platforms</a>
                <a class="gamelibrary-nav-item" href="./list.php?entity=developers">Developers</a>
                <a class="gamelibrary-nav-item" href="./list.php?entity=players">Players</a>
                <a class="gamelibrary-nav-item" href="./list.php?entity=games">Games</a>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 gamelibrary-main">

            <div class="gamelibrary-post">
                <h2 class="gamelibrary-post-title"><i class="fa fa-home" aria-hidden="true"></i> Home Page</h2>
                <hr>
                <p>Game Library is an intricate database for storing all of your gaming-related information, from the state of your games to the high scores of each player to the user platforms--everything you need, all in one place.</p>
                <hr>
                <p>This site is a graphical interface into the heart of our game library. Visit Platforms for an example of the kind of storage we implement. Play around, search, insert, update, delete, and view relationships at your leisure.</p>
                <hr>
                <p>Game Library is a database for video game players. It was designed to help players keep track of scores, states, and stats for their favorite titles. The site is driven by a developer and player community.</p>
            </div><!-- /.gamelibrary-post -->

        </div><!-- /.gamelibrary-main -->

        <div class="col-sm-3 col-sm-offset-1 gamelibrary-sidebar">
            <div class="sidebar-module">
                <h4>Lists</h4>
                <ol class="list-unstyled">
                    <li><a href="./list.php?entity=platforms">Platforms</a></li>
                    <li><a href="./list.php?entity=developers">Developers</a></li>
                    <li><a href="./list.php?entity=players">Players</a></li>
                    <li><a href="./list.php?entity=games">Games</a></li>
                </ol>
            </div>
        </div><!-- /.gamelibrary-sidebar -->

    </div><!-- /.row -->

</div><!-- /.container -->

<footer class="gamelibrary-footer">
    <p><a href="DesignDoc.pdf">Project Design Document</a>.</p>
</footer>

</div>
</body>
</html>
