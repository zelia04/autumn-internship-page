jQuery(document).ready(function($) {
    $.fn.timeline = function () {
        var selectors = {
            id: $(this),
            item: $(this).find(".timeline-item"),
            activeClass: "timeline-item--active"
        };
        selectors.item.eq(0).addClass(selectors.activeClass);

        var itemLength = selectors.item.length;
        $(window).scroll(function () {
            var max, min;
            var pos = $(this).scrollTop(); // howmany pixel is the current scrolling view from the top of the html aka how far u have scrolled from the top
            selectors.item.each(function (i) {
                min = $(this).offset().top; //howmany pixel is this element frmo the top of the html body
                var imgHeight = $(this).find('.timeline__img').first().height();
                max = imgHeight + $(this).offset().top;// max = height of $(".timeline-item img") + distance in pixel from the top of html body $(".timeline-item")
                console.log(imgHeight);

                if (pos <= max - imgHeight && pos >= min - (imgHeight* 1.2)) {
                    selectors.item.removeClass(selectors.activeClass);
                    $(this).addClass(selectors.activeClass);
                }
            });
        });
    };

    $("#timeline-1").timeline();
});


