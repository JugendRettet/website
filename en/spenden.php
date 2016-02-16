<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta name="google-site-verification" content="KMNzTcq9zAtZpPFU4205bFNZx-FZKyiSFaNqrbi4XPI" />
        <meta name="description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation, sea, rescue, Mediterranean, refugee, fund, donate, europe" />

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="We are an organization of young adults for young adults. We collect funds to buy a ship. With this ship, we will conduct private sea rescue on the Mediterranean Sea" />
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
        <link rel="stylesheet" href="http://jugendrettet.org/css/waves.1.css" type="text/css" />

        <link href="http://jugendrettet.org/css/general.css" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/main.css" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/desktop.css" media="screen and (min-device-width: 851px)" rel="stylesheet" type="text/css">
        <link href="http://jugendrettet.org/css/mobile.css" media="screen and (max-device-width: 850px)" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://jugendrettet.org/css/animations.1.css" type="text/css" />


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
                <div class="double">
                    <h3>Donate</h3>
                    <p>People on the Meditarranean are dying right now. That’s why we need money to buy our ship and to start rescuing.</p>
                </div>
                <div class="container double">

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
                      <p style="font-size:small">PayPal charges 1.5% + 0.35€ for each donation.</p>
                    </div>
                  </div>

                  <div class="column hideme" style="min-width: 300px;">
                    <h4>RAISED FUNDS: 21,950.80€</h4>
                    <div id="schiff-ani">
                        <div id=schiff-container style="min-height:133px;width:300px;">
                            <div id="schiff" style="padding:5px;position:absolute">
                              <img src="http://jugendrettet.org/graphics/schiff-konturen-weiss.svg" alt="The Ship" style="width:300px;opacity:0.1">
                            </div>
                            <div class="blink balken" id="schiff-gespendet" style="padding:5px;position:absolute;overflow:hidden;width:calc(300px * 21950 / 80000);">
                              <img src="http://jugendrettet.org/graphics/schiff-blau-neu.svg" alt="The Ship" style="width:300px" class="blink">
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
                            <li><a class="peek" id="kontakt">Contact</a></li>
                            <li><a href="presse">Press</a></li>
                            <li><a href="impressum">Legal Notice</a></li>
                            <li class="br"></li>
                            <li><a href="http://jugendrettet.org/spenden">Deutsch</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src="http://jugendrettet.org/js/main.js"></script>
        <script src="http://jugendrettet.org/js/peekfield.js"></script>
    </body>
</html>
