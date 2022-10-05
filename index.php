<?php  include 'connection.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS app</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>
    <script> startTime = new Date(); </script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalise.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
   

</head>
<!-- web preloader -->
<div class="loader">
    <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div>  
<body onbeforeunload="myFunc()">

    <div class="container">

        <section id="header" class="nav">
            <nav class="navMenu">
                <h2 class="navName">MARKO&nbspSARCEVIC</h2>
                <div class="navChoices">
                    <a href="#about_me">ABOUT ME</a>
                    <a href="#skills">SKILLS</a>
                    <a href="#portfolio">PORTFOLIO</a>
                    <a href="#contact">CONTACT</a>
                </div>
            </nav>
        </section>

        <section class="aboutBacground">
            <div class="headerWidth">
                <div class="header">
                    <!-- <div class="swing">
                        <img src="img/1.jpg" width="250" >
                    </div> -->
                </div>
            </div>
        </section>
        
        <section class="about">
            <h2 id="about_me" class="sectionHeader"><i class="fas fa-address-card"></i>ABOUT ME</h2>
            <p>I am looking for full/part-time job or internship.</p>
            <p>Programimg is my hobby, therefore I decided to enhance my programing skills. I have just returned back to Bratislava and this way I am looking for experiences in web development. </p>
            <p>In the future I would like to start working with React or other javascript frameworks. I am currently learning how to use laravel framework.</p>

        </section>

        <section class="skillsAndLang">
            <div class="flexSkills">

                <h2 id="skills" class="sectionHeader"><i class="fas fa-code"></i>SKILLS</h2>
                <ul class="skills">
                    <li>
                    <p>HTML</p>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </li>
                <li>
                    <p>CSS</p>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </li>
                <li>
                    <p>JavaScript</p>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </li>
                <li>
                    <p>jQuery</p>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </li>
                <li>
                    <p>Bootstrap</p>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </li>
                <li>
                    <p>PHP</p>
                    <div class="full"></div>
                    <div class="full"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </li>
                <li>
                    <p>SQL</p>
                    <div class="full"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </li>
                <li>
                    <p>Git/GitHub</p>
                    <div class="full"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                    <div class="empty"></div>
                </li>
            </ul>
        </div>

        <div class="flexLanguages">
            
            <h2 class='sectionHeader'><i class="fas fa-globe-europe"></i>LANGUAGE</h2>
            <ul class="languages">
                <li>
                    <p>Slovak/Czech</p>
                    <p class="centerP">Native&nbsp;speaker</p>
                </li>
                <li>
                    <p>English</p>
                    <p class="centerP width300">B2</p>
                </li>
                <li>
                    <p>Serbian</p>
                    <p class="centerP">B1</p>
                </li>
                <li>
                    <p>German</p>
                    <p class="centerP">A2</p>
                </li>
            </ul>
        </div>
        </section>


        <section class="portfolio">
            <h2 id="portfolio" class="sectionHeader"><i class="fas fa-list"></i>PORTFOLIO</h2>
            <div class="kuboWeb">
                <a target="_blank" href="https://www.jakubhanzl.com">jakubhanzl.com</a>
                <a target="_blank" href="https://www.jakubhanzl.com"><video class="images hoverPhoto" autoplay loop muted plays-inline width="400px">
                    <source src="img/kuboWeb.mp4" type='video/mp4'>
                </video></a>
            </div>
            <div class="kuboWeb">
                <a target="_blank" href="https://marko-sarcevic.eu/login.php">SQL Databaze login form</a>
                <a target="_blank" href="https://marko-sarcevic.eu/login.php"><img class="images hoverPhoto"  width="400px" src="img/3.png"></a>
            </div>
            <div>
                <a target="_blank" href="">GitHub</a>
            </div>
            
        </section>

        <section class="footer">
            <div class="contact">
                <h2 id="contact" class="sectionHeader contactH2"><i class="fas fa-address-book"></i>CONTACT</h2>
                <a href="mail&#116;o&#58;sa%72%&#54;&#51;&#37;65v&#105;c&#46;&#109;&#64;o&#117;tloo&#37;6B%2E&#99;o&#109;'>sar&#99;ev&#105;c&#46;m&#64;ou&#116;l&#111;ok&#46;com"><i class="far fa-envelope"></i>sarcevic.m@outlook.com</a>
                <a href="tel:+421 944 493 326"><i class="fas fa-phone"></i>+421 944 493 326</a>
                <div class="instagram">
                    <a target="_blank" href="https://www.instagram.com/marko.sarcevic.98/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </section>

        <div class="arrowRow">
            <div id="arrowUp" class="scrollUp">
                <a href="#header"><i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
           
        <!-- preloader -->
<script>
    $(window).on('load',function(){
        $('.loader').fadeOut(1000,function(){
            $('.container').fadeIn(1000);   
        });
    })
</script>
    <script>
        function myFunc(){
            endTime = new Date();
            $.ajax({
            url:'addDur.php',
            method:'POST',
            data:{
                duration:(endTime - startTime)/1000,
            }
            });
        }
    </script>

</body>

<script src="js.js"></script>


</html>