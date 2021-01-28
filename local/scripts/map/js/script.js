function getDegreeElementById(id_element) {
    var element = document.getElementById(id_element);
    var style = window.getComputedStyle(element, null);
    // получаем значение стилей
    var valueStyle = style.getPropertyValue("-webkit-transform") ||
        style.getPropertyValue("-moz-transform") ||
        style.getPropertyValue("-ms-transform") ||
        style.getPropertyValue("-o-transform") ||
        style.getPropertyValue("transform");
    // если стилей нет, то угол 0 градусов
    if (valueStyle == 'none') return 0;
    // разбираем полученное значение
    console.log(valueStyle);
    var values = valueStyle.split('(')[1];
    values = values.split(')')[0];
    values = values.split(',');
    // получаем синус и косинус
    var cos = values[0];
    var sin = values[1];
    // вычисляем угол
    var degree = Math.round(Math.asin(sin) * (180 / Math.PI));
    if (cos < 0) {
        addDegree = 90 - Math.round(Math.asin(sin) * (180 / Math.PI));
        degree = 90 + addDegree;
    }
    if (degree < 0) {
        degree = 360 + degree;
    }
    return degree;
}

$(document).ready(function() {

    $(window).bind('scroll', function(e) {
        parallaxScroll();
    });

    function parallaxScroll() {
        var scrolled = $(window).scrollTop();
        var test = 0 + (scrolled * .2);

        $('#float_1').css('top', (0 + (scrolled * .5)) + 'px');
        $('#float_2').css('top', (0 - (scrolled * 5)) + 'px');
        $('#float_4').css('top', (0 - (scrolled * 5)) + 'px');

    }

    //Слайдер
    $('.slider_arr').on('click', function(e) {
        var obj_click = $(this);
        slideItem(obj_click);
    });

    function slideItem(obj_click) {
        var name_button = $(obj_click).attr('id');
        var position_box = $('#screen_slider_box').css('left');
        var number_position = Number(position_box.slice(0, -2));
        var width_slide = $('.screen_slider_box_item').width();
        var len_item = $('#screen_slider_box').children('.screen_slider_box_item').length;
        var width_slider_box = width_slide * len_item;
        var limit_slide_right = -1 * (width_slider_box + number_position);
        var step_slide = width_slide + 10;

        if (name_button == 'arrow_right') {
            if (limit_slide_right < number_position) {
                $('#screen_slider_box').animate({ "left": "-=" + step_slide + "px" }, "slow");
            }
        } else {
            //ограничим выход за рамки
            if (number_position < 0) {
                $('#screen_slider_box').animate({ "left": "+=" + step_slide + "px" }, "slow");
            }
        }
    }

    // попап
    $('#popup_close').on('click', function(){
        hidePopup();
    });

    // сохранение почтового ящика
    $('#send_email').on('click', function(){        
        var email = $('#form_input_email').val();        
        $.ajax({
            type: 'POST',
            url: 'saveemail.php',
            data: 'email='+email,
            success: function(){
             
            }
        });
        $('#form_input_email').val('Спасибо за подписку!')        
    });

    function hidePopup() {
        $('#popup_fade').css('display', 'none'); 
    }

    function showPopup() {        
        $('#popup_fade').css('display', 'block');        
    }
});