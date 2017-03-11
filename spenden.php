<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation" />

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta property="og:url" content="https://jugendrettet.org/spenden" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:image:secure_url" content="https://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />

        <link rel="alternate" hreflang="en" href="http://en.jugendrettet.org/spenden" />

        <title>Spenden — Jugend Rettet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="./graphics/jr.ico"/>
        <link rel="mask-icon" href="./graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="./graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="./css/waves.1.css" type="text/css" />

        <link href="./css/general.css" rel="stylesheet" type="text/css">
        <link href="./css/main.css?9" rel="stylesheet" type="text/css">
        <link href="./css/desktop.css?5" media="screen and (min-width: 851px)" rel="stylesheet" type="text/css">
        <link href="./css/mobile.css?6" media="screen and (max-width: 850px)" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./css/animations.1.css?1" type="text/css" />
        <link rel="stylesheet" media="screen and (min-width: 851px)" href="./css/ship-pos.css?0" type="text/css" />
        <link rel="stylesheet" media="screen and (max-width: 850px)" href="./css/ship-pos-hide.css?1" type="text/css" />
        <!--[if IE]>
            <link rel="stylesheet" href="./ie-css/noship.css" type="text/css" />
        <![endif]-->

        <script src="./js/jquery-1.10.2.min.js"></script>
        <!--<script src="./js/rechner.1.js?11"></script>-->
        <script src="./js/hideme.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#phase hr#ph-eins-progress').addClass('load')
                $('#phase hr#ph-zwei-progress').delay(200).queue(function (next) {
                    $(this).addClass('load');
                    next();
                });
                $('#phase hr#ph-drei-progress').delay(400).queue(function (next) {
                    $(this).addClass('load');
                    next();
                });
            });
            function changeColor(id) {
                $(id).css('background-color', 'inherit');
                setTimeout(function() {
                    $(id).css('background-color', '#286482');
                }, 500);
            }
            function toDiv(id) {
                var div = $(id);
                var pos = div.offset().top;
                $('html, body').animate({scrollTop:0},500); // will take two seconds to scroll to the element
            }
            //$(document).keypress(function(e) {
            //   rechnen();
            //});
        </script>
        <style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('donations/phase1.txt');
                    $needed = file_get_contents('donations/needed.txt');
                    $value1 = number_format((float)$phase1,0,",",".");
                    $needed_format = number_format((float)$needed,0,",",".");
                    $sd = ( 1000 - ( 1000 * ( $phase1 / $needed ) ) );
                    $percent = file_get_contents('donations/perc.txt');
                    echo $percent;
                    ?>%;
            }
            div.bp-fix {
                position: relative;
            }
            span.bp-fix{ 
                position:absolute; 
                width:100%;
                height:100%;
                top:0;
                left: 0;

                z-index: 1;

                /* fixes overlap error in IE7/8, 
                make sure you have an empty gif 
                background-image: url('empty.gif');*/
            } 
        </style>
    </head>

    <body>
        <div id="pop-back"></div>
        <div id="header-back"></div>
        <div id="wrap">
            <header>
                <a id="logo-wrap" href="/">
                    <img id="logo" src="./graphics/logo.svg" alt="Jugent Rettet">
                    <div id="title">Jugend <b>Rettet</b></div>
                </a>
                <div id="bread">
                    <div class="stroke" id="br-top-stroke"></div>
                    <div class="stroke" id="br-bottom-stroke"></div>
                </div>
                <div id="popup-close">
                    <div id="cross">
                        <div class="stroke rotate-open-top rotate-close-top" id="cr-top-stroke"></div>
                        <div class="stroke rotate-open-bottom rotate-close-bottom" id="cr-bottom-stroke"></div>
                    </div>
                </div>
                <nav>
                    <ul class="hidden">
                        <li><a href="news">News</a></li>
                        <li><a href="schiff">Das Schiff</a></li>
                        <li><a href="team">Team</a></li>
                        <li><a href="retten">Retten</a></li>
                        <li><a href="spenden" class="indicator">Spenden</a></li>
                        <li><a href="europe">Jugend Rettet <span class="lowercase">europe</span></a></li>
                    </ul>
                </nav>
            </header>
            <div class="popup-flat">
                <div id=top>
                </div>
                <div class="triple">
                    <h3>Spenden</h3>
                    <p>Die Menschen auf dem Mittelmeer sterben jetzt. Deshalb brauchen wir Geld, um mit unserem Schiff IUVENTA weiterhin Menschen aus Seenot zu retten.</p>
                </div>
                <div class="container triple">

                    <div style="margin-right:10px" class="column">
                        <div style="padding-left:5px;padding-right:5px">
                            <h4 id="spendenkonto">Spendenkonto</h4>
                            <p><b>Empfänger:</b> Jugend Rettet e.V.</p>
                            <p><b>Kontonummer:</b> 0190465743</p>
                            <p><b>IBAN:</b> DE28 1005 0000 0190 4657 43</p>
                            <p><b>BIC:</b> BELADEBEXXX</p>
                            <p><b>Kreditinstitut:</b> Berliner Sparkasse</p>
                        </div>
                        <br>
                        <h4>Merchandise</h4>
                        <p>
                            <a target="_blank" href="/merch">Seenotrettung mit einem T-Shirt? Ihr habt gefragt - wir haben gemacht. Rette mit
                            und trage schöne T-Shirts, Zipper und Pullis. Der Erlös fließt direkt in unsere Missionen!
                            Die Artikel sind übrigens nicht nur Fairtrade, sondern auch aus
                            Biobaumwolle und sehr gemütlich.</a>
                        </p>
                        <br>
                        <div class="bp-fix">
                        <a href="https://www.betterplace.org/projects/48425-rette-mit-spende-fur-rettungseinsatze-auf-dem-mittelmeer/donations"><span class="bp-fix"></span></a>
                        <h4>direkt spenden</h4>
                        <script type="text/javascript">
                          /* Configure at https://www.betterplace.org/de/projects/42019-rette-mit-einsatz-zur-seenotrettung-auf-dem-mittelmeer/manage/iframe_donation_form */
                          var _bp_iframe        = _bp_iframe || {};
                          _bp_iframe.project_id = 52216; /* REQUIRED */
                          /*_bp_iframe.project_id = 48425;*/
                          _bp_iframe.lang       = 'de'; /* Language of the form */
                          /* Remove "//" for further customization but *only* if you really need to! */
                          // _bp_iframe.width = 600; /* Custom iframe-tag-width, integer */
                           _bp_iframe.color = '286482'; /* Button and banderole color, hex without "#" */
                           _bp_iframe.background_color = '142D3C'; /* Background-color, hex without "#" */
                          // _bp_iframe.default_amount = 50; /* Donation-amount, integer 1-99 */
                          // _bp_iframe.default_data_transfer_accepted = false; /* true (default), false */
                          // _bp_iframe.recurring_interval = 'single'; /* Interval for recurring donations, string out of ["single", "monthly", "quarter_yearly", "half_yearly", "yearly"] */
                          (function() {
                            var bp = document.createElement('script'); bp.type = 'text/javascript'; bp.async = true;
                            bp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'asset1.betterplace.org/assets/load_donation_iframe.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bp, s);
                          })();
                        </script>
                        <div id="betterplace_donation_iframe" style="background: transparent url('https://www.betterplace.org/assets/new_spinner.gif') 275px 20px no-repeat;"><strong><a href="https://www.betterplace.org/de/projects/48425-rette-mit-spende-fur-rettungseinsatze-auf-dem-mittelmeer/donations/new">Jetzt Spenden für „Rette mit! Spende für Rettungseinsätze auf dem Mittelmeer“ bei unserem Partner betterplace.org</a></strong></div>
                        </div>
                        <!--<h4>Rechner</h4>
                        <div id="rechner">
                            <input type="Text" id="spendeinput" oninput="rechnen()"> €
                            <br><br>
                            <div id="spendentext" style="display:none">

                                <p id="text-schiffsteil-prozent">Mit deinen <b class="EUR"></b> <b>€</b> kämen <b id="prozent"></b> <b>%</b> zum nächsten Bedarf - ein Beiboot mit einer Beiboothalterung - dazu.</p>
                                <p id="text-schiffsteil-komplett">Mit deinen <b class="EUR"></b> <b>€</b> wäre der nächsten Bedarf - ein Beiboot mit einer Beiboothalterung - komplett!</p>
                                <p id="text-schiffsteil-mehr">Sogar noch mehr:</p>

                                <p id="text-schiff-meter">Damit wären <b id="meter"></b> <b id="unitmeter">m</b> des Schiffs finanziert. Das sind <b id="qmeter"></b> <b id="unitqmeter">m²</b>, die Platz für die Seenotrettung bieten.</p>

                                <p id="text-schiff-komplett">Mit deinen <b class="EUR"></b> <b>€</b> wäre das gesamte Schiff finanziert! Mit einer Länge von <b>32 m</b> und einer Fläche von <b>160 m²</b> bietet es genug Platz, um mehr als <b>80 Menschen</b> auf einmal aus der Seenot zu retten.</p>

                                <p id="button"><br><br><a id="aendern-btn" onclick="changeColor('#spendenbox');toDiv('#top');">ICH RETTE MIT!</a></p>
                            </div>

                            <div id="spendentext-fehler" style="display:none">
                                <p>Bitte versuch es nur mit Zahlen.</p>
                            </div>
                        </div>-->
                    </div>

                    <div class="column">
                    </div>

                    <div class="column hideme">
                        <!--<h4>SPENDENSTAND</h4>-->
                        <div id="mission-container" class="center incolumn">
                            <div class="incolumn" id="belt-progress">
                                <svg viewBox="-238.725 -238.725 477.45 477.45" class="incolumn" alt="Rettungsring" style="stroke-dashoffset:<?php echo $sd;?>">
                                    <!-- viewBox="-(2000 / 3pi) (4000 / 3pi)"-->
                                    <circle r="159.15" cy="7" cx="7"/> <!-- r=(1000 / 2pi); cy, cx offset to match svg-->
                                </svg>
                            </div>
                            <div class="belt incolumn">
                              <img class="belt incolumn" src="./graphics/belt.svg" alt="Rettungsring">
                            </div>
                        </div>
                        <br>
                        <div style="display:initial;" id="phase">
                            <div class="ph-container" id="ph-eins">
                                <div class="header" style="text-align:center;">
                                    <span class="percentage">Aktuell: <?php echo $percent;?>% finanziert</span>
                                    <!--<span class="percentage">Monat 2</span>-->
                                    <hr id="ph-eins-progress">
                                </div>
                                <div class="content" id="ph-eins-content">
                                    <p><a target="_blank" href="umbau">→ Aufschlüsselung</a></p>
