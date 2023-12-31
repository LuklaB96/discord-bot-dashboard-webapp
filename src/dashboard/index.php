<?php
session_start();

if ($_SESSION['auth'] == false) {
    header("Location: ../index.html");
}
extract($_SESSION['data']);

$user_avatar_link = "https://cdn.discordapp.com/avatars/$id/$avatar.jpg";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css">
    <script src="https://kit.fontawesome.com/5cbe123f3b.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type='module' src='../js/index.js'></script>
    <title>Document</title>
</head>

<body class="dark-theme || light-theme">
    <div class="dashboard-container">
        <div class="top-container">
            <nav class="top-navbar navbar-horizontal p-0 m-0">
                <div>
                    <button class="button-base navbar-button-collapse ms-3 me-3" onclick="RefreshSubMenu()"><i
                            class="fa-solid fa-bars"></i></button>
                </div>
                <div>
                    <ul>
                        <li><a href="#logo" class="link-active pt-3 pb-3">Link 1</a></li>
                        <li><a href="#logo" class="pt-3 pb-3">Link 2</a></li>
                        <li><a href="#logo" class="pt-3 pb-3">Link 3</a></li>
                        <li><a href="#logo" class="pt-3 pb-3">Link 4</a></li>
                        <li><a href="#logo" class="pt-3 pb-3">Link 5</a></li>
                        <li><a href="#logo" class="pt-3 pb-3">Link 6</a></li>
                    </ul>
                </div>
                <div>
                    <a href="#profile"><img class="img-avatar-navbar" src="<?php echo $user_avatar_link ?>"
                            alt="Avatar"></a>
                </div>
            </nav>
        </div>
        <div class="main-page">
            <nav class="left-navbar">
                <ul>
                    <li>
                        <div class="sub-container" id="submenu-parent">
                            <a href="#logo" class="" style="font-size: 15px;">
                                <div class="submenu-main-item">
                                    <div>
                                        <i class="fa-solid fa-home ms-2 me-3 p-0" style="font-size: 20px;"></i><span
                                            class="leftNavbarTitle">Dashboard</span>
                                    </div>
                                    <i class="fa-solid fa-angle-right ms-2 me-3"></i>
                                </div>
                            </a>
                            <div class="submenu" id="submenu">
                                <ul>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;">Link 1</a>
                                    </li>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;">Link 2</a>
                                    </li>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;">Link 3</a>
                                    </li>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;">Link 4</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#logo" class="" style="font-size: 15px;"><i class="fa-solid fa-chart-line ms-2 me-3"
                                style="font-size: 20px;"></i><span class="leftNavbarTitle">Charts</span></a>
                    </li>
                    <li>
                        <a href="#logo" class="" style="font-size: 15px;"><i class="fa-solid fa-users ms-2 me-3"
                                style="font-size: 20px;"></i><span class="leftNavbarTitle">Users</span></a>
                    </li>
                    <li>
                        <a href="#logo" class="" style="font-size: 15px;"><i class="fa-solid fa-sliders ms-2 me-3"
                                style="font-size: 20px;"></i><span class="leftNavbarTitle">Settings</span></a>
                    </li>
                    <li>
                        <div class="sub-container" id="submenu-parent1">
                            <a href="#logo" class="" style="font-size: 15px;">
                                <div class="submenu-main-item">
                                    <div>
                                        <i class="fa-solid fa-link ms-2 me-3 p-0" style="font-size: 20px;"></i><span
                                            class="leftNavbarTitle">Links</span>
                                    </div>
                                    <i class="fa-solid fa-angle-right ms-2 me-3"></i>
                                </div>
                            </a>
                            <div class="submenu" id="submenu1">
                                <ul>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;"><i
                                                class="fa-brands fa-github ms-2 me-3" style="font-size: 20px;"></i><span
                                                class="">Github</span></a>
                                    </li>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;"><i
                                                class="fa-brands fa-facebook ms-2 me-3"
                                                style="font-size: 20px;"></i><span class="">Facebook</span></a>
                                    </li>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;"><i
                                                class="fa-brands fa-youtube ms-2 me-3"
                                                style="font-size: 20px;"></i><span class="">Youtube</span></a>
                                    </li>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;"><i
                                                class="fa-brands fa-instagram ms-2 me-3"
                                                style="font-size: 20px;"></i><span class="">Instagram</span></a>
                                    </li>
                                    <li>
                                        <a href="#logo" class="p-3" style="font-size: 15px;"><i
                                                class="fa-brands fa-twitter ms-2 me-3"
                                                style="font-size: 20px;"></i><span class="">Twitter</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <span class="left-navbar-footer-text">@2023</span>
                    </li>
                </ul>
            </nav>
            <div class="page-content">
                <div class="card-base">
                    <h4>Joined recently</h4>
                    <div class="card-content-simple">
                        <span>Username</span>
                        <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=826&t=st=1696236212~exp=1696236812~hmac=d8bcc6497062f9d2efa20c118bd492fa1ccc8dee05415df40f5759bc802b2937"
                            alt="Avatar">
                    </div>
                </div>
                <div class="card-base">
                    <h4>Banned recently</h4>
                    <div class="card-content-simple">
                        <span>Username</span>
                        <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg?w=826&t=st=1696236212~exp=1696236812~hmac=d8bcc6497062f9d2efa20c118bd492fa1ccc8dee05415df40f5759bc802b2937"
                            alt="Avatar">
                    </div>
                </div>
                <div class="card-base">
                    <h4>Messages today</h4>
                    <div class="card-content-simple">
                        <span>48</span>
                        <i class="fa-solid fa-message"></i>
                    </div>
                </div>
                <div class="card-base">
                    <h4>Users banned</h4>
                    <div class="card-content-simple">
                        <span>342</span>
                        <i class="fa-solid fa-ban"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <button class="button-base btn-toggle light-dark-mode-switch"><i
            class="fa-solid fa-circle-half-stroke"></i></button>
    </div>
    <script>

    </script>
</body>

</html>