<?php
session_start();
include('connect.php');
require 'session_check.php';
$fetch_sql="SELECT * FROM `blog_list`";
$fetch_query=mysqli_query($con,$fetch_sql);
$count=mysqli_num_rows($fetch_query);
$fetch_sql1="SELECT * FROM `blog_list`";
$fetch_query1=mysqli_query($con,$fetch_sql1);
$fetch_sql2="SELECT * FROM `blog_list`";
$fetch_query2=mysqli_query($con,$fetch_sql2);
$fetch_sql3="SELECT * FROM `blog_list`";
$fetch_query3=mysqli_query($con,$fetch_sql3);
$fetch_sql4="SELECT * FROM `blog_list`";
$fetch_query4=mysqli_query($con,$fetch_sql4);
$xx=0;
if(isset($_POST['del_id'])){
    mysqli_query($con, "DELETE FROM `blog_list` WHERE blog_id = '".$_POST['del_id']."'");
    header("location:blog-list.php");
}
$featured_sql="SELECT * FROM `blog_featured`,`blog_list` WHERE `blog_featured`.`blog_id` = `blog_list`.`blog_id`";
$featured_query=mysqli_query($con,$featured_sql);
$fi=0;
while ($feat=mysqli_fetch_assoc($featured_query)){
$f[$fi]=$feat['blog_id'];
$fn[$fi]=$feat['blog_name'];
$fi++;
}
if(isset($_POST['sfa1'])){
    $f1_id=$_POST['featured1'];
    $f1_upsql="UPDATE `blog_featured` SET `blog_id`= '".$f1_id."' WHERE `f_id`= 1";
    $f1_query=mysqli_query($con,$f1_upsql);
    header("location:blog-list.php");
}
if(isset($_POST['sfa2'])){
    $f2_id=$_POST['featured2'];
    $f2_upsql="UPDATE `blog_featured` SET `blog_id`= '".$f2_id."' WHERE `f_id`= 2";
    $f2_query=mysqli_query($con,$f2_upsql);
    header("location:blog-list.php");
}

