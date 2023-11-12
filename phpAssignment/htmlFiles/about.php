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
    <title>About Me</title>

</head>
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

<body>
    <header>
        
        <div class="logo">
            <p>#OpenToWork</p>
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="mainicon">
           
        </label>
        <nav>
            <a href="portfolio.php" class="active">Home</a>
            <a href="#">About</a>
            <a href="skills.php">Skills</a>
        </nav>

    </header>

    <section class="about" >
        <div class="main" >
            <div class="detail">
                <h1><span>About Me</span></h1>
                <p>I am a senior Computer Science student at the Lebanese American University. I have completed courses in Intro to Object-Oriented Programming, 
                    Object-Oriented Programming, Database Systems, Operating Systems, and Software Engineering. My primary interests lie in web development and mobile development. 
                    During the last summer, I had the opportunity to complete two internships that significantly enriched my skillset. One was at Middle East Airlines, where I gained 
                    valuable experience across various departments, including networking and security, infrastructure, data centers, application development, database management,
                     and IT help desk support. I also contributed to the creation of a database for a newly opened library within the company. Additionally, I participated in an
                      online internship at IDS, where I learned and worked with the .NET Framework. Regarding my projects, I have collaborated with my teammates on several noteworthy 
                      endeavors. We developed a website for a local motel and created a database for a university using Oracle DB. Furthermore, I independently designed software for
                       a gym management system and another for a bank as part of my Object-Oriented Programming course.</p>
                
            </div>
            <div id="mea">
                <img src="../images/img/meaa.png" alt="profile picture"  width="99%" >
            </div>
        </div>
    </section>

</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
    
</style>

</html>
