<?php
ob_start();
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<style>
     .icon {

grid-row: 3/4;
grid-column: 4/5;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="icon">
            <div class="icon">
                <img src="img/m.jpg" width="70" height="70"> </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view&id">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?edit&id">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['logged_in'])) { ?>
                            <a href="process.php?logout" class="nav-link">Logout</a>
                        <?php } else { ?>
                            <a href="login.php" class="nav-link">Login</a>
                        <?php } ?>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
  