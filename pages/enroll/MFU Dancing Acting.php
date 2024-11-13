<?php
require_once '../includes/authen.php';
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
    <title>CLUB</title>
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
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="../../app-assets/vendors/css/forms/select/select2.min.css">
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
        color: #333;
        line-height: 1.6;
        background-color: #f7f7f7;
    }

  

    /* Club Section Styling */
    .about {
        max-width: 1200px;
        margin: 30px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .about .row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .about .image {
        flex: 1;
        max-width: 45%;
        padding: 20px;
    }

    .about .image img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }

    .about .content {
        flex: 1;
        max-width: 45%;
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 8px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .about h3 {
        font-size: 28px;
        margin-bottom: 15px;
        color: #333;
        font-weight: bold;
    }

    .about p {
        font-size: 16px;
        margin-bottom: 20px;
        color: #555;
    }

    .about a.inline-btn {
    display: inline-block;
    padding: 12px 25px;
    background-color: #800000;  /* สีแดงเลือดหมู (Burgundy Red) */
    color: #fff;  /* สีข้อความขาว */
    text-decoration: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: bold;
    transition: all 0.3s;
    border: 2px solid #FFD700;  /* สีทอง (Gold) สำหรับกรอบปุ่ม */
}

.about a.inline-btn:hover {
    background-color: #660000;  /* สีแดงเลือดหมูเข้ม (Darker Burgundy Red) เมื่อ hover */
    transform: translateY(-3px);
    border-color: #FFD700;  /* สีทอง (Gold) สำหรับกรอบเมื่อ hover */
}

    </style>
    <!-- END: fonts-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">

    <?php 
        require_once '../includes/menu.php';

        if($row_me['role'] == 3) {
            $sql_enroll = "SELECT * FROM view_enroll WHERE user_id = '".$row_me['id']."'";
            $sql_num = "SELECT count(user_id) as num FROM view_enroll WHERE user_id = '".$row_me['id']."'";
            $result_num = $conn->query($sql_num);
            $row_num = $result_num->fetch_assoc();
            $num = $row_num['num'];
        } else {
            $sql_enroll = "SELECT * FROM view_enroll";
            $num = 0;
        }
        $result_enroll = $conn->query($sql_enroll);
    ?>

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
                            <h2 class="content-header-title float-left mb-0">MFU Dancing Acting</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-body">
                <!-- About Section -->
                <section class="about">
                    <div class="row">
                        <div class="image">
    
                        <img src="../../img in/danc2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Dancing Acting</h3>
                            <p>ประวัติความเป็นมาของชมรม MFU Dancing Acting

ชมรม MFU Dancing Acting ก่อตั้งขึ้นโดยกลุ่มนักศึกษาที่มีใจรักในด้านการเต้นและการแสดงจากมหาวิทยาลัยแม่ฟ้าหลวง (MFU) เพื่อเป็นพื้นที่ให้นักศึกษาได้แสดงออกถึงความสามารถในด้านการเต้นและการแสดง รวมถึงการฝึกฝนทักษะทางศิลปะการแสดงในรูปแบบต่าง ๆ เช่น การเต้นแบบสมัยใหม่ การแสดงละครเวที และกิจกรรมการแสดงอื่น ๆ ภายในมหาวิทยาลัย ชมรมมีวัตถุประสงค์หลักในการสร้างแรงบันดาลใจและความมั่นใจให้กับสมาชิก ส่งเสริมการพัฒนาทักษะทางศิลปะอย่างต่อเนื่อง พร้อมทั้งสนับสนุนการแสดงออกถึงตัวตนผ่านทางการแสดงในรูปแบบที่หลากหลาย</p>
<a href="../../pages/enroll.php" class="inline-btn">JOIN</a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php require_once '../includes/footer.php';?>

    <!-- BEGIN: Vendor JS-->
    <script src="../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="../../app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="../../app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="../../app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../app-assets/js/core/app-menu.js"></script>
    <script src="../../app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../app-assets/js/scripts/pages/app-user-list.js"></script>
    <script src="../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
    <script src="../../app-assets/js/scripts/forms/form-select2.js"></script>
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

    // dataTable
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "sLengthMenu": "แสดง  _MENU_ แถว",
        }
    });
    </script>
</body>
<!-- END: Body-->

</html>
