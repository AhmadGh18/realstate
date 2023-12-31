<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">

                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    role="img">
                                    <title>Menu</title>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div>
                        <!--//col-->
                        <div class="search-mobile-trigger d-sm-none col">
                            <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
                        </div>
                        <!--//col-->
                        <div class="app-search-box col">
                            <form class="app-search-form">
                                <input type="text" placeholder="Search..." name="search"
                                    class="form-control search-input">
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <!--//app-search-box-->

                        <div class="app-utilities col-auto">
                            <div class="app-utility-item app-notifications-dropdown dropdown">
                                <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle"
                                    data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"
                                    title="Notifications">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z" />
                                        <path fill-rule="evenodd"
                                            d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                    </svg>
                                    <span class="icon-badge">3</span>
                                </a>
                                <!--//dropdown-toggle-->

                                <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
                                    <div class="dropdown-menu-header p-3">
                                        <h5 class="dropdown-menu-title mb-0">Notifications</h5>
                                    </div>
                                    <!--//dropdown-menu-title-->
                                    <div class="dropdown-menu-content">
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <img class="profile-image"
                                                        src="assets/images/profiles/profile-1.png" alt="">
                                                </div>
                                                <!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">Amy shared a file with you. Lorem ipsum dolor
                                                            sit amet, consectetur adipiscing elit. </div>
                                                        <div class="meta"> 2 hrs ago</div>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                            </div>
                                            <!--//row-->
                                            <a class="link-mask" href="notifications.php"></a>
                                        </div>
                                        <!--//item-->
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="app-icon-holder">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-receipt" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
                                                            <path fill-rule="evenodd"
                                                                d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">You have a new invoice. Proin venenatis
                                                            interdum est.</div>
                                                        <div class="meta"> 1 day ago</div>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                            </div>
                                            <!--//row-->
                                            <a class="link-mask" href="notifications.php"></a>
                                        </div>
                                        <!--//item-->
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <div class="app-icon-holder icon-holder-mono">
                                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                            class="bi bi-bar-chart-line" fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">Your report is ready. Proin venenatis interdum
                                                            est.</div>
                                                        <div class="meta"> 3 days ago</div>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                            </div>
                                            <!--//row-->
                                            <a class="link-mask" href="notifications.php"></a>
                                        </div>
                                        <!--//item-->
                                        <div class="item p-3">
                                            <div class="row gx-2 justify-content-between align-items-center">
                                                <div class="col-auto">
                                                    <img class="profile-image"
                                                        src="assets/images/profiles/profile-2.png" alt="">
                                                </div>
                                                <!--//col-->
                                                <div class="col">
                                                    <div class="info">
                                                        <div class="desc">James sent you a new message.</div>
                                                        <div class="meta"> 7 days ago</div>
                                                    </div>
                                                </div>
                                                <!--//col-->
                                            </div>
                                            <!--//row-->
                                            <a class="link-mask" href="notifications.php"></a>
                                        </div>
                                        <!--//item-->
                                    </div>
                                    <!--//dropdown-menu-content-->

                                    <div class="dropdown-menu-footer p-2 text-center">
                                        <a href="notifications.php">View all</a>
                                    </div>

                                </div>
                                <!--//dropdown-menu-->
                            </div>
                            <!--//app-utility-item-->
                            <div class="app-utility-item">
                                <a href="settings.php" title="Settings">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                        <path fill-rule="evenodd"
                                            d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                    </svg>
                                </a>
                            </div>
                            <!--//app-utility-item-->

                            <div class="app-utility-item app-user-dropdown dropdown">
                                <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button"
                                    aria-expanded="false"><?php

                                                                                                                                                            include("connection.php");

                                                                                                                                                            // Assuming you have a valid session with the user ID
                                                                                                                                                            $userID = $_SESSION['id'];

                                                                                                                                                            $sql = "SELECT profile_pic_url FROM users WHERE id = '$userID'";
                                                                                                                                                            $res = mysqli_query($conn, $sql);

                                                                                                                                                            if ($res) {
                                                                                                                                                                $user = mysqli_fetch_assoc($res);
                                                                                                                                                                $profilePicURL = $user['profile_pic_url'];

                                                                                                                                                                if (!empty($profilePicURL)) {
                                                                                                                                                                    echo '<img class="profile-image" src="' . $profilePicURL . '" alt="">';
                                                                                                                                                                } else {
                                                                                                                                                                    // Display a default image or any other content when there is no profile picture
                                                                                                                                                                    echo '<img class="default-image" src="assets/Default_pfp (1).jpg" alt="Default Image">';
                                                                                                                                                                }
                                                                                                                                                            } else {
                                                                                                                                                                echo "Error fetching user information: " . mysqli_error($conn);
                                                                                                                                                            }

                                                                                                                                                            mysqli_close($conn);
                                                                                                                                                            ?></a>
                                <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                                    <li><a class="dropdown-item" href="account.php">Account</a></li>
                                    <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="login.php">Log Out</a></li>
                                </ul>
                            </div>
                            <!--//app-user-dropdown-->
                        </div>
                        <!--//app-utilities-->
                    </div>
                    <!--//row-->
                </div>
                <!--//app-header-content-->
            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/images/app-logo.svg"
                            alt="logo"><span class="logo-text">PORTAL</span></a>

                </div>
                <!--//app-branding-->

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link active" href="index.php">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                        <path fill-rule="evenodd"
                                            d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Overview</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="docs.php">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z" />
                                        <path fill-rule="evenodd"
                                            d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Docs</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="orders.php">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path fill-rule="evenodd"
                                            d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                        <circle cx="3.5" cy="5.5" r=".5" />
                                        <circle cx="3.5" cy="8" r=".5" />
                                        <circle cx="3.5" cy="10.5" r=".5" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Payments</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <!--//nav-item-->
                        <li class="nav-item has-submenu">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse"
                                data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
                                <span class="nav-icon">
                                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
                                        <path
                                            d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Pages</span>
                                <span class="submenu-arrow">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </span>
                                <!--//submenu-arrow-->
                            </a>
                            <!--//nav-link-->
                            <div id="submenu-1" class="collapse submenu submenu-1" data-bs-parent="#menu-accordion">
                                <ul class="submenu-list list-unstyled">
                                    <li class="submenu-item"><a class="submenu-link" href="notifications.php">View
                                            employee</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="account.php">Account</a></li>
                                    <li class="submenu-item"><a class="submenu-link" href="settings.php">Company
                                            Info</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--//nav-item-->

                        <!--//nav-item-->



                        <!--//nav-item-->


                        <!--//nav-item-->
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="Addemployee.php">
                                <span class="nav-icon">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Add employee</span>
                            </a>
                            <!--//nav-link-->
                        </li>


                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="notifications.php">
                                <span class="nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
                                        viewBox="0 0 448 512">
                                        <path
                                            d="M224 0c-17.7 0-32 14.3-32 32V51.2C119 66 64 130.6 64 208v25.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V208c0-77.4-55-142-128-156.8V32c0-17.7-14.3-32-32-32zm0 96c61.9 0 112 50.1 112 112v25.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V208c0-61.9 50.1-112 112-112zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">view employee</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                        <li class="nav-item">
                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                            <a class="nav-link" href="uploadPage.php">
                                <span class="nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12"
                                        viewBox="0 0 384 512">
                                        <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                        <path
                                            d="M384 192c0 87.4-117 243-168.3 307.2c-12.3 15.3-35.1 15.3-47.4 0C117 435 0 279.4 0 192C0 86 86 0 192 0S384 86 384 192z" />
                                    </svg>
                                </span>
                                <span class="nav-link-text">Add realestate</span>
                            </a>
                            <!--//nav-link-->
                        </li>
                    </ul>





                    <!--//app-menu-->
                </nav>
                <!--//app-nav-->
                <div class="app-sidepanel-footer">
                    <nav class="app-nav app-nav-footer">
                        <ul class="app-menu footer-menu list-unstyled">
                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link" href="settings.php">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
                                            <path fill-rule="evenodd"
                                                d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Settings</span>
                                </a>
                                <!--//nav-link-->
                            </li>
                            <!--//nav-item-->
                            <!--//nav-item-->
                        </ul>
                        <!--//footer-menu-->
                    </nav>
                </div>
                <!--//app-sidepanel-footer-->

            </div>
            <!--//sidepanel-inner-->
        </div>
        <!--//app-sidepanel-->
    </header>
    <!--//app-header-->

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <h1 class="app-page-title">Overview</h1>


                <div class="row g-4 mb-4">
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Appartamant</h4>
                                <div class="stats-figure">
                                    <?php
                                    include('connection.php');
                                    $sql = "SELECT COUNT(*) AS cont FROM realstate";
                                    $res = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($res);
                                    echo $row['cont'];
                                    ?>


                                </div>
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
                                    </svg> 20%
                                </div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->

                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Clients


                                </h4>
                                <div class="stats-figure">
                                    <?php
                                    include('connection.php');
                                    $sql = "SELECT COUNT(*) AS cont FROM client";
                                    $res = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($res);
                                    echo $row['cont'];


                                    ?>


                                </div>
                                <div class="stats-meta text-success">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-down"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z" />
                                    </svg> 5%
                                </div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">TOtal sale</h4>
                                <div class="stats-figure"> <?php
                                                            include('connection.php');
                                                            $sql = "SELECT sum(amount) AS cont FROM transaction";
                                                            $res = mysqli_query($conn, $sql);
                                                            $row = mysqli_fetch_assoc($res);
                                                            echo $row['cont'];


                                                            ?>

                                </div>
                                <div class="stats-meta">
                                    Open</div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                    <div class="col-6 col-lg-3">
                        <div class="app-card app-card-stat shadow-sm h-100">
                            <div class="app-card-body p-3 p-lg-4">
                                <h4 class="stats-type mb-1">Revene</h4>
                                <div class="stats-figure"><?php
                                                            $sql3 = "SELECT
    (SELECT SUM(amount) FROM transaction) - 
    (SELECT SUM(price) FROM realstate WHERE id IN (SELECT realstateid FROM transaction)) AS net_balance;
