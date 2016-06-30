<!DOCTYPE html>
<html id="html_tag" xmlns="http://www.w3.org/1999/xhtml" lang="de" prefix="og: http://ogp.me/ns#">
    <head>
        <title>News — Jugend Rettet</title>
        <meta name="description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta charset="utf-8">
        <meta name="author" content="Jugend Rettet" />
        <meta name="keywords" content="Jugend, Rettet, Jugend Rettet, Jugend Rettet e. V., Seenotrettung, Mittelmeer, Flüchtlinge, Spenden, Europa, Organisation" />
        <meta name="google-site-verification" content="KMNzTcq9zAtZpPFU4205bFNZx-FZKyiSFaNqrbi4XPI" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <meta property="og:title" content="Jugend Rettet" />
        <meta property="og:description" content="Wir sind eine Organisation von jungen Erwachsenen für junge Erwachsene. Wir sammeln Gelder für den Erwerb eines Schiffes und mit diesem Schiff werden wir private Seenotrettung auf dem Mittelmeer betreiben." />
        <meta property="og:url" content="http://jugendrettet.org/news" />
        <meta property="og:image" content="http://jugendrettet.org/images/jr-banner.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Jugend Rettet" />
	<meta id ='latest_update'>

        <link rel="shortcut icon" type="image/x-icon" href="http://jugendrettet.org/graphics/jr.ico" />
        <link rel="mask-icon" href="http://www.jugendrettet.org/graphics/jr-mask.svg" color="rgb(40,100,130)">
        <link rel="apple-touch-icon" href="http://jugendrettet.org/graphics/apple-touch-icon.png"/>
        <link rel="stylesheet" href="http://jugendrettet.org/css/waves.css" type="text/css" />

        <link rel="stylesheet" href="http://jugendrettet.org/css/general.css" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/main.css" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/desktop.css" media="screen and (min-device-width: 851px)" type="text/css" />
        <link rel="stylesheet" href="http://jugendrettet.org/css/mobile.css" media="screen and (max-device-width: 850px)" type="text/css" />

        <script src="http://jugendrettet.org/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('body').fadeIn(400);
            });
        </script>
        <style type="text/css">
            #was {
                background-image: url(images/neu.jpg);
            }
            #warum {
                background-image: url(images/news.jpg);
            }
        </style>
    </head>

    <body>

	<script>
		var latest_post;		
			
		// initialize and setup facebook js sdk
		window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1044556435641796',
		      xfbml      : true,
		      version    : 'v2.6'
		    });
		    FB.getLoginStatus(function(response) {
		    	if (response.status === 'connected') {
		    		//document.getElementById('status').innerHTML = 'We are connected.';
		    		//document.getElementById('login').style.visibility = 'hidden';
				getInfo();
		    	} else if (response.status === 'not_authorized') {
		    		document.getElementById('status').innerHTML = 'We are not logged in.'
		    	} else {
		    		document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
		    	}
		    });
		};
		(function(d, s, id){
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) {return;}
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		
		// login with facebook with extra permissions
		function login() {
			FB.login(function(response) {
				if (response.status === 'connected') {
		    		document.getElementById('status').innerHTML = 'We are connected.';
		    		document.getElementById('login').style.visibility = 'hidden';
		    	} else if (response.status === 'not_authorized') {
		    		document.getElementById('status').innerHTML = 'We are not logged in.'
		    	} else {
		    		document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
		    	}
			}, {scope: 'email'});
		}


                      function getInfo() {
			console.log(typeof(document.getElementById("added_news")));

			if (document.getElementById("added_news")){
				document.getElementById("added_news").parentNode.removeChild(document.getElementById("added_news"));
			} 
			
			var added_news = document.createElement('div');
			added_news.setAttribute('id', 'added_news');
			document.getElementById('news').appendChild(added_news);
			
				


			latest_post = new Date(document.getElementById('date_input').value);
			
                        FB.api('/jugendrettet', 'GET', {fields: 'posts.since(' + latest_post.toLocaleDateString('en-US')  +  '){caption, message, created_time, full_picture}'}, function(response) {
                        //FB.api('/jugendrettet', 'GET', {fields: 'posts.since(' + document.getElementById('date_input').value  +  '){caption, message, created_time, full_picture}'}, function(response) {
                        //    document.getElementById('status').innerHTML = response.posts[0];    //<img src='" + response.picture.data.url + "'>";
                        for (var i=0; i<response.posts.data.length; i++)
                        { 
				

				var date_ = new Date(response.posts.data[i].created_time);
		
				
				if (date_ > latest_post){
					latest_post = date_;
				}
				
				
 				var b = document.createElement('b');
                                b.setAttribute('id', (i+1).toString());
                                //a.className = 'faq';
 

                                var div = document.createElement('div');
                                //div.className = 'faq-klappe';
				div.className = 'news_entry';	
                                div.setAttribute('id', (i+1).toString() + '-klappe')

				
                                var p = document.createElement('p');
				var text = response.posts.data[i].message;
				$('p').linkify();
				
				if (!text){
					continue;
				}

				var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                                a.innerHTML = '<b>' + date_.toLocaleDateString('de-DE', options) + ': </b>'; 
				
                                p.innerHTML = text;
				p.innerHTML = p.innerHTML.replace(/__(.|\n)*/, "");
				
				img = document.createElement('img');
				img.className = 'news';
				img.src = response.posts.data[i].full_picture;

				var br = document.createElement('br');
				

				var news_text = document.createElement('div');
				news_text.className = 'news_content';
				news_text.appendChild(p);								

                                div.appendChild(news_text);
				div.appendChild(img);
				
				div.appendChild(br);

				wrapper = document.createElement('div');
				
				added_news.appendChild(wrapper);

				wrapper.appendChild(b);
				wrapper.appendChild(del_icon)
				wrapper.appendChild(div);
				wrapper.appendChild(br);

				var del_icon = document.createElement("img");
				del_icon.src = "http://oldkry.newfire.rocks/menu/side-items/img/icons/icon_x.png";
				del_icon.setAttribute('align', 'right');
				del_icon.setAttribute('height', '15px');
				//b.appendChild(del_icon);
				
				if (p.innerHTML == 'undefined'){
                                        added_news.removeChild(wrapper);
                                }

				del_icon.addEventListener("click", function(event){ 
					document.getElementById('added_news').removeChild(event.target.parentNode.parentNode);
				});

					
    							
                        }

                        });

		}

			
			function uploadPage(){

				var access_token = FB.getAuthResponse()['accessToken'];
				console.log(access_token);
				
				
                                $.ajax({
					//data: 'access_token=' + access_token,
                                         data: 'page=' + encodeURIComponent(document.getElementById('added_news').innerHTML) + "&latest_post=" + latest_post.toLocaleDateString('en-US') + "&access_token=" + access_token,
                                         url: 'getPage.php',
                                         method: 'POST', // or GET
                                        success: function(msg) {
                                        alert(msg);
						window.alert(msg);
                                        }
                                });

                        }


	</script>


        <div id="pop-back"></div>
        <div id="header-back"></div>
	    <div id="wrap">
            <header>
                <a id="logo-wrap" href="index">
                    <img id="logo" src="http://jugendrettet.org/graphics/logo.svg" alt="Jugend Rettet">
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
                        <li><a href="news" class="indicator">News</a></li>
                        <li><a href="schiff">Das Schiff</a></li>
                        <li><a href="team">Team</a></li>
                        <li><a href="aendern">Retten</a></li>
                        <li><a href="spenden">Spenden</a></li>
                        <li><a href="europe">Jugend Rettet <span class="lowercase">europe</span></a></li>
                    </ul>
                </nav>
            </header>
            <div class="popup-flat">
                <div class="triple">
                    <h3>Neuigkeiten</h3>
                </div>
                <div class="container triple">
                    <div class="column" id="news">
                      <a class="faq" id="0"><h4>→ FOLGE UNS</h4></a>
                      <div class="faq-klappe" id="0-klappe">
                          <b>Bleib auf dem neusten Stand</b>
                          <p>Was gibt es Neues bei <i>Jugend Rettet</i>? Änderungen und Fortschritte findest du hier. Abonniere unseren Newsletter und besuche uns auf <a target="_blank" href="https://www.facebook.com/JugendRettet" class="link">Facebook</a>, <a href="https://twitter.com/jugendrettet" class="link">Twitter</a> und <a href="https://www.instagram.com/jugendrettet/" class="link">Instagram</a>.</p><br>
                          <div id="mc_embed_signup">
                              <form action="//jugendrettet.us11.list-manage.com/subscribe/post?u=f6a6af2c458db9585a65cbee8&amp;id=cf9c18faae" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                  <div id="mc_embed_signup_scroll">
                                      <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Deine E-Mail-Adresse" required>
                                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                      <div style="position: absolute; left: -5000px;"><input type="text" name="b_f6a6af2c458db9585a65cbee8_cf9c18faae" tabindex="-1" value=""></div>
			

                                      <div class="clear"><input type="submit" value="OK" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                  </div>
                              </form>
                          </div>
                      </div><br>

			 <form>
  				<!--Posts seit :<br>-->
  				<input id="date_input" value="<?php echo file_get_contents("latest_post") ?>"><br>
			</form> 


		      	<button onclick="getInfo()">Get Posts</button>
			<button onclick="login()" id="login">Login</button>
			<button onclick="uploadPage()" id="upload">Upload</button>
			<div id="status"></div>
	
                    </div>
                    <div class="column">
                      <h4>Was wir geschafft haben</h4>
                        <ul>
                          <li>&#10003; Wir haben Schiffe unseres gewünschten Schiffstyps - holländische Fischtrawler - besichtigt. Sobald wir uns für ein Schiff entschieden haben erstellen wir die Pläne für den Umbau im April.</li><br>
                          <li>&#10003; Wir haben eine 11-köpfige Crew inklusive Kapitän gefunden und gemeinsam unsere halbjährige Operation geplant.</li><br>
                          <li>&#10003; Wir haben ein Netz von Botschaftern in über 15 deutschen Städten aufgebaut.</li><br>
                          <li>&#10003; Wir haben Maria Furtwängler, Armin Rohde und Jasmin Gerat als Stimmen für <i>Jugend Rettet</i> gewinnen können.</li><br>
                          <li>&#10003; Wir haben in Berlin ein Kernteam von 11 Menschen aufgebaut.</li>
                        </ul>
                    </div>
                    <div class="column">
                      <h4>Was wir noch schaffen werden</h4>
                        <ul>
                          <li>&#9633; Dass Seenotrettung in der jungen Generation ein Thema bleibt und die Situation der Menschen auf dem Mittelmeer weiterhin in der Öffentlichkeit eine Rolle spielt.</li><br>
                          <li>&#9633; Dass wir unser Netzwerk an europäischen Botschaftern ausweiten.</li><br>
                          <li>&#9633; Dass wir die Spendenphase bis Februar meistern und unsere Crowdfunding-Kampagne erfolgreich abschließen.</li><br>
                          <li>&#9633; Dass wir Partnerschulen und Partner-Jugendorganisationen gewinnen.</li>
                        </ul>
                    </div>
                </div>
                <!--
                <div class="container single">
                    <div class="column">
                        <ul id="social-media">

                            <a href="https://www.facebook.com/JugendRettet" target="_blank"><li><img id="fb" width="30px" src="http://jugendrettet.org/graphics/fb.svg"></li></a>
                            <a href="http://www.twitter.com/" target="_blank"><li><img id="tw" width="30px" src="http://jugendrettet.org/graphics/tw.svg"></li></a>
                            <li>
                                <form class="newsletter">
                                    <input class="email" type="email" value="" placeholder="Deine E-Mail-Adresse" />
                                    <input class="submit" type="submit" value="OK" />
                                </form>
                            </li>
                        </ul>
                        <div style="max-width: 520px; height: 100%; display: block; margin: 0 auto;">
                    	<a class="twitter-timeline"  href="https://twitter.com/moas_eu " data-widget-id="639167337715892224" data-chrome="noborders nofooter noscrollbar transparent" data-tweet-limit="3">Tweets von @moas_eu</a>
                		<script>
                    		!function (d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0]; //, p = /^http:/.test(d.location) ? 'http' : 'https';
								if (!d.getElementById(id)) {
									js = d.createElement(s);
                        	   	 	js.id = id; // js.src = p + '://platform.twitter.com/widgets.js';
									js.src = "https://platform.twitter.com/widgets.js";
									fjs.parentNode.insertBefore(js, fjs);
								}
							} (document, 'script', 'twitter-wjs');
                		</script>
                        </div>
                	</div>
                </div>
                -->
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
                            <li><a href="http://en.jugendrettet.org/news">English</a></li>
                            <li><a href="http://jugendrettet.org/news">Deutsch</a></li>
                        </ul>
                    </nav>
                </footer>
            </div>
        </div>

        <!-- Scripts -->
        <script src="http://jugendrettet.org/js/main.js"></script>
        <script src="http://jugendrettet.org/js/peekfield.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/linkify/linkify.min.js"></script>
	<script src="js/linkify/linkify-jquery.min.js"></script>
	<script src="node_modules/readmore-js/readmore.min.js"></script>
    </body>
</html>

