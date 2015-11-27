$(document).ready(function () {
    $('#create-new-event').click(function () {
        /*
        $.urlParam = function (name) {
            var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
            return results[1] || 0;
        };
        */
        var title = $.urlParam('evnt-title'),
            date = $.urlParam('evnt-date').split('.'),
            day = date[1],
            month = date[2],
            year = date[3],
            time_start = $.urlParam('evnt-time-start').split(':'),
            time_end = $.urlParam('evnt-time-end').split(':'),
            h_start = time_start[1],
            h_end = time_end[1],
            m_start = time_start[2],
            m_end = time_end[2],
            location_title = $.urlParam('evnt-location'),
            adresse = $.urlParam('evnt-street').split(' '),
            strasse = adresse[1],
            hausnummer = adresse[2],
            plz = $.urlParam('evnt-plz'),
            ort = $.urlParam('evnt-ort'),
            content = $.urlParam('evnt-content'),
            
            new_event = '<a href="events.html?date=' + day + '-' + month + '-' + year + '" class="event-container"><span class="event-date">Mittwoch, ' + day + '. Oktober ' + year + '</span><span class="event-title">' + title + '</span></a>',
            
            the_event = '<div class="date-container" id="' + day + '-' + month + '-' + year + '"><h4>' + title + '</h4><p>' + content + '<br><div class="event-container"><div class="event-date">Freitag, ' + day + '. Oktober ' + year + '</div><div class="event-icon"><img src="http://jugendrettet.org/graphics/location.png" width="14px" alt="Location"></div><div class="event-title"><a href="https://www.google.de/maps/place/Fehrbelliner+Str.+6,+10119+Berlin/@52.53119,13.40995,19z/data=!3m1!4b1!4m2!3m1!1s0x47a851e2b62257db:0x193bfd38b39e961c" target="_blank">' + location_title + '<br>' + strasse + ' ' + hausnummer + '<br>' + plz + ' ' + ort + '</a></div><br><div class="event-icon"><img src="http://jugendrettet.org/graphics/time.png" height="14px" alt="Time"></div><div class="event-title">' + h_start + ':' + m_start + ' Uhr - ' + h_end + ':' + m_end + ' Uhr</div></div><br></div>';
            });

    $('#create-new-event').click(function () {
        alert('title');
    });
    /*
    $(new_event).appendTo('europe-events');
    $(the_event).appendTo('the-events');
    */
});
