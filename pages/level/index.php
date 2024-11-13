<?php 
  require_once('../includes/authen.php');

    $sql_level = "SELECT * FROM `level`";
    $result_level = $conn->query($sql_level);

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
    <title>ระดับชั้น - สาขา</title>
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

    .btn-warning {
    background-color: #FFD700 !important; /* สีพื้นหลังของปุ่มแก้ไขเป็นสีทอง */
    border-color: #FFD700 !important; /* ขอบของปุ่มแก้ไขเป็นสีทอง */
    color: #800020 !important; /* สีข้อความในปุ่มแก้ไขเป็นสีแดงเลือดหมู */
}

.btn-warning:hover {
    background-color: #e8c07d !important; /* เปลี่ยนสีพื้นหลังเป็นสีทองอ่อนเมื่อ hover */
    border-color: #e8c07d !important; /* ขอบของปุ่มแก้ไขเป็นสีทองอ่อนเมื่อ hover */
    color: #800020 !important; /* เปลี่ยนข้อความเป็นสีแดงเลือดหมูเมื่อ hover */
}

/* ปรับสีปุ่มลบ */
.btn-danger {
    background-color: #800020 !important; /* สีพื้นหลังของปุ่มลบเป็นสีแดงเลือดหมู */
    border-color: #800020 !important; /* ขอบของปุ่มลบเป็นสีแดงเลือดหมู */
    color: #f1e0d6 !important; /* สีข้อความในปุ่มลบเป็นสีทอง */
}

.btn-danger:hover {
    background-color: #e8c07d !important; /* เปลี่ยนสีพื้นหลังเป็นสีทองเมื่อ hover */
    border-color: #e8c07d !important; /* ขอบของปุ่มลบเป็นสีทองเมื่อ hover */
    color: #800020 !important; /* เปลี่ยนข้อความเป็นสีแดงเลือดหมูเมื่อ hover */
}

    body {
        font-family: 'Prompt', sans-serif;
        font-size: 16px;
    }

    .new-title-css {
        font-family: 'Prompt', sans-serif;
        font-size: 26px;
        font-weight: revert;
    }
    /* ปรับสีปุ่มบันทึก */
.modal-footer .btn-primary {
    background-color: #800020 !important; /* สีพื้นหลังของปุ่มบันทึกเป็นสีแดงเลือดหมู */
    border-color: #800020 !important; /* ขอบของปุ่มเป็นสีแดงเลือดหมู */
    color: #f1e0d6 !important; /* สีข้อความในปุ่มเป็นสีทอง */
}

.modal-footer .btn-primary:hover {
    background-color: #e8c07d !important; /* เปลี่ยนสีพื้นหลังเป็นสีทองเมื่อ hover */
    border-color: #e8c07d !important; /* ขอบของปุ่มเป็นสีทองเมื่อ hover */
}

.modal-footer .btn-secondary {
    background-color: #f1e0d6 !important; /* สีพื้นหลังของปุ่มยกเลิกเป็นสีทอง */
    border-color: #f1e0d6 !important; /* ขอบของปุ่มยกเลิกเป็นสีทอง */
    color: #800020 !important; /* สีข้อความในปุ่มยกเลิกเป็นสีแดงเลือดหมู */
}

.modal-footer .btn-secondary:hover {
    background-color: #800020 !important; /* เปลี่ยนเป็นสีแดงเลือดหมูเมื่อ hover */
    border-color: #800020 !important; /* ขอบของปุ่มยกเลิกเป็นสีแดงเลือดหมูเมื่อ hover */
    color: #f1e0d6 !important; /* เปลี่ยนข้อความเป็นสีทองเมื่อ hover */
}

    /* เปลี่ยนสีของปุ่มเพิ่มข้อมูล */
.text-right .btn-primary {
    background-color: #800020 !important; /* สีพื้นหลังของปุ่มเป็นสีแดงเลือดหมู */
    border-color: #800020 !important; /* ขอบของปุ่มเป็นสีแดงเลือดหมู */
    color: #f1e0d6 !important; /* สีของข้อความในปุ่มเป็นสีทอง */
}

.text-right .btn-primary:hover {
    background-color: #e8c07d !important; /* เปลี่ยนเป็นสีทองเมื่อ hover */
    border-color: #e8c07d !important; /* ขอบของปุ่มเป็นสีทองเมื่อ hover */
}

