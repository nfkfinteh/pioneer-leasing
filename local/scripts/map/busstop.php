<?php
header("Access-Control-Allow-Origin: *");
include_once 'phpclass/getcoord.php';

$arr_Point = new getCoor();
$coord_Point = $arr_Point->arrBusStop;
//print_r($coord_Point);
$id_points = scandir($_SERVER["DOCUMENT_ROOT"].'/local/scripts/map/buspoint');
unset($id_points[0],$id_points[1]);

$arr_table_str = array();

foreach ($id_points  as $id) {
    $content = file($_SERVER["DOCUMENT_ROOT"].'/local/scripts/map/buspoint/'.$id.'/admindata.txt');
    $arr_table_str[$id] = $content;
}

//print_r($arr_table_str);

$tec_mes = date('n');
$tec_mes = $tec_mes-0;
//print_r($tec_mes);
$server_url = 'https://pioneer-leasing.ru/local/scripts/map/';
$arr_img_scheet = array(
    array(
        $server_url.'img/znrm_stopbus_red.png',
        $server_url.'img/znrm_stopbus_red_green.png',
        $server_url.'img/znrm_stopbus_red_yellow.png'
    ),
    array(
        $server_url.'img/znrm_stopbus_red_green.png',
        $server_url.'img/znrm_stopbus_green.png',
        $server_url.'img/znrm_stopbus_green_yellow.png'
    ),
    array(
        $server_url.'img/znrm_stopbus_yellow_red.png',
        $server_url.'img/znrm_stopbus_yellow_green.png',
        $server_url.'img/znrm_stopbus_yellow.png'
    )
    );
$arr_st_a = array(
    '<p class="card-text">Сторона А: Занята</p>',
    '<p class="card-text">Сторона А: Cвободна</p>',
    '<p class="card-text">Сторона А: Зарезервирована</p>'
);

$arr_st_b = array(
    '<p class="card-text">Сторона Б: Занята</p>',
    '<p class="card-text">Сторона Б: Cвободна</p>',
    '<p class="card-text">Сторона Б: Зарезервирована</p>'
);

$arr_json = array();

$arr_points_prop = array();

foreach ($coord_Point as $item){
    $arr_points_prop[$item['id']] = $item;
}

//print_r($arr_points_prop);

foreach ($arr_points_prop as $i => $item){

    $arr_status_a = explode(';', $arr_table_str[$i][2]);
    //print_r($arr_status_a);
    $arr_status_b = explode(';', $arr_table_str[$i][3]);
    $arr_json[$i]['id']         = $item['id'];
    $arr_json[$i]['x']          = $item['x'];
    $arr_json[$i]['y']          = $item['y'];
    $arr_json[$i]['img']        = $arr_img_scheet[$arr_status_a[$tec_mes]][$arr_status_b[$tec_mes]];
    $arr_json[$i]['statusText'] = $arr_status_a[$tec_mes].'-'.$arr_status_b[$tec_mes];
    $arr_json[$i]['textA']      = $arr_st_a[$arr_status_a[$tec_mes]];
    $arr_json[$i]['textB']      = $arr_st_b[$arr_status_b[$tec_mes]];
    $arr_json[$i]['adress']     = $arr_table_str[$i][0];
}

foreach ($arr_json as $key => $value) {

    // //echo json_encode($value);
    // echo "<pre><h2><b>".$key."</b></h2><br>";
    // print_r($value);
    // echo "</pre><br><br><hr><br>";
}
//print_r($arr_json[0]);
echo json_encode($arr_json,  JSON_FORCE_OBJECT), "\n\n";
?>