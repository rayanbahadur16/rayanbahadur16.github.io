<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="image/smileyBlueSquare.png">
    <link rel="stylesheet" href="reset.css" type="text/css"/>
    <link rel="stylesheet" href="main.css" type="text/css"/>
    <title>Rayan Bahadur</title>
</head>
<body id="home">
    <div class="HomeContainer">
        <header class="header">
                <nav class="nav">
                    <div class="navList">

                        <ul>
                            <a href="#"><img class="logo" src="image/smileyBlue.png" alt="smiley"></a>
                            <li class="listItem"><p>Rayan Bahadur</p></li>
                            <li class="listItemC"><a href="#">Home</a></li>
                            <li class="listItem"><a href="AboutMe.html">About</a></li>
                            <li class="listItem"><a href="My%20Skills.html">Skills</a></li>
                            <li class="listItem"><a href="Education&Experience.html">Education & Experience</a></li>
                            <li class="listItem"><a href="Portfolio.html">Portfolio</a></li>
                            <li class="listItem"><a href="Blog.php">Blog</a></li>
                        </ul>
                    </div>
                </nav>
        </header>


        <article class="miniAboutMe">
            <div class="AboutDiv">
            <h1>Hi, I'm Rayan!</h1>
            <p>I am currently a Computer Science student at the Queen Mary University of London</p>
            </div>
        </article>

        <section class="LinkButtons">
                <?php
                session_start();
                if(isset($_SESSION['email'])) {
                    ?>
                    <div class="b1"><a href="logout.php"><button class="button">LOGOUT</button></a></div>
                    <?php
                }else{?>
                    <div class="b1"><a href="Login.html"><button class="button">LOGIN</button></a></div>
                    <?php
                }?>
                <div class="b2">
                    <a href="https://github.com/rayanbahadur16/"><img src="image/GitHub.svg" alt="GitHub"></a>
                    <a href="https://www.linkedin.com/in/rayan-bahadur-b6b264258/"><img src="image/LinkedIn.svg" alt="LinkedIn"></a>
                    <a href="https://www.instagram.com/rayanb_2004/"><img src="image/Instagram.svg" alt="Instagram"></a>
                </div>
        </section>

        <footer class="footer">
            <p class="footerText">Rayan Bahadur 2023</p>
        </footer>
    </div>
</body>
</html>