.text-right .btn-primary i {
    color: #f1e0d6 !important; /* สีของไอคอนเป็นสีทอง */
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
                            <h2 class="content-header-title float-left mb-0">ชมรม</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12">
                    <div class="form-group breadcrumb-right">
                        <div class="text-right mr-4">
                            <button type="button" class="btn btn-primary waves-effect" data-toggle="modal"
                                data-target="#AddModal" style="width: 164px;"><i data-feather='plus-circle'></i>
                                เพิ่มข้อมูล</button>
                        </div>

                        <div class="modal fade text-left" id="AddModal" tabindex="-1" role="dialog"
                            aria-labelledby="AddModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="AddModalLabel"><i data-feather='plus-circle'></i>
                                            เพิ่มข้อมูล</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="sql/insert.php" method="post" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            <label>หมวดหมู่ชมรม : </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="ตัวย่อระดับชั้น" class="form-control"
                                                    name="code" maxlength="10" required />
                                            </div>
                                            <label>ปีการศึกษา : </label>
                                            <div class="form-group">
                                                <input type="text" placeholder="ระดับชั้น" class="form-control"
                                                    name="name" maxlength="255" required />
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="submit" class="btn btn-primary">บันทึก</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">ยกเลิก</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead class="thead-default">
                                        <tr>
                                            <!-- <th class="text-center" style="width: 110px;">ลำดับ</th> -->
                                            <th class="text-center">หมวดหมู่ชมรม</th>
                                            <th class="text-center">ปีการศึกษา</th>
                                            <th class="text-center">ชมรม</th>
                                            <th class="text-center">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $num = 0;
                                        while($row_level = $result_level->fetch_assoc()){
                                        $num++;
                                    ?>
                                        <tr>
                                            <!-- <td class="text-center" style="width: 110px;"><?php echo $num; ?></td> -->
                                            <td><?php echo $row_level['code']; ?></td>
                                            <td><?php echo $row_level['name']; ?></td>
                                            <td class="text-center">
                                                <a href="major.php?level_id=<?php echo $row_level['id']; ?>" class="btn btn-secondary btn-icon box-shadow"><i data-feather="framer"></i> ชมรม</a>
                                            </td>
                                            <td class="text-center" style="width: 220px;">
                                                <a class="btn btn-warning btn-icon box-shadow" style="width: 79.25px;"
                                                    data-toggle="modal"
                                                    data-target="#EditModel<?php echo $row_level['id']; ?>"><i
                                                        data-feather='edit'></i> แก้ไข</a>
                                                <a href="#" class="btn btn-danger btn-icon box-shadow"
                                                    onclick="deleteItem(<?php echo $row_level['id']; ?>,'<?php echo $row_level['code'].' '.$row_level['name']; ?>');"
                                                    style="width: 79.25px;"><i data-feather='trash-2'></i> ลบ</a>
                                            </td>
                                        </tr>

                                        <!-- BEGIN: Edit-->
                                        <div class="modal fade text-left"
                                            id="EditModel<?php echo $row_level['id']; ?>" tabindex="-1"
                                            role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="EditModalLabel"><i
                                                                data-feather='edit'></i> แก้ไขข้อมูล</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="sql/update.php" method="post"
                                                        enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <label>ตัวย่อระดับชั้น : </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="ตัวย่อระดับชั้น"
                                                                    class="form-control" name="code" maxlength="10"
                                                                    value="<?php echo $row_level['code']; ?>"
                                                                    required />
                                                            </div>
                                                            <label>ระดับชั้น : </label>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="ระดับชั้น"
                                                                    class="form-control" name="name" maxlength="255"
                                                                    value="<?php echo $row_level['name']; ?>"
                                                                    required />
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="level_id"
                                                            value="<?php echo $row_level['id']; ?>">
                                                        <div class="modal-footer">
                                                            <button type="submit" name="submit"
                                                                class="btn btn-primary">บันทึก</button>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">ยกเลิก</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END: Edit-->

                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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

    // ลบ
    function deleteItem(id, classs) {
        Swal.fire({
            title: 'ต้องการลบข้อมูล ' + classs + ' หรือไม่?',
            type: "warning",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: 'ลบ',
            cancelButtonText: 'ยกเลิก',
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = `sql/delete.php?level_id=${id}`;
            }
        })
    }

    // dataTable
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "sProcessing": "กำลังดำเนินการ...",
            "sLengthMenu": "แสดง  _MENU_ แถว",
            "sZeroRecords": "ไม่พบข้อมูล",
            "sInfo": "แสดง  _START_  ถึง _END_  จาก _TOTAL_  แถว",
            "sInfoEmpty": "แสดง 0 ถึง 0 จาก 0 แถว",
            "sInfoFiltered": "(กรองข้อมูล _MAX_ ทุกแถว)",
            "sInfoPostFix": "",
            "sLength": "แถว",
            "sSearch": "ค้นหา:",
            "sSearchPlaceholder": "ค้นหา",
            "sUrl": "",
            "oPaginate": {
                "sFirst": "เริ่มต้น",
                "sPrevious": "ก่อนหน้า",
                "sNext": "ถัดไป",
                "sLast": "สุดท้าย"
            }
        }
    });
    </script>
</body>
<!-- END: Body-->

</html>