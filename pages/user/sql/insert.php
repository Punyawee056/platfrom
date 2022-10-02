<?php require_once('../../includes/authen.php');

  if (isset($_POST['submit'])) {

    if($_POST['password'] == $_POST['confirm_password']) {

        if (isset($_POST['customRadio'])) { $role = $_POST['customRadio']; } else { $role = '3';}
        if (isset($_POST['upload'])) { $upload = 'true'; } else { $upload = 'false';}

        $sql_check_email = "SELECT * FROM `user` WHERE `email` = '" . $_POST['email'] . "' ";
        $check_email = $conn->query($sql_check_email);

        if (!$check_email->num_rows) {
            $hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $image_name = 'avatar.png';
        $sql = "INSERT INTO `user` (`email`, `password`, `code`, `fname`, `lname`, `phone`, `image`, `role`) 
                VALUES ('".$_POST['email']."',
                        '".$hashed."',
                        '".$_POST['code']."',
                        '".$_POST['fname']."',
                        '".$_POST['lname']."',
                        '".$_POST['phone']."',
                        '".$image_name."',
                        '".$role."')";
        
        $result = $conn->query($sql);
            if ($result) {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                    title: "บันทึกสำเร็จ!",
                    type: "success",
                    icon: "success"
                });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                    window.location.href = "../index.php";';
                echo '}, 2000 );</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { swal.fire({
                    title: "ผิดพลาด!",
                    text: "กรุณาลองใหม่!",
                    type: "warning",
                    icon: "error"
                });';
                echo '}, 500 );</script>';

                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { 
                    window.location.href = "../index.php";';
                echo '}, 2000 );</script>';
            
            }
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { swal.fire({
            title: "ข้อมูลไม่ถูกต้อง!",
            text: "รหัสผ่านไม่ตรงกัน!",
            type: "warning",
            icon: "error"
        });';
        echo '}, 500 );</script>';

        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { 
            window.location.href = "../index.php";';
        echo '}, 3000 );</script>';
    }
  }
?>

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>ระบบเก็บไฟล์</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css"
        href="../../../app-assets/css/plugins/extensions/ext-component-sweet-alerts.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
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


<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../../app-assets/js/scripts/forms/form-select2.js"></script>
<script src="../../../app-assets/js/scripts/extensions/ext-component-sweet-alerts.js"></script>
<script src="../../../app-assets/js/scripts/tables/table-datatables-basic.js"></script>
<!-- END: Page JS-->

</html>