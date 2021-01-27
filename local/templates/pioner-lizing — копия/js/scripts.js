function setPlaceholders() {
    inputPlaceholder(document.getElementById('request-call-name'), '#999');
    inputPlaceholder(document.getElementById('request-call-phone'), '#999');
    inputPlaceholder(document.getElementById('request-call-time'), '#999');

    inputPlaceholder(document.getElementById('ask-question-name'), '#999');
    inputPlaceholder(document.getElementById('ask-question-email'), '#999');
    inputPlaceholder(document.getElementById('ask-question-message'), '#999');

    inputPlaceholder(document.getElementById('send-order-name'), '#999');
    inputPlaceholder(document.getElementById('send-order-phone'), '#999');
    inputPlaceholder(document.getElementById('send-order-email'), '#999');
    inputPlaceholder(document.getElementById('send-order-message'), '#999');

    inputPlaceholder(document.getElementById('send-subscribe-name'), '#999');
    inputPlaceholder(document.getElementById('send-subscribe-email'), '#999');

    $(document.getElementsByName('arrFilter_pf[price][LEFT]')).attr('id', 'arrFilterSubscribeLeft');
    $(document.getElementsByName('arrFilter_pf[price][RIGHT]')).attr('id', 'arrFilterSubscribeRight');

    inputPlaceholder(document.getElementById('arrFilterSubscribeLeft'), '#999');
    inputPlaceholder(document.getElementById('arrFilterSubscribeRight'), '#999');
};

$(document).ready(function(e) {
    setPlaceholders();
});

function number_format(number, decimals, dec_point, thousands_sep) { // Format a number with grouped thousands
    // 
    // +   original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // +   improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +	 bugfix by: Michael White (http://crestidg.com)

    var i, j, kw, kd, km;

    // input sanitation & defaults
    if (isNaN(decimals = Math.abs(decimals))) {
        decimals = 2;
    }
    if (dec_point == undefined) {
        dec_point = ",";
    }
    if (thousands_sep == undefined) {
        thousands_sep = ".";
    }

    i = parseInt(number = (+number || 0).toFixed(decimals)) + "";

    if ((j = i.length) > 3) {
        j = j % 3;
    } else {
        j = 0;
    }

    km = (j ? i.substr(0, j) + thousands_sep : "");
    kw = i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands_sep);
    //kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).slice(2) : "");
    kd = (decimals ? dec_point + Math.abs(number - i).toFixed(decimals).replace(/-/, 0).slice(2) : "");


    return km + kw + kd;
}

/* SLIDER */
var slidePause = false,
    sliderPause2 = false,
    sliderInterval;

function showSlide(n, obj, noInimation) {
    if ($(obj).hasClass('active')) return false;
    console.log('слайдер запущен ' + slidePause);

    if (slidePause === false) {
        $('.slider-nav').removeClass('active');
        $(obj).addClass('active');
        slidePause = true;

        switch (n) {
           /* case 1:
                $('.slider-title').html('Биржевые облигации');
                break;
            case 2:
                $('.slider-title').html('Программа утилизации');
                break;*/

            case 2:
                $('.slider-title').html('Лизинг недвижимости');
                break;

            case 3:
                $('.slider-title').html('Лизинг автотранспорта');
                break;

            case 4:
                $('.slider-title').html('Лизинг оборудования');
                break;
        };


        if (noInimation === true) {
            $('.slider-img img:visible').hide(0, function() {
                $('.slider-img img:eq(' + (parseInt(n) - 1) + ')').show(0, function() {
                    slidePause = false;
                });
            });
        } else {
            $('.slider-img img:visible').fadeOut('slow', 'swing', function() {
                $('.slider-img img:eq(' + (parseInt(n) - 1) + ')').fadeIn('slow', 'swing', function() {
                    slidePause = false;
                });
            });
        };
    };

    return true;
};

