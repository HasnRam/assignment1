<?php
session_start(); // Start the session on every page you want to access session variables
if (isset($_GET['logout'])) {
    session_destroy(); // Destroy the session
    header('Location: ../index.html'); // Redirect to the appropriate page after logout
    exit();
}
?>


<html>
    <head>
        <title>
            Main
        </title>
        <link rel="stylesheet" href="../cssFiles/mStyle.css">
       
    </head>
    <body >

    <div>
        <div style="position: fixed; top: 10px; left: 30px; display:inline; color: white; z-index: 999;"><?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?><a href="?logout"  style="margin-left: 30px; color: white">   Logout</a> <!-- Logout anchor --></div>
        <div class="row right-content" id="header">
            <div id="dropdown-menu">
                <span>MENU<i class="ico burger-ico"></i></span>
                <div class="dropdown-content  menu-rtl">
                    <ul>
                        <a href="gallery.php">
                            <li>Gallery<i class="ico ico-l user-ico"></i></li>
                        </a>
                        <a href="portfolio.php">
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
        <div class="content">
            <h1 style="    border: 1px solid black;
                        text-align: center;
                        padding-top: 20px;
                    ">
                Hasan Ramadan
                
            </h1>
              
       

            
        </div>
    </body>
</html>