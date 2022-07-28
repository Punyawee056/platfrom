<?php 
  require_once('../includes/authen.php');
?>

<!DOCTYPE html>
<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>โปรไฟล์</title>
    <link rel="apple-touch-icon" href="../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/css/pages/app-user.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- BEGIN: fonts-->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

    body {
        font-family: 'Prompt', sans-serif;
        font-size: 16px;
    }

    .new-title-css {
        font-family: 'Prompt', sans-serif;
        font-size: 26px;
        font-weight: revert;
    }
    </style>
    <!-- END: fonts-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <?php require_once('../includes/menu.php'); ?>

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">โปรไฟล์</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section id="basic-input">
                    <form action="sql/update.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="media flex-column flex-md-row text-center mt-3">
                                        <div class="media-body">
                                            <div class="form-group">
                                                <input type="hidden" name="image" value="<?php echo $row_me['image']; ?>">
                                                <img id="imgUpload" style="width: 300px;" class="avatar-content" src="../images/user/<?php echo $row_me['image']; ?>">     
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="form-group mb-0">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="file"
                                                            id="customFile">
                                                        <label class="custom-file-label"
                                                            for="customFile">อัปโหลด</label>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <small class="text-muted ">แนะนำรูปภาพขนาด 800x400 และไฟล์ขนาดไม่เกิน 25
                                                mb.</small>
                                        </div>
                                    </div><br>

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-4 col-md-4 col-12 mb-1">
                                                <div class="form-group">
                                                    <label for="code">รหัสผู้ใช้งาน :</label>
                                                    <input type="text" class="form-control" maxlength="10" name="code"
                                                        value="<?php echo $row_me['code']; ?>" >
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-12 mb-1">
                                                <div class="form-group">
                                                    <label for="fname">ชื่อ :</label>
                                                    <input type="text" class="form-control" id="fname" name="fname"
                                                        maxlength="100" value="<?php echo $row_me['fname']; ?>"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-12 mb-1">
                                                <div class="form-group">
                                                    <label for="lname">นามสกุล :</label>
                                                    <input type="text" class="form-control" id="lname" name="lname"
                                                        maxlength="100" value="<?php echo $row_me['lname']; ?>"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-12 mb-1">
                                                <div class="form-group">
                                                    <label for="phone">เบอร์โทรศัพท์ :</label>
                                                    <input type="yext" class="form-control" id="phone" name="phone"
                                                        maxlength="50" value="<?php echo $row_me['phone']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-12 mb-1">
                                                <div class="form-group">
                                                    <label for="email">อีเมล :</label>
                                                    <input type="yext" class="form-control" id="email" name="email"
                                                        maxlength="50" value="<?php echo $row_me['email']; ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-12 mb-1">
                                                <div class="form-group">
                                                    <label for="role">บทบาท :</label>
                                                    <input type="yext" class="form-control" id="role" name="role"
                                                        maxlength="50" value="<?php echo $row_me['role_name']; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-12 mb-1">
                                                <div class="form-group">
                                                    <label for="dealer">Dealer :</label>
                                                    <input type="yext" class="form-control" id="dealer" name="dealer"
                                                        maxlength="255" value="<?php echo $row_me['dealer']; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-4 col-12 mb-1">
                                                <div class="form-group">
                                                    <label for="location">Location :</label>
                                                    <input type="yext" class="form-control" id="location" name="location"
                                                        maxlength="255" value="<?php echo $row_me['location']; ?>" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-primary waves-effect waves-float waves-light" type="submit"
                                    name="submit">บันทึก</button>
                                <a href="index.php" class="btn btn-secondary waves-effect waves-float waves-light">
                                    ยกเลิก</a>
                            </div>
                        </div>
                    </form>
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php require_once('../includes/footer.php'); ?>

    <!-- BEGIN: Vendor JS-->
    <script src="../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../app-assets/js/core/app-menu.js"></script>
    <script src="../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../app-assets/js/scripts/pages/app-user-list.js"></script>
    <script src="../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <!-- END: Page JS-->

    <script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

    // รูป
    $('.custom-file-input').on('change', function() {
        var size = this.files[0].size / 1024 / 1024
        if (size.toFixed(25) > 25) {
            alert('ขนาดไฟล์ต้องไม่เกิน 25MB')
        } else {
            var fileName = $(this).val().split('\\').pop()
            $(this).siblings('.custom-file-label').html(fileName)
            if (this.files[0]) {
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function(e) {
                    $('#imgUpload').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0])
            }
        }
    })
    </script>
</body>
<!-- END: Body-->

</html>