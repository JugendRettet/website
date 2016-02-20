<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="de" prefix="og: http://ogp.me/ns#">
    <head>
        <meta name="description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation" />

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta property="og:url" content="http://en.jugendrettet.org/spenden" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />

        <meta charset="utf-8">
        <title>Spenden — Jugend Rettet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="language" content="de">
        <link rel="shortcut icon" type="image/x-icon" href="http://jugendrettet.org/graphics/jr.ico"/>
        <link rel="mask-icon" href="http://jugendrettet.org/graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="http://jugendrettet.org/graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="http://jugendrettet.org/css/waves.1.css" type="text/css" />

        <link href="http://jugendrettet.org/css/general.css" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/main.css?0" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/desktop.css?0" media="screen and (min-device-width: 851px)" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/mobile.css?0" media="screen and (max-device-width: 850px)" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://jugendrettet.org/css/animations.1.css?0" type="text/css" />


        <script src="http://jugendrettet.org/js/jquery-1.10.2.min.js"></script>
        <script src="http://jugendrettet.org/js/rechner.2.js"></script>
        <script src="http://jugendrettet.org/js/hideme.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('body').fadeIn(400);
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
        </script>
        <style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('donations/phase1.txt');
                    $value1 = number_format(32 / 80000 * $phase1,2,",",".");
                    echo 100 / 80000 * $phase1;
                    ?>%;
            }
            #phase hr.load#ph-zwei-progress {
                transition: 800ms ease;
                width: <?php
                        $phase2 = file_get_contents('donations/phase2.txt');
                        echo 100 / 240000 * $phase2;
                    ?>%;
            }
            #phase hr.load#ph-drei-progress {
                transition: 800ms ease;
                width: <?php
                        $phase3 = file_get_contents('donations/phase3.txt');
                        echo 100 / 290000 * $phase3;
                    ?>%;
            }
        </style>
    </head>

    <body>
        <div id="pop-back"></div>
        <div id="header-back"></div>
	    <div id="wrap">
            <header>
                <a id="logo-wrap" href="/">
                    <img id="logo" src="http://jugendrettet.org/graphics/logo.svg" alt="Jugent Rettet">
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
                        <li><a href="aendern">Retten</a></li>
                        <li><a href="spenden" class="indicator">Spenden</a></li>
                        <li><a href="europe">Jugend Rettet <span class="lowercase">europe</span></a></li>
                    </ul>
                </nav>
            </header>
            <div class="popup-flat">
                <div id=top>
                </div>
                <div class="double">
                    <h3>Spenden</h3>
                    <p>Die Menschen auf dem Mittelmeer sterben jetzt. Deshalb brauchen wir Geld, um unser Schiff zu kaufen und mit der Rettung zu beginnen.</p>
                </div>
                <div class="container double">

                  <div style="margin-right:10px"class="column">
                    <div style="padding-left:5px;padding-right:5px" id="spendenbox">
                      <h4 id="spendenkonto">Spendenkonto</h4>
                      <p><b>Empfänger:</b> Jugend Rettet e.V.</p>
                      <p><b>Kontonummer:</b> 0190465743</p>
                      <p><b>IBAN:</b> DE28 1005 0000 0190 4657 43</p>
                      <p><b>BIC:</b> BELADEBEXXX</p>
                      <p><b>Kreditinstitut:</b> Berliner Sparkasse</p>
                      <br>
                      <h4>direkt spenden</h4>
                        <script type="text/javascript">
                          /* Configure at https://www.betterplace.org/de/projects/39807-rette-mit-umbau-unseres-schiffes-zur-seenotrettung-im-mittelmeer/manage/iframe_donation_form */
                          var _bp_iframe        = _bp_iframe || {};
                          _bp_iframe.project_id = 39807; /* REQUIRED */
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
                        <div id="betterplace_donation_iframe" style="background: transparent url('https://www.betterplace.org/assets/new_spinner.gif') 275px 20px no-repeat;"><strong><a href="https://www.betterplace.org/de/projects/39807-rette-mit-umbau-unseres-schiffes-zur-seenotrettung-im-mittelmeer/donations/new">Jetzt Spenden für „Rette mit! Umbau unseres Schiffes zur Seenotrettung im Mittelmeer“ bei unserem Partner betterplace.org</a></strong></div>
                    
                    </div>

                   <!-- <h4>Rechner</h4>
                      <div id="rechner">
                          <input type="Text" id="spendeinput" oninput="rechnen(this.form)"> €
                          <br><br>
                          <div id="spendentext" style="display:none">
                            <p id="text-schiffsteil-prozent">Mit deinen <b class="EUR"></b> <b>€</b> kämen <b id="prozent"></b> <b>%</b> zum zweiten Schiffsteil - Crewräume und Maschinenraum - dazu.</p>
                            <p id="text-schiffsteil-komplett">Mit deinen <b class="EUR"></b> <b>€</b> wäre das zweite Schiffsteil - Crewräume und Maschinenraum - komplett!</p>
                            <p id="text-schiffsteil-mehr">Sogar noch mehr:</p>

                            <p id="text-schiff-meter">Insgesamt wären damit <b id="meter"></b> <b id="unitmeter">m</b> des Schiffs finanziert. Das sind <b id="qmeter"></b> <b id="unitqmeter">m²</b>, die Platz für die Seenotrettung bieten.</p>

                            <p id="text-schiff-komplett">Mit deinen <b class="EUR"></b> <b>€</b> wäre das gesamte Schiff finanziert! Mit einer Länge von <b>32 m</b> und einer Fläche von <b>160 m²</b> bietet es genug Platz, um mehr als <b>80 Menschen</b> auf einmal aus der Seenot zu retten.</p>

                            <p id="button"><br><br><a id="aendern-btn" onclick="changeColor('#spendenbox');toDiv('#top');">ICH RETTE MIT!</a></p>

                          </div>
                          <div id="spendentext-fehler" style="display:none">
                            <p>Bitte versuch es nur mit Zahlen.</p>
                          </div>
                        </div> -->

                  </div>

                  <div class="column hideme" style="min-width: 300px;">
                    <h4>SPENDENSTAND: 24.308,00€</h4>
                    <div id="schiff-ani">
                        <div id=schiff-container style="min-height:133px;width:300px;">
                            <div id="schiff" style="padding:5px;position:absolute">
                              <img src="http://jugendrettet.org/graphics/schiff-konturen-weiss.svg" alt="Das Schiff" style="width:300px;opacity:0.1">
                            </div>
                            <div class="blink balken" id="schiff-gespendet" style="padding:5px;position:absolute;overflow:hidden;width:calc(300px * 24308 / 80000);">
                              <img src="http://jugendrettet.org/graphics/schiff-blau-neu.svg" alt="Das Schiff" style="width:300px" class="blink">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="phase">
                        <div class="ph-container" id="ph-eins">
                            <div class="header">
                                <span class="title">Phase 1</span><span class="percentage"><?php echo $value1;?>m / 32m</span>
                                <hr id="ph-eins-progress"></hr>
                            </div>
                            <div class="content" id="ph-eins-content">
                                <p>Wir haben uns bei der Kreuzberger Kinderstiftung auf ein Stiftungsgeld von 5000€ beworben. Der Gründer der Stiftung war so begeistert von unserem Projekt, dass er uns die 150.000€, die ein Schiff nach unseren Vorstellungen kostet, spendet. Bedingung ist allerdings, dass wir das Geld für den Umbau und die laufenden Kosten für den ersten Monat - <b>80.000€</b> - <b>bis 31. März 2016</b> zusammenkriegen. Wir sind überwältigt von dieser Großzügigkeit. Damit der Umbau ab 01. April planmäßig stattfinden kann, benötigen wir euch nun mehr denn je: Bitte unterstützt uns, indem ihr weiterhin von uns erzählt. Jede noch so kleine Spende bringt uns unserem Ziel, Menschenleben zu retten, weiter!</p>
                                <br>
                                <p>Danke an alle, die schon so fleißig gespendet und von uns erzählt haben. Es gilt jetzt, alles zu mobilisieren, damit der Umbau für die Rettungsmissionen umgesetzt werden kann.</p>
                                <br>
                                <p>Weitere Infos zu unserem Schiff findest du <a href="schiff#wie">hier</a>.</p>
                                <br>
                                <p>Unser Schiff wird etwa 32m lang sein. Bisher sind <?php echo $value1;?>m finanziert. Spende auch du 10 cm.</p>
                            </div>
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
                            <li><a class="peek" id="folgen">Folgen</a></li>
                            <li><a href="presse">Presse</a></li>
                            <li><a href="impressum">Impressum</a></li>
                            <li class="br"></li>
                            <li><a href="http://en.jugendrettet.org/spenden">English</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src="http://jugendrettet.org/js/main.js"></script>
        <script src="http://jugendrettet.org/js/peekfield.js?2"></script>
    </body>
</html>
