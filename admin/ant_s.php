<?php
session_start();
include('connect.php');
require 'session_check.php';
$wx=0;
$s_sql="SELECT * FROM `ant_service`";
$s_query=mysqli_query($con,$s_sql);
$s_count = mysqli_num_rows($s_query);


if(isset($_POST['add_s'])){
    $title= $_POST['a_title'];
    $desc = $_POST['a_desc'];
    $add_sql="INSERT INTO `ant_service` (a_name, a_desc) VALUES ('$title','$desc')";
    $add_query=mysqli_query($con,$add_sql);
    header("location:ant_s.php");

}
if(isset($_GET['del'])){
    $del_id=$_GET['del'];
    $del_sql="DELETE FROM `ant_service` WHERE `a_id` = '$del_id'";
    $del_query=mysqli_query($con,$del_sql);
    header("location:ant_s.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Antenatal Care Services</title>
    <!-- Bootstrap-->
    <link href="lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Common Plugins CSS -->
    <link href="css/plugins/plugins.css" rel="stylesheet">
    <!--fonts-->
    <link href="lib/line-icons/line-icons.css" rel="stylesheet">
    <link href="lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">

    <link href="lib/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="lib/data-tables/responsive.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="page-wrapper" id="page-wrapper">
    <?php include ('nav.php');?>
    <main class="content">
        <?php include('header.php'); ?>
        <div class="page-subheader mb-30">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="list">
                            <div class="list-item pl-0">
                                <div class="list-thumb ml-0 mr-3 pr-3  b-r text-muted">
                                    <i class="icon-Dashboard"></i>
                                </div>
                                <div class="list-body">
                                    <div class="list-title fs-2x">
                                        <h3>Antenatal Care Services</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 d-flex justify-content-end h-md-down">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb no-padding bg-trans mb-30">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icon-Home mr-2 fs14"></i></a></li>
                                <li class="breadcrumb-item active">Antenatal Care</li>
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
                                    <h3>Total Live Services</h3>
                                </div>
                            </div>
                            <div class="portlet-body row">
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="list-alt bg-purple-light rounded ">
                                        <div class="list-item">
                                            <div class="list-thumb">
                                                <i class="icon-Hair fs-2x"></i>
                                            </div>
                                            <div class="list-body">
                                            <span class="list-title">
                                                <?php echo $s_count;?>
                                            </span>
                                                <span class="list-content">
                                                Services
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
                                    <h3>Add Service</h3>
                                </div>

                            </div>
                            <div class="portlet-body row align-content-center">
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <button type="button" class="btn btn-icon btn-lg btn-light-primary mb-30" data-toggle="modal" data-target="#ant_add">
                                        <i class="icon-Add"></i>
                                        Add Service
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30 row">
                    <h6 class="pl-3 pr-3 text-capitalize font400 mb-20">Service List</h6>
                    <table id="data-table" class="table mb-0 table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Service Title</th>
                            <th>Service Description</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php while ($row=mysqli_fetch_assoc($s_query)){
                            $wx++;
                            ?>
                            <tr>
                                <td><?php echo $wx; ?></td>
                                <td><?php echo $row['a_name'];?></td>
                                <td><?php echo $row['a_desc'];?></td>

                                <td><a href="service_edit.php?ant_s=<?php echo $row['a_id'];?>" class="btn btn-icon btn-rounded btn-success ml-1">
                                        <i class="fa fa-pencil-alt"></i>
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="?del=<?php echo $row['a_id'];?>" class="btn btn-icon btn-rounded btn-danger ml-1">
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
                    
                </div>
                <div class="d-flex flex p-3 mr-auto justify-content-end">
                    <div class="text-muted">© Copyright 2020. Opal Clinics</div>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="ant_add" tabindex="-1" role="dialog" aria-labelledby="ant_addTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Antenatal Care Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="a_title" placeholder="Service Title">
                            </div>


                            <div class="form-group">
                                <textarea class="form-control" name="a_desc"> </textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="add_s" class="btn btn-primary">Save changes</button>
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
</body>
</html>
