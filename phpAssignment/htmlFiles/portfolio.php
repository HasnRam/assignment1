<?php
session_start(); // Start the session on every page you want to access session variables
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy the session
    header('Location: ../index.html'); // Redirect to the appropriate page after logout
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssFiles/portfolio.css">
    <link rel="stylesheet" href="../cssFiles/mStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"><!---used for the icons only and it has not other use-->
    <title>Portfolio</title>
    <style>
        @media only screen and (max-width:480px) {
            .menu {
                display: block;
                font-size: 1.5rem;
                font-weight: bold;
                color: #244D61;
            }

            header {
                padding: 0.7rem 1rem;
                align-items: center;
                max-width: 100%;

            }

            nav {
                position: absolute;
                display: grid;
                top: 75px;
                text-align: center;
                background-color: #1F252E;
                left: -100%;
                z-index: 1;
                width: 100%;
            }

            #click:checked~nav {
                left: 0%;
                transition: all 0.3s ease;
            }

            section {
                margin: 1rem 1.5rem;
            }

        }
    </style>
</head>

<body>
<div>
<div style="position: fixed; top: 10px; left: 30px; color: white; z-index: 999; display:inline;"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?><a href="?logout"  style="margin-left: 30px; color: white">   Logout</a> <!-- Logout anchor --></div>
    <div class="row right-content" id="header">
        <div id="dropdown-menu">
            <span>MENU<i class="ico burger-ico"></i></span>
            <div class="dropdown-content  menu-rtl">
                <ul>
                    <a href="gallery.php">
                        <li>Gallery<i class="ico ico-l user-ico"></i></li>
                    </a>
                    <a href="about.php">
                        <li>Portfolio<i class="ico ico-l wallet-ico"></i></li>
                    </a>
                    <a href="page3.php">
                        <li>Main<i class="ico ico-l gallery-ico"></i></li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    </div>
    <header>
    
        <div class="logo">
            <p>#OpenToWork</p>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="mainicon">
            
        </label>
        <nav>
            <a href="#" class="active">Home</a>
            <a href="about.php">About</a>
            <a href="skills.php">Skills</a>
        </nav>
    </header>


    <section>
        <div class="main">
            <div class="detail">
                <h1><span>Hi, It's Me</span> <br> I'm <span style="color:#00E8F8;">Hasan Ramadan</span></h1>
                <p>Senior Computer Science Student at the Lebananese American University </p>
                <div class="social">
                    <a href="https://github.com/HasnRam"><i class="bi bi-github"></i></a>
                    <a href="https://www.linkedin.com/in/hasan-ramadan-9a621722b"><i class="bi bi-linkedin"></i></a>
                    <a href="ramadanhasan118@gmail.com@gmail.com"><i class="bi bi-envelope"></i></a>
                    <a href="tel:0096178803588"><i class="bi bi-phone"></i></a>
                </div>
            </div>
            <div class="images">
                <img src="../images/img/me.png" alt="profile picture" width="100%">
            </div>
        </div>
    </section>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
</style>

</html>