function nextSlide(ignore) {
    if ((sliderPause2 === true) && (ignore !== true)) return;

    // if ($('.slider-img img:eq(0)').is(':visible')) {
    //     showSlide(2, '.slider-nav-block .slider-nav:eq(1)');
    // };

    if ($('.slider-img img:eq(1)').is(':visible')) {
        showSlide(3, '.slider-nav-block .slider-nav:eq(2)');
    };

    if ($('.slider-img img:eq(2)').is(':visible')) {
        showSlide(4, '.slider-nav-block .slider-nav:eq(3)');
    };

    if ($('.slider-img img:eq(3)').is(':visible')) {
        showSlide(1, '.slider-nav-block .slider-nav:eq(0)');
        clearInterval(sliderInterval);
        setTimeout(function() {
            setIntervalSlider();
        }, 10000);
    };
}

function setIntervalSlider() {
    sliderInterval = setInterval(function() {
        //	nextSlide();	
    }, 10000);
};

$(document).ready(function(e) {

    $('.slider-block').hover(function() {
            sliderPause2 = true;
        },
        function() {
            sliderPause2 = false;
        });


    if ($('.slider-calc-type-0').size() === 1) {
        setTimeout(function() {
            setIntervalSlider();
        }, 10000);
    }

});

/* SELECT CALC */
$(document).ready(function() {
    var params = {
        changedEl: "#select-leasing-type",
        visRows: 5,
        scrollArrows: true
    }
    cuSel(params);

});

/* TRACK BARS CALC */
var tb1v = 20000000,
    tb2v = 0,
    tb3v = 6,
    tb1, tb2, tb3;

function blurCalcInput(obj, type) {
    var val = parseInt($(obj).val().replace(/ /gi, ''));
    $(obj).val(number_format(val, 0, ' ', ' '));

    if (type == 1) {
        if (!((val >= 300000) && (val <= 20000000))) {
            if (val > 20000000) {
                $('#trackbar-one').parents('.calc-trackbar').find('.calc-trackbar-value input').val('20 000 000');
                tb1.updateLeftValue(20000000)
                tb1v = 20000000;
            };
            if (val < 300000) {
                $('#trackbar-one').parents('.calc-trackbar').find('.calc-trackbar-value input').val('300 000');
                tb1.updateLeftValue(300000)
                tb1v = 300000;
            }
            leasingCalc();
        };
    }

    if (type == 2) {
        if (!((val >= 0) && (val <= 70))) {
            $('#trackbar-two').parents('.calc-trackbar').find('.calc-trackbar-value input').val(0);
            tb2.updateLeftValue(0)
            tb2v = 0;
            leasingCalc();
        };
    }

    if (type == 3) {
        if (!((val >= 12) && (val <= 60))) {
            $('#trackbar-three').parents('.calc-trackbar').find('.calc-trackbar-value input').val(12);
            tb3.updateLeftValue(12)
            tb3v = 12;
            leasingCalc();
        };
    }
};

function keyUpCalcInput(obj, type) {
    var val = parseInt($(obj).val().replace(/ /gi, ''));
    $(obj).val(number_format(val, 0, ' ', ' '));

    if (type == 1) {
        if ((val >= 300000) && (val <= 20000000)) {
            tb1.updateLeftValue(val)
            tb1v = val;
            leasingCalc();
        };
    }

    if (type == 2) {
        if ((val >= 0) && (val <= 70)) {
            tb2.updateLeftValue(val)
            tb2v = val;
            leasingCalc();
        };
    }

    if (type == 3) {
        if ((val >= 12) && (val <= 60)) {
            tb3.updateLeftValue(val)
            tb3v = val;
            leasingCalc();
        };
    }
};

function leasingCalc() {
    /*if (tb2v == 0)
    {
    	$('#calc-advance').html("0");
    	$('#calc-paying').html("0");
    	$('.calc-show-info-link').attr('data-click', 'false');
    } else {*/
    var advance, paying, price, procent = 27,
        i, k, n;

    i = procent / 12 / 100;
    n = Math.pow((i + 1), tb3v);
    k = (i * n) / (n - 1);

    advance = Math.ceil(tb1v * tb2v / 100);
    price = tb1v - advance;
    paying = Math.ceil(k * price);

    if (paying === Infinity) {
        paying = 0;
    };


    $('#calc-advance').html(number_format(advance, 0, ' ', ' '));
    $('#calc-paying').html(number_format(paying, 0, ' ', ' '));



    if (paying > 0) {
        $('.calc-show-info-link').attr('data-click', 'true');
    } else {
        $('.calc-show-info-link').attr('data-click', 'false');
    };
    //};
};

