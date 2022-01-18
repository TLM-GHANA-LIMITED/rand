<?php

$images = [
  "https://tlmghana.com/rand/graidup0.jpg",
  "https://tlmghana.com/rand/graidup1.jpg",
  "https://tlmghana.com/rand/graidup2.jpg",
];

$image = $images[array_rand($images)];

$data  = file_get_contents($image);
$size  = GetImageSize($image);
$mime  = $size['mime'];

header("Content-type: $mime");
header('Content-Length: ' . strlen($data));
echo $data;
exit();
