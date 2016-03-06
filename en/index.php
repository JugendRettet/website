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
        <link rel="stylesheet" href="../css/main.css?6" type="text/css" />
        <link rel="stylesheet" href="../css/desktop.css?3" media="screen and (min-width: 851px)" type="text/css" />
        <link rel="stylesheet" href="../css/mobile.css?4" media="screen and (max-width: 850px)" type="text/css" />
        <!--[if IE]>
            <link rel="stylesheet" href="../ie-css/noship.css" type="text/css" />
        <![endif]-->
        <script src="../js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#phase hr#ph-eins-progress').addClass('load')
            });
        </script>
        <style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('../donations/phase1.txt');
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
                <div class="index" id="schiff-ani">
                    <div id="schiff-container" class="center" style="min-height:133px;width:300px;">
                        <div id="schiff" style="position:absolute">
                          <img src="../graphics/schiff-starkekonturen-weiss.svg" alt="Das Schiff" style="width:300px;opacity:0.4">
                        </div>
                        <div class="blink balken" id="schiff-gespendet" style="position:absolute;overflow:hidden;width:calc(300px * 40655 / 80000);">
                          <img src="../graphics/schiff-blau-starkekontur.svg" alt="Das Schiff" style="width:300px" class="blink">
                        </div>
                    </div>
                </div>
                <div id="fundtext">
                    <div id="phase" style="text-transform:none;">
                        <div class="ph-container center" id="ph-eins" style="max-width:300px;">
                            <div class="header index-page">
                                <span class="title"> </span><span class="percentage"><?php echo $value1;?> / 80k €</span>
                                <hr id="ph-eins-progress">
                            </div>
                        </div>
                    </div>
                    <div id="clockdiv">
                      <div>
                        <p><span class="days"></span> days left to donate</p>
                      </div>
                    </div>
                </div>
                <a id="aendern-btn" href="spenden">I want to rescue too!</a>
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
        <script src="../js/shared.js"></script>
        <script src="../js/main.js?0"></script>
        <script src="../js/peekfield.js?2"></script>
    </body>
</html>
