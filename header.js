$(document).ready(function(){

    jQuery.prototype.extend({


        headerShrink : function() {

            var $el = $(this),
                scrollPsiotion = $(document).scrollTop();

            if(scrollPsiotion > 0) {

                $el.addClass('small-header');

            }

            $(window).on('scroll', function(){

                if( $(this).scrollTop() === 0){
                    $el.removeClass('small-header');
                }
                else {
                    $el.addClass('small-header');
                }

            });

        }

    });

    $('.site-header').headerShrink();

});