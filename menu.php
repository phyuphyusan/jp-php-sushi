<?php
require 'header.php';

  $name=$_POST['name'];
  $price=$_POST['price'];
  $photo=$_FILES['photo'];
  $profilename=$photo['name'];
  //upload file
  $basepath = "photo/";
  //photo/one.jpg
  $fullpath = $basepath.$profilename;
  move_uploaded_file($photo['tmp_name'], $fullpath);

  $menu = array(
    "name" => $name,
    "price" => $price,
    "photo" => $fullpath
  );
  // var_dump($menu);

  //get jsonData from jsonfile
  $jsonData = file_get_contents('menulist.json');
  if (!$jsonData) {
    $jsonData ='[]';
  }
  //convert into array from json
  $data_arr  = json_decode($jsonData);
  array_push($data_arr, $menu);
  //convert array to json
  $jsonData=json_encode($data_arr, JSON_PRETTY_PRINT);
  file_put_contents('menulist.json', $jsonData);
  header("location:menulist.php");
  ?>
 
  <?php
  require 'footer.php';
?>
