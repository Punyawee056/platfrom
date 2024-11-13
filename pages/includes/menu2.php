<?php 
    require_once('authen.php');
    $uri = $_SERVER['REQUEST_URI']; 
    $array = explode('/', $uri);
    $key = array_search("pages", $array);
    $pages = $array[$key + 1];
    $pages2 = $array[$key + 2];


    $sql_me = "SELECT * FROM view_user WHERE id = '".$_SESSION['id']."'";
    $result_me = $conn->query($sql_me);
    $row_me = $result_me->fetch_assoc();
?>

<!-- BEGIN: fonts-->
<style>
@import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

/* ปรับสีของ Navbar */
.header-navbar {
    background-color: #800020 !important; /* สีแดงเลือดหมู */
    color: #f1e0d6; /* สีทองสำหรับข้อความ */
}

/* เปลี่ยนสีของโลโก้ */
.header-navbar .navbar-container .bookmark-wrapper h3 {
    color: #f1e0d6; /* สีทอง */
}

/* สีของลิงค์ใน dropdown */
.header-navbar .dropdown-menu {
    background-color: #800020; /* สีแดงเลือดหมู */
    color: #f1e0d6; /* สีทอง */
}

.header-navbar .dropdown-menu .dropdown-item {
    color: #f1e0d6; /* สีทอง */
}


/* สีของปุ่ม toggle เมนูในมือถือ */
.header-navbar .navbar-toggler {
    border-color: #f1e0d6; /* ขอบปุ่มเป็นสีทอง */
}

.header-navbar .navbar-toggler-icon {
    background-color: #f1e0d6; /* ไอคอนเมนูเป็นสีทอง */
}

/* เปลี่ยนสีของ avatar */
.header-navbar .avatar.bg-light-dark {
    background-color: #800020; /* สีพื้นหลังของ avatar */
}

.header-navbar .user-nav .user-name, .header-navbar .user-nav .user-status {
    color: #f1e0d6; /* สีทองสำหรับชื่อผู้ใช้ */
}


/* เปลี่ยนสีของ brand-text ให้เป็นสีแดงเลือดหมู */
.brand-text {
    color: #800020 !important; /* สีแดงเลือดหมู */
}




body {
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
    background-color: #800020; /* สีแดงเลือดหมู */
    color: #FFD700; /* สีทองสำหรับข้อความ */
}

.new-title-css {
    font-family: 'Prompt', sans-serif;
    font-size: 16px;
    color: #000; /* สีทอง */
}

