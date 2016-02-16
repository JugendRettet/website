$(document).ready(function() {

    
    $(window).on('scroll');
    
    var status = [];
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function() {

        check();
    
    });
    
});

function check() {

         /* Check the location of each desired element */
        $('.hideme').each( function(i, el){
            
            if (status[i] !== 'showing') { // Makes sure that we haven't already done this item
                
                var top_of_object = $(this).position().top;
                var bottom_of_object = $(this).position().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                
                /* If the object is visible in the window, fade it it */
                if( bottom_of_window > top_of_object ){
                    
                    $(this).animate({'opacity':'1'},2000);
                    status[i] = 'showing';   
                    
                    if ($('.hideme').index($(this)) + 1 === $('.hideme').length) {
                        // We've shown them all, stop listening for scroll events!
                        $(window).off('scroll');
                    }  
                    
                }
                
            }
            
        }); 
}