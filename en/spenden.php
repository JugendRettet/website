<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation, sea, rescue, Mediterranean, refugee, fund, donate, europe" />

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta property="og:url" content="https://en.jugendrettet.org/spenden" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:image:secure_url" content="https://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />

        <link rel="alternate" hreflang="de" href="http://jugendrettet.org/spenden" />

        <title>Donate — Jugend Rettet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="../graphics/jr.ico"/>
        <link rel="mask-icon" href="../graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="../graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="../css/waves.1.css" type="text/css" />

        <link href="../css/general.css" rel="stylesheet" type="text/css">
        <link href="../css/main.css?7" rel="stylesheet" type="text/css">
        <link href="../css/desktop.css?3" media="screen and (min-width: 851px)" rel="stylesheet" type="text/css">
        <link href="../css/mobile.css?4" media="screen and (max-width: 850px)" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/animations.1.css?0" type="text/css" />
        <!--[if IE]>
            <link rel="stylesheet" href="../ie-css/noship.css" type="text/css" />
        <![endif]-->

        <script src="../js/jquery-1.10.2.min.js"></script>
        <!--<script src="../js/rechner.1.js?11"></script>-->
        <script src="../js/hideme.js"></script>
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
        </script>
        <!--<style type="text/css">
            #phase hr.load#ph-eins-progress {
                transition: 800ms ease;
                width: <?php
                    $phase1 = file_get_contents('../donations/phase1.txt');
                    $value1 = number_format(32 / 80000 * (float)$phase1,2,".",",");
                    echo 100 / 80000 * $phase1;
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

    <body>
        <div id="pop-back"></div>
        <div id="header-back"></div>
        <div id="wrap">
            <header>
                <a id="logo-wrap" href="/">
                    <img id="logo" src="../graphics/logo.svg" alt="Jugent Rettet">
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
                        <li><a href="team">Team</a></li>
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

                    <div style="margin-right:10px" class="column">
                        <div style="padding-left:5px;padding-right:5px">
                            <h4 id="spendenkonto">Account for Donations</h4>
                            <p><b>Beneficiary:</b> Jugend Rettet e.V.</p>
                            <p><b>Account number:</b> 0190465743</p>
                            <p><b>IBAN:</b> DE28 1005 0000 0190 4657 43</p>
                            <p><b>BIC:</b> BELADEBEXXX</p>
                            <p><b>Bank:</b> Berliner Sparkasse</p>
                        </div>
                        <br>
                        <h4 style="padding-left:5px;"><a target="_blank" href="https://www.betterplace.org/de/organisations/26895-jugend-rettet-e-v/donations/new">→ Donate directly</a></h4>
                        <br>
                        <!--<h4>Calculator</h4>
                        <div id="rechner">
                            <input type="Text" id="spendeinput" oninput="rechnen()"> €
                            <br><br>
                            <div id="spendentext" style="display:none">

                                <p id="text-schiffsteil-prozent">With your <b class="EUR"></b> <b>€</b> a total of <b id="prozent"></b> <b>%</b> would be added to our next need – a dinghy with a holder.</p>
                                <p id="text-schiffsteil-komplett">With your <b class="EUR"></b> <b>€</b> our next need – a dinghy with a holder – would be completed!</p>
                                <p id="text-schiffsteil-mehr">And even more:</p>

                                <p id="text-schiff-meter">Summed up, with this money <b id="meter"></b> <b id="unitmeter">m</b> of the ship are funded. That's <b id="qmeter"></b> <b id="unitqmeter">m²</b> for the sea rescue.</p>

                                <p id="text-schiff-komplett">With your <b class="EUR"></b> <b>€</b> the whole ship would be funded! With a length of <b>32 m / 105ft</b> and <b>160 m² / 1722ft²</b> on deck, there is enough space for the sea rescue of up to <b>80 people</b> at once.</p>

                                <p id="button"><br><br><a id="aendern-btn" onclick="changeColor('#spendenbox');toDiv('#top');">I WANT TO RESCUE TOO!</a></p>
                            </div>

                            <div id="spendentext-fehler" style="display:none">
                                <p>Please try again with numbers only.</p>
                            </div>
                        </div>-->
                    </div>

                    <div class="column hideme" style="min-width: 300px;">
                        <h4>RAISED FUNDS</h4>
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
                                <div id="schiff" style="position:absolute">
                                  <img src="../graphics/schiff-starkekonturen-weiss.svg" alt="The Ship" style="width:300px;opacity:0.4">
                                </div>
                                <div class="blink balken" id="schiff-gespendet" style="position:absolute;overflow:hidden;width:300px;">
                                  <img src="../graphics/schiff-blau-starkekontur.svg" alt="The Ship" style="width:300px" class="blink">
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
                                <!--<div style="position:absolute;width:300px">
                                    <span id="stand" class="spendenstand schiff" style="white-space: nowrap;position:absolute;left: calc(-15px + 300px*75432/80000)">75.4 Tsd. €</span>
                                </div>-->
                            </div>
                        </div>
                        <br>
                        <div style="display:initial;" id="phase">
                            <div style="max-width:300px;" class="ph-container" id="ph-eins">
                                <div class="header" style="text-align:center;">
                                    <!--<span class="title">Phase 1</span>--><span class="percentage"><?php echo $value1;?> €</span>
                                    <hr id="ph-eins-progress">
                                </div>
                                <div class="content" id="ph-eins-content">
                                    <p>Funding Phase 2 &#10003; Thanks!<br>How will we proceed?</p>
                                    <br>
                                    <p>
                                        Dear Supporters! We steadily work towards being able to start our rescue mission in June. Our aim abides: Everyone in maritime emergency deserves rescue. Together with the wharf, we are performing some last examinations and finalize plans for converting the ship. This implies that we need some more time until we can share definite news concerning our next steps. Please bear with us. What is set, is that we now start the next stage, 'Rescue Mission'. Your support for the first rescue mission in summer is needed! We appreciate every help. Rescue too!
                                    </p>
                                    <br>
                                    <p>You can find further information on our ship <a href="schiff#wie">here</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content ie">
                            <p>Funding Phase 2 &#10003; Thanks!<br>How will we proceed?</p>
                            <br>
                            <p>
                                Dear Supporters! We steadily work towards being able to start our rescue mission in June. Our aim abides: Everyone in maritime emergency deserves rescue. Together with the wharf, we are performing some last examinations and finalize plans for converting the ship. This implies that we need some more time until we can share definite news concerning our next steps. Please bear with us. What is set, is that we now start the next stage, 'Rescue Mission'. Your support for the first rescue mission in summer is needed! We appreciate every help. Rescue too!
                            </p>
                            <br>
                            <p>You can find further information on our ship <a href="schiff#wie">here</a>.</p>
                        </div>
                    </div>

                    <div class="column">
                        <h4>Transparency (de)</h4>
                        <a href="https://jugendrettet.org/transparenz"><img style="width:calc(100% - 12px);padding:5px;background:white;border:solid 1px #286482;" src="../graphics/Transparente_Zivilgesellschaft.svg"></a>
                    </div>

                </div>
            </div>
            <div id="content">
                <footer>
                    <div id="peek-container"></div>
                    <nav class="footer">
                        <ul>
                            <li><a href="faq">FAQ</a></li>
                            <li class="likelink"><span class="peek" id="follow">Follow</span></li>
                            <li><a href="presse">Press</a></li>
                            <li><a href="impressum">Legal Notice</a></li>
                            <li><a href="https://jugendrettet.org/transparenz">Transparency (de)</a></li>
                            <li class="br"></li>
                            <li><a href="https://jugendrettet.org/spenden">de</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src="../js/main.js?0"></script>
        <script src="../js/peekfield.js?2"></script>
    </body>
</html>