.custom_active {
    background: linear-gradient(118deg, #800020, rgba(128, 0, 32, 0.7)); /* สีแดงเลือดหมู */
    border-radius: 4px;
    color: #f1e0d6 !important; /* สีทอง */
}

a:hover {
    color: #e8c07d !important; /* สีทองสำหรับลิงค์เมื่อ hover */
}

</style>
<!-- END: fonts-->
<!-- END: Head-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow new-title-css">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a>
                </li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block">
                    <h3>MFU CLUB</h3>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ml-auto">
            <li class="nav-item dropdown dropdown-user">
                <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                    </div>
                    <div class="avatar bg-light-dark mr-1">
                    </div>
                </a>
            </li>
            
            <!-- Login button added here -->
            <li class="nav-item">
                <a class="nav-link" href="../../pages/login.php">
                    <button class="btn btn-primary">Login</button>
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow new-title-css" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                    href=""><span class="brand-logo">
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
         width="24" height="24" viewBox="0 0 200 200"
         preserveAspectRatio="xMidYMid meet">
    
    <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)"
    fill="#000000" stroke="none">
        <!-- Path data from your SVG goes here -->
        <path d="M904 1751 c-28 -10 -109 -46 -180 -79 -71 -33 -149 -66 -174 -73 -25
        -7 -47 -14 -49 -15 -2 -2 29 -39 70 -84 l72 -81 -34 -29 c-19 -16 -36 -29 -39
        -30 -3 0 -39 29 -80 65 -41 36 -78 65 -82 65 -5 0 -8 -8 -8 -18 0 -11 -36 -92
        -79 -181 -44 -89 -85 -187 -92 -218 -17 -75 -1 -134 85 -320 36 -78 72 -165
        79 -194 l14 -52 78 72 c43 39 83 71 90 71 6 0 24 -13 40 -30 l28 -30 -59 -67
        c-96 -110 -93 -99 -31 -117 29 -9 123 -48 208 -88 l154 -73 90 0 90 0 151 77
        c83 42 170 82 194 88 l42 11 -19 22 c-11 12 -44 50 -73 85 l-54 63 35 34 34
        34 82 -75 82 -75 11 41 c6 22 45 115 86 206 83 183 98 240 84 312 -5 27 -45
        122 -89 212 -45 89 -81 173 -81 186 0 13 -4 24 -8 24 -5 0 -43 -30 -86 -66
        l-77 -66 -34 27 c-19 14 -35 28 -35 31 0 3 32 42 71 87 l70 81 -48 16 c-26 9
        -114 49 -195 89 -132 66 -153 74 -215 77 -49 3 -82 -1 -119 -15z m-94 -412 c0
        6 5 11 10 11 6 0 10 -9 10 -20 0 -15 -7 -20 -25 -20 -19 0 -25 5 -25 21 0 18
        2 19 15 9 10 -9 15 -9 15 -1z m184 3 c-6 -4 -14 -14 -17 -22 -4 -10 -6 -8 -6
        8 -1 15 5 22 17 22 10 0 13 -3 6 -8z m183 -24 c-3 -7 -5 -2 -5 12 0 14 2 19 5
        13 2 -7 2 -19 0 -25z m346 -73 l36 -17 -24 -48 -25 -49 -39 16 c-75 29 -153
        -8 -166 -81 -8 -42 17 -94 56 -114 24 -12 94 -11 134 2 17 6 24 -1 43 -39 l22
        -46 -42 -19 c-56 -25 -149 -26 -203 -1 -50 22 -109 86 -125 136 -35 105 32
        228 146 271 48 18 138 13 187 -11z m-858 -4 c49 -22 99 -77 115 -127 18 -53 7
        -138 -24 -185 -42 -63 -99 -90 -211 -96 l-95 -6 0 217 0 216 88 0 c62 0 98 -6
        127 -19z m453 -183 c45 -112 82 -209 82 -215 0 -9 -18 -13 -55 -13 l-56 0 -19
        46 -20 45 -66 -2 -66 -2 -19 -44 -18 -43 -56 0 c-30 0 -55 4 -55 10 0 5 37
        102 82 215 l82 205 51 0 51 0 82 -202z m-166 -306 c-3 -10 -1 -13 6 -8 7 4 12
        1 12 -8 0 -17 -35 -22 -44 -7 -9 14 3 38 18 38 8 0 12 -7 8 -15z m-345 -24
        c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2 -7 2 -19 0 -25z m26 7 c-7 -21 -13 -19
        -13 6 0 11 4 18 10 14 5 -3 7 -12 3 -20z m40 5 c3 -11 2 -20 -3 -20 -4 0 -10
        9 -13 20 -3 11 -2 20 3 20 4 0 10 -9 13 -20z m47 -3 c0 -16 -3 -17 -15 -7 -8
        7 -15 16 -15 20 0 3 7 7 15 7 8 0 15 -9 15 -20z m17 1 c-3 -8 -6 -5 -6 6 -1
        11 2 17 5 13 3 -3 4 -12 1 -19z m40 -10 c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2
        -7 2 -19 0 -25z m43 11 c0 -18 -2 -19 -15 -5 -8 8 -15 17 -15 20 0 3 7 6 15 6
        9 0 15 -9 15 -21z m29 -1 c1 7 6 10 12 6 7 -4 7 -10 1 -16 -13 -13 -32 -1 -31
        20 0 14 2 13 9 -3 5 -11 9 -14 9 -7z m204 3 c3 -13 1 -18 -9 -14 -7 2 -10 11
        -7 19 7 19 10 18 16 -5z m24 -13 c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2 -7 2
        -19 0 -25z m50 0 c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2 -7 2 -19 0 -25z m30 0
        c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2 -7 2 -19 0 -25z m42 7 c3 -17 2 -17 -13
        -3 -19 20 -21 31 -3 26 6 -3 14 -13 16 -23z m32 6 c7 11 9 10 9 -4 0 -22 -25
        -18 -26 4 -1 12 0 12 4 0 2 -8 8 -11 13 -5z m28 6 c-3 -7 -5 -2 -5 12 0 14 2
        19 5 13 2 -7 2 -19 0 -25z m45 -6 c0 -13 -4 -13 -20 -3 -11 7 -20 16 -20 20 0
        3 9 4 20 1 11 -3 20 -11 20 -18z m56 0 c3 -13 1 -17 -9 -12 -7 5 -10 14 -7 20
        9 15 12 13 16 -8z m43 1 c3 -14 2 -18 -5 -13 -6 3 -10 12 -10 20 0 20 9 17 15
        -7z m47 6 c-3 -7 -5 -2 -5 12 0 14 2 19 5 13 2 -7 2 -19 0 -25z m-73 -2 c-7
        -2 -19 -2 -25 0 -7 3 -2 5 12 5 14 0 19 -2 13 -5z m41 0 c-7 -2 -19 -2 -25 0
        -7 3 -2 5 12 5 14 0 19 -2 13 -5z"/>
    </g>
    </svg>

                            <defs>
                                <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                    y2="89.4879456%">
                                    <stop stop-color="#000000" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                                <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%"
                                    y2="100%">
                                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                                </lineargradient>
                            </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                    <g id="Group" transform="translate(400.000000, 178.000000)">
                                        <path class="text-primary" id="Path"
                                            d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                            style="fill:currentColor"></path>
                                        <path id="Path1"
                                            d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                            fill="url(#linearGradient-1)" opacity="0.2"></path>
                                        <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                        </polygon>
                                        <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                            points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                        </polygon>
                                        <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                            points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                    </g>
                                </g>
                            </g>
                        </svg></span>
                    <h2 class="brand-text">MFU CLUB</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main new-title-css" id="main-menu-navigation" data-menu="menu-navigation">
     
     
            
          

            <li class=" navigation-header"><span data-i18n="การรับสมัคร" class="new-title-css">การรับสมัคร</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a
                   
                    href="../../pages/enroll.php"><i data-feather="tablet"></i><span class="menu-title text-truncate"
                        data-i18n="enroll">สมัครเข้าชมรม</span></a>
            </li>

            <li class=" nav-item"><a
                    
                    href=""><i data-feather="tablet"></i><span class="menu-title text-truncate"
                        data-i18n="enroll">ชมรม</span></a>
            </li>
            
      
        </ul>
    </div>
</div>
<!-- BEGIN: Body-->