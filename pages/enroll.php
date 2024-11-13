<?php 
  require_once('includes/authen.php');
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
    <title>สมัครเรียน</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css"
        href="../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css"
        href="../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/app-user.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

    <!-- BEGIN: fonts-->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

    body {
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
    background-color: #b22222; /* สีแดงเลือดหมูใหม่ */
    color: #fff; /* สีข้อความเป็นขาว */
}

.new-title-css {
    font-family: 'Prompt', sans-serif;
    font-size: 26px;
    font-weight: revert;
    color: #ffcc00; /* สีทองใหม่สำหรับหัวข้อ */
}

/* ปรับสีแบรนด์โลโก้ */
.brand-text-custom {
    color: #ffcc00; /* สีทองใหม่ */
}

/* ปรับสีของฟอร์มและปุ่ม */
.card-body {
    background-color: #b22222; /* สีแดงเลือดหมูใหม่ */
    border-radius: 8px;
    padding: 20px;
}


.form-label {
    color: #ffcc00; /* สีทองใหม่สำหรับข้อความป้าย */
}

.form-password-toggle .form-control {
    border-color: #ffcc00; /* กรอบของฟอร์มเป็นสีทองใหม่ */
}

.btn-primary {
    background-color: #ffcc00 !important;  /* สีทองใหม่ */
    border-color: #ffcc00 !important;      /* กรอบปุ่มเป็นสีทองใหม่ */
    color: #b22222 !important;             /* ข้อความบนปุ่มเป็นสีแดงเลือดหมูใหม่ */
}



.btn-primary:hover {
    background-color: #D4AF37 !important; /* ปรับสีทองให้เข้มขึ้นเมื่อโฮเวอร์ */
}

