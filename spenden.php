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
        <link href="http://jugendrettet.org/css/waves.css" rel="stylesheet" type="text/css">

        <link href="http://jugendrettet.org/css/general.css" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/main.css" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/desktop.css" media="screen and (min-device-width: 851px)" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/mobile.css" media="screen and (max-device-width: 850px)" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://jugendrettet.org/css/animations.css" type="text/css" />


        <script src="http://jugendrettet.org/js/jquery-1.10.2.min.js"></script>
        <script src="http://jugendrettet.org/js/rechner.js"></script>
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
                    $value1 = number_format(32 / 270000 * $phase1,2,",",".");                                 echo 100 / 270000 * $phase1;
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
                <a id="logo-wrap" href="index">
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
                <div class="triple">
                    <h3>Spenden</h3>
                    <p>Die Menschen auf dem Mittelmeer sterben jetzt. Deshalb brauchen wir Geld, um unser Schiff zu kaufen und mit der Rettung zu beginnen.</p>
                </div>
                <div class="container triple">

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
                      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="SBV6JB66SH52G">
                      <input type="image" src="graphics/checkout-logo-69x26-alt-2x.png" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
                      </form>
                      <p style="font-size:small">PayPal erhebt für Spenden 1.5% + 0,35€</p>
                    </div>
                  </div>

                  <div class="column" style="min-width:235px">
                    <h4>Phasen</h4>
                    <p>Unser Zeitplan steht. Ab Juni werden wir Menschenleben retten. Die Finanzierung unserer Rettungsmission läuft in drei Phasen ab. Verfolge hier, wie lange es bis zu unserer ersten Rettungsmission noch dauert</p>
                    <br>
                    <div id="phase">
                        <div class="ph-container" id="ph-eins">
                            <div class="header">
                                <span class="title">Phase 1</span><span class="percentage"><?php echo $value1;?>m / 32m</span>
                                <hr id="ph-eins-progress"></hr>
                            </div>
                            <div class="content" id="ph-eins-content">
                                <p>Bis zum 15. Februar 2016 werden wir die Gelder für den Kauf des Schiffs sammeln. Weitere Infos zu unserem Schiff findest du <a href="schiff#wie">hier</a>.

                                Unser Schiff ist 32m lang. Bisher sind <?php echo $value1;?>m finanziert. Spende auch du 10 cm.</p>
                                <br>
                                <p>Insgesamt fallen für Kauf und Überführung <b>270.000 €</b> an.</p>
                            </div>
                        </div>
                        <div class="ph-container" id="ph-zwei">
                            <div class="header">
                                <span class="title">Phase 2</span><span class="percentage"><span style="color: red;">Ab dem 16. Feb. 2016</span><!--<?php
                                $phase2 = file_get_contents('donations/phase2.txt');
                                echo round(100 / 240000 * $phase2);
                                ?>%--></span>
                                <hr id="ph-zwei-progress"></hr>
                            </div>
                            <div class="content" id="ph-zwei-content">
                                <p>Phase 2 läuft bis zum 31. März.</p>
                                <br>
                                <p>Für die Austattung und den Umbau des Schiffs in Hamburg für unseren Zweck werden wir <b>240.000 €</b> brauchen.</p>
                            </div>
                        </div>
                        <div class="ph-container" id="ph-drei">
                            <div class="header">
                                <span class="title">Phase 3</span><span class="percentage"><span style="color: red;">Ab dem 1. April 2016</span><!--<?php
                                $phase3 = file_get_contents('donations/phase3.txt');
                                echo round(100 / 290000 * $phase3);
                                ?>%--></span>
                                <hr id="ph-drei-progress"></hr>
                            </div>
                            <div class="content" id="ph-drei-content">
                                <p>In Phase 3 werden die laufenden Kosten für unsere halbjährige Rettungsmission gesammelt, die im Frühsommer starten soll.</p>
                                <br>
                                <p>Eine halbjährige Rettungsoperation auf dem Mittelmeer wird etwa <b>290.000 €</b> kosten.</p>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="column" style="min-width: 300px;">
                  <h4>Phase 1 - Schiff</h4>

                    <div id="schiff-ani">
                      <div class="schiff-klappe" id="1-klappe">
                        <b>Schiffsschraube</b>
                          <p>Im Heck unseres Schiffes finden sich Schiffsschraube und ein Beiboot.</p>
                      </div>
                      <div class="schiff-klappe" id="2-klappe">
                        <b>Crewräume/Maschinenraum</b>
                          <p>Unsere 11 köpfige Crew wird während unserer Rettungsoperation in den Crewräumen unterkommen. Eine kleine Küche, sanitäre Anlagen gehören ebenfalls zu den Crewräumen.</p>
                      </div>
                      <div class="schiff-klappe" id="3-klappe">
                        <b>Raum Kapitän/Brücke</b>
                          <p>Die Kabine unseres Kapitäns liegt unmittelbar in der Nähe der Kommandobrücke. Hier werden der Kapitän und sein Ersatz, der Steuermann, in Vier-Stunden-Schichten das Schiff steuern.</p>
                      </div>
                      <div class="schiff-klappe" id="4-klappe">
                        <b>Räume medizinische Versorgung</b>
                          <p>Der Brücke vorgelagert, auf Höhe des Decks liegt ein Raum für die medizinische Versorgung. Auf dem Mittelmeer häufige Symptome wie Unterkühlung, Dehydratation, Kretze oder Schürf-, und Platzwunden werden von unserem Arzt an Bord behandelt.</p>
                      </div>
                      <div class="schiff-klappe" id="5-klappe">
                        <b>Deckfläche mit Hydraulikkran</b>
                          <p>Der Hydraulikkran hebt unsere beiden Beiboote ins Wasser. Mit denen werden wir die Menschen von ihren Booten zu unserem Mutterschiff holen. Die Fläche an Deck ist für die geretteten Menschen vorgesehen. Frauen, Männer und Familien werden getrennt voneinander untergebracht.</p>
                      </div>
                      <div class="schiff-klappe" id="6-klappe">
                        <b>Deckfläche</b>
                          <p>Eine LKW-Plane schützt die Geretteten vor Wind und Wetter. Etwa 90 Personen werden an Deck Platz finden.</p>
                      </div>
                      <div class="schiff-klappe" id="7-klappe">
                        <b>Lager für Rettungswesten/Kühllager für Verpflegung</b>
                          <p>Ein Kühllager für Verpflegung von Crew und Geretteten sowie ein Lager für Schwimmwesten findet sich in diesem Bereich des Schiffes.</p>
                      </div>
                      <div class="schiff-klappe" id="8-klappe">
                        <b>Bug/Frischwassertank</b>
                          <p>In der Spitze des Schiffs finden sich Frischwassertanks, mit denen Crew und Gerettete versorgt werden.</p>
                      </div>
                      <br>
                      <div id=schiff-container style="min-height:133px;width:300px;">
                        <div id="schiff" style="padding:5px;position:absolute">
                          <img src="graphics/schiff-konturen-weiss.svg" alt="Das Schiff" style="width:300px;opacity:0.1">
                        </div>
                        <div class="blink balken" id="schiff-gespendet" style="background-color:#286482;padding:5px;position:absolute;overflow:hidden;-webkit-transition: width 2s;transition: width 2s;width:calc(300px*16500/270000)">
                          <img src="graphics/schiff-konturen-weiss.svg" alt="Das Schiff" style="width:300px" class="blink">
                        </div>
                        <div style="position:absolute;width:300px;">
                          <!--<span id="0" class="unterteilungen">0m</span>-->
                          <a id="1" class="unterteilungen schiff" style="position:absolute;left: calc(300px*2/32)">2m</a>
                          <a id="2" class="unterteilungen schiff" style="position:absolute;left: calc(-5px + 300px*7/32)">7m</a>
                          <a id="3" class="unterteilungen schiff" style="position:absolute;left: calc(-5px + 300px*10/32)">10m</a>
                          <a id="4" class="unterteilungen schiff" style="position:absolute;left: calc(-5px + 300px*13/32)">12m</a>
                          <a id="5" class="unterteilungen schiff" style="position:absolute;left: calc(-5px + 300px*19/32)">19m</a>
                          <a id="6" class="unterteilungen schiff" style="position:absolute;left: calc(-15px + 300px*26/32)">26m</a>
                          <a id="7" class="unterteilungen schiff" style="position:absolute;left: calc(-15px + 300px*29/32)">29m</a>
                          <a id="8" class="unterteilungen schiff" style="position:absolute;left: calc(-15px + 300px)">32m</a>
                        </div>
                        <div style="position:absolute;width:300px">
                          <!--<span id="0" class="unterteilungen">0m</span>-->
                          <span id="stand" class="spendenstand schiff" style="white-space: nowrap;position:absolute;left: calc(-15px + 300px*16500/270000)">16.5 Tsd. €</span>
                        </div>

                      </div><br>
                      <br>
                      <p>Klicke auf die Meterangaben, um zu schauen, wie das Schiff aufgeteilt ist!</p>
                    </div>
                    <br>
                    <h4>Rechner</h4>
                      <div id="rechner">
                      <input type="Text" id="spendeinput" oninput="rechnen(this.form)"> €
                      <!--
                      <p>Die Menschen auf dem Mittelmeer sterben jetzt. Deshalb brauchen wir Geld, um unser Schiff zu kaufen und mit der Rettung zu beginnen. Wir dürfen keine Zeit verlieren. Werde jetzt Förderer.</p><br><br>
                      <a id="aendern-btn" href="http://www.betterplace.org" target="_blank">Jetzt Spenden!</a><br><br>
                      -->

                      <!-- <span id="aendern-field">!</span><br><br> -->
                      <br><br>
                      <div id="spendentext" style="display:none">
                        <p id="text-schiffsteil-prozent">Mit deinen <b class="EUR"></b> <b>€</b> kämen <b id="prozent"></b> <b>%</b> zum ersten Schiffsteil - der Schiffsschraube - dazu.</p>
                        <p id="text-schiffsteil-komplett">Mit deinen <b class="EUR"></b> <b>€</b> wäre das erste Schiffsteil - die Schiffsschraube - komplett!</p>
                        <p id="text-schiffsteil-mehr">Sogar noch mehr:</p>

                        <p id="text-schiff-meter">Insgesamt wären damit <b id="meter"></b> <b id="unitmeter">m</b> des Schiffs finanziert. Das sind <b id="qmeter"></b> <b id="unitqmeter">m²</b>, die Platz für die Seenotrettung bieten.</p>

                        <p id="text-schiff-komplett">Mit deinen <b class="EUR"></b> <b>€</b> wäre das gesamte Schiff finanziert! Mit einer Länge von <b>32 m</b> und einer Fläche von <b>160 m²</b> bietet es genug Platz, um mehr als <b>80 Menschen</b> auf einmal aus der Seenot zu retten.</p>

                        <p id="button"><br><br><a id="aendern-btn" onclick="changeColor('#spendenbox');toDiv('#top');">ICH RETTE MIT!</a></p>

                      </div>
                      <div id="spendentext-fehler" style="display:none">
                        <p>Bitte versuch es nur mit Zahlen.</p>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>
            </div>
            <div id="content">
                <footer>
                    <div id="peek-container"></div>
                    <nav class="footer">
                        <ul>
                            <li><a href="faq">FAQ</a></li>
                            <li><a class="peek" id="kontakt">Kontakt</a></li>
                            <li><a href="impressum">Impressum</a></li>
                            <li class="br"></li>
                            <li><a href="http://en.jugendrettet.org/spenden">English</a></li>
                            <li><a href="http://de.jugendrettet.org/spenden">Deutsch</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src="http://jugendrettet.org/js/main.js"></script>
        <script src="js/peekfield.js"></script>
    </body>
</html>
