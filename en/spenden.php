<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation, sea, rescue, Mediterranean, refugee, fund, donate, europe" />

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta property="og:url" content="http://en.jugendrettet.org/spenden" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />

        <link rel="alternate" hreflang="de" href="http://jugendrettet.org/spenden" />

        <title>Donate — Jugend Rettet</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
        <script src="http://jugendrettet.org/js/rechner.1.js?0"></script>
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
                    $phase1 = file_get_contents('../donations/phase1.txt');
                    $value1 = number_format(32 / 80000 * $phase1,2,",",".");
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
        </style>
    </head>

    <body>
        <div id="pop-back"></div>
        <div id="header-back"></div>
        <div id="wrap">
            <header>
                <a id="logo-wrap" href="/?0">
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
                        <li><a href="news.php">News</a></li>
                        <li><a href="schiff.php">The Ship</a></li>
                        <li><a href="team.php">Team</a></li>
                        <li><a href="aendern.php">Rescue</a></li>
                        <li><a href="spenden.php" class="indicator">Donate</a></li>
                        <li><a href="europe.php">Jugend Rettet <span class="lowercase">europe</span></a></li>
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

                        <h4>Calculator</h4>
                        <div id="rechner">
                            <input type="Text" id="spendeinput" oninput="rechnen()"> €
                            <br><br>
                            <div id="spendentext" style="display:none">

                                <p id="text-schiffsteil-prozent">With your <b class="EUR"></b> <b>€</b> a total of <b id="prozent"></b> <b>%</b> would be added to our first need – life jackets.</p>
                                <p id="text-schiffsteil-komplett">With your <b class="EUR"></b> <b>€</b> our first need – life jackets – would be completed!</p>
                                <p id="text-schiffsteil-mehr">And even more:</p>

                                <p id="text-schiff-meter">Summed up, with this money <b id="meter"></b> <b id="unitmeter">m</b> of the ship are funded. That's <b id="qmeter"></b> <b id="unitqmeter">m²</b> for the sea rescue.</p>

                                <p id="text-schiff-komplett">With your <b class="EUR"></b> <b>€</b> the whole ship would be funded! With a length of <b>32 m / 105ft</b> and <b>160 m² / 1722ft²</b> on deck, there is enough space for the sea rescue of up to <b>80 people</b> at once.</p>

                                <p id="button"><br><br><a id="aendern-btn" onclick="changeColor('#spendenbox');toDiv('#top');">I WANT TO RESCUE TOO!</a></p>
                            </div>

                            <div id="spendentext-fehler" style="display:none">
                                <p>Please try again with numbers only.</p>
                            </div>
                        </div>
                    </div>

                    <div id="spendenbox" class="column">
                        <h4 style="padding-left:5px;">Donate directly</h4>
                        <script type="text/javascript">
                          /* Configure at https://www.betterplace.org/de/projects/39807-rette-mit-umbau-unseres-schiffes-zur-seenotrettung-im-mittelmeer/manage/iframe_donation_form */
                          var _bp_iframe        = _bp_iframe || {};
                          _bp_iframe.project_id = 39807; /* REQUIRED */
                          _bp_iframe.lang       = 'en'; /* Language of the form */
                          /* Remove "//" for further customization but *only* if you really need to! */
                          // _bp_iframe.width = 600; /* Custom iframe-tag-width, integer */
                          _bp_iframe.color = '286482'; /* Button and banderole color, hex without "#" */
                          _bp_iframe.background_color = '142D3C'; /* Background-color, hex without "#" */
                          _bp_iframe.default_amount = 50; /* Donation-amount, integer 1-99 */
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

                    <div class="column hideme" style="min-width: 300px;">
                        <h4>RAISED FUNDS: 25,715.01€</h4>
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
                                  <img src="http://jugendrettet.org/graphics/schiff-starkekonturen-weiss.svg" alt="The Ship" style="width:300px;opacity:0.4">
                                </div>
                                <div class="blink balken" id="schiff-gespendet" style="padding:5px;position:absolute;overflow:hidden;width:calc(300px * 25715 / 80000);">
                                  <img src="http://jugendrettet.org/graphics/schiff-blau-starkekontur.svg" alt="The Ship" style="width:300px" class="blink">
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
                                    <span id="stand" class="spendenstand schiff" style="white-space: nowrap;position:absolute;left: calc(-15px + 300px*25715/80000)">25.7 Tsd. €</span>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div id="phase">
                            <div class="ph-container" id="ph-eins">
                                <div class="header">
                                    <span class="title">Phase 1</span><span class="percentage"><?php echo $value1;?>m / 32m</span>
                                    <hr id="ph-eins-progress">
                                </div>
                                <div class="content" id="ph-eins-content">
                                    <p>
                                        We applied for a fund of 5000€ at the Kreuzberger Kinderstiftung. The founder of that initiative 
                                        was so excited to hear about our plan, that he will donate the full 150.000€ which a ship will 
                                        cost in our calculations. Condition to this is, that we collect the money for conversion and running 
                                        costs for the first month - <b>80.000€ - until March 31st</b>. We are stunned by this generosity. 
                                        To make the conversion happen as planned, beginning April 1st, we need you more than ever: Please 
                                        support us by telling about us. Every little donation will bring us closer to our aim, to save human lives!
                                    </p>
                                    <br>
                                    <p>
                                        Thank you so much everyone, who already donated to us and spread our word. It is important now to get 
                                        everything going, so the conversion for rescue missions can be realized.
                                    </p>
                                    <br>
                                    <p>You can find further information on our ship <a href="schiff#wie">here</a>.</p>
                                    <br>
                                    <p>
                                        Our ship will be 32m (105ft) long. By now, <?php echo $value1;?>m are funded.
                                        Donate 10cm for yourself!
                                    </p>
                                </div>
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
                            <li><a class="peek" id="follow">Follow</a></li>
                            <li><a href="presse">Press</a></li>
                            <li><a href="impressum">Legal Notice</a></li>
                            <li class="br"></li>
                            <li><a href="http://jugendrettet.org/spenden.php">de</a></li>
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
