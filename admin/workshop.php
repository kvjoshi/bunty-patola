<?php
session_start();
include('./connect.php');
require 'session_check.php';
$wx=0;
$ws_sql="SELECT * FROM `workshop_list`";
$ws_query=mysqli_query($con,$ws_sql);
$hairc_sql="SELECT * FROM `workshop_list` WHERE `ws_category`=1";
$hairc_query=mysqli_query($con,$hairc_sql);
$h_count = mysqli_num_rows($hairc_query);

$skinc_sql="SELECT * FROM `workshop_list` WHERE `ws_category`=2";
$skinc_query=mysqli_query($con,$skinc_sql);
$s_count = mysqli_num_rows($skinc_query);


$featured_sql="SELECT * FROM `workshop_feat`,`workshop_list` WHERE `workshop_list`.`ws_id` = `workshop_feat`.`ws_id` and `workshop_feat`.`wf_id`= 1";
$featured_query=mysqli_query($con,$featured_sql);

$feat=mysqli_fetch_assoc($featured_query);
$f=$feat['ws_id'];

$fn=$feat['ws_name'];
$ws_query1=mysqli_query($con,$ws_sql);

if(isset($_POST['sfa1'])){
    $f1_id=$_POST['featured'];
    $f1_upsql="UPDATE `workshop_feat` SET `ws_id`= '".$f1_id."' WHERE `wf_id`= 1";
    $f1_query=mysqli_query($con,$f1_upsql);
    header("location:workshop.php");
}

if(isset($_GET['del'])){
    $del_id=$_GET['del'];
    $del_sql="DELETE FROM `workshop_list` WHERE `ws_id` = '$del_id'";
    $del_query=mysqli_query($con,$del_sql);
    header("location:workshop.php");
}

if (isset($_POST['add_ws'])){
$add_name = $_POST['add_name'];
$add_type = $_POST['add_type'];
$add_date = $_POST['date'];
$add_content = $_POST['add_content'];
 $add_sql = "INSERT INTO `workshop_list`(`ws_category`, `ws_name`, `ws_date`, `ws_content`,`ws_enable`) VALUES ('".$add_type."','".$add_name."','".$add_date."','".$add_content."','0')";
$add_query=mysqli_query($con,$add_sql);
    header("location:workshop.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- Bootstrap-->
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Common Plugins CSS -->
    <link href="css/plugins/plugins.css" rel="stylesheet">
    <!--fonts-->
    <link href="lib/line-icons/line-icons.css" rel="stylesheet">
    <link href="lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="lib/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="lib/data-tables/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="lib/dt-picker/jquery.datetimepicker.min.css" rel="stylesheet">
    <link href="css/picker-custom.css" rel="stylesheet">
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
                                    <i class="icon-Conference"></i>
                                </div>
                                <div class="list-body">
                                    <div class="list-title fs-2x">
                                        <h3>Workshop List</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end h-md-down">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb no-padding bg-trans mb-30">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icon-Home mr-2 fs14"></i></a></li>
                                <li class="breadcrumb-item">Workshops</li>
                                <li class="breadcrumb-item active">Workshop List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="portlet-box portlet-gutter  mb-10 row">
                            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                <div class="flex d-flex flex-column">
                                    <h3>Total Live Workshop Count</h3>
                                </div>
                            </div>
                            <div class="portlet-body row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="list-alt bg-purple-light rounded ">
                                        <div class="list-item">
                                            <div class="list-thumb">
                                                <i class="icon-Hair fs-2x"></i>
                                            </div>
                                            <div class="list-body">
                                            <span class="list-title">
                                                <?php echo $h_count;?>
                                            </span>
                                                <span class="list-content">
                                                Hair
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="list-alt bg-purple-light rounded ">
                                        <div class="list-item">
                                            <div class="list-thumb">
                                                <i class="icon-Hand fs-2x"></i>
                                            </div>
                                            <div class="list-body">
                                            <span class="list-title">
                                                <?php echo $s_count;?>
                                            </span>
                                                <span class="list-content">
                                                Skin
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="portlet-box portlet-gutter  mb-10 row">
                            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                <div class="flex d-flex flex-column">
                                    <h3>Add Workshop</h3>
                                </div>

                            </div>
                            <div class="portlet-body row align-content-center">
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <button type="button" class="btn btn-icon btn-lg btn-light-primary mb-30" data-toggle="modal" data-target="#exampleModalCenter">
                                        <i class="icon-Add"></i>
                                        Add Workshop
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="portlet-box portlet-gutter  mb-10 row">
                            <div class="portlet-header flex-row flex d-flex align-items-center b-b">
                                <div class="flex d-flex flex-column">
                                    <h3>Featured Blog Select</h3>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <form method="post">
                                            <div class="form-group">
                                                <label>Featured Article 1</label>
                                                <select class="form-control" name="featured">
                                                    <option selected value="<?php echo $f;?>"> <?php echo $fn; ?></option>
                                                    <?php while ($ra1=mysqli_fetch_assoc($ws_query1)){
                                                        ?>
                                                        <option value="<?php echo $ra1['ws_id']; ?>">Sr No. <?php echo $ra1['ws_id']; ?> - <?php echo $ra1['ws_name']; ?></option>>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit" name="sfa1">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30 row">
                    <h6 class="pl-3 pr-3 text-capitalize font400 mb-20">Workshop List</h6>
                    <table id="data-table" class="table mb-0 table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Workshop Title</th>
                            <th>Category</th>
                            <th>Content</th>
                            <th>Starts On</th>
                            <th>Workshop Posted On</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($ws_query)){
                            $wx++;
                        ?>
                        <tr>
                            <td><?php echo $wx; ?></td>
                            <td><?php echo $row['ws_name'];?></td>
                            <td><?php if($row['ws_category']==1){echo "Hair";} elseif ($row['ws_category']==2){echo "Skin";}?></td>
                            <td><?php echo $row['ws_content']; ?></td>
                            <td><?php echo $row['ws_date'];?></td>
                            <td><?php echo $row['ws_upload'];?></td>
                            <td>
                                <a href="?del=<?php echo $row['ws_id'];?>" class="btn btn-icon btn-rounded btn-danger ml-1">
                                    <i class="fa fa-trash"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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
                    <div class="text-muted">© Copyright 2014-2018. Assan</div>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Workshop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="add_name" placeholder="Workshop Name">
                        </div>
                        <div class="form-group">
                            <select class="form-control mb-20 form-control-lg" name="add_type">
                                <option value="1">Hair</option>
                                <option value="2">Skin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="datetimepicker" placeholder="Workshop Date - Time" name="date" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="add_content" placeholder="Workshop Content"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="add_ws" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </main><!-- page content end-->
</div><!-- app's main wrapper end -->

<!-- Common plugins -->
<script type="text/javascript" src="js/plugins/plugins.js"></script>
<script type="text/javascript" src="js/appUi-custom.js"></script>
<!-- Required datatable js -->
<script type="text/javascript" src="lib/data-tables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="lib/data-tables/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="lib/data-tables/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="lib/data-tables/responsive.bootstrap4.min.js"></script>
<script src="js/plugins-custom/datatables-custom.js"></script>
<script type="text/javascript" src="lib/fullcalendar/moment.js"></script>
<script type="text/javascript" src="lib/dt-picker/jquery.datetimepicker.full.min.js"></script>
<script type="text/javascript" src="js/plugins-custom/pickers-custom.js"></script>

</body>
</html>
