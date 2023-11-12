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
    <link rel="stylesheet" href="../cssFiles/mStyle.css">
    <link rel="stylesheet" href="../cssFiles/portfolio.css">
    <title>Skills</title>
    <style>
 /*"text-align: left; display: inline-block ; background-color: black ; position:inherit; color:white; z-index: 999;"*/

    </style>
</head>
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
        </div>
        <body>
            <header>
        <div class="logo">
            <p>#OpenToWork</p>
        </div>
        
        <label for="click" class="mainicon">
            
        </label>
        <nav>
            <a href="portfolio.php">Home</a>
            <a href="about.php">About</a>
            <a href="#" class="active">Skills</a>
          
           
        </nav>
    </header>

    <section class="skills">
        <div class="main">
           
                <h1><span>My Skills</span></h1>
                <ul class="skills-list">
                    <li class="skill-item">Python</li>
                    <li class="skill-item">Java</li>
                    <li class="skill-item">HTML</li>
                    <li class="skill-item">Assembly Language</li>
                    <li class="skill-item">CSS</li>
                    <li class="skill-item">Microsoft Office</li>
                    <li class="skill-item">Quartus Prime</li>
                    <li class="skill-item">ModelSim</li>
                    <li class="skill-item">Oscilloscope</li>
                    <li class="skill-item">Multimeter</li>
                    <li class="skill-item">Function</li>
                    <li class="skill-item">SQL</li>
                    <li class="skill-item">Draw.io</li>
                    <li class="skill-item">C</li>
                    <li class="skill-item">Flutter</li>
                    <li class="skill-item">Dart</li>
                    <li class="skill-item">Wireshark</li>
                    <li class="skill-item">CUDA</li>
                    <li class="skill-item">OpenMP</li>
                    <li class="skill-item">OpenACC</li>
                </ul>
            
        </div>
    </section>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
</style>

</html>
