<?php

//   $images = [
//     "https://tlmghana.com/rand/graidup0.jpg",
//     "https://tlmghana.com/rand/graidup1.jpg",
//     "https://tlmghana.com/rand/graidup2.jpg",
// ];


    $sqlQuery = "select image_url from random_images";
    
    $result = $this->Administrator_Model->getArrayQuery($sqlQuery);
    
    $image = $result[array_rand($result)];
    
   $data	= file_get_contents($image['image_url']);
   $size	= GetImageSize($image['image_url']);
   $mime	= $size['mime'];


   header("Content-type: $mime");
   header('Content-Length: ' . strlen($data));

   echo $data;

   exit();