";

                                                            $res = mysqli_query($conn, $sql3);

                                                            // Check if the query was successful
                                                            if ($res) {
                                                                $data = mysqli_fetch_assoc($res);

                                                                // Echo the net_balance value
                                                                echo $data['net_balance'];
                                                            } else {
                                                                // Handle the case when the query fails
                                                                echo "Error executing the query: " . mysqli_error($conn);
                                                            }
                                                            ?>

                                </div>
                            </div>
                            <!--//app-card-body-->
                            <a class="app-card-link-mask" href="#"></a>
                        </div>
                        <!--//app-card-->
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->

                <!--//row-->

            </div>
            <!--//container-fluid-->
        </div>
        <!--//app-content-->

        <h1>Edit some Info</h1>
        <div class="loca">
            <form action="addlocations.php" method="post">
                <h3>Add Location for the company</h3>
                <div id="locationsContainer">
                    <input type="text" class="locinp" name="locations" />
                </div>
                <input type="submit" class="btn btn-primary" value="Submit" onclick="submitForm()" />

            </form>
        </div>
        <?php
        include("connection.php");
        $sql = "SELECT * FROM locations";
        $result = mysqli_query($conn, $sql);

        $locationsArray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $locationsArray[] = $row;
        }
        ?>
        <table id="locationsTable" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <td>delete</td>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($locationsArray as $location) : ?>
                <tr>
                    <td><?= $location['id'] ?></td>
                    <td><?= $location['name'] ?></td>
                    <td><a href="deleteloc.php?id=<?= $location['id'] ?>">Delete</a></td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
        </style>

        <style>
        .locinp {
            display: block;
            margin: 20px;
            width: 300px;
            height: 30px;
        }

        .addloc {
            padding: 10px;
            background-color: black;
            color: white;
            border-radius: 20px;
            cursor: pointer;
        }
        </style>
    </div>
    <!--//app-wrapper-->


    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

</body>

</html>