$(document).ready(function() {
    if ($('#trackbar-one').size() > 0) {
        $('#trackbar-one').trackbar({
            onMove: function() {
                tb1v = parseInt(this.leftValue);
                //	$('#trackbar-one').parents('.calc-trackbar').find('.calc-trackbar-value input').val(number_format(tb1v, 0, ' ', ' '));
                tb1 = this;
                leasingCalc();

            },
            dual: false,
            width: 160,
            leftLimit: 300000,
            leftValue: 0,
            rightLimit: 20000000,
            rightValue: 0,
            roundUp: 1,
        });

        tb1v = 20000000;

        $('#trackbar-two').trackbar({
            onMove: function() {
                tb2v = parseInt(this.leftValue);
                $('#trackbar-two').parents('.calc-trackbar').find('.calc-trackbar-value input').val(tb2v);
                tb2 = this;
                leasingCalc();
            },
            dual: false,
            width: 160,
            leftLimit: 0,
            leftValue: 0,
            rightLimit: 70,
            rightValue: 0,
            roundUp: 1,
        });

        $('#trackbar-three').trackbar({
            onMove: function() {
                tb3v = parseInt(this.leftValue);
                $('#trackbar-three').parents('.calc-trackbar').find('.calc-trackbar-value input').val(tb3v);
                tb3 = this;
                leasingCalc();
            },
            dual: false,
            width: 160,
            leftValue: 12,
            leftLimit: 12,
            rightLimit: 60,
            rightValue: 0,
            roundUp: 1,
        });
    }

    $('.calc-trackbar-one input[type="text"]').val(300000);
    $('.calc-trackbar-one input[type="text"]').keyup();
});

/* TABS */
function showTabs(obj, n) {
    var p = $(obj).parents('.tabs-block');
    $(p).find('.tabs-header ul li').removeClass('active');
    $(obj).addClass('active');
    $(p).find('.tabs-content .tabs-node').removeClass('active');
    $(p).find('.tabs-content .tabs-node:eq(' + (parseInt(n) - 1) + ')').addClass('active');
}

/* SUBSCRIBE */
function validateHighlight(el, type) {
    $(el).removeClass('validate-success');
    $(el).removeClass('validate-danger');

    switch (type) {
        case 'danger':
            $(el).addClass('validate-danger');
            break;

        case 'success':
            $(el).addClass('validate-success');
            break;
    }
}

function validate(form) {
    var pattern = {
            email: /^.+@.+[.].{2,190}$/i,
            name: /^(.){2,60}$/i,
            phone: /^(.){5,}$/i,
            time: /^(.){4,}$/i,
            message: /^(.){5,}$/i,
        },
        l, i, obj, success = true;

    //EMAIL
    l = $(form).find('input[data-validate="email"]').size();
    for (var i = 0; i < l; i++) {
        obj = $(form).find('input[data-validate="email"]:eq(' + i + ')');
        if (!pattern.email.test($(obj).val())) {
            validateHighlight($(obj), 'danger');
            success = false;
        } else {
            validateHighlight($(obj), 'success');
        };
    };

    //NAME
    l = $(form).find('input[data-validate="name"]').size();
    for (var i = 0; i < l; i++) {
        obj = $(form).find('input[data-validate="name"]:eq(' + i + ')');
        if (!pattern.name.test($(obj).val())) {
            validateHighlight($(obj), 'danger');
            success = false;
        } else {
            validateHighlight($(obj), 'success');
        };
    };

    //PHONE
    l = $(form).find('input[data-validate="phone"]').size();
    for (var i = 0; i < l; i++) {
        obj = $(form).find('input[data-validate="phone"]:eq(' + i + ')');
        if (!pattern.phone.test($(obj).val())) {
            validateHighlight($(obj), 'danger');
            success = false;
        } else {
            validateHighlight($(obj), 'success');
        };
    };

    //TIME
    l = $(form).find('input[data-validate="time"]').size();
    for (var i = 0; i < l; i++) {
        obj = $(form).find('input[data-validate="time"]:eq(' + i + ')');
        if (!pattern.time.test($(obj).val())) {
            validateHighlight($(obj), 'danger');
            success = false;
        } else {
            validateHighlight($(obj), 'success');
        };
    };

    //MESSAGE
    l = $(form).find('input[data-validate="message"]').size();
    for (var i = 0; i < l; i++) {
        obj = $(form).find('input[data-validate="message"]:eq(' + i + ')');
        if (!pattern.message.test($(obj).val())) {
            validateHighlight($(obj), 'danger');
            success = false;
        } else {
            validateHighlight($(obj), 'success');
        };
    };
    console.log('return ' + success);
    return success;
}

