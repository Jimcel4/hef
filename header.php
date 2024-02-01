<?php
ob_start();
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- js -->
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url("img/pic2.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }

        .icon {
            grid-row: 3/4;
            grid-column: 4/5;
        }

        .zeke {
            margin-left: 600px;
           
        }

        .avatar {
            width: 10%;
            height: 10%;
            margin-left: 90%;
        }

       .nav-item {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="student.php">Student list</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="about.php">About</a>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto zeke"> <!-- Added ms-auto class to move the ul to the right -->
                <li class="nav-item">
                    <?php
                    if (isset($_SESSION['logged_in'])) { ?>
                        <div class="dropdown text-end" > <!-- Added text-end class to move the dropdown to the right -->
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="profileDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="avatar" align="right">
                                    <img src="img/profile.jpg" height="100%" width="100%" style="border-radius: 50%; ">
                                </div>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="profileDropdown" style="margin-left:78%;">
                                <li>
                                    <a class="dropdown-item" href="profile.php?profile&id=<?= $_SESSION['u_id'] ?>">View
                                        Profile</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="process.php?logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <a href="login.php" class="nav-link">Login</a>
                    <?php } ?>

                </li>
            </ul>

        </div>
        </div>
    </nav>
    <!-- navbar end -->