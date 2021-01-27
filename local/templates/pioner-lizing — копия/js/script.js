function jsDate(idname) {
    var date = String(document.getElementById(idname).value);
    var date_parse = Number(Date.parse(date.replace(/(\d+)\.(\d+)\.(\d+)/, '$2/$1/$3')));
    return date_parse;
}

// Расчет купонного дохода
function kupon_dohod() {
    // вычисление введеных дат
    var summa = Number(document.getElementById("change_val").value); //Number($('#change_val').val);            
    var start_date_p = jsDate('startDate');
    var end_date_p = jsDate('endDate');
    var current_date = new Date();
    var kol_day = (end_date_p - start_date_p) / 86400000;

    //если дата продажи больше даты покупки делаем вычисление если нет то просим пользователя изменить даты    
    if (kol_day < 0) {
        $('#alert_data').animate({ 'height': '105px' }, 500);
    } else {
        $('#alert_data').animate({ 'height': '0px' }, 200);
        var Prosent = 12.25;
        var itogo = (summa * Prosent) / 36500;
        var kp_dohod_it = itogo * kol_day;
        // расчет реинвестирования купонного дохода
        var kol_kup_per = kol_day / 30;
        var it_reinv_doh = Math.pow(1.010068, kol_kup_per);
        var a = it_reinv_doh - 1;
        var reinvest_doh = summa * a;
        var check_rd = document.getElementById("reinvest_dohod");
        var reinvest_kd = 0;

        if (check_rd.checked) {
            // $('#labelcheck').html(reinvest_doh.toFixed(2));
            $('#kup_dohod').html(reinvest_doh.toFixed(2));
            reinvest_kd = Number(reinvest_doh.toFixed(2));
        } else {
            //$('#labelcheck').html('0.00 руб.');
            $('#kup_dohod').html(kp_dohod_it.toFixed(2));
            reinvest_kd = Number(kp_dohod_it.toFixed(2));
        }
        //$('#kup_dohod').html(kp_dohod_it.toFixed(2));

        var kol_vo = Number(document.getElementById("change_val_lab_kol").innerHTML);
        var start_price = Number(document.getElementById("start_sale").value);
        var end_price = Number(document.getElementById("end_sale").value);
        var dohod = Number((end_price - start_price) * kol_vo);
        var ndfl = dohod * 0.13;

        $('#dohod_sale').html(dohod.toFixed(2));
        $('#ndfl').html(ndfl.toFixed(2));
        console.log(reinvest_kd + ' + ' + dohod);
        var itogov_dohod = (reinvest_kd + dohod) - ndfl;

        $('#dohod_ob').html(itogov_dohod.toFixed(2));
    }
}
//
function valueView(data) {
    document.getElementById('change_val_lab').innerHTML = data;
    document.getElementById('change_val_lab_kol').innerHTML = data / 1000;
}

// смещение ползунка на один шаг с помощью кнопок
var polzunok = document.getElementById('change_val');

$(document).ready(function() {

    minus_inv.addEventListener('click', function() {
        polzunok.stepDown(1);
        kupon_dohod();
        var value_polz = polzunok.value;
        valueView(value_polz);
    }, false);

    plus_inv.addEventListener('click', function() {
        polzunok.stepUp(1);
        var value_polz = polzunok.value;
        valueView(value_polz);
        kupon_dohod();
    }, false);

    kupon_dohod();

    $('#startDate').datepicker({
        // Можно выбрать тольо даты, идущие за сегодняшним днем, включая сегодня
        minDate: new Date()
    })

    $('#endDate').datepicker({
        // Можно выбрать тольо даты, идущие за сегодняшним днем, включая сегодня
        minDate: new Date()
    })

    $('#change_val').on('input', function() {
        var label_sum = $('#change_val_lab');
        var ed_sum = $('#change_val_lab_kol');
        var summa = Number($(this).val());
        var kol_vo = summa / 1000;

        $(label_sum).html(summa.toFixed(2));
        $(ed_sum).html(kol_vo);

        kupon_dohod();
    });
    // Дата покупки
    $('#startDate').on('focusout', function() {
        kupon_dohod();
    });
    // Дата продажи
    $('#endDate').on('focusout', function() {
        kupon_dohod();
    });
    // цена продажи
    $('#end_sale').on('focusout', function() {
        kupon_dohod();
    });

    $('#reinvest_dohod').on('click', function() {
        kupon_dohod();
    });

    //переключение по вкладкам
    //$('.button_tab .tab a, a.fix_button, .tabs-header li').on('click', function() {
    $('.button_tab .tab a, .tabs-header li').on('click', function() {
        var tab = $(this).closest('.tab');
        var a_iskl = $('.tab [data^=emis_doc]').parent('.tab');
        var content_class = $(this).attr('data');

        $(".tab").each(function() {
            $(this).removeClass('activ_tab');
        });
        $(".content_tab").each(function() {
            $(this).css('display', 'none');

        });

        $(tab).addClass('activ_tab');

        switch (content_class) {
            case 'investoram':
                $('.investoram').css('display', 'block');
                $('#investr_up_menu').addClass('activ_tab');
                break;
            case 'investoram_ii':
                $('.investoram_ii').css('display', 'block');
                $('#investr_up_menu').addClass('activ_tab');
                break;
            case 'investoram_iii':
                $('.investoram_iii').css('display', 'block');
                $('#investr_up_menu').addClass('activ_tab');
                break;
            case 'kompany':
                $('.kompany').css('display', 'block');
                break;
            case 'news_inv':
                $('.news_inv').css('display', 'block');
                break;
            case 'buh_doc':
                $('.buh_doc').css('display', 'block');
                break;
            case 'ust_doc':
                $('.ust_doc').css('display', 'block');
                break;
            case 'emis_doc':
                $('.emis_doc').css('display', 'block');
                $(a_iskl).addClass('activ_tab');
                break;
            case 'raskr_info':
                $('.raskr_info').css('display', 'block');
                break;
        }
    });

    //отправка писем с формы консультаций
    $('#konsult_send').on('click', function() {
        var Name = $('#konsult_Name').val();
        var telephon = $('#konsult_tel').val();
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: "tel=" + telephon + "&name=" + Name,
            success: function(msg) {
                alert("Сообщение отправлено: " + msg);
            }
        });

    });

    // цели Яндекс Метрики
    $('.metrika').click(function() {
        var goal_name = this.className.match(/metrika_([^\s]+)/)[1];
        console.log(goal_name);
        yaCounter47891087.reachGoal(goal_name);
        return true;
    });
});