<?php
session_start();
include('connect.php');
require 'session_check.php';

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
                                            <i class="icon-Blogger"></i>
                                        </div>
                                        <div class="list-body">
                                            <div class="list-title fs-2x">
                                                <h3>New Blog</h3>
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
                                        <li class="breadcrumb-item active">New Blog</li>
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
                                            <h3>Blog Editor</h3>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <form method="post"  enctype="multipart/form-data" action="./blog_up.php">

                                        <div class="form-group">
                                            <input type="text" placeholder="Blog Title" class="form-control" name="title">
                                        </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Blog Sub Title" class="form-control" name="sub_title">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Blog Author" class="form-control" name="author">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload">
                                                    <label class="custom-file-label" for="fileToUpload"></label>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <textarea class="summernote-init" id="summernote" name="blog_content"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg" name="up_blog">Save</button>
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
