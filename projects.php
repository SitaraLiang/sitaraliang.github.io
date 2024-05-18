<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>School Projects</title>
       <link rel="stylesheet" href="./css/style_projects.css">
       <script src="./js/script_projects.js" defer></script>
   </head>
           
   <body>
        <header>
            <h1>School Projects</h1>
        </header>

        <article class="container">
            <section class="slideshow-container">

                <section class="mySlides fade">
                    <span class="numberSlide">1 / 3</span>
                    <aside class="text">
                        <h1>Sokoban</h1>
                        Sokoban is a terminal-based game using langage C that reads the pre-designed map from a file. Players control the game by pressing specific keys on the keyboard. During the game, the player can move, push boxes, restart the game, automatically enter the next level of the game, etc.
                        <button id="myBtn1">
                            <a href="https://github.com/SitaraLiang/Sokoban">
                                <span class="button-text">See the project</span>
                            </a>
                        </button>
                    </aside>
                    <video controls="" class="video-container" loop="" autoplay="" muted="">
                        <source src="./assets/sokoban.mp4" type="video/mp4">
                    </video>
                </section>

                <section class="mySlides fade">
                    <span class="numberSlide">2 / 3</span>
                    <aside class="text">
                        <h1>Driving Monitoring</h1>
                        Driving Monitoring is a user-friendly website created in html, css and javascript. It support recording your driving trip, searching your record history, drawing different tables based on your data, allowing users to view their driving skills more intuitively. The website can also use GPS positioning and automatically record and calculate your driving distance in real time.
                        <button id="myBtn1"><a href="https://github.com/SitaraLiang/DrivingMonitoring"><span class="button-text">See the project</span></a></button>
                    </aside>
                    <video controls="" class="video-container" loop="" autoplay="" muted="">
                        <source src="./assets/drivingmonitoring.mp4" type="video/mp4">
                    </video>
                </section>

                <section class="mySlides fade">
                    <span class="numberSlide">3 / 3</span>
                    <aside class="text">
                        <h1>Space Invader</h1>
                        <p>
                            The game is a simpler version of the original 
                            <a href="https://en.wikipedia.org/wiki/Space_Invaders" style="text-decoration:underline;">
                                Space Invaders
                            </a> 
                            with some changes to the rules. The project is created in RISC-V assembler (source code .s or .asm) and executed using the rars1_6 simulator. 
                        </p>
                        <button id="myBtn1"><a href="https://github.com/SitaraLiang/SpaceInvader"><span class="button-text">See the project</span></a></button>
                    </aside>
                    <video controls="" class="video-container" loop="" autoplay="" muted="">
                        <source src="./assets/spaceinvader.mp4" type="video/mp4">
                    </video>
                </section>


                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </section>
            <section class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </section>
        </article>

   </body>
           
</html>