// cache the navigation links 
var $navigationLinks = $("nav>a");
// cache (in reversed order) the sections
var $sections = $($(".scroll-section").get().reverse());

// map each section id to their corresponding navigation link
var sectionIdTonavigationLink = {};
$sections.each(function() {
  var id = $(this).attr('id');
  sectionIdTonavigationLink[id] = $("nav>a[href=\\#" + id + ']');
});

// throttle function, enforces a minimum time interval
function throttle(fn, interval) {
  var lastCall, timeoutId;
  return function () {
    var now = new Date().getTime();
    if (lastCall && now < (lastCall + interval) ) {
      // if we are inside the interval we wait
      clearTimeout(timeoutId);
      timeoutId = setTimeout(function () {
        lastCall = now;
        fn.call();
      }, interval - (now - lastCall) );
    } else {
      // otherwise, we directly call the function 
      lastCall = now;
      fn.call();
    }
  };
}

function highlightNavigation() {
  // get the current vertical position of the scroll bar
  var scrollPosition = $(window).scrollTop();
  var toleratePosition = scrollPosition + 80;

  // iterate the sections
  $sections.each(function() {
    var currentSection = $(this);
    // get the position of the section
    var sectionTop = currentSection.offset().top;

    // if the user has scrolled over the top of the section  
    if (toleratePosition >= sectionTop) {
      // get the section id
      // if we reached the bottom, highlight the section's link with class "scroll-last"
      // + highlight the section itself if it has class "scroll-highlight"
      var idh = $('.scroll-highlight').attr('id');
      if($(window).scrollTop() + $(window).height() == $(document).height()) {
        var id = $('.scroll-last').attr('id');
        $("#" + idh).addClass('highlight');
      } else {
        var id = currentSection.attr('id');
        $("#" + idh).removeClass('highlight');
      }
      // get the corresponding navigation link
      var $navigationLink = sectionIdTonavigationLink[id];
      // if the link is not active
      if (!$navigationLink.hasClass('active')) {
        // remove .active class from all the links
        $navigationLinks.removeClass('active');
        // add .active class to the current link
        $navigationLink.addClass('active');
        // add .inactive class to all the links (important for mobile)
        $navigationLinks.addClass('inactive');
        // remove .inactive class from the current link (important for mobile)
        $navigationLink.removeClass('inactive');
      }
      // we have found our section, so we return false to exit the each loop
      return false;
    }
  });
}

$(window).scroll( throttle(highlightNavigation,100) );

// if you don't want to throttle the function use this instead:
// $(window).scroll( highlightNavigation );