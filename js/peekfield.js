var email = 'info@jugendrettet.org',
    postfach = '36 03 55, 10973 Berlin',
    telefon = '+49 160 95 68 38 73';

var impressum_h1 = 'Diese Website wird betrieben von:',
    verein = 'Jugend Rettet e. V.',
    adresse_1 = '36 03 55',
    adresse_2 = '10973 Berlin',
    impressum_h2 = 'Vertreten durch:',
    name_1 = 'Jakob Schoen',
    name_2 = 'Luise Kallenberg',
    name_3 = 'Lena Waldhoff',
    impressum_h3 = 'Haftung für Inhalte',
    impressum_p3 = 'Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.',
    impressum_h4 = 'Haftung für Links',
    impressum_p4 = 'Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.',
    impressum_h5 = 'Urheberrecht',
    impressum_p5 = 'Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.';
    
var fb = 'facebook.com/JugendRettet',
    twitter = 'twitter.com/jugendrettet',
    instagram = 'instagram.com/jugendrettet',
    newsletter = 'http://jugendrettet.org/news';

$('#peek-container').html('<div class="peekfield" id="kontakt-peek"><div class="single"><h3>Kontakt</h3></div><div class="scroller single"><div class="column"><p>E-Mail: <a href="mailto:' + email + '">' + email + '</a></p><p>Postfach: <a href="#">' + postfach + '</a></p><p>Telefon: <a href="tel:' + telefon + '">' + telefon + '</a></p></div></div></div><div class="peekfield" id="impressum-peek"><div class="triple"><h3>Impressum</h3><h4>' + impressum_h1 + '</h4><p>' + verein + '</p><p>' + adresse_1 + '</p><p>' + adresse_2 + '</p><h4>' + impressum_h2 + '</h4><p>' + name_1 + '</p><p>' + name_2 + '</p><p>' + name_3 + '</p></div><div class="scroller triple"><div class="column"><h4>' + impressum_h3 + '</h4><p>' + impressum_p3 + '</p></div><div class="column"><h4>' + impressum_h4 + '</h4><p>' + impressum_p4 + '</p></div><div class="column"><h4>' + impressum_h5 + '</h4><p>' + impressum_p5 + '</p></div></div></div><div class="peekfield" id="folgen-peek"><div class="single"><h3>Folge uns</h3></div><div class="scroller single"><div class="column"><p>Facebook: <a href="https://' + fb + '">' + fb + '</a></p><p>Twitter: <a href="https://' + twitter + '">' + twitter + '</a></p><p>Instagram: <a href="https://' + instagram + '">' + instagram + '</a></p><p>Newsletter: <a href="news">News</a></p></div></div></div><div class="peekfield" id="follow-peek"><div class="single"><h3>follow us</h3></div><div class="scroller single"><div class="column"><p>facebook: <a href="https://' + fb + '">' + fb + '</a></p><p>twitter: <a href="https://' + twitter + '">' + twitter + '</a></p><p>instagram: <a href="https://' + instagram + '">' + instagram + '</a></p><p>newsletter: <a href="news">news</a></p></div></div></div>');
