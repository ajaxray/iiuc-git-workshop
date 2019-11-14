<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Basic Page Needs
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>IIUC GIT Workshop</title>
    <meta name="description" content="Introducing GIT to IIUC Students">
    <meta name="author" content="Anis Uddin Ahmad">

    <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

    <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">

    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

<!-- Primary Page Layout
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<div class="container">
    <div class="row" style="margin-top: 5%">
        <div class="nine columns">
            <h1>VCS for Teamwork</h1>
            <h3>
                Introducing <a href="https://git-scm.com/" target="_blank">GIT</a>
                to <a href="https://www.iiuc.ac.bd/" target="_blank">IIUC</a> Students
            </h3>
        </div>
        <div class="three columns">
            <img src="images/git.png" width="100%"/>
        </div>
    </div>

    <hr/>

    <div class="row">
        <div class="two columns">
            <h5>Participants</h5>
            <ul>
                <?php
                $dir = new \DirectoryIterator(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'teams');
                foreach ($dir as $fileinfo) {
                    if ($fileinfo->getFilename()[0] != '.') {
                        $teamName = basename($fileinfo->getFilename(), '.html');
                        echo "<li><a href=\"?team={$teamName}\">{$teamName}</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
        <div class="ten columns">
            <?php
            if (isset($_GET['team'])) {
                include('teams' . DIRECTORY_SEPARATOR . $_GET['team'] . '.html');
            } else {
                ?>
                <h3>What are we gonna <b>achieve</b> today?</h3>
                <p>
                    Git is full of features and we will cover <u>just the basics</u> here.
                    I hope that this workshop will help you to get started with Git.
                    If you have any issues or questions about getting started, let us know&hellip;
                </p>
                <img src="images/team.png">
                <?
            }
            ?>

        </div>
    </div>
</div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
