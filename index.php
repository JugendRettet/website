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
        <meta property="og:url" content="http://jugendrettet.org/" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />
        <link rel="alternate" hreflang="en" href="http://en.jugendrettet.org/" />
        <link rel="shortcut icon" type="image/x-icon" href="http://jugendrettet.org/graphics/jr.ico" />
        <link rel="mask-icon" href="http://www.jugendrettet.org/graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="http://jugendrettet.org/graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="http://jugendrettet.org/css/animations.1.css?0" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/waves.1.css" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/general.css" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/main.css?2" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/desktop.css?3" media="screen and (min-width: 851px)" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/mobile.css?4" media="screen and (max-width: 850px)" type="text/css" />
        <!--[if IE]>
            <link rel="stylesheet" href="http://jugendrettet.org/ie-css/noship.css" type="text/css" />
        <![endif]-->
        <script src="http://jugendrettet.org/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('body').fadeIn(400);
                $('#phase hr#ph-eins-progress').addClass('load')
            });
        </script>
        <style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('donations/phase1.txt');
                    $value1 = number_format($phase1,2,",",".");
                    echo 100 / 80000 * $phase1;
                    ?>%;
            }
        </style>
    </head>
    <body class="start">
        <div id="wrap" class="start">
            <div class="fullscreen-bg">
                <video id="waves-video" class="fullscreen-bg__video" loop autoplay preload="auto">
                    <source src="http://jugendrettet.org/videos/waves.mp4">
                    <img alt="Wave Simulation" src="http://jugendrettet.org/images/error.jpg"/>
                </video>
            </div>
            <header>
                <a id="logo-wrap" href="/">
                    <img id="logo" src="http://jugendrettet.org/graphics/logo.svg" alt="Jugent Rettet">
                    <div id="title">Jugend <b>Rettet</b></div>
                </a>
            </header>
            <div id="union">
                <p id="slogan">Jeder Mensch<br>verdient die Rettung<br>aus Seenot.</p>
                <hr class="wide">
                <div class="index" id="schiff-ani">
                    <div id="schiff-container" class="center" style="min-height:133px;width:300px;">
                        <div id="schiff" style="padding:5px;position:absolute">
                          <img src="http://jugendrettet.org/graphics/schiff-starkekonturen-weiss.svg" alt="Das Schiff" style="width:300px;opacity:0.4">
                        </div>
                        <div class="blink balken" id="schiff-gespendet" style="padding:5px;position:absolute;overflow:hidden;width:calc(300px * 26135 / 80000);">
                          <img src="http://jugendrettet.org/graphics/schiff-blau-starkekontur.svg" alt="Das Schiff" style="width:300px" class="blink">
                        </div>
                    </div>
                </div>
                <div id="fundtext">
                    <div id="phase" style="text-transform:none;">
                        <div class="ph-container center" id="ph-eins" style="max-width:300px;">
                            <div class="header">
                                <span class="title"> </span><span class="percentage"><?php echo $value1;?> / 80 Tsd. €</span>
                                <hr id="ph-eins-progress">
                            </div>
                        </div>
                    </div>
                    <div id="clockdiv">
                      <div>
                        <p>noch <span class="days"></span> Tage zum Spenden</p>
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
                            <li><a href="http://en.jugendrettet.org/">en</a></li>
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

            function getTimeRemaining(endtime) {
              var t = Date.parse(endtime) - Date.parse(new Date());
              var seconds = Math.floor((t / 1000) % 60);
              var minutes = Math.floor((t / 1000 / 60) % 60);
              var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
              var days = Math.floor(t / (1000 * 60 * 60 * 24));
              return {
                'total': t,
                'days': days,
                'hours': hours,
                'minutes': minutes,
                'seconds': seconds
              };
            }

            function initializeClock(id, endtime) {
              var clock = document.getElementById(id);
              var daysSpan = clock.querySelector('.days');
              var hoursSpan = clock.querySelector('.hours');
              var minutesSpan = clock.querySelector('.minutes');
              var secondsSpan = clock.querySelector('.seconds');

              function updateClock() {
                var t = getTimeRemaining(endtime);

                daysSpan.innerHTML = t.days;
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                if (t.total <= 0) {
                  clearInterval(timeinterval);
                }
              }

              updateClock();
              var timeinterval = setInterval(updateClock, 1000);
            }

            var deadline = '2016-03-31';
            initializeClock('clockdiv', deadline);
        </script>
        <script src="http://jugendrettet.org/js/shared.js"></script>
        <script src="http://jugendrettet.org/js/main.js"></script>
        <script src="http://jugendrettet.org/js/peekfield.js?2"></script>
    </body>
</html>
