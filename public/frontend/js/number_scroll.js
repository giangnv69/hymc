/* ===========================================================
 * animationCounter.js v.1.0.0
 * ===========================================================
 * Copyright 2017 Micheline PavadÃŠ
 * http://www.pixel-renaissance.com
 * https://github.com/mpavade/
 *
 * animationCounter.js is a plugin that animate a counter from one value to another value
 * or from a number to an infinite value
 *
 * License MIT
 *
 * ========================================================== */


(function ($) {

    $.fn.animationCounter = function (options) {
        return this.each(function () {
            try {
                var element = $(this);
                var defaults = {
                    start: 0,
                    end: null,
                    step: 1,
                    delay: 1000,
                    txt: "",
                    type: "increase",
                    fix: true
                }


                var settings = $.extend(defaults, options || {})

                var nb_start = settings.start;
                var nb_end = settings.end;
                var nb_type = settings.type;
                var nb_fixed = settings.fix;
                let start = true;
                element.text(nb_start.toFixed(1) + settings.txt);
                if ($(window).scrollTop() + $(window).height() > element.offset().top && start) {
                    start = false;
                    run()

                }
                $(window).scroll(function () {
                    if ($(window).scrollTop() + $(window).height() > element.offset().top && start) {
                        start = false;
                        run()

                    }

                });

                function run() {
                    if (nb_type != null && nb_type === "increase") {
                        var counter = function () {
                            // Definition of conditions of arrest
                            if (nb_end != null && nb_start >= nb_end) {
                                if (nb_start / 1000000 > 1) {
                                    if (nb_fixed) {
                                        if (nb_start / 1000000 - Math.floor(nb_start / 1000000) > 0) {
                                            element.text((nb_start / 1000000).toFixed(1) + " M");
                                        } else {
                                            element.text((nb_start / 1000000) + " M");
                                        }

                                    } else {
                                        element.text((nb_start / 1000000) + " M");
                                    }
                                } else if (nb_start / 1000 > 1) {
                                    if (nb_fixed) {
                                        if (nb_start / 1000 - Math.floor(nb_start / 1000) > 0) {
                                            element.text((nb_start / 1000).toFixed(1) + " K+");
                                        } else {
                                            element.text((nb_start / 1000) + " K+");
                                        }

                                    } else {
                                        element.text((nb_start / 1000) + " K+");
                                    }
                                } else {
                                    if (nb_fixed) {
                                        if (nb_start - Math.floor(nb_start) > 0) {
                                            element.text((nb_start).toFixed(1) + settings.txt);
                                        } else {
                                            element.text((nb_start + settings.txt));
                                        }

                                    } else {
                                        element.text(nb_start + settings.txt);
                                    }
                                }
                                return;
                            }
                            // incrementation
                            nb_start = nb_start + settings.step;
                            if (nb_start / 1000000 > 1) {
                                if (nb_fixed) {
                                    element.text((nb_start / 1000000).toFixed(1) + " M");
                                } else {
                                    element.text((nb_start / 1000000) + " M");
                                }
                            } else if (nb_start / 1000 > 1) {
                                if (nb_fixed) {
                                    element.text((nb_start / 1000).toFixed(1) + " K+");
                                } else {
                                    element.text((nb_start / 1000) + " K+");
                                }
                            } else {
                                if (nb_fixed) {
                                    element.text(nb_start.toFixed(1));
                                } else {
                                    element.text(nb_start);
                                }
                            }

                            // display

                        }
                        setInterval(counter, settings.delay);
                    } else if (nb_type != null && nb_type === "decrease") {


                        var counter = function () {
                            // Definition of conditions of arrest
                            if (nb_end != null && nb_start < nb_end) {
                                if (nb_start / 1000000 > 1) {
                                    if (nb_fixed) {
                                        if (nb_start / 1000000 - Math.floor(nb_start / 1000000) > 0) {
                                            element.text((nb_start / 1000000).toFixed(1) + " M");
                                        } else {
                                            element.text((nb_start / 1000000) + " M");
                                        }

                                    } else {
                                        element.text((nb_start / 1000000) + " M");
                                    }
                                } else if (nb_start / 1000 > 1) {
                                    if (nb_fixed) {
                                        if (nb_start / 1000 - Math.floor(nb_start / 1000) > 0) {
                                            element.text((nb_start / 1000).toFixed(1) + " K+");
                                        } else {
                                            element.text((nb_start / 1000) + " K+");
                                        }

                                    } else {
                                        element.text((nb_start / 1000) + " K+");
                                    }
                                } else {
                                    if (nb_fixed) {
                                        if (nb_start - Math.floor(nb_start) > 0) {
                                            element.text((nb_start).toFixed(1));
                                        } else {
                                            element.text((nb_start + settings.txt));
                                        }

                                    } else {
                                        element.text(nb_start + settings.txt);
                                    }
                                }
                                return;
                            }
                            // incrementation
                            nb_start = nb_start - settings.step;
                            // display
                            if (nb_fixed) {
                                element.text(nb_start.toFixed(1) + settings.txt);
                            } else {
                                element.text(nb_start + settings.txt);
                            }
                        }
                        setInterval(counter, settings.delay);
                    }
                }



                // Timer 
                // Launches every "settings.delay"


            } catch (e) {
                alert(e + ' at line ' + e.lineNumber);
            }
        });
    };

})(jQuery);
