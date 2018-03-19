<?php
header('Content-type: text/html; charset=utf-8');
$wall_id="-114238095"; // Положительное число: пользователь. Отрицательное: группа.
$count="100"; // Количество записей, которое необходимо получить. Максимальное значение: 100. 
$api = file_get_contents("http://api.vk.com/method/wall.get?owner_id={$wall_id}&count={$count}");
$wall = json_decode($api,true);
foreach ($wall['response'] as $item => $result) {
  fopen("file.txt", "w");
  fwrite ($file, $result[id]);
}
?>