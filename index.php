<?php 
    include 'model.php'; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preload" as="font" crossorigin type="font/ttf" href="/fonts/Karla-Regular.ttf">
	    <link rel="preload" as="font" crossorigin type="font/ttf" href="/fonts/Rubik-Bold.ttf">	
	    <link rel="preload" as="font" crossorigin type="font/ttf" href="/fonts/Rubik-Light.ttf">	

        <title>Chris Gabler kleine Referenzliste</title>
        <?php /* Normalise CSS hier einfügen! 
        <link href="css/normalise.css" type="text/css" rel="stylesheet" />*/?>
        <link href="css/styles.css" type="text/css" rel="stylesheet" />
        <link href="css/responsive.css" type="text/css" rel="stylesheet" />
        <style type="text/css">
        <?php /* ----> critical CSS <----- */ ?>
            li.content-header__item h2 span:not(.ext-more) {
                position: initial;
                font-size: 14px;
                font-weight: normal;
                letter-spacing: 1.4px;
                opacity: .5;
                -webkit-text-stroke: .1px #fff;
                transform: translate(20px, 35px);
                transition: all 0.3s 0.2s;
            }        
        </style>
    </head>    
    <body id="body" class="site start">
        <div id="skill-loader">
            <div class="angle top-left"></div>
            <div class="angle top-right"></div>
            <div class="angle bottom-left"></div>
            <div class="angle bottom-right"></div>
        </div>
        <header id="header">
            <div class="header-container">
                <div class="profil">
                    <img src="images/ch-gabler.png" alt="Ch. Gabler, Webentwickler und ganz netter Typ so :)" />

                    <div id="skill-set">
                        <button id="skill-close">&#10006;</button>
                        <div class="skill-content">
                            <h2>Skillset</h2>
                            <?php 
                                $count = 1;
                                foreach($skillsArray as $key => $value) {
                                    print   '<div class="skill-item top flex">
                                                <h3>'.$key.'</h3>
                                                <div class="progress">     
                                                    <div class="progress-bar" role="progressbar">   
                                                        <p id="count-'.$count.'">'.$value.'</p>
                                                    </div>
                                                </div>
                                            </div>';
                                        $count++;
                                }
                            ?>
                         <div id="prog-bottom" class="flex">
                             <?php 
                                foreach($skillsArrayBottom as $key => $array) {
                                    print   '<div class="prog-bottom--item">
                                                <h3>'.$key.'</h3>';
                                        foreach($array as $index => $value) {
                                            print   '<div class="skill-item bottom">
                                                    <h4>'.$index.'</h4>
                                                        <div class="progress">     
                                                            <div class="progress-bar" role="progressbar">   
                                                                <p id="count-'.$count.'">'.$value.'%</p>
                                                            </div>
                                                        </div>
                                                    </div>';
                                                $count++;                                                                                          
                                            }
                                    print '</div>';
                                }
                                
                             ?>
                         </div>   
                        </div>                        
                    </div>

                    <div class="profil-links">
                        <div class="profil-item--container">
                            <div class="profil-item"><p id="skills">Meine Skills</p></div>
                        </div>
                        <div class="profil-item--container">
                            <div class="profil-item"><p><a href="mailto:info@chris-gabler.de?subject=Nachricht von Projekt-Seite">info@chris-gabler.de</a></p></div>
                        </div>
                        <div class="profil-item--container">
                            <div class="profil-item"><p><a href="tel:+4915122917743">Tel: +49 151 22 91 77 43</a></p></div>
                        </div>
                    </div>
                </div>
                <div class="menu-container">
                    <button id="mnu-button" class="">
                        <span class="ham-menu-1"></span>
                        <span class="ham-menu-2"></span>
                        <span class="ham-menu-3"></span>
                    </button>
                </div>
            </div>
        </header>
        <div class="nav-container">
            <div class="nav-content">
                <nav>
                    <a class="menu-header pacman-link" href="https://pacman.chris-gabler.de/" target="_blank">PacMan <span>
                         pure &#8226; Vanilla Javascript</span>
                         <div class="pacman"></div>
                    </a>
                    <a class="menu-header codepen-link" href="https://codepen.io/SENSENEL/" target="_blank">CodePen <span>
                         Frontend &#8226; Test- und Spielwiese</span>
                         <div class="codepen">
                            <div class="cube">
                                <div class="side front"></div>
                                <div class="side left"></div>
                                <div class="side right"></div>
                                <div class="side back"></div>
                            </div>
                         </div>
                    </a>
                    <a class="menu-header codewars-link" href="https://www.codewars.com/users/SENSENEL" target="_blank">CodeWars <span>
                         Code Challenges</span>
                         <div class="codewars">
                             <img class="codewars-img"src="/images/codewars-logo.svg" alt="" />
                         </div>
                    </a>
                </nav>
            </div>
        </div>
        <div id="wrapper">
            <div class="content">
                <div class="content-image">
                    <div class="image-wrapper">
                        <span id="img-layer"></span>
                        <?php
                            foreach($headerItemArray as $key => $value) {
                                print '<img class="content-image__img img-'.$key.'" src="images/'.$value[3].'" alt="Ch Gabler Portfolio No'.$key.'" />';
                            }
                        ?>
                    </div>
                </div>
                <div class="content-header">
                    <div id="frame">
                        <div id="view">
                            <ol class="content-header--items">
                                <div class="direct-links">
                                    <?php 
                                        $onClick = 'onclick="$(\'body\').addClass(\'port-2\');"';
                                        foreach($headerItemArray as $key => $value) {
                                            print  '<li class="content-header__item">
                                                        <a '. ($key === 5 ? $onClick : " " ) . ' href="'.$value[0].'" class="content-header__item__link projekt-link">
                                                            <h2 class="item-header">'.$value[1].' <span class="header-categorie">'.$value[2].'</span></h2>
                                                        </a>
                                                    </li>';
                                        }
                                    ?>
                                </div>
                            </ol>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <div id="footer">
            <div class="copyright">
                <p>&copy;Christian Gabler <?php print date('Y'); ?>  made with <span>&hearts;</span></p>
            </div>
            <div class="bottom">
                <div class="app-select">
                    <a href="https://projekte-react.chris-gabler.de/" target="_blank">
                        <div class="app-select--container">
                            <h4><span>i </span><em>zu REACT-Version wechseln?</em></h4>
                            <img src="/images/react-logo.png" alt="Ch Gabler Referenzseite als React Web-App" />
                        </div>
                    </a>
                </div>
            </div>
            <div class="github-container">
                <a href="https://github.com/sensenel/Referenz-Portfolio-Seite-live" target="_blank">
                    <div class="github-select">
                        <h4><span>i </span><em>Repo' dieser Seite auf gitHub ansehen</em></h4>
                        <img src="/images/github-logo-white.png" al="" />
                    </div>
                </a>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/gsap.min.js"></script>
        <script src="js/CSSRulePlugin.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