function clearFormContatiner(parent) {
    $(parent).find('input[type="text"]').val('');
    $(parent).find('textarea').val('');
    $(parent).find('input[type="text"]').removeClass('validate-danger');
    $(parent).find('input[type="text"]').removeClass('validate-success');
    $(parent).find('textarea').removeClass('validate-danger');
    $(parent).find('textarea').removeClass('validate-success');
};

function clearModalFields() {
    $('.blackmask-container input').val('');
    $('.blackmask-container textarea').val('');
}

function send_subscribe() {
    var params = {
            email: $.trim($('#send-subscribe-email').val()),
            name: $.trim($('#send-subscribe-name').val()),
        },
        btn = $('.send-subscribe-submit a'),
        res;

    if (typeof $(btn).attr('data-rel') !== "undefined") return;

    /*
    if (!$('#send-subscribe-checked').is(':checked'))
    {
    	alert('Необходимо подтверить согласие с договором оферты!');
    	return;
    };
    */

    if (validate($('.send-subscribe-fields')) == false) {
        return;
    };

    $(btn).attr('data-rel', 'disabled');
    $.post('/bitrix/ajax/subscribe.php', params, function(res) {
        $(btn).removeAttr('data-rel');
        try {
            res = JSON.parse(res);
        } catch (e) {
            return;
        }

        if (res['status'] == 1) {
            $('#send-subscribe').fadeOut('fast');
            clearFormContatiner('#send-subscribe');
        } else {
            alert(res['message']);
        };
    });
};

function request_call() {
    var params = {
        phone: $.trim($('#request-call-phone').val()),
        name: $.trim($('#request-call-name').val()),
        time: $.trim($('#request-call-time').val()),
    }

    if (validate($('.request-call-fields')) == false) {
        return;
    };

    $('#request-call').fadeOut('fast');
    clearFormContatiner('#request-call');
    $.post('/bitrix/ajax/request-call.php', params, function(res) {
        if (typeof res != "undefined") {
            try {
                res = JSON.parse(res);
            } catch (e) {
                delete res;
            };
            if (typeof res.error != "undefined") {
                alert(res.error);
                return;
            };
        };
        alert('Ваш запрос успешно отправлен!');
    });
};

function ask_question() {
    var params = {
        email: $.trim($('#ask-question-email').val()),
        name: $.trim($('#ask-question-name').val()),
        message: $.trim($('#ask-question-message').val()),
    }

    if (validate($('.ask-question-fields')) == false) {
        return;
    };

    $('#ask-question').fadeOut('fast');
    clearFormContatiner('#ask-question');

    $.post('/bitrix/ajax/ask-question.php', params, function(res) {
        if (typeof res != "undefined") {
            try {
                res = JSON.parse(res);
            } catch (e) {
                delete res;
            };
            if (typeof res.error != "undefined") {
                alert(res.error);
                return;
            };
        };
        alert('Ваш запрос успешно отправлен!');
    });
}

function ask_presentation() {
    console.log('Кнопка презентации');
    var params = {
        email: $.trim($('#ask-question-email').val())
    }
    if (validate($('#ask-presentation .ask-question-fields')) == false) {
        return;
    };
    $('#ask-presentation').fadeOut('fast');
    clearFormContatiner('#ask-presentation');

    $.post('/bitrix/ajax/ack_presentation.php', params, function(res) {
        if (typeof res != "undefined") {
            try {
                res = JSON.parse(res);
            } catch (e) {
                delete res;
            };
            if (typeof res.error != "undefined") {
                alert(res.error);
                return;
            };
        };
        alert('Ваш запрос успешно отправлен!');
    });
}

