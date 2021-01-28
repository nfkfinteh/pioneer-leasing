<?php
class savePoint
{
    public function saveAdminDate($id, $id_str, $str) // id_str, $arr_str)
    {
        // прочитать файл получить массив
        $file = 'points/'.$id.'/admindata.txt';
        $content = file($file);
        $content[$id_str] = $str;
        file_put_contents($file, $content);
        //заменить строку массива
        //сохранить файл
    }
}

?>