<?php
    include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?PHP echo $data['title']; ?></title>
    <?PHP include_once("head.php"); ?>
</head>
<body>
    <?PHP include_once("header.php"); ?>
    <?PHP include_once("navbar.php"); ?>

    <div class="mb-5">
        <?PHP 
            if ($_GET["page"] == "home") {
                include_once("home.php");
            } elseif ($_GET["page"] == "personnel") {
                include_once("personnel.php");
            } elseif ($_GET["page"] == "about-us") {
                include_once("about-us.php");
            } elseif ($_GET["page"] == "test") {
                include_once("test.php");
            } elseif ($_GET["page"] == "information") {
                include_once("information.php");
            } else {
                header("Location: index.php?page=home");
            }
        ?>
    </div>
    
</body>
</html>