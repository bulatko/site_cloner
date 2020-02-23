<?php
$p = "img/img/avatars";
mkdir($p, 0777, 1);

for($i = 850; $i < 1000; $i++){

    $data = file_get_contents("https://cyprusalpha.com/img/img/avatars/$i.jpg");
    if($data)
    file_put_contents("$p/$i.jpg", $data);
}
