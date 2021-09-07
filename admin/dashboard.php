<?php
session_start();
include('connect.php');
require 'session_check.php';

$skin_sql="SELECT COUNT(*) FROM skin_service";
$skin_query=mysqli_query($con,$skin_sql);
$sc=mysqli_fetch_assoc($skin_query);

$hair_sql="SELECT COUNT(*) FROM hair_service";
$hair_query=mysqli_query($con,$hair_sql);
$hc=mysqli_fetch_assoc($hair_query);

$cos_sql="SELECT COUNT(*) FROM cos_service";
$cos_query=mysqli_query($con,$cos_sql);
$cc=mysqli_fetch_assoc($cos_query);

$ant_sql="SELECT COUNT(*) FROM ant_service";
$ant_query=mysqli_query($con,$ant_sql);
$ac=mysqli_fetch_assoc($ant_query);

$weight_sql="SELECT COUNT(*) FROM weight_service";
$weight_query=mysqli_query($con,$weight_sql);
$wc=mysqli_fetch_assoc($weight_query);

$laser_sql="SELECT COUNT(*) FROM laser_service";
$laser_query=mysqli_query($con,$laser_sql);
$lc=mysqli_fetch_assoc($laser_query);
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
                                                <h3>Dashboard</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end h-md-down">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb no-padding bg-trans mb-30">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-Home mr-2 fs14"></i></a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-primary shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-primary-active text-primary-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Link"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-1"><?php echo $hc['COUNT(*)'];?></span>
                                            <span class="list-content text-primary-light fs14">Hair Service</span>
                                        </div>
                                    </div>
                                    <a href="hair_s.php" class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-primary-active">
                                        View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-warning shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-warning-active text-primary-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Link"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-1"><?php echo $sc['COUNT(*)'];?></span>
                                            <span class="list-content text-warning-light fs14">Skin Service</span>
                                        </div>
                                    </div>
                                    <a href="skin_s.php" class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-warning-active">
                                        View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-teal shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-teal-active text-teal-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Link"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-1"><?php echo $cc['COUNT(*)'];?></span>
                                            <span class="list-content text-primary-light fs14">Cosmetics Service</span>
                                        </div>
                                    </div>
                                    <a href="cos_s.php" class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-teal-active">
                                        View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-success shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-success-active text-primary-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Link"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-1"><?php echo $lc['COUNT(*)'];?></span>
                                            <span class="list-content text-success-light fs14">Laser Service</span>
                                        </div>
                                    </div>
                                    <a href="laser_s.php" class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-success-active">
                                        View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-primary shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-primary-active text-primary-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Link"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-1"><?php echo $ac['COUNT(*)'];?></span>
                                            <span class="list-content text-primary-light fs14">Antenatal Service</span>
                                        </div>
                                    </div>
                                    <a href="ant_s.php" class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-primary-active">
                                        View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
                            <div class="col-lg-3 mb-6 col-md-6 mb-30">
                                <div class="list bg-warning shadow-sm rounded overflow-hidden">
                                    <div class="list-item">
                                        <div class="list-thumb bg-warning-active text-primary-light avatar rounded-circle avatar60 shadow-sm">
                                            <i class="icon-Link"></i>
                                        </div>
                                        <div class="list-body text-right">
                                            <span class="list-title fs-2x  lineH-1"><?php echo $wc['COUNT(*)'];?></span>
                                            <span class="list-content text-warning-light fs14">Weight Management Service</span>
                                        </div>
                                    </div>
                                    <a href="weight_s.php" class="d-flex text-muted flex text-right flex-row align-items-center justify-content-end pt-5 pb-5 pl-4 pr-4 bg-warning-active">
                                        View Detail <i class="fa fa-chevron-right ml-2 fs12 mt-1"></i>
                                    </a>
                                </div>
                            </div><!--col-->
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
    </body>
</html>
