<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhB7Um_OuYJJd3zTlxstYTm3vNWEkcvDhlTw&usqp=CAU">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/style.css">
    <title>Denis Ruparel's Portfolio</title>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <a href="" class="logo">Portfolio</a>
        <i class='bx bx-menu'  id="menu-btn"></i>
        <nav class="menu-bar">
            <a href="#home">Home</a>
            <a href="#about">About Me!</a>
            <a href="#certifications">Certifications</a>
            <a href="#projects">Projects</a>
            <a href="logout.php" class="btn-nav">Logout</a>

        </nav>
    </header>
    
    <!-- Home Section -->
    <section class="home" id="home">
        <div class="home-bio">
            <h3>Hello, It's Me</h3>
            <h1>Denis Ruparel</h1>
            <h3>I'm a <span>Web Developer</span></h3>
            <p>I Currently Completed My Diploma in Computer Engineering  
                From Government Polytechnic Porbandar.
                <br>My Interest in Cloud Computing, Python Programming, 
                <br>Web Development and Many More...</p>
            <div class="social-media">
                <a href="https://www.linkedin.com/in/denis-ruparel-249539243/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/DenisRuparel"><i class='bx bxl-github' ></i></a>
                <a href="https://www.facebook.com/denis.ruparel"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/denis_ruparel_/"><i class='bx bxl-instagram' ></i></a>
                <a href="https://twitter.com/DenisRuparel"><i class='bx bxl-twitter' ></i></a>
            </div>
            <a href="#about" class="btn">Know Abot Me!</a>
        </div>
        <div class="profile-pic">
            <img src="images/d1.png" alt="">
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="heading">
            <h2>About <span>Me !</span></h2>
        </div>

        <div class="about-items">
            <div class="profile-pic">
                <img src="images/Denis_1_new.png" alt="">
            </div>

            <div class="about-text">
                <h2>Hey, Guys !</h2>
                <p align="justify">
                    I'm Denis Ruparel From Veraval, Gujarat. I Finished My Primary And 
                    Secondary Education At Shree Shishu Mandir School in Veraval,As Well As My Diploma in Computer Engineering From Government Polytechnic College in Porbandar. I Have Interest in Web Development, Android Development, Data Structure And Algorithms, React JS. I used to code in a variety of programming languages (C, C++, Java). I Use Hackerrank, LeetCode, CodeChef For Coding Practice.
                </p>
            </div>
        </div>
    </section>

      <!-- Certifications Section -->
      <Section class="portfolio" id="certifications">
        <div class="heading">
            <h2>Achieved <span>Certifications</span></h2>
        </div>
        <div class="portfolio-container">
            <!-- Box-1 -->
            <div class="portfolio-box">
                <img src="images/Certificate_2.png" alt="">
                <div class="portfolio-layer">
                    <h4>Java Skill Cretificate</h4>
                    <p>
                        Completed JAVA Programming Course from Great CodeChef.
                    </p>
                    <a href="https://www.codechef.com/certificates/public/q9d741d5" target="_blank">
                        <i class='bx bx-link-external'></i>
                    </a>
                </div>
            </div>

            <!-- Box-2 -->
            <div class="portfolio-box">
                <img src="images/Certificate_3.png" alt="">
                <div class="portfolio-layer">
                    <h4>Python Skill Cretificate</h4>
                    <p>
                        Got Completed Course Certificate in Python from CodeChef.
                    </p>
                    <a href="https://www.codechef.com/certificates/public/6691d51" target="_blank">
                        <i class='bx bx-link-external'></i>
                    </a>
                </div>
            </div>

            <!-- Box-3 -->
            <div class="portfolio-box">
                <img src="images/Certificate_4.png" alt="">
                <div class="portfolio-layer">
                    <h4>Badges in HackerRank</h4>
                    <p>
                        Recieved 3 star in C++, 2 Star in C
                    </p>
                    <a href="https://www.hackerrank.com/DenisRuparel?hr_r=1" target="_blank">
                        <i class='bx bx-link-external'></i>
                    </a>
                </div>
            </div>

        </div>
    </Section>

    <!-- Projects Section -->
    <section class="projects" id="projects">
        <div class="heading">
            <h2>Completed <span>Projects</span></h2>
        </div>
        <div class="projects-items">
            
            <div class="project-card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrHrrNxp_O-P62aobE2i4q7Ve2JdyNTCHz6A&usqp=CAU" alt="">
                <div class="card-overlay">
                    <a href="https://github.com/DenisRuparel/libraryProject">
                        <i class='bx bx-link-alt'></i>
                    </a>
                </div>
            </div>

            <div class="project-card">
                <img src="data:image/png;base64,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" alt="">
                <div class="card-overlay">
                    <a href="https://github.com/DenisRuparel/contactApp">
                        <i class='bx bx-link-alt'></i>
                    </a>
                </div>
            </div>
            
            <div class="project-card">
                <img src="data:image/jpeg;base64,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" alt="">
                <div class="card-overlay">
                    <a href="https://github.com/DenisRuparel/Gujarat_Project">
                        <i class='bx bx-link-alt'></i>
                    </a>
                </div>
            </div>

            <div class="project-card">
                <img src="data:image/jpeg;base64,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" alt="">
                <div class="card-overlay">
                    <a href="https://github.com/DenisRuparel/TextUtils">
                        <i class='bx bx-link-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

  

    <!-- Footer Section -->
    <Footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2023 by <span>Denis Ruparel</span> | All Right Reserved</p>
        </div>

        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i> </a>
        </div>
    </Footer>
</body>
</html>