<p>Noch nie ertranken so viele Menschen bei ihrer Flucht über die zentrale Mittelmeerroute, wie im vergangenen Jahr.</p>
<p>5.083 Mal kam jede Hilfe zu spät. Wie hoch die Dunkelziffer liegt können wir kaum erahnen.</p>
<p>Weiterhin übernimmt Europa keine Verantwortung. Weiterhin gibt es kein staatliches Seenotrettungsprogramm. Stattdessen wird die unsichtbare Mauer Europas höher gezogen, wie der 10-Punkte Plan der EU zeigt.</p>
<br>
<p>Wir haben 2016 ein Schiff gekauft, es umgebaut und bisher 6.526 Menschen aus Seenot gerettet. Ab März 2017 setzen wir unsere Einsätze fort.</p>
<br>
<p>Doch bevor es los geht, brauchen wir eure Hilfe: Denn die IUVENTA verlässt ihren Winterschlaf und es wird geschraubt, gebohrt und geschweisst, was das Zeug hält, um noch im Frühjahr unsere erste Rettungsmissionen zu starten. Auch wenn die EU mit ihrer Abschottungspolitik einen Schritt weiter geht und nun mit Libyen kooperieren will, werden wir Menschen nicht ertrinken lassen. Als junge Europäer_innen sehen wir uns in der Pflicht, Verantwortung zu übernehmen und zu handeln. Unsere IUVENTA steht also nun im Hafen von Venedig und wird wieder bereit gemacht.</p>
<br>
<p>Wir sagen:</p>
<p>Frontex rüstet auf? - Das können wir auch.</p>
<br>
<p>Wir werden nicht schweigend zusehen, wie die EU mit ihrem 10-Punkte-Plan klang heimlich die Mauer um Europa höher baut. Wir werden die IUVENTA in den nächsten Wochen wieder fit machen.</p>
<p>Jeder Euro hilft uns dabei, das Ziel zu verwirklichen und noch im Frühjahr rauszufahren.</p>
                                    <br>
                                    <p>Weitere Infos zu unserem Schiff findest du <a href="schiff#wie">hier</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content ie">
                          <p><a target="_blank" href="umbau">→ Aufschlüsselung</a></p>