function send_order() {
    var type = 0;

    if (($('.slider-calc-type-1').size() == 1) && (type == 0)) {
        type = 1;
    };

    if (($('.slider-calc-type-2').size() == 1) && (type == 0)) {
        type = 2;
    };

    if (($('.slider-calc-type-3').size() == 1) && (type == 0)) {
        type = 3;
    };

    if (type == 0) {
        type = $('#cusel-scroll-select-leasing-type span.cuselActive').attr('val');
    };

    var params = {
        email: $.trim($('#send-order-email').val()),
        phone: $.trim($('#send-order-phone').val()),
        name: $.trim($('#send-order-name').val()),
        message: $.trim($('#send-order-message').val()),
        type: type,
        price: tb1v,
        procents: tb2v,
        time: tb3v,
        advance: $('#calc-advance').html(),
        payment: $('#calc-paying').html(),
    }

    if (validate($('.send-order-fields')) == false) {
        return;
    };

    $('#send-order').fadeOut('fast');
    clearFormContatiner('#send-order');
    $.post('/bitrix/ajax/send-order.php', params, function(res) {

    });
}

function show_sale(id, tmplpath) {
    $('#show-fsale').fadeIn('fast');
    $('#show-fsale-data').html('Загрузка..');

    $.post(tmplpath + '/ajax/show_sale.php', { element_id: id }, function(data) {
        $('#show-fsale-data').html(data);
    });
};

function show_sale_img(n, obj) {
    $(obj).parents('ul').find('li').removeClass('active');
    $(obj).parents('li').addClass('active');

    $(obj).parents('.show-fsale-imgs').find('img:visible').fadeOut(0, 'swing', function() {
        $(obj).parents('.show-fsale-imgs').find('img:eq(' + n + ')').fadeIn(0);
    });
};

function show_next_sale_img(obj) {
    var c = $(obj).parents('.show-fsale-imgs').find('img').size(),
        si,
        ci = parseInt($(obj).index());

    if (ci >= c) {
        si = 0;
    } else {
        si = ci;
    };

    $(obj).parents('.show-fsale-imgs').find('ul li').removeClass('active');
    $(obj).parents('.show-fsale-imgs').find('ul li:eq(' + si + ')').addClass('active');

    $(obj).parents('.show-fsale-imgs').find('img:visible').fadeOut(0, 'swing', function() {
        $(obj).parents('.show-fsale-imgs').find('img:eq(' + si + ')').fadeIn(0);
    });
}

/* PRELOAD IMAGES */
$(document).ready(function(e) {
    function preloadImages() {
        for (var i = 0; i < arguments.length; i++)
            $("<img />").attr("src", arguments[i]);
    }

    preloadImages("/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-bg-hover.jpg",
        "/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-hover.png",
        "/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-left-hover.png",
        "/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-left-selected.png",
        "/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-lhover.png",
        "/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-rhover.png",
        "/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-right.png",
        "/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-right-hover.png",
        "/bitrix/templates/pioner-lizing/components/bitrix/menu/pioner_menu/images/top-menu-right-selected.png");
});

//INDEX SLIDER
function slideIndexFirst(n) {
    var hObj = $('#slider-index-first a:visible');

    if (n !== false) {
        var sObj = $(hObj).next();

        if ($(sObj).size() === 0) {
            sObj = $('#slider-index-first a:first');
        };
    } else {
        var sObj = $(hObj).prev();

        if ($(sObj).size() === 0) {
            sObj = $('#slider-index-first a:last');
        };
    };

    $(hObj).fadeOut(function() {
        $(sObj).fadeIn();
        $(sObj).css('display', 'inline-block');
    });
};

$(document).ready(function() {
    if ($('#slider-index-first').size() > 0) {
        setInterval(function() {
            slideIndexFirst();
        }, 10000);
    }
});