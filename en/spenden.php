<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta name="google-site-verification" content="KMNzTcq9zAtZpPFU4205bFNZx-FZKyiSFaNqrbi4XPI" />
        <meta name="description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation, sea, rescue, Mediterranean, refugee, fund, donate, europe" />

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta property="og:url" content="http://en.jugendrettet.org/spenden" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />

        <meta charset="utf-8">
        <title>Donate — Jugend Rettet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="language" content="en">
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
                    $phase1 = file_get_contents('../donations/phase1.txt');
                    $value1 = number_format(32 / 270000 * $phase1,2,",",".");                                 echo 100 / 270000 * $phase1;
                    ?>%;
            }
            #phase hr.load#ph-zwei-progress {
                transition: 800ms ease;
                width: <?php
                        $phase2 = file_get_contents('../donations/phase2.txt');
                        echo 100 / 240000 * $phase2;
                    ?>%;
            }
            #phase hr.load#ph-drei-progress {
                transition: 800ms ease;
                width: <?php
                        $phase3 = file_get_contents('../donations/phase3.txt');
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
                        <li><a href="schiff">The Ship</a></li>
                        <!--<li><a href="team">Team</a></li>-->
                        <li><a href="aendern">Rescue</a></li>
                        <li><a href="spenden" class="indicator">Donate</a></li>
                        <li><a href="europe">Jugend Rettet <span class="lowercase">europe</span></a></li>
                    </ul>
                </nav>
            </header>
            <div class="popup-flat">
                <div id=top>
                </div>
                <div class="triple">
                    <h3>Donate</h3>
                    <p>People on the Meditarranean are dying right now. That’s why we need money to buy our ship and to start rescuing.</p>
                </div>
                <div class="container triple">

                  <div style="margin-right:10px"class="column">
                    <div style="padding-left:5px;padding-right:5px" id="spendenbox">
                      <h4 id="spendenkonto">Account for Donations</h4>
                      <p><b>Beneficiary:</b> Jugend Rettet e.V.</p>
                      <p><b>Account number:</b> 0190465743</p>
                      <p><b>IBAN:</b> DE28 1005 0000 0190 4657 43</p>
                      <p><b>BIC:</b> BELADEBEXXX</p>
                      <p><b>Bank:</b> Berliner Sparkasse</p>
                      <br>
                      <h4>Donate directly</h4>
                      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="SBV6JB66SH52G">
                      <input type="image" src="http://jugendrettet.org/graphics/checkout-logo-69x26-alt-2x.png" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen – mit PayPal.">
                      </form>
                      <p style="font-size:small">PayPal charges 1.5% + 0,35€ for each donation.</p>
                    </div>
                  </div>

                  <div class="column" style="min-width:235px">
                    <h4>Phases</h4>
                    <p>Our timetable is set. From June on, we will save human lifes. The funding of our rescue mission will run in three phases. Trace here, how long it will take until our first rescue mission takes off.</p>
                    <br>
                    <div id="phase">
                        <div class="ph-container" id="ph-eins">
                            <div class="header">
                                <span class="title">Phase 1</span><span class="percentage"><?php echo $value1;?>m / 32m</span>
                                <hr id="ph-eins-progress"></hr>
                            </div>
                            <div class="content" id="ph-eins-content">
                                <p>Until 15th of February 2016 we will collect the funds for the purchase of the ship. You can find further information on our ship <a href="schiff#wie">here</a>.

                                Our ship is 32m (105ft) long. By now, <?php echo $value1;?>m are funded. Donate 10cm for yourself!</p>
                                <br>
                                <p>Accumulated cost for aquisition and transfer are <b>270.000 €</b>.</p>
                            </div>
                        </div>
                        <div class="ph-container" id="ph-zwei">
                            <div class="header">
                                <span class="title">Phase 2</span><span class="percentage"><span style="color: red;">From 16th February 2016</span><!--<?php
                                $phase2 = file_get_contents('donations/phase2.txt');
                                echo round(100 / 240000 * $phase2);
                                ?>%--></span>
                                <hr id="ph-zwei-progress"></hr>
                            </div>
                            <div class="content" id="ph-zwei-content">
                                <p>Phase 2 two will run until 31st of March.</p>
                                <br>
                                <p>For equipment and conversion of the ship for our needs, we will need <b>240.000 €</b>.</p>
                            </div>
                        </div>
                        <div class="ph-container" id="ph-drei">
                            <div class="header">
                                <span class="title">Phase 3</span><span class="percentage"><span style="color: red;">From 1st April 2016</span><!--<?php
                                $phase3 = file_get_contents('donations/phase3.txt');
                                echo round(100 / 290000 * $phase3);
                                ?>%--></span>
                                <hr id="ph-drei-progress"></hr>
                            </div>
                            <div class="content" id="ph-drei-content">
                                <p>In Phase 3 the running costs for our six-month rescue mission will be collected. The mission is set to take off in early summer.</p>
                                <br>
                                <p>A six-month rescue mission on the Mediterranean Sea will cost us about <b>290.000 €</b>.</p>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="column" style="min-width: 300px;">
                  <h4>Phase 1 - Ship</h4>

                    <div id="schiff-ani">
                      <div class="schiff-klappe" id="1-klappe">
                        <b>Ship's propeller</b>
                          <p>In the rear of the ship are the propeller and a tender.</p>
                      </div>
                      <div class="schiff-klappe" id="2-klappe">
                        <b>Crew cabin / engine room</b>
                          <p>During our operation, our ship’s crew of 11 will live in the crew quarters. A small kitchen andsanitary installations also belong to the quarters.</p>
                      </div>
                      <div class="schiff-klappe" id="3-klappe">
                        <b>Captains quarter / Bridge</b>
                          <p>The quarter of our captain is in direct reach of the navigating bridge. Here, the captain and his surrogate, the helmsman, will steer the ship in four-hour shifts.</p>
                      </div>
                      <div class="schiff-klappe" id="4-klappe">
                        <b>Medical quarters</b>
                          <p>In front of the bridge, at deck’s height, is a room for medical supply. Typical symptoms on the Mediterranean Sea, like hypothermia, dehydration, itch or abrasion and lacerasion, will be treated on board by our doctor.</p>
                      </div>
                      <div class="schiff-klappe" id="5-klappe">
                        <b>Deck with hydraulic crane</b>
                          <p>The hydraulic crane lifts our tenders to the water. With those, we will get the people from their boats to our mothership. The space on deck is designated for the rescued people. Women, Men and families will be sheltered separately.</p>
                      </div>
                      <div class="schiff-klappe" id="6-klappe">
                        <b>Deck</b>
                          <p>A truck tarpaulin protects the rescued people from wind and weather. On deck will be space for approximately 90 people.</p>
                      </div>
                      <div class="schiff-klappe" id="7-klappe">
                        <b>Storage for life vests / refrigerated hold for fare</b>
                          <p>A refrigerated hold for provisions of crew and rescued as well as a storage for life vests is in this part of the ship.</p>
                      </div>
                      <div class="schiff-klappe" id="8-klappe">
                        <b>Bow / fresh water tank</b>
                          <p>In the bow of the ship are fresh water tanks to supply crew and rescued people.</p>
                      </div>
                      <br>
                      <div id=schiff-container style="min-height:133px;width:300px;">
                        <div id="schiff" style="padding:5px;position:absolute">
                          <img src="http://jugendrettet.org/graphics/schiff-konturen-weiss.svg" alt="Das Schiff" style="width:300px;opacity:0.1">
                        </div>
                        <div class="blink balken" id="schiff-gespendet" style="background-color:#286482;padding:5px;position:absolute;overflow:hidden;-webkit-transition: width 2s;transition: width 2s;width:calc(300px*10200/270000)">
                          <img src="http://jugendrettet.org/graphics/schiff-konturen-weiss.svg" alt="Das Schiff" style="width:300px" class="blink">
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
                          <span id="stand" class="spendenstand schiff" style="white-space: nowrap;position:absolute;left: calc(-15px + 300px*10200/270000)">10.2 Tsd. €</span>
                        </div>

                      </div><br>
                      <br>
                      <p>Click on the meter marks, to see how the ship is divided.</p>
                    </div>
                    <br>
                    <h4>Calculator</h4>
                      <div id="rechner">
                      <input type="Text" id="spendeinput" oninput="rechnen(this.form)"> €
                      <!--
                      <p>Die Menschen auf dem Mittelmeer sterben jetzt. Deshalb brauchen wir Geld, um unser Schiff zu kaufen und mit der Rettung zu beginnen. Wir dürfen keine Zeit verlieren. Werde jetzt Förderer.</p><br><br>
                      <a id="aendern-btn" href="http://www.betterplace.org" target="_blank">Jetzt Spenden!</a><br><br>
                      -->

                      <!-- <span id="aendern-field">!</span><br><br> -->
                      <br><br>
                      <div id="spendentext" style="display:none">
                        <p id="text-schiffsteil-prozent">With your <b class="EUR"></b> <b>€</b> a total of <b id="prozent"></b> <b>%</b> would be added to the first part of the ship – the ship’s propeller.</p>
                        <p id="text-schiffsteil-komplett">With your <b class="EUR"></b> <b>€</b> the first part of the ship – the ship’s propeller – would be completed!</p>
                        <p id="text-schiffsteil-mehr">And even more:</p>

                        <p id="text-schiff-meter">Summed up, with this money <b id="meter"></b> <b id="unitmeter">m</b> of the ship are funded. That's <b id="qmeter"></b> <b id="unitqmeter">m²</b> for the sea rescue.</p>

                        <p id="text-schiff-komplett">With your <b class="EUR"></b> <b>€</b> the whole ship would be funded! With a length of <b>32 m / 105ft</b> and <b>160 m² / 1722ft²</b> on deck, there is enough space for the sea rescue of up to <b>80 people</b> at once.</p>

                        <p id="button"><br><br><a id="aendern-btn" onclick="changeColor('#spendenbox');toDiv('#top');">I WANT TO RESCUE TOO!</a></p>

                      </div>
                      <div id="spendentext-fehler" style="display:none">
                        <p>Please try again with numbers only.</p>
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
                            <li><a class="peek" id="kontakt">Contact</a></li>
                            <li><a href="impressum">Legal Notice</a></li>
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
