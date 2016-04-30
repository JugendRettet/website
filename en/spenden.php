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
        <link href="../css/main.css?8" rel="stylesheet" type="text/css">
        <link href="../css/desktop.css?4" media="screen and (min-width: 851px)" rel="stylesheet" type="text/css">
        <link href="../css/mobile.css?5" media="screen and (max-width: 850px)" rel="stylesheet" type="text/css">
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
                    ?>0%;
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
                        <li><a href="retten">Rescue</a></li>
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
                        <h4>Transparency (de)</h4>
                        <a href="https://jugendrettet.org/transparenz"><img style="width:calc(100% - 12px);padding:5px;background:white;border:solid 1px #286482;" src="../graphics/Transparente_Zivilgesellschaft.svg"></a>
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

                    <div class="column">
                        <h4>donate directly</h4>
                        <script type="text/javascript">
                          /* Configure at https://www.betterplace.org/de/projects/42019-rette-mit-einsatz-zur-seenotrettung-auf-dem-mittelmeer/manage/iframe_donation_form */
                          var _bp_iframe        = _bp_iframe || {};
                          _bp_iframe.project_id = 42019; /* REQUIRED */
                          _bp_iframe.lang       = 'en'; /* Language of the form */
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
                        <div id="betterplace_donation_iframe" style="background: transparent url('https://www.betterplace.org/assets/new_spinner.gif') 275px 20px no-repeat;"><strong><a href="https://www.betterplace.org/de/projects/42019-rette-mit-einsatz-zur-seenotrettung-auf-dem-mittelmeer/donations/new">Jetzt Spenden für „Rette mit! - Einsatz zur Seenotrettung auf dem Mittelmeer“ bei unserem Partner betterplace.org</a></strong></div>
                    </div>

                    <div class="column hideme">
                        <!--<h4>RAISED FUNDS</h4>-->
                        <div id="mission-container incolumn" class="center">
                            <!--<div id="belt incolumn">
                              <img class="belt incolumn" src="../graphics/belt.svg" alt="Rettungsring">
                            </div>-->
                            <div class="belt-progress incolumn" id="mission-gespendet">
                              <img class="belt-progress incolumn" src="../graphics/belt-progress.svg" alt="life belt">
                            </div>
                        </div>
                        <br>
                        <div style="display:initial;" id="phase">
                            <div class="ph-container" id="ph-eins">
                                <div class="header" style="text-align:center;">
                                    <!--<span class="percentage"><?php echo $value1;?> €</span>-->
                                    <span class="percentage">Phase 3</span>
                                    <hr id="ph-eins-progress">
                                </div>
                                <div class="content" id="ph-eins-content">
                                    <p>We have accomplished our first stage: 123,000€ were collected
                                    for renovation, transfer and first month at sea. We could not
                                    have achieved this without the great support of our donors,
                                    helpers and our ambassadors in more than 32 European cities.
                                    Thank you!</p>
                                    <br>
                                    <p>But we have not yet reached our main goal: rescuing people in
                                    maritime distress. Every stage takes us one step closer to start
                                    our missions. Right now we are about to finish our renovation
                                    plans and calculation of costs together with our dockyard. In
                                    the meantime we are looking for crew members. As soon as we
                                    will have finished our planning and will be able to win more
                                    crew members for our missions, we will move on with purchasing
                                    the ship. The next steps include dragging, painting and
                                    hammering!</p>
                                    <br>
                                    <p>At the same time a new stage of donating begins to cover the
                                    ongoing costs like petrol, saving appliances, food for the crew
                                    and the rescued, clothes and blankets, as well as the ship
                                    insurance.</p>
                                    <br>
                                    <p>To accomplish this stage we ask for your support: donate now for
                                    our missions and help us save lives. Together we can take a
                                    stand against ignorance and for more humanity. Join the rescue!</p>
                                    <br>
                                    <p>You can find further information on our ship <a href="schiff#wie">here</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="content ie">
                            <p>We have accomplished our first stage: 123,000€ were collected
                            for renovation, transfer and first month at sea. We could not
                            have achieved this without the great support of our donors,
                            helpers and our ambassadors in more than 32 European cities.
                            Thank you!</p>
                            <br>
                            <p>But we have not yet reached our main goal: rescuing people in
                            maritime distress. Every stage takes us one step closer to start
                            our missions. Right now we are about to finish our renovation
                            plans and calculation of costs together with our dockyard. In
                            the meantime we are looking for crew members. As soon as we
                            will have finished our planning and will be able to win more
                            crew members for our missions, we will move on with purchasing
                            the ship. The next steps include dragging, painting and
                            hammering!</p>
                            <br>
                            <p>At the same time a new stage of donating begins to cover the
                            ongoing costs like petrol, saving appliances, food for the crew
                            and the rescued, clothes and blankets, as well as the ship
                            insurance.</p>
                            <br>
                            <p>To accomplish this stage we ask for your support: donate now for
                            our missions and help us save lives. Together we can take a
                            stand against ignorance and for more humanity. Join the rescue!</p>
                            <br>
                            <p>You can find further information on our ship <a href="schiff#wie">here</a>.</p>
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
