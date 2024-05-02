function removeJsCssFile(filename, filetype) {

    var targetelement = (filetype == "js") ? "script" : (filetype == "css") ? "link" : "none";

    var targetattr = (filetype == "js") ? "src" : (filetype == "css") ? "href" : "none";

    var allsuspects = document.getElementsByTagName(targetelement);

    for (var i = allsuspects.length; i >= 0; i--) {

        if (allsuspects[i] && allsuspects[i].getAttribute(targetattr) != null && allsuspects[i].getAttribute(targetattr).indexOf(filename) != -1)

            allsuspects[i].parentNode.removeChild(allsuspects[i]);

    }
}

$(document).ready(function() {
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });

    $("#printBtn").click(function(e) {
        e.preventDefault();
    });

    $('.bigMenuBtn').click(function(e) {
        window.scrollTo({ top: 0 });
        const body = $("body");
        const content = $("body .menuContentInner");

        const className = "openMenu";

        if (body.hasClass(className)) {
            content.removeClass('show');
            setTimeout(function() {
                body.removeClass(className);
            }, 200);
        } else {
            body.addClass(className);

            setTimeout(function() {
                content.addClass('show');
            }, 200);
        }
    });

    $(".__searchBtn").click(function(e) {
        e.preventDefault();
        const form = $('.mainSearchForm');
        if (form.hasClass('active')) {
            form.removeClass('active');
        } else {
            form.addClass('active');
            $("#mainSearch").focus();
        }
    });

    $('#filterBtn').click(function(e) {
        e.preventDefault();

        $('.searchForm').stop().slideToggle(500);
    });

    $.fn.hoverIntent = function(handlerIn, handlerOut, selector) {

        var cfg = {
            interval: 100,
            sensitivity: 6,
            timeout: 0
        };

        if (typeof handlerIn === "object") {
            cfg = $.extend(cfg, handlerIn);
        } else if ($.isFunction(handlerOut)) {
            cfg = $.extend(cfg, { mouseenter: handlerIn, out: handlerOut, selector: selector });
        } else {
            cfg = $.extend(cfg, { over: handlerIn, out: handlerIn, selector: handlerOut });
        }

        var cX, cY, pX, pY;

        var track = function(ev) {
            cX = ev.pageX;
            cY = ev.pageY;
        };

        var compare = function(ev, ob) {
            ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);

            if (Math.sqrt((pX - cX) * (pX - cX) + (pY - cY) * (pY - cY)) < cfg.sensitivity) {
                $(ob).off("mousemove.hoverIntent", track);

                ob.hoverIntent_s = true;
                return cfg.over.apply(ob, [ev]);
            } else {

                pX = cX;
                pY = cY;

                ob.hoverIntent_t = setTimeout(function() {
                    compare(ev, ob);
                }, cfg.interval);
            }
        };

        var delay = function(ev, ob) {
            ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
            ob.hoverIntent_s = false;
            return cfg.out.apply(ob, [ev]);
        };

        var handleHover = function(e) {

            var ev = $.extend({}, e);
            var ob = this;

            if (ob.hoverIntent_t) {
                ob.hoverIntent_t = clearTimeout(ob.hoverIntent_t);
            }

            if (e.type === "mouseenter") {
                pX = ev.pageX;
                pY = ev.pageY;
                $(ob).on("mousemove.hoverIntent", track);
                if (!ob.hoverIntent_s) {
                    ob.hoverIntent_t = setTimeout(function() {
                        compare(ev, ob);
                    }, cfg.interval);
                }

            } else {
                $(ob).off("mousemove.hoverIntent", track);
                if (ob.hoverIntent_s) {
                    ob.hoverIntent_t = setTimeout(function() {
                        delay(ev, ob);
                    }, cfg.timeout);
                }
            }
        };

        return this.on({ 'mouseenter.hoverIntent': handleHover, 'mouseleave.hoverIntent': handleHover }, cfg.selector);
    };

    $(".inlinesvg").inlineSvg();
});