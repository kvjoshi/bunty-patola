<?php
session_start();
include('connect.php');
require 'session_check.php';

if (isset($_GET['ant_s'])){

    $sid=$_GET['ant_s'];
    $fetch_sql="SELECT * FROM `ant_service` WHERE `a_id` = '".$sid."'";
    $fetch_query=mysqli_query($con,$fetch_sql);
    $row[] = mysqli_fetch_assoc($fetch_query);
    $up_name = $row[0]['a_name'];
    $up_desc = $row[0]['a_desc'];


    if(isset($_POST['update_s'])) {
        $update_id =$_POST['update_id'];
        $name = $_POST['name'];
        $desc= $_POST['desc'];
        $update_sql="UPDATE `ant_service` SET `a_name`='".$name."',`a_desc`='".$desc."' WHERE `a_id` = '".$update_id."'";
        $update_query=mysqli_query($con,$update_sql);
        header("location:ant_s.php");
    }
}
if (isset($_GET['cos_s'])){
    $sid=$_GET['cos_s'];
    $fetch_sql="SELECT * FROM `cos_service` WHERE `c_id` = '".$sid."'";
    $fetch_query=mysqli_query($con,$fetch_sql);
    $row[] = mysqli_fetch_assoc($fetch_query);
    $up_name = $row[0]['c_name'];
    $up_desc = $row[0]['c_desc'];


    if(isset($_POST['update_s'])) {
        $update_id =$_POST['update_id'];
        $name = $_POST['name'];
        $desc= $_POST['desc'];
        $update_sql="UPDATE `cos_service` SET `c_name`='".$name."',`c_desc`='".$desc."' WHERE `c_id` = '".$update_id."'";

        $update_query=mysqli_query($con,$update_sql);
        header("location:cos_s.php");
    }
}
if (isset($_GET['hair_s'])){
    $sid=$_GET['hair_s'];
    $fetch_sql="SELECT * FROM `hair_service` WHERE `h_id` = '".$sid."'";
    $fetch_query=mysqli_query($con,$fetch_sql);
    $row[] = mysqli_fetch_assoc($fetch_query);
    $up_name = $row[0]['h_name'];
    $up_desc = $row[0]['h_desc'];


    if(isset($_POST['update_s'])) {
        $update_id =$_POST['update_id'];
        $name = $_POST['name'];
        $desc= $_POST['desc'];
        $update_sql="UPDATE `hair_service` SET `h_name`='".$name."',`h_desc`='".$desc."' WHERE `h_id` = '".$update_id."'";
        $update_query=mysqli_query($con,$update_sql);
        header("location:hair_s.php");
    }
}
if (isset($_GET['laser_s'])){
    $sid=$_GET['laser_s'];
    $fetch_sql="SELECT * FROM `laser_service` WHERE `l_id` = '".$sid."'";
    $fetch_query=mysqli_query($con,$fetch_sql);
    $row[] = mysqli_fetch_assoc($fetch_query);
    $up_name = $row[0]['l_name'];
    $up_desc = $row[0]['l_desc'];


    if(isset($_POST['update_s'])) {
        $update_id =$_POST['update_id'];
        $name = $_POST['name'];
        $desc= $_POST['desc'];
        $update_sql="UPDATE `laser_service` SET `l_name`='".$name."',`l_desc`='".$desc."' WHERE `l_id` = '".$update_id."'";
        $update_query=mysqli_query($con,$update_sql);
        header("location:laser_s.php");
    }
}
if (isset($_GET['skin_s'])){
    $sid=$_GET['skin_s'];
    $fetch_sql="SELECT * FROM `skin_service` WHERE `s_id` = '".$sid."'";
    $fetch_query=mysqli_query($con,$fetch_sql);
    $row[] = mysqli_fetch_assoc($fetch_query);
    $up_name = $row[0]['s_name'];
    $up_desc = $row[0]['s_desc'];


    if(isset($_POST['update_s'])) {
        $update_id =$_POST['update_id'];
        $name = $_POST['name'];
        $desc= $_POST['desc'];
        $update_sql="UPDATE `skin_service` SET `s_name`='".$name."',`s_desc`='".$desc."' WHERE `s_id` = '".$update_id."'";
        $update_query=mysqli_query($con,$update_sql);
        header("location:skin_s.php");
    }
}
if (isset($_GET['weight_s'])){
    $sid=$_GET['weight_s'];
    $fetch_sql="SELECT * FROM `weight_service` WHERE `w_id` = '".$sid."'";
    $fetch_query=mysqli_query($con,$fetch_sql);
    $row[] = mysqli_fetch_assoc($fetch_query);
    $up_name = $row[0]['w_name'];
    $up_desc = $row[0]['w_desc'];


    if(isset($_POST['update_s'])) {
        $update_id =$_POST['update_id'];
        $name = $_POST['name'];
        $desc= $_POST['desc'];
        $update_sql="UPDATE `weight_service` SET `w_name`='".$name."',`w_desc`='".$desc."' WHERE `w_id` = '".$update_id."'";
        $update_query=mysqli_query($con,$update_sql);
        header("location:weight_s.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Service</title>
    <!-- Bootstrap-->
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Common Plugins CSS -->
    <link href="css/plugins/plugins.css" rel="stylesheet">
    <!--fonts-->
    <link href="lib/line-icons/line-icons.css" rel="stylesheet">
    <link href="lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="lib/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="page-wrapper" id="page-wrapper">
    <?php include('nav.php');?>
    <main class="content">
        <?php include('header.php'); ?>
        <div class="page-subheader mb-30">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="list">
                            <div class="list-item pl-0">
                                <div class="list-thumb ml-0 mr-3 pr-3  b-r text-muted">
                                    <i class="icon-Bulleted-List"></i>
                                </div>
                                <div class="list-body">
                                    <div class="list-title fs-2x">
                                        <h3>Edit Service</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end h-md-down">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb no-padding bg-trans mb-30">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-Home mr-2 fs14"></i></a></li>
                                <li class="breadcrumb-item">Service</li>
                                <li class="breadcrumb-item active">Edit Service</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="portlet-box p-1">
                            <div class="portlet-header flex-row b-b flex d-flex align-items-center">
                                <div class="flex d-flex flex-column">
                                    <h3><?php
                                        if(isset($_GET['cos_s'])){echo "Cosmetic";}
                                        if(isset($_GET['ant_s'])){echo "Antenatal Care";}
                                        if(isset($_GET['hair_s'])){echo "Hair";}
                                        if(isset($_GET['laser_s'])){echo "Laser";}
                                        if(isset($_GET['skin_s'])){echo "Skin";}
                                        if(isset($_GET['weight_s'])){echo "Weight Management";}
                                        ?>
                                        Service</h3>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <form method="post"  enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="hidden" name="update_id" value="<?php echo $sid;?>">
                                        <input type="text" placeholder="Service Title" class="form-control" name="name" value="<?php echo $up_name;?>">
                                    </div>
                                    <div class="form-group">
                                            <textarea class="form-control"  name="desc"><?php echo $up_desc;?></textarea>


                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg mx-3 p-3" name="update_s">Save</button>
                                        <a href="dashboard.php" class="btn btn-danger btn-lg mx-3 p-3">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="content-footer bg-light b-t">
            <div class="d-flex flex align-items-center pl-15 pr-15">
                <div class="d-flex flex p-3 ml-auto">
                    <div>
                        <a href="#" class="d-inline-flex pl-0 pr-2 b-r">Contact</a>
                        <a href="#" class="d-inline-flex pl-2 pr-2 b-r">Storage</a>
                        <a href="#" class="d-inline-flex pl-2 pr-2 ">Privacy</a>
                    </div>
                </div>
                <div class="d-flex flex p-3 mr-auto justify-content-end">
                    <div class="text-muted">© Copyright 2020. Opal Clinics</div>
                </div>
            </div>
        </footer>
    </main><!-- page content end-->
</div><!-- app's main wrapper end -->
<!-- Common plugins -->
<script type="text/javascript" src="js/plugins/plugins.js"></script>
<script type="text/javascript" src="js/appUi-custom.js"></script>
<!-- Required datatable js -->
<script type="text/javascript" src="lib/summernote/summernote-bs4.min.js"></script>
<script type="text/javascript" src="js/plugins-custom/summernote-custom.js"></script>

</body>
</html>
