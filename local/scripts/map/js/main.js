ymaps.ready(init);

var maps = document.getElementById('map');

//center: [56.10377557777415, 47.26687999999994],
var x = 56.10377557777415;
var y = 47.26687999999994;

// 1. Создаём новый объект XMLHttpRequest
var xhr = new XMLHttpRequest();

// 2. Конфигурируем его: GET-запрос на URL 'phones.json'
xhr.open('GET', 'scheet.php', false);
xhr.setRequestHeader('Content-Type', 'application/json');

// 3. Отсылаем запрос
xhr.send();
var array_scheet;
// 4. Если код ответа сервера не 200, то это ошибка
if (xhr.status != 200) {
    // обработать ошибку
    alert(xhr.status + ': ' + xhr.statusText); // пример вывода: 404: Not Found
} else {
    // вывести результат
    array_scheet = JSON.parse(xhr.responseText);
}


function init() {
    // Создание карты.
    var myMap = new ymaps.Map("map", {
        // Координаты центра карты.
        // Порядок по умолчнию: «широта, долгота».
        // Чтобы не определять координаты центра карты вручную,
        // воспользуйтесь инструментом Определение координат.
        center: [x, y],
        // Уровень масштабирования. Допустимые значения:
        // от 0 (весь мир) до 19.
        zoom: 12
    });

    var arr = array_scheet;
    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; font-weight: bold;" class="points_card">$[properties.iconContent]</div>'
    );

    function plsm(coord) {

        var img_balun = '<img src="img/blbrd1.jpg" style="display:block; float:left;"/>';
        var card = '<div class="card" style="width: 21rem; height: 24rem;">' +
            '<img class="card-img-top" src="admin/points/' + coord.id + '/' + coord.id + 'as.jpg" alt="Card image cap">' +
            '<ul class = "list-group list-group-flush">' +
            '<li class = "list-group-item" > ' + coord.adress + ' </li>' +
            '<li class = "list-group-item" > ' + coord.textA + ' </li>' +
            '<li class = "list-group-item" > ' + coord.textB + ' </li>' +
            '</ul> <a href="#popup:myform" target class="btn btn-success" style="padding: 13px;">Заказать</a>' +
            '</div>';

        myPlacemarkWithContent = new ymaps.Placemark([coord.x, coord.y], {
            hintContent: coord.statusText,
            balloonContent: card,
            iconContent: coord.id
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
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
            iconContentLayout: MyIconContentLayout
        });

        return myPlacemarkWithContent;
    }

    arr.forEach(function(item, i, arr) {
        myMap.geoObjects.add(plsm(item));
    });


}

maps.onclick = function(event) {
    console.log(event);
    var target = event.target;
    if (target.tagName == 'A') {
        console.log('Отправляем сообщение!');
    }
}