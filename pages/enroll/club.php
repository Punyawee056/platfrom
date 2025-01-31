<?php
require_once '../includes/authen.php';
?>

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
    }

    .new-title-css {
        font-family: 'Prompt', sans-serif;
        font-size: 26px;
        font-weight: revert;
    }

    /* Enhanced Club Section CSS */
.club-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 30px 0;
}

.club {
    border: 1px solid #ddd;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease;
}

.club:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.club h3 {
    font-size: 24px;
    color: #333;
    margin-bottom: 15px;
}

/* Image styling */
.club img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 15px;
}

/* Button styling */
.club a.inline-btn {
    text-decoration: none;
    padding: 10px 20px;
    background-color: #FFD700;  /* Gold background */
    color: #800020;  /* Maroon text color */
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

.club a.inline-btn:hover {
    background-color: #800020;  /* Maroon background */
    color: #FFD700;  /* Gold text color */
}


   /* ปรับสีปุ่ม "View Club" */
.club a.inline-btn {
    text-decoration: none;
    padding: 10px 20px;
    background-color: #FFD700;  /* สีพื้นหลังปุ่มเป็นสีทอง */
    color: #800020;  /* สีข้อความในปุ่มเป็นสีแดงเลือดหมู */
    border-radius: 4px;
    transition: background-color 0.3s, color 0.3s;
}

/* เปลี่ยนสีเมื่อ hover */
.club a.inline-btn:hover {
    background-color: #800020;  /* สีพื้นหลังเป็นสีแดงเลือดหมู */
    color: #FFD700;  /* สีข้อความในปุ่มเป็นสีทอง */
}

    </style>
    <!-- END: fonts-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

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
                            <h2 class="content-header-title float-left mb-0">สมัครเข้าชมรม <?php //echo $num; ?></h2>
                        </div>
                    </div>
                </div>
             
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section id="basic-datatable">
                <div class="box">
                    <div class="club-container">
                        <!-- Display Clubs Here -->
                        <div class="club">
                            <h3>MFU Swimming Club</h3>
                            <img src="../../img/swim.jpg" alt="">
                            <a href="../enroll/MFU Swimming Club.php" class="inline-btn">View Club</a>
                        </div>

                        <div class="club">
                            <h3>MFU Dancing Acting  </h3>
                            <img src="../../img/dace.jpg" alt="">
                            <a href="../enroll/MFU Dancing Acting.php" class="inline-btn">View Club</a>
                        </div>


                        <div class="club">
                            <h3>MFU Band</h3>
                            <img src="../../img/Band.png" alt="">
                            <a href="../enroll/MFU Band.php " class="inline-btn">View Club</a>
                        </div>
                        
                        
                        <div class="club">
                            <h3>MFU Basketball Club </h3>
                            <img src="../../img/Basketball.png" alt="">
                            <a href="../enroll/MFU Basketball Club.php" class="inline-btn">View Club</a>
                        </div>
                        
                        
                        <div class="club">
                            <h3>MFU ชมรมอนุรักษ์สิ่งแวดล้อม </h3>
                            <img src="../../img/ชมรมอนุรักษิ์.jpg" alt="">
                            <a href="../enroll/MFU ชมรมอนุรักษ์สิ่งแวดล้อม.php" class="inline-btn">View Club</a>
                        </div>
                        
                        
                        <div class="club">
                            <h3>MFU Photoclub</h3>
                            <img src="../../img/Mfu Photoclub.png" alt="">
                            <a href="../enroll/MFU Photoclub.php" class="inline-btn">View Club</a>
                        </div>
                        
                        
                        <div class="club">
                            <h3>MFU Brazillian Jiu-Jitsu </h3>
                            <img src="../../img/Bjj.jpg" alt="">
                            <a href="../enroll/MFU Brazillian Jiu-Jitsu.php " class="inline-btn">View Club</a>
                        </div>
                        
                        
                        <div class="club">
                            <h3>MFU Tennis Club</h3>
                            <img src="../../img/Tennis.jpg" alt="">
                            <a href="../enroll/MFU Tennis Club.php " class="inline-btn">View Club</a>
                        </div>
                        
                        
                        <div class="club">
                            <h3>MFU Taekwondo Club</h3>
                            <img src="../../img/Taekwondo.jpg" alt="">
                            <a href="../enroll/MFU Taekwondo Club.php " class="inline-btn">View Club</a>
                        </div>
                    </div> <!-- End club-container -->

                </div>
                </section>
            </div>

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <?php require_once '../includes/footer.php';?>

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