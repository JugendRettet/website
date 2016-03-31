<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" prefix="og: http://ogp.me/ns#">
    <head>
        <title>Jugend Rettet</title>
        <meta name="description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta charset="utf-8">
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta property="og:url" content="https://jugendrettet.org/" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:image:secure_url" content="https://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />
        <link rel="alternate" hreflang="en" href="http://en.jugendrettet.org/" />
        <link rel="shortcut icon" type="image/x-icon" href="./graphics/jr.ico" />
        <link rel="mask-icon" href="./graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="./graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="./css/animations.1.css?0" type="text/css" />
        <link rel="stylesheet" href="./css/waves.1.css" type="text/css" />
        <link rel="stylesheet" href="./css/general.css" type="text/css" />
        <link rel="stylesheet" href="./css/main.css?7" type="text/css" />
        <link rel="stylesheet" href="./css/desktop.css?3" media="screen and (min-width: 851px)" type="text/css" />
        <link rel="stylesheet" href="./css/mobile.css?4" media="screen and (max-width: 850px)" type="text/css" />
        <!--[if IE]>
            <link rel="stylesheet" href="./ie-css/noship.css" type="text/css" />
        <![endif]-->
        <script src="./js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#phase hr#ph-eins-progress').addClass('load')
            });
        </script>
        <!--<style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('donations/phase1.txt');
                    $value1 = number_format((float)$phase1,0,",",".");
                    echo 100 / 80000 * $phase1;
                    ?>%;
            }
        </style>-->
        <style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('donations/phase1.txt');
                    $value1 = number_format((float)$phase1,2,",",".");
                    ?>100%;
            }
        </style>
    </head>
    <body class="start">
        <div id="wrap" class="start">
            <div class="fullscreen-bg">
                <video id="waves-video" class="fullscreen-bg__video" loop autoplay preload="auto">
                    <source src="./videos/waves.mp4">
                    <img alt="Wave Simulation" src="./images/error.jpg"/>
                </video>
            </div>
            <header>
                <a id="logo-wrap" href="/">
                    <img id="logo" src="./graphics/logo.svg" alt="Jugent Rettet">
                    <div id="title">Jugend <b>Rettet</b></div>
                </a>
            </header>
            <div id="union">
                <p id="slogan">Jeder Mensch<br>verdient die Rettung<br>aus Seenot.</p>
                <hr class="wide">
                <div class="index" id="schiff-ani">
                    <div id="schiff-container" class="center" style="min-height:133px;width:300px;">
                        <div id="schiff" style="position:absolute">
                          <img src="./graphics/schiff-starkekonturen-weiss.svg" alt="Das Schiff" style="width:300px;">
                        </div>
                        <div class="balken" id="schiff-gespendet" style="position:absolute;overflow:hidden;width:300px;">
                          <img src="./graphics/schiff-blau-starkekontur.svg" alt="Das Schiff" style="width:300px;opacity:0.4">
                        </div>
                    </div>
                </div>
                <div id="fundtext">
                    <div id="phase" style="text-transform:none;">
                        <div class="ph-container center" id="ph-eins" style="max-width:300px;">
                            <div class="header index-page">
                                <span class="percentage"><?php echo $value1;?> €</span>
                                <hr id="ph-eins-progress">
                            </div>
                        </div>
                    </div>
                    <div id="clockdiv">
                      <div>
                        <p>Spendenphase 2 &#10003; Danke!<br>Wie geht's weiter?</p>
                      </div>
                    </div>
                </div>
                <a id="aendern-btn" href="spenden">Ich rette mit!</a>
            </div>
            <div id="content">
                <footer class="start">
                    <div id="peek-container"></div>
                    <nav class="footer">
                        <ul>
                            <li><a href="presse">Presse</a></li>
                            <li><a href="transparenz">Transparenz</a></li>
                            <li class="br"></li>
                            <li><a href="https://en.jugendrettet.org/">en</a></li>
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
        <script src="./js/shared.js"></script>
        <script src="./js/main.js?0"></script>
        <script src="./js/peekfield.js?2"></script>
    </body>
</html>
