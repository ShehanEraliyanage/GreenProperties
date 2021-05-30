<?php
include_once './database.php';

 if(isset($_POST['submit'])){

    $type = $_POST['user'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $province = $_POST['province'];
    $password = $_POST['password'];
    
    $image_name = $_FILES['image']['name'];
    $image_path = "./IMAGES/user/";
    $target_file = $image_path.$image_name;

    if(move_uploaded_file($_FILES ["image"]["tmp_name"], $target_file)){
      $sql = "INSERT INTO useraccount ( name, phone,address,province,email,password,type ,image) VALUES ('$name','$phone','$address','$province','$email','$password','$type','$image_name');";
      if(mysqli_query($conn,$sql)){
         echo "ok";
      }else{
         echo "error";
      }
    }

   
 }
?>