if(isset($_POST['sfa3'])){
    $f3_id=$_POST['featured3'];
    $f3_upsql="UPDATE `blog_featured` SET `blog_id`= '".$f3_id."' WHERE `f_id`= 3";
    $f3_query=mysqli_query($con,$f3_upsql);
    header("location:blog-list.php");
}
if(isset($_POST['sfa4'])){
    $f4_id=$_POST['featured4'];
    $f4_upsql="UPDATE `blog_featured` SET `blog_id`= '".$f4_id."' WHERE `f_id`= 4";
    $f4_query=mysqli_query($con,$f4_upsql);
    header("location:blog-list.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Blog - Dashboard</title>
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
                                            <i class="icon-Blogger"></i>
                                        </div>
                                        <div class="list-body">
                                            <div class="list-title fs-2x">
                                                <h3>Blog List</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end h-md-down">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb no-padding bg-trans mb-30">
                                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-Home mr-2 fs14"></i></a></li>
                                        <li class="breadcrumb-item">Blogs</li>
                                        <li class="breadcrumb-item active">Blog List</li>
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
                    <h3>Total Live Blog Count</h3>
                </div>
            </div>
            <div class="portlet-body row">
                <div class="col-lg-8 col-md-10 col-sm-12">
                    <div class="list-alt bg-purple-light rounded ">
                        <div class="list-item">
                            <div class="list-thumb">
                                <i class="icon-Blogger fs-2x"></i>
                            </div>
                            <div class="list-body">
                                            <span class="list-title">
                                                <?php echo $count;?>
                                            </span>
                                <span class="list-content">
                                                Blogs
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
                    <h3>Add Blog</h3>
                </div>

            </div>
            <div class="portlet-body row align-content-center">
                <div class="col-lg-10 col-md-10 col-sm-10">
                    <a href="blog-new.php" class="btn btn-icon btn-lg btn-rounded btn-light-primary mb-30">
                        <i class="icon-Add"></i>
                        Add Blog
                    </a>
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
                                                <select class="form-control" name="featured1">
                                                    <option selected> <?php echo $fn[0]; ?></option>
                                                <?php while ($ra1=mysqli_fetch_assoc($fetch_query1)){
                                                ?>
                                                    <option value="<?php echo $ra1['blog_id']; ?>">Sr No. <?php echo $ra1['blog_id']; ?> - <?php echo $ra1['blog_name']; ?></option>>
                                                <?php }?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit" name="sfa1">Save</button>
                                            </div>
                                            </form>
                                        </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <label>Featured Article 2</label>
                                                        <select class="form-control" name="featured2">
                                                            <option selected> <?php echo $fn[1]; ?></option>
                                                        <?php while ($ra2=mysqli_fetch_assoc($fetch_query2)){
                                                            ?>
                                                            <option class="form-control" value="<?php echo $ra2['blog_id'] ; ?>">Sr No. <?php echo $ra2['blog_id'] ; ?> - <?php echo $ra2['blog_name'] ;?></option>
                                                        <?php }?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit" name="sfa2">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <label>Featured Article 3</label>
                                                        <select class="form-control" name="featured3">
                                                            <option selected> <?php echo $fn[2]; ?></option>
                                                        <?php while ($ra3=mysqli_fetch_assoc($fetch_query3)){
                                                            ?>
                                                            <option class="form-control" value="<?php echo $ra3['blog_id']; ?>">Sr No. <?php echo $ra3['blog_id']; ?> - <?php echo $ra3['blog_name']; ?></option>
                                                        <?php }?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit" name="sfa3">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <label>Featured Article 4</label>
                                                        <select class="form-control" name="featured4">
                                                            <option selected> <?php echo $fn[3]; ?></option>
                                                        <?php while ($ra4=mysqli_fetch_assoc($fetch_query4)){
                                                            ?>
                                                            <option class="form-control" value="<?php echo $ra4['blog_id']; ?>">Sr No. <?php echo $ra4['blog_id']; ?> - <?php echo $ra4['blog_name']; ?></option>
                                                        <?php }?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" type="submit" name="sfa4">Save</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="bg-white table-responsive rounded shadow-sm pt-3 pb-3 mb-30 row">
                            <h6 class="pl-3 pr-3 text-capitalize font400 mb-20">Blog List</h6>
                            <table id="data-table" class="table mb-0 table-striped" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Blog Title</th>
                                    <th>Blog Written By</th>
                                    <th>Blog Posted On</th>
                                    <th>Blog Update</th>
                                    <th>Action</th>
                                    <th>Delete</th>


                                </tr>
                                </thead>
                                <tbody>

                                <?php while($row=mysqli_fetch_assoc($fetch_query)){
                                    $xx++;
                                    ?>
                                <tr>
                                    <td><?php echo $xx;?></td>
                                    <td><?php echo $row['blog_name'];?></td>
                                    <td><?php echo $row['blog_by'];?></td>
                                    <td><?php echo $row['blog_upload'];?></td>
                                    <td><?php echo $row['blog_update'];?></td>
                                    <td>
                                        <a href="blog-edit.php?b_id=<?php echo $row['blog_id'];?>" class="btn btn-icon btn-rounded btn-outline-primary mr-1">
                                            <i class="fa fa-edit"></i>
                                            Edit
                                        </a>
                                    </td>
                                    <td>
                                        <form method="post"  >
                                            <input type="hidden" name="del_id" value="<?php echo $row['blog_id'];?>">
                                        <button type="submit" class="btn btn-icon btn-rounded btn-danger ml-1">
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </button>
                                        </form>
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
        <script type="text/javascript" src="lib/data-tables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="lib/data-tables/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript" src="lib/data-tables/dataTables.responsive.min.js"></script>
        <script type="text/javascript" src="lib/data-tables/responsive.bootstrap4.min.js"></script>
        <script src="js/plugins-custom/datatables-custom.js"></script>
    </body>
</html>
