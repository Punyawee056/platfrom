<?php 
  require_once('../includes/authen.php');
  $sql = "SELECT * FROM `car` WHERE `id` = '".$_GET['car_id']."'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
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
    <title>รถ</title>
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
                            <h2 class="content-header-title float-left mb-0">จอง</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <!-- <li class="breadcrumb-item"><a href="edit.php?car_id=<?php echo $_GET['car_id']; ?>">แก้ไข</a>
                                    </li> -->
                                </ol>
                            </div>
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
                                    <!-- <div class="media flex-column flex-md-row text-center mt-3">
                                        <div class="media-body">
                                            <div class="form-group">
                                                <input type="hidden" name="image" value="<?php echo $row['slip']; ?>"; ?>
                                                <img id="imgUpload" style="width: 300px;" class="avatar-content" src="../images/slip/<?php echo $row['slip']; ?>">
                                            </div>
                                            <div class="d-inline-block">
                                                <div class="form-group mb-0">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="file"
                                                            id="customFile">
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
                                            <div class="form-group">
                                                <label for="serial_no">เลขเครื่อง :</label>
                                                <input type="text" class="form-control" name="serial_no" maxlength="50"
                                                    placeholder="เลขเครื่อง" value="<?php echo $row['serial_no']; ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="mc_no">เลขตัวถัง :</label>
                                                <input type="text" class="form-control" name="mc_no" maxlength="50"
                                                    placeholder="เลขตัวถัง" value="<?php echo $row['mc_no']; ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="price">ราคารวม VAT :</label>
                                                <input type="number" class="form-control" name="price" maxlength="10"
                                                    placeholder="ราคารวม VAT" value="<?php echo $row['price']; ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>สถานะ TMC : </label>
                                            <select class="select2 form-control form-control-md" name="tmc_id"
                                            disabled>
                                                <option value="">-- เลือก สถานะ TMC --</option>
                                                <?php 
                                                $sql_tmc = "SELECT * FROM `tmc` ORDER BY `name` ASC";
                                                $result_tmc = $conn->query($sql_tmc);
                                                if ($result_tmc->num_rows) {
                                                while($row_tmc = $result_tmc->fetch_assoc()) { 
                                                    if($row['tmc_id'] == $row_tmc['id'])
                                                    {
                                                    $sel = "selected";
                                                    }
                                                    else
                                                    {
                                                    $sel = "";
                                                    } 
                                            ?>
                                                <option value="<?php echo $row_tmc['id']; ?>" <?php echo $sel;?>>
                                                    <?php echo $row_tmc['name']; ?>
                                                </option>
                                                <?php 
                                                    }
                                                } 
                                            ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="aging">Aging :</label>
                                                <input type="text" class="form-control" name="aging" maxlength="50"
                                                    placeholder="Aging" value="<?php echo $row['aging']; ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="aging_rank">Aging Rank :</label>
                                                <input type="text" class="form-control" name="aging_rank" maxlength="50"
                                                    placeholder="Aging Rank" value="<?php echo $row['aging_rank']; ?>" disabled>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>Dealer : </label>
                                            <select class="select2 form-control form-control-md" name="dealer_id" id="dealer"
                                            disabled>
                                                    <option value="">-- เลือก Dealer --</option>
                                                        <?php 
                                                            $sql_dealer = "SELECT * FROM `dealer` ORDER BY `code` ASC";
                                                            $result_dealer = $conn->query($sql_dealer);
                                                            if ($result_dealer->num_rows){
                                                                while($result = $result_dealer->fetch_assoc()) { 
                                                                    if($row['dealer_id'] == $result['id'])
                                                                    {
                                                                    $sel = "selected";
                                                                    }
                                                                    else
                                                                    {
                                                                    $sel = "";
                                                                    } 
                                                        ?>
                                                            <option value="<?=$result['id']?>" <?php echo $sel;?>><?=$result['code'].' : '.$result['name']?></option>
                                                        <?php 
                                                                }
                                                            } 
                                                        ?>   
                                                </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>Location</label>
                                            <select class="select2 form-control form-control-md" id="location" name="location_id" disabled>
                                            <option value="">-- เลือก Location --</option>
                                                <?php 
                                                $sql_location = "SELECT * FROM `location` WHERE `dealer_id` = '".$row['dealer_id']."' ";
                                                $result_location = $conn->query($sql_location);
                                                if ($result_location->num_rows){
                                                while($row_location = $result_location->fetch_assoc()) { 
                                                                                        
                                                    if($row['location_id'] == $row_location['id'])
                                                    {
                                                    $sel = "selected";
                                                    }
                                                    else
                                                    {
                                                    $sel = "";
                                                    } 
                                                ?>
                                                <option value="<?php echo $row['location_id']; ?>" <?php echo $sel;?>>
                                                    <?php echo $row_location['code'].' : '.$row_location['name']; ?>
                                                </option>
                                                <?php 
                                                        }
                                                    } 
                                                ?>  
                                            </select>
                                        </div>
                                    </div>
                                        
                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>Model : </label>
                                            <select class="select2 form-control form-control-md" name="model_id" id="model"
                                            disabled>
                                                    <option value="">-- เลือก Model --</option>
                                                        <?php 
                                                            $sql_model = "SELECT * FROM `model` ORDER BY `code` ASC";
                                                            $result_model = $conn->query($sql_model);
                                                            if ($result_model->num_rows){
                                                                while($result = $result_model->fetch_assoc()) { 
                                                                    if($row['model_id'] == $result['id'])
                                                                    {
                                                                    $sel = "selected";
                                                                    }
                                                                    else
                                                                    {
                                                                    $sel = "";
                                                                    } 
                                                        ?>
                                                            <option value="<?=$result['id']?>" <?php echo $sel;?>><?=$result['code'].' : '.$result['name']?></option>
                                                        <?php 
                                                                }
                                                            } 
                                                        ?>   
                                                </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>Model Desc</label>
                                            <select class="select2 form-control form-control-md" name="model_desc_id" id="model_desc" disabled>
                                                <option value="">-- เลือก Model Desc --</option>
                                                <?php 
                                                $sql_desc = "SELECT * FROM `model_desc` WHERE `model_id` = '".$row['model_id']."' ";
                                                $result_desc = $conn->query($sql_desc);
                                                if ($result_desc->num_rows){
                                                while($row_desc = $result_desc->fetch_assoc()) { 
                                                                                        
                                                    if($row['model_desc_id'] == $row_desc['id'])
                                                    {
                                                    $sel = "selected";
                                                    }
                                                    else
                                                    {
                                                    $sel = "";
                                                    } 
                                                ?>
                                                <option value="<?php echo $row['model_desc_id']; ?>" <?php echo $sel;?>>
                                                    <?php echo $row_desc['code'].' : '.$row_desc['name']; ?>
                                                </option>
                                                <?php 
                                                        }
                                                    } 
                                                ?>  
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>สีรถ</label>
                                            <select class="select2 form-control form-control-md" id="color" name="color_id" disabled>
                                                <option value="">-- เลือก สีรถ --</option>
                                                <?php 
                                                $sql_color = "SELECT * FROM `color` WHERE `model_desc_id` = '".$row['model_desc_id']."' ";
                                                $result_color = $conn->query($sql_color);
                                                if ($result_color->num_rows){
                                                while($row_color = $result_color->fetch_assoc()) { 
                                                    if($row['color_id'] == $row_color['id'])
                                                    {
                                                    $sel = "selected";
                                                    }
                                                    else
                                                    {
                                                    $sel = "";
                                                    } 
                                                ?>
                                                <option value="<?php echo $row['color_id']; ?>" <?php echo $sel;?>>
                                                    <?php echo $row_color['code'].' : '.$row_color['name']; ?>
                                                </option>
                                                <?php 
                                                        }
                                                    } 
                                                ?>  
                                            </select>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="import_date">วันที่รถลง :</label>
                                                <input type="date" class="form-control" name="import_date"
                                                    placeholder="วันที่รถลง" value="<?php echo $row['import_date']; ?>" disabled>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="buy_by">ชื่อลูกค้า :</label>
                                                <input type="text" class="form-control" name="buy_by" maxlength="255"
                                                    placeholder="ชื่อลูกค้า" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="paid">ชำระแล้ว :</label>
                                                <input type="number" class="form-control" name="paid" maxlength="10"
                                                    placeholder="ชำระแล้ว" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <div class="form-group">
                                                <label for="delivery_date">กำหนดส่งมอบ :</label>
                                                <input type="date" class="form-control" name="delivery_date" maxlength="10"
                                                    placeholder="กำหนดส่งมอบ" value="<?php echo date("Y-m-d"); ?>" required>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-3 col-12 mb-2">
                                            <label>สาขา : </label>
                                            <select class="select2 form-control form-control-md" name="branch_id"
                                            required>
                                                <option value="">-- เลือก สาขา --</option>
                                                <?php 
                                                $sql_branch = "SELECT * FROM `branch` ORDER BY `code` ASC";
                                                $result_branch = $conn->query($sql_branch);
                                                if ($result_branch->num_rows) {
                                                while($row_branch = $result_branch->fetch_assoc()) {                                                   
                                            ?>
                                                <option value="<?php echo $row_branch['id']; ?>" >
                                                    <?php echo $row_branch['code'].' : '.$row_branch['name']; ?>
                                                </option>
                                                <?php 
                                                    }
                                                } 
                                            ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row ml-2 mr-2">
                                        <div class="col-xl-12 col-md-12 col-12 mb-1">
                                            <div class="form-group">
                                                <label for="remark">รายละเอียด หรือ หมายเหตุ :</label>
                                                <textarea class="form-control" name="remark" rows="2" placeholder="รายละเอียด หรือ หมายเหตุ"><?php echo $row['remark']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                      
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12 text-center">
                                <input type="hidden" name="car_id" value="<?php echo $_GET['car_id']; ?>">
                                <button class="btn btn-primary waves-effect waves-float waves-light" type="submit"
                                    name="submit">ยืนยันการจอง</button>
                                <a href="index.php" class="btn btn-secondary waves-effect waves-float waves-light">
                                    ย้อนกลับ</a>
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

    $(function(){
        var dealerObject = $('#dealer');
        var locationObject = $('#location');
        var modelObject = $('#model');
        var descObject = $('#model_desc');
        var colorObject = $('#color');

        // on change dealer
        dealerObject.on('change', function(){
            var dealerId = $(this).val();

            locationObject.html('<option value="">-- เลือก Location --</option>');

            $.get('../get_location.php?dealer_id=' + dealerId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    locationObject.append(
                        $('<option></option>').val(item.id).html(item.code + ' : ' + item.name)
                    );
                });
            });
        });

        // on change model
        modelObject.on('change', function(){
            var modelId = $(this).val();

            descObject.html('<option value="">-- เลือก Model Desc --</option>');
            colorObject.html('<option value="">-- เลือก สีรถ --</option>');

            $.get('../get_desc.php?model_id=' + modelId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    descObject.append(
                        $('<option></option>').val(item.id).html(item.code + ' : ' + item.name)
                    );
                });
            });
        });

        // on change desc
        descObject.on('change', function(){
            var descId = $(this).val();

            colorObject.html('<option value="">-- เลือก สีรถ --</option>');

            $.get('../get_color.php?desc_id=' + descId, function(data){
                var result = JSON.parse(data);
                $.each(result, function(index, item){
                    colorObject.append(
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