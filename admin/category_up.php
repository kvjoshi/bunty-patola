<?php
require 'connect.php';
if(isset($_POST['add_ws'])){
    $pc_name=$_POST['pc_name'];
    $pc_desc=$_POST['pc_desc'];
    $target_dir = '../assets/product_category/';
    $target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST['fileToUpload'])) {
        $check = getimagesize($_FILES['fileToUpload']["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br/>Please Rename File<br/>";

        $uploadOk = 0;
    }
// Check file size
    if ($_FILES["fileToUpload"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";

        $uploadOk = 0;
    }
// Allow certain file formats
    /* if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

        $uploadOk = 0;
    } */
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        header("location:home_slider.php");
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $sql="INSERT INTO `product_cat`(`pc_name`,`pc_desc`,`pc_img`) VALUES ('".$pc_name."','".$pc_desc."','".$target_file."')";
            $sql_query=mysqli_query($con,$sql);
            header("location:category.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