<p>Noch nie ertranken so viele Menschen bei ihrer Flucht über die zentrale Mittelmeerroute, wie im vergangenen Jahr.</p>
<p>5.083 Mal kam jede Hilfe zu spät. Wie hoch die Dunkelziffer liegt können wir kaum erahnen.</p>
<p>Weiterhin übernimmt Europa keine Verantwortung. Weiterhin gibt es kein staatliches Seenotrettungsprogramm. Stattdessen wird die unsichtbare Mauer Europas höher gezogen, wie der 10-Punkte Plan der EU zeigt.</p>
<br>
<p>Wir haben 2016 ein Schiff gekauft, es umgebaut und bisher 6.526 Menschen aus Seenot gerettet. Ab März 2017 setzen wir unsere Einsätze fort.</p>
<br>
<p>Doch bevor es los geht, brauchen wir eure Hilfe: Denn die IUVENTA verlässt ihren Winterschlaf und es wird geschraubt, gebohrt und geschweisst, was das Zeug hält, um noch im Frühjahr unsere erste Rettungsmissionen zu starten. Auch wenn die EU mit ihrer Abschottungspolitik einen Schritt weiter geht und nun mit Libyen kooperieren will, werden wir Menschen nicht ertrinken lassen. Als junge Europäer_innen sehen wir uns in der Pflicht, Verantwortung zu übernehmen und zu handeln. Unsere IUVENTA steht also nun im Hafen von Venedig und wird wieder bereit gemacht.</p>
<br>
<p>Wir sagen:</p>
<p>Frontex rüstet auf? - Das können wir auch.</p>
<br>
<p>Wir werden nicht schweigend zusehen, wie die EU mit ihrem 10-Punkte-Plan klang heimlich die Mauer um Europa höher baut. Wir werden die IUVENTA in den nächsten Wochen wieder fit machen.</p>
<p>Jeder Euro hilft uns dabei, das Ziel zu verwirklichen und noch im Frühjahr rauszufahren.</p>
                          <br>
                          <p>Weitere Infos zu unserem Schiff findest du <a href="schiff#wie">hier</a>.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div id="content">
                <footer>
                    <div id="peek-container"></div>
                    <nav class="footer">
                        <ul>
                            <li><a href="faq">FAQ</a></li>
                            <li class="likelink"><span class="peek" id="folgen">Folgen</span></li>
                            <li><a href="presse">Presse</a></li>
                            <li><a href="impressum">Impressum</a></li>
                            <li><a href="transparenz">Transparenz</a></li>
                            <li class="br"></li>
                            <li><a href="https://en.jugendrettet.org/spenden">en</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src="./js/main.js?0"></script>
        <script src="./js/peekfield.js?2"></script>
          <div id="ship-pos-container">
            <div id="ship-pos">
              <script type="text/javascript"
                src="./js/vesselfinder-vars.js">
              </script>
              <script type="text/javascript"
                src="https://www.vesselfinder.com/aismap.js">
              </script>
            </div>
          </div>
    </body>
</html>
