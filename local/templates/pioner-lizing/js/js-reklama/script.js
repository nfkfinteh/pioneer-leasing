$(document).ready(function () {
<<<<<<< HEAD
=======
    $(".js-reklama-form").on("submit", function (e) {
        e.preventDefault();
        var form = $(this);
        var data = new FormData(form[0]);
        if (form[0].checkValidity()) {
            $(form).find('input').prop("disabled", true);
            $(form).find('button').prop("disabled", true);
            $.ajax({
                url: form.attr('action'),
                type: 'POST',
                data: data,
                async: false,
                success: function (data) {
                    console.log(data);
                    $(form).find('input').prop("disabled", false);
                    $(form).find('button').prop("disabled", false);
                    if (data['result'] === 'success') {
                        $(form).trigger("reset");
                        $(form).html('Благодарим за обращение! <br>Мы обязательно свяжемся с Вами в ближайшее время')
                    } else {
                        $(form).find('.js-message-form').html(data['message']);
                        $.each( data['errors_fields'], function( keyField, nameField ) {
                            $(form).find("*[name='"+nameField+"']").closest('.contacts__form-input').addClass('error');
                        });
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }

    });





>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
    ymaps.ready(init);

    var maps = document.getElementById("map");

    /////////////// Получение данных /////////////////////////////////////

    var x = 56.136496; //56.10377557777415;
    var y = 47.236433; //47.26687999999994;

    /////// точки шитов //////
    var array_scheet = $.ajax({
<<<<<<< HEAD
        url: "https://pioneer-leasing.ru/local/scripts/get-ib-map-point.php?type=banner",
=======
        url: "/local/scripts/get-ib-map-point.php?type=banner",
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
        async: false,
        success: function (data) {
            //console.log(data);
            return data;
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("ОШИБКИ AJAX запроса: " + textStatus);
            console.log(jqXHR);
            console.log(errorThrown);
        },
    });
    var arr_points = JSON.stringify(array_scheet);
    arr_points = JSON.parse(arr_points);
    //console.log(arr_points);

    /////////// точки автобусных остановок /////////
    var array_busstop = $.ajax({
<<<<<<< HEAD
        url: "https://pioneer-leasing.ru/local/scripts/get-ib-map-point.php?type=bus",
=======
        url: "/local/scripts/get-ib-map-point.php?type=bus",
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
        async: false,
        success: function (data) {
            // console.log(data);
            return data;
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log("ОШИБКИ AJAX запроса: " + textStatus);
            console.log(jqXHR);
            console.log(errorThrown);
        },
    });

    var arr_busstop_point = JSON.stringify(array_busstop);
    //console.log(arr_points);
    arr_busstop_point = JSON.parse(arr_busstop_point);
    //console.log(arr_points);

    /*///////////////////////// создание карты ////////////////////////*/
    function init() {
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты. Порядок по умолчнию: «широта, долгота».
            center: [x, y],
            // Уровень масштабирования. Допустимые значения: от 0 (весь мир) до 19.
            zoom: 14,
        });
        myMap.behaviors.disable("scrollZoom");

        // Создаём макет содержимого.
        var split_jsone = JSON.parse(arr_points.responseText);
        var jsone_busstop = JSON.parse(arr_busstop_point.responseText);

<<<<<<< HEAD
        console.log("split_jsone");
        console.log(split_jsone);
        console.log("jsone_busstop");
        console.log(jsone_busstop);

        function pointMap(coord, type_points) {
            console.log(coord);
=======
        function pointMap(coord, type_points) {
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass('<div style="color: #FFFFFF; font-weight: bold;" class="points_card">$[properties.iconContent]</div>');
            var card =
                '<div class="card" style="width: 21rem;position: relative;">' +
                '<img id="stA" class="card-img-top" src="' + coord.imgA + '" alt="Card image cap">' +
                '<img id="stB" class="card-img-top" src="' + coord.imgB + '" alt="Card image cap">' +
                '<ul class = "list-group list-group-flush" style="padding: 0 !important;margin-bottom: 0;">' +
                '<li class = "list-group-item" style="padding: 5px 20px;"> ' +
                coord.adress +
                " </li>" +
<<<<<<< HEAD
                '<li class = "list-group-item" style="padding: 5px 20px;"> <img src="https://pioneer-leasing.ru/local/scripts/map/img/magnifier.png" id="zoom_a"class="sidea" style="cursor: pointer;margin-right: 10px;"/>' +
                coord.textA +
                " </li>" +
                '<li class = "list-group-item" style="padding: 5px 20px;"> <img src="https://pioneer-leasing.ru/local/scripts/map/img/magnifier_bl.png" id="zoom_b" class="sideb" style="cursor: pointer;margin-right: 10px;"/>' +
=======
                '<li class = "list-group-item" style="padding: 5px 20px;"> <img src="/local/scripts/map/img/magnifier.png" id="zoom_a"class="sidea" style="cursor: pointer;margin-right: 10px;"/>' +
                coord.textA +
                " </li>" +
                '<li class = "list-group-item" style="padding: 5px 20px;"> <img src="/local/scripts/map/img/magnifier_bl.png" id="zoom_b" class="sideb" style="cursor: pointer;margin-right: 10px;"/>' +
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
                coord.textB +
                " </li>" +
                '</ul> <a href="#popup:myform" target data="' +
                coord.adress +
                '" class="btn btn-success" style="padding: 10px; color:#fff;">Заказать</a>' +
                "</div>";

            // Создадим метку.
            var placemark = new ymaps.Placemark(
                [coord.x, coord.y],
                {
                    balloonContent: '<img src="http://img-fotki.yandex.ru/get/6114/82599242.2d6/0_88b97_ec425cf5_M" />',
                    balloonContent: card,
                },
                {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: "default#imageWithContent",
                    // Своё изображение иконки метки.
                    iconImageHref: coord.img,
                    // Размеры метки.
                    iconImageSize: [48, 48],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-24, -24],
                    // Смещение слоя с содержимым относительно слоя с картинкой.
                    iconContentOffset: [15, 15],
                    // Макет содержимого.
                    iconContentLayout: MyIconContentLayout,
                    iconContent: "n" + coord.id,
                }
            );

            return placemark;
        }

        //console.log(split_jsone);

        var type_points = "points";
        ////// Расстановка точек щитов на карте
        for (key in split_jsone) {
            var coords = split_jsone[key];
            // console.log(coords.adress);
            myMap.geoObjects.add(pointMap(coords, type_points));
        }

        type_points = "buspoint";
        ////// Расстановка точек остановок на карте
        for (key in jsone_busstop) {
            var coords = jsone_busstop[key];
            // console.log(coords);
            myMap.geoObjects.add(pointMap(coords, type_points));
        }
<<<<<<< HEAD
=======

        myMap.setBounds(myMap.geoObjects.getBounds(), {
            checkZoomRange: true,
            zoomMargin: 35,
        })
        .then(function () {
            if (myMap.action.getCurrentState().zoom > 15) {
                myMap.setZoom(15);
            }
        }, function (err) {
            // Не удалось показать заданный регион.
            // ...
        }, this);
        if ($(window).width() < 1000) {
            myMap.behaviors.disable('drag');
        }
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
    }

    maps.onclick = function (event) {
        var target = event.target;
        var img_side_a = document.getElementById("stA");
        var img_side_b = document.getElementById("stB");
        var zoom_img_a = document.getElementById("zoom_a");
        var zoom_img_b = document.getElementById("zoom_b");

        if (target.tagName == "A") {
            var idsheet = target.getAttribute("data");
            //var adres_sheet = document.getElementById('adress_zayavka');
            //adres_sheet.innerText = idsheet;
            //console.log('хотят заказать щит' + idsheet);
            var adreess = $('input[name="adress_points"]');
            adreess.val(idsheet);
            t702_showPopup("44978333");
        }
        // делаем одну картинку видимой другую невидимой.
        if (target.className == "sidea") {
            img_side_a.style.display = "inline";
            img_side_b.style.display = "none";
            var img = target;
<<<<<<< HEAD
            img.src = "https://pioneer-leasing.ru/local/scripts/map/img/magnifier.png";
            zoom_img_b.src = "https://pioneer-leasing.ru/local/scripts/map/img/magnifier_bl.png";
=======
            img.src = "/local/scripts/map/img/magnifier.png";
            zoom_img_b.src = "/local/scripts/map/img/magnifier_bl.png";
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
        }
        if (target.className == "sideb") {
            img_side_b.style.display = "inline";
            img_side_a.style.display = "none";
            var img = target;
<<<<<<< HEAD
            img.src = "https://pioneer-leasing.ru/local/scripts/map/img/magnifier.png";
            zoom_img_a.src = "https://pioneer-leasing.ru/local/scripts/map/img/magnifier_bl.png";
=======
            img.src = "/local/scripts/map/img/magnifier.png";
            zoom_img_a.src = "/local/scripts/map/img/magnifier_bl.png";
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
        }
    };
    var fireRefreshEventOnWindow = function () {
        var evt = document.createEvent("HTMLEvents");
        evt.initEvent("resize", true, false);
        window.dispatchEvent(evt);
    };
    $(".t117").bind("displayChanged", function () {
        fireRefreshEventOnWindow();
    });


    new WOW().init();

    var mySwiper = new Swiper('.swiper-container', {
        slidesPerView: 5,
<<<<<<< HEAD
        slidesPerGroup: 5,
=======
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
        spaceBetween: 50,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: '.swiper-button-next-unique',
            prevEl: '.swiper-button-prev-unique',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
<<<<<<< HEAD
                slidesPerGroup: 1,
=======
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
                spaceBetween: 0,
            },
            768: {
              slidesPerView: 2,
<<<<<<< HEAD
              slidesPerGroup: 2,
=======
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
              spaceBetween: 30,
            },
            1024: {
              slidesPerView: 4,
<<<<<<< HEAD
              slidesPerGroup: 4,
            },
            1250: {
                slidesPerView: 5,
                slidesPerGroup: 5,
=======
            },
            1250: {
                slidesPerView: 5,
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
            }
        }
    });
    $('.button-js').click(function() {
        $('.overlay-btn').fadeIn();
        $('body').css('overflow', 'hidden');
        $('.overlay').css('overflow-y', 'scroll');
    });
    $('.close').click(function() {
        $('.overlay').fadeOut();
        $('body').css('overflow', 'auto');
        $('.overlay').css('overflow-y', 'hidden');
    });
    setTimeout(function() {
        $('.overlay-offer').fadeIn();
        $('body').css('overflow', 'hidden');
        $('.overlay').css('overflow-y', 'scroll');
    }, 80000);

    $(document).mouseup(function (e) {
        var container = $(".overlay");
        if (container.has(e.target).length === 0){
            container.fadeOut();
            $('body').css('overflow', 'auto');
            $('.overlay').css('overflow-y', 'hidden');
        }
    });

    $(".menu-link").click(function () {
        $(this).toggleClass("menu-link_active");
        $(".nav-menu").toggleClass("nav-menu_active");
    });
    $(".nav-menu a").click(function () {
<<<<<<< HEAD
        $(".menu-link").toggleClass("menu-link_active"); 
=======
        $(".menu-link").toggleClass("menu-link_active");
>>>>>>> 566b7848f0b2f2776e7e546e21263df99fc8f306
        $(".nav-menu").toggleClass("nav-menu_active");
    });

    $(".inptel").inputmask({"mask": "+7(999)-999-99-99"});

    $(".email").inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
          pastedValue = pastedValue.toLowerCase();
          return pastedValue.replace("mailto:", "");
        },
        definitions: {
          '*': {
            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~\-]",
            casing: "lower"
          }
        }
      });
})