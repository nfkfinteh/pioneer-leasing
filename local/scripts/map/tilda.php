<link rel="stylesheet" type="text/css" media="screen" href="https://pioneer-leasing.ru/local/scripts/map/css/bootstrap.css" />
<style>
    #stB {
        display: none;
    }
</style>
<div class="t-width t-width_100 t-margin_auto"><div id="map" style="width: 100%; height: 900px;"></div></div>
<script src="https://api-maps.yandex.ru/2.1/?apikey=4a2d30b7-f8d1-47b8-b31a-dd40270bd104&lang=ru_RU"></script>
<script type="text/javascript">
    ymaps.ready(init);

    var maps = document.getElementById("map");

    /////////////// Получение данных /////////////////////////////////////

    var x = 56.136496; //56.10377557777415;
    var y = 47.236433; //47.26687999999994;

    /////// точки шитов //////
    var array_scheet = $.ajax({
        url: "https://pioneer-leasing.ru/local/scripts/map/scheet.php",
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
    console.log(array_scheet);

    var arr_points = JSON.stringify(array_scheet);
    console.log(arr_points);
    arr_points = JSON.parse(arr_points);
    console.log(arr_points);

    /////////// точки автобусных остановок /////////
    var array_busstop = $.ajax({
        url: "https://pioneer-leasing.ru/local/scripts/map/busstop.php",
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

        console.log("split_jsone");
        console.log(split_jsone);
        console.log("jsone_busstop");
        console.log(jsone_busstop);

        function pointMap(coord, type_points) {
            //console.log(type_points);
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass('<div style="color: #FFFFFF; font-weight: bold;" class="points_card">$[properties.iconContent]</div>');
            var card =
                '<div class="card" style="width: 21rem;position: relative;">' +
                '<img id="stA" class="card-img-top" src="https://pioneer-leasing.ru/local/scripts/map/' +
                type_points +
                "/" +
                coord.id +
                "/" +
                coord.id +
                'as.jpg" alt="Card image cap">' +
                '<img id="stB" class="card-img-top" src="https://pioneer-leasing.ru/local/scripts/map/' +
                type_points +
                "/" +
                coord.id +
                "/" +
                coord.id +
                'bs.jpg" alt="Card image cap">' +
                '<ul class = "list-group list-group-flush" style="padding: 0 !important;margin-bottom: 0;">' +
                '<li class = "list-group-item" style="padding: 5px 20px;"> ' +
                coord.adress +
                " </li>" +
                '<li class = "list-group-item" style="padding: 5px 20px;"> <img src="https://pioneer-leasing.ru/local/scripts/map/img/magnifier.png" id="zoom_a"class="sidea" style="cursor: pointer;margin-right: 10px;"/>' +
                coord.textA +
                " </li>" +
                '<li class = "list-group-item" style="padding: 5px 20px;"> <img src="https://pioneer-leasing.ru/local/scripts/map/img/magnifier_bl.png" id="zoom_b" class="sideb" style="cursor: pointer;margin-right: 10px;"/>' +
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
            img.src = "https://pioneer-leasing.ru/local/scripts/map/img/magnifier.png";
            zoom_img_b.src = "https://pioneer-leasing.ru/local/scripts/map/img/magnifier_bl.png";
        }
        if (target.className == "sideb") {
            img_side_b.style.display = "inline";
            img_side_a.style.display = "none";
            var img = target;
            img.src = "https://pioneer-leasing.ru/local/scripts/map/img/magnifier.png";
            zoom_img_a.src = "https://pioneer-leasing.ru/local/scripts/map/img/magnifier_bl.png";
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
</script>