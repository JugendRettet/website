<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <title>Jugend Rettet</title>
        <meta name="description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta charset="utf-8">
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta property="og:url" content="https://en.jugendrettet.org/" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:image:secure_url" content="https://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />
        <link rel="alternate" hreflang="de" href="http://jugendrettet.org/" />
        <link rel="shortcut icon" type="image/x-icon" href="../graphics/jr.ico" />
        <link rel="mask-icon" href="../graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="../graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="../css/animations.1.css?0" type="text/css" />
        <link rel="stylesheet" href="../css/waves.1.css" type="text/css" />
        <link rel="stylesheet" href="../css/general.css" type="text/css" />
        <link rel="stylesheet" href="../css/main.css?8" type="text/css" />
        <link rel="stylesheet" href="../css/desktop.css?4" media="screen and (min-width: 851px)" type="text/css" />
        <link rel="stylesheet" href="../css/mobile.css?5" media="screen and (max-width: 850px)" type="text/css" />
        <!--[if IE]>
            <link rel="stylesheet" href="../ie-css/noship.css" type="text/css" />
        <![endif]-->
        <script src="../js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#phase hr#ph-eins-progress').addClass('load')
            });
        </script>
        <!--<style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('../donations/phase1.txt');
                    $value1 = number_format((float)$phase1,0,".",",");
                    echo 100 / 80000 * $phase1;
                    ?>%;
            }
        </style>-->
        <style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('../donations/phase1.txt');
                    $value1 = number_format((float)$phase1,2,".",",");
                    ?>100%;
            }
        </style>
    </head>
    <body class="start">
        <div id="wrap" class="start">
            <div class="fullscreen-bg">
                <video id="waves-video" class="fullscreen-bg__video" loop autoplay preload="auto">
                    <source src="../videos/waves.mp4">
                    <img alt="Wave Simulation" src="../images/error.jpg"/>
                </video>
            </div>
            <header>
                <a id="logo-wrap" href="/">
                    <img id="logo" src="../graphics/logo.svg" alt="Jugent Rettet">
                    <div id="title">Jugend <b>Rettet</b></div>
                </a>
            </header>
            <div id="union">
                <p id="slogan">Everyone<br>in maritime emergency<br>deserves rescue.</p>
                <hr class="wide">
                <div class="index" id="mission-ani">
                    <a href="./spenden">
                        <div id="mission-container" class="center">
                            <div id="belt-progress">
                                <svg viewBox="-238.725 -238.725 477.45 477.45" class="incolumn" alt="Rettungsring">
                                    <!-- viewBox="-(2000 / 3pi) (4000 / 3pi)"-->
                                    <circle r="159.15" cy="0" cx="4"/> <!-- r=(1000 / 2pi) cx=4 bc of offset to svg-->
                                </svg>
                            </div>
                            <span id="phase-text" class="center">Phase 3</span>
                            <div id="belt" style="position:absolute">
                              <img class="belt" src="../graphics/belt-c.svg" alt="Rettungsring">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div id="content">
                <footer class="start">
                    <div id="peek-container"></div>
                    <nav class="footer">
                        <ul>
                            <li><a href="presse">Press</a></li>
                            <li><a href="https://jugendrettet.org/transparenz">Transparency (de)</a></li>
                            <li class="br"></li>
                            <li><a href="https://jugendrettet.org/">de</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>
        <!-- Scripts -->
        <script type="application/javascript">
            $(document).ready(function() {
                if (!$('#aendern-btn').is(':hover')) {
                    $(document).on('click', 'body', function() {
                        window.location = 'spenden';
                    });
                }
                $('#aendern-btn').click(function() {
                    e.stopPropagation();
                });
            });
        </script>
        <script src="../js/shared.js"></script>
        <script src="../js/main.js?0"></script>
        <script src="../js/peekfield.js?2"></script>
    </body>
</html>