a {
    color: #ffcc00; /* สีทองใหม่สำหรับลิงก์ */
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* เพิ่มความสวยงามสำหรับไอคอน */
.input-group-text {
    background-color: #ffcc00; /* สีทองใหม่สำหรับไอคอน */
    color: #b22222; /* สีแดงเลือดหมูใหม่สำหรับไอคอน */
}

.input-group-merge .form-control {
    border-color: #ffcc00; /* กรอบของฟอร์มเป็นสีทองใหม่ */
}

    </style>
    <!-- END: fonts-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Content-->
    <div class="app-content content" style="margin-left: 0px;padding-top: 20px;">
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">สมัครเรียน</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                        <a href="login.php"> เข้าสู่ระบบ</a>
                                    <!-- <li class="breadcrumb-item"><a href="add.php">เพิ่ม</a> -->
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section id="basic-input">
                    <form action="enroll_insert.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <!-- <div class="media flex-column flex-md-row text-center mt-3">
                                        <div class="media-body">
                                            <div class="form-group">
                                                <img id="imgUpload" style="width: 300px;" class="avatar-content">
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="form-group mb-0">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="file"
                                                            id="customFile" required>
                                                        <label class="custom-file-label"
                                                            for="customFile">อัปโหลดหลักฐาน</label>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <small class="text-muted ">ไฟล์ขนาดไม่เกิน 100 mb.</small>
                                        </div>
                                    </div><br><br> -->

                                    <div class="row ml-2 mr-2 mt-3">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>คำนำหน้า : </label>
                                            <select class="select2 form-control form-control-md" name="prefix_id"
                                                required>
                                                <option value="">-- เลือก คำนำหน้า --</option>
                                                <?php 
                                                $sql_prefix = "SELECT * FROM `prefix` ORDER BY `th` ASC";
                                                $result_prefix = $conn->query($sql_prefix);
                                                if ($result_prefix->num_rows) {
                                                while($row_prefix = $result_prefix->fetch_assoc()) { 
                                            ?>
                                                <option value="<?php echo $row_prefix['id']; ?>">
                                                    <?php echo $row_prefix['th'] .' / '. $row_prefix['en']; ?>
                                                </option>
                                                <?php 
                                                    }
                                                } 
                                            ?>
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="fname_th">ชื่อ (ภาษาไทย) :</label>
                                                <input type="text" class="form-control" name="fname_th" maxlength="100"
                                                    placeholder="ชื่อ (ภาษาไทย)" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="lname_th">นามสกุล (ภาษาไทย) :</label>
                                                <input type="text" class="form-control" name="lname_th" maxlength="100"
                                                    placeholder="นามสกุล (ภาษาไทย)" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="date_of_birth">วัน/เดือน/ปี เกิด :</label>
                                                <input type="date" class="form-control" name="date_of_birth"
                                                    placeholder="วัน/เดือน/ปี เกิด" required>
                                            </div>
                                        </div>
                                       
                                    </div>

                                   

                                  

                                    <div class="row ml-2 mr-2">
                                        
                                    <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="religion">รหัสนักศึกษา :</label>
                                                <input type="text" class="form-control" name="religion" maxlength="50"
                                                    placeholder="รหัสนักศึกษา">
                                            </div>
                                    </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="phone">เบอร์โทรศัพท์ :</label>
                                                <input type="number" class="form-control" name="phone" maxlength="50"
                                                    placeholder="เบอร์โทรศัพท์" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="email">อีเมล :</label>
                                                <input type="email" class="form-control" name="email" maxlength="100"
                                                    placeholder="อีเมล" required>
                                            </div>
                                        </div>
                                    </div>

                                        
                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>ระดับชั้นปีการศึกษา : </label>
                                            <select class="select2 form-control form-control-md" name="ayear_id"
                                                required>
                                                <option value="">-- เลือก ระดับชั้นปีการศึกษา --</option>
                                                <?php 
                                                $sql_ayear = "SELECT * FROM `academic_year` ORDER BY `name` ASC";
                                                $result_ayear = $conn->query($sql_ayear);
                                                if ($result_ayear->num_rows) {
                                                while($row_ayear = $result_ayear->fetch_assoc()) { 
                                            ?>
                                                <option value="<?php echo $row_ayear['id']; ?>">
                                                    <?php echo $row_ayear['name']; ?>
                                                </option>
                                                <?php 
                                                    }
                                                } 
                                            ?>
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>หมวดหมู่ชมรม : </label>
                                            <select class="select2 form-control form-control-md" name="level_id" id="level"
                                                    required>
                                                    <option value="">-- เลือก หมวดหมู่ชมรม --</option>
                                                        <?php 
                                                            $sql_level = "SELECT * FROM `level` ORDER BY `code` ASC";
                                                            $result_level = $conn->query($sql_level);
                                                        ?>
                                                        
                                                         <?php while($result = $result_level->fetch_assoc()): ?>
                                                            <option value="<?=$result['id']?>"><?=$result['code'].' : '.$result['name']?></option>
                                                        <?php endwhile; ?>
                                                </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>ชมรม :</label>
                                            <select class="select2 form-control form-control-md" id="major" name="major_id" required>
                                                <option value="">-- เลือก ชมรม --</option>
                                            </select>
                                        </div>
                                      
                                        <div class="col-xl-12 col-md-12 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="address">เหตุผลในการสมัครเข้าชมรมนี้ :</label>
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="เหตุผลในการสมัครเข้าชมรมนี้ ">
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="weight">รูปถ่าย :</label>
                                                <div class="media flex-column flex-md-row text-center">
                                                <div class="media-body">
                                                    <div class="d-inline-block">
                                                        <div class="form-group mb-0">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="image_profile"
                                                                    id="image_profile" required>
                                                                <label class="custom-file-label"
                                                                    for="image_profile">อัปโหลดรูปถ่าย</label>
                                                            </div>
                                                        </div>
                                                    </div><br>
                                                    <small class="text-muted ">ไฟล์ขนาดไม่เกิน 100 mb.</small>
                                                </div>
                                                </div>
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
                    </form>
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php require_once('includes/footer.php'); ?>

    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="../app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js"></script>
    <script src="../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-user-list.js"></script>
    <script src="../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <script src="../app-assets/js/scripts/forms/form-select2.js"></script>
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

    $(function(){
        var levelObject = $('#level');
        var majorObject = $('#major');

        // on change level
        levelObject.on('change', function(){
            var LevelId = $(this).val();

            majorObject.html('<option value="">-- เลือก สาขา --</option>');

            $.get('get_major.php?level_id=' + LevelId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    majorObject.append(
                        $('<option></option>').val(item.id).html(item.code + ' : ' + item.name)
                    );
                });
            });
        });
    });

    // รูป
    $('.custom-file-input').on('change', function() {
        var size = this.files[0].size / 1024 / 1024
        if (size.toFixed(100) > 100) {
            alert('ขนาดไฟล์ต้องไม่เกิน 100 MB')
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