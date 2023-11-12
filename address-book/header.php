<?php include('Admin/conn.php');
session_start();
// total itep in cart
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ADDRESS | BOOK</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <!-- DataTables  -->
    <link rel="stylesheet" href="Admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="Admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="Admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="Admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">
    <style>
        img {
  
  object-fit: cover !important;
}
        .btn .badge {
    color:black ;
    font-size:14px ;
}
        body {
            font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        a {
            color: black;
            font-size: 20px;
            font-weight: 500;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Lato', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-weight: 700;
        }

        header.masthead {
            position: relative;
            background-color: #343a40;
            background: url("../img/bg-masthead.jpg") no-repeat center center;
            background-size: cover;
            padding-top: 8rem;
            padding-bottom: 8rem;
        }

        header.masthead .overlay {
            position: absolute;
            background-color: #212529;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0.3;
        }

        .header-bg-dark {
            background-color: #273E4A !important;
        }

        .showcase .container {
            min-height: 350px;
            background-color: #F9F9F9;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .call-to-action {
            position: relative;
            background-color: #343a40;
            background: url("../img/bg-masthead.jpg") no-repeat center center;
            background-size: cover;
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .call-to-action .overlay {
            position: absolute;
            background-color: #212529;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0.3;
        }

        .padall {
            padding: 3px;
        }

        footer.footer {
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .footer-bg-dark {
            background-color: #263E4A !important;
        }

        .list-inline {
            list-style-type: none;
        }

        .list-inline-item a {
            color: #FFFFFF;
        }

        padding-bottom: {
            1rem;
        }



        #event-calendar table {
            width: 100%;
        }

        #event-calendar table tr th {
            border: 1px solid #ddd;
            width: 80px;
            height: 30px;
            text-align: center;
            color: gray;
            font-size: 14px;
            font-weight: 400;
        }

        #event-calendar table tr td {
            border: 1px solid #ddd;
            width: 80px;
            text-align: center;
        }

        #event-calendar .calendar tr td:last-child>a {
            color: #C4C4C4;
        }

        #event-calendar .calendar td>a {
            position: relative;
            z-index: 2;
            font-size: 20px;
            font-weight: 300;
        }

        #event-calendar .calendar td div.highlight {
            background-color: #EEEEEE;
            color: red;
            width: 100%;
            left: 0;
            right: 1px;
            position: absolute;
            top: 0;
            bottom: 1px;
            z-index: 0;
        }

        #event-calendar .calendar td {
            position: relative;
        }

        #event-calendar table tr td {
            height: 90px;
        }
        .text-p {
    color: #000 !important;
}
    </style>

</head>

<body class="animsition">
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>






    <!-- Header -->
    <header>
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <!-- Topbar -->

            <div class="wrap-menu-desktop">
                <nav class="limiter-menu-desktop container">

                    <!-- Logo desktop -->
                    <a href="#" class="logo">
                        <img src="Admin/img/nazia.png"  width="80px" height="80px" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li class="active-menu">
                                <a href="index.php">Home</a>

                            </li>

                            <li>
                                <a href="product.php">Shop</a>
                            </li>





                            <li>
                                <a href="about.php">About</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">
                        <!--	search icon -->
                        <form method="post" class="d-flex form-inline my-2 my-lg-0">
                            <input name="filter_value" class="form-control mr-sm-2 col-8" type="search"
                                placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary my-2 my-sm-0 col-3" name="filter_btn"
                                type="submit">Search</button>
                        </form>
                        <div class="col-lg-3 col-6 text-right">
                            <!-- <div  class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart"> -->
                            <a href="shoping-cart.php" class="btn border " style="color:black !important;">
                                <i class="fas fa-shopping-cart text-p"></i>
                                <span class="badge">

                                    <?php
                                    include 'Connection.php';

                                    if (isset($_SESSION['user_id'])) {

                                        $user_id_nav = $_SESSION['user_id'];

                                        $select_cart_rows = mysqli_query($con, "SELECT * FROM `cart` WHERE user_id = '$user_id_nav' ");

                                        $cart_rows_nav = mysqli_num_rows($select_cart_rows);

                                        echo $cart_rows_nav;
                                    } else {


                                        echo "0";

                                    }
                                    ?>
                                </span>
                            </a>
                        </div>





                        <?php if (isset($_SESSION['user_name'])) { ?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa-solid fa-user mr-2"></i>
                                    <?php echo $_SESSION['user_name']; ?>
                                </a>
                                <div class="dropdown-menu mt-0">
                                    <a href="logout.php" class="dropdown-item">Logout</a>
                                    <a href="user_panel.php" class="dropdown-item">user panel</a>
                                </div>
                            </div>
                        <?php } else { ?>
                            <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#myModal">
                                <i class="fa-solid fa-user mr-2"></i>
                                Login
                            </a>
                        <?php } ?>


                    </div>
                </nav>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <!--	search icon for mobile -->

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart"
                    data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti"
                    data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>


        <!-- Menu Mobile -->
        <div class="menu-mobile">


            <ul class="main-menu-m">
                <li>
                    <a href="index.php">Home</a>

                </li>

                <li>
                    <a href="product.php">Shop</a>
                </li>



                <li>
                    <a href="about.php">About</a>
                </li>

                <li>
                    <a href="contact.php">Contact</a>
                </li>
                <li >
                    <form class="form-inline m-l-18 my-2 my-lg-0" method="post">
                        <input class="form-control " name="filter_value1" type="search" placeholder="Search"
                            aria-label="Search">
                        <input class="  btn-success m-2 p-2 border-rounded " name="filter_btn1"
                            type="submit" value="search">
                    </form>
                </li>
                <li class="d-flex">
                    <?php if (isset($_SESSION['user_name'])) { ?>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <i class="fa-solid fa-user mr-2"></i>
                                <?php echo $_SESSION['user_name']; ?>
                            </a>
                            <div class="dropdown-menu mt-0">
                                <a href="logout.php" class="dropdown-item">Logout</a>
                                <a href="user_panel.php" class="dropdown-item">user panel</a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#myModal">
                            <i class="fa-solid fa-user mr-2"></i>
                            Login
                        </a>
                    <?php } ?>
                </li>
            </ul>

        </div>

    </header>


    <!-- Cart -->
    <div class="wrap-header-cart js-panel-cart">

        <div class="s-full js-hide-cart"></div>

        <div class="header-cart flex-col-l p-l-65 p-r-25">
            <div class="header-cart-title flex-w flex-sb-m p-b-8">

                <span class="mtext-103 cl2">
                    Your Cart
                </span>

                <div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
                    <i class="zmdi zmdi-close"></i>
                </div>
            </div>

            <div class="header-cart-content flex-w js-pscroll">
                <ul class="header-cart-wrapitem w-full">
                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-01.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                White Shirt Pleat
                            </a>

                            <span class="header-cart-item-info">
                                1 x $19.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-02.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Converse All Star
                            </a>

                            <span class="header-cart-item-info">
                                1 x $39.00
                            </span>
                        </div>
                    </li>

                    <li class="header-cart-item flex-w flex-t m-b-12">
                        <div class="header-cart-item-img">
                            <img src="images/item-cart-03.jpg" alt="IMG">
                        </div>

                        <div class="header-cart-item-txt p-t-8">
                            <a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                Nixon Porter Leather
                            </a>

                            <span class="header-cart-item-info">
                                1 x $17.00
                            </span>
                        </div>
                    </li>
                </ul>

                <div class="w-full">
                    <div class="header-cart-total w-full p-tb-40">
                        Total: $75.00
                    </div>

                    <div class="header-cart-buttons flex-w w-full">
                        <a href="shoping-cart.php"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
                            View Cart
                        </a>

                        <a href="shoping-cart.php"
                            class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--login Modal -->


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-body">

                        <?php
                        include 'Connection.php';
                        ?>

                        <!DOCTYPE html>
                        <html lang="en">

                        <head>


                            <title>SignUP And Login Panel</title>

                            <!-- css  -->
                            <style>
                                @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

                                .wrapper {
                                    overflow: hidden;
                                    max-width: 390px;
                                    background: #fff;
                                    padding: 30px;
                                    border-radius: 15px;
                                    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
                                }

                                .wrapper .title-text {
                                    display: flex;
                                    width: 200%;
                                }

                                .wrapper .title {
                                    width: 50%;
                                    font-size: 35px;
                                    font-weight: 600;
                                    text-align: center;
                                    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                                }

                                .wrapper .slide-controls {
                                    position: relative;
                                    display: flex;
                                    height: 50px;
                                    width: 100%;
                                    overflow: hidden;
                                    margin: 30px 0 10px 0;
                                    justify-content: space-between;
                                    border: 1px solid lightgrey;
                                    border-radius: 15px;
                                }

                                .slide-controls .slide {
                                    height: 100%;
                                    width: 100%;
                                    color: #fff;
                                    font-size: 18px;
                                    font-weight: 500;
                                    text-align: center;
                                    line-height: 48px;
                                    cursor: pointer;
                                    z-index: 1;
                                    transition: all 0.6s ease;
                                }

                                .slide-controls label.signup {
                                    color: #000;
                                }

                                .slide-controls .slider-tab {
                                    position: absolute;
                                    height: 100%;
                                    width: 50%;
                                    left: 0;
                                    z-index: 0;
                                    border-radius: 15px;
                                    background: -webkit-linear-gradient(left, #003366, #004080, #0059b3, #0073e6);
                                    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                                }

                                input[type="radio"] {
                                    display: none;
                                }

                                #signup:checked~.slider-tab {
                                    left: 50%;
                                }

                                #signup:checked~label.signup {
                                    color: #fff;
                                    cursor: default;
                                    user-select: none;
                                }

                                #signup:checked~label.login {
                                    color: #000;
                                }

                                #login:checked~label.signup {
                                    color: #000;
                                }

                                #login:checked~label.login {
                                    cursor: default;
                                    user-select: none;
                                }

                                .wrapper .form-container {
                                    width: 100%;
                                    overflow: hidden;
                                }

                                .form-container .form-inner {
                                    display: flex;
                                    width: 200%;
                                }

                                .form-container .form-inner form {
                                    width: 50%;
                                    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                                }

                                .form-inner form .field {
                                    position: relative;
                                    height: 50px;
                                    width: 100%;
                                    margin-top: 20px;
                                }

                                .field i {
                                    height: 100%;
                                    position: absolute;
                                    top: 0;
                                    right: 10px;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    cursor: pointer;
                                }

                                .field #open {
                                    display: none;
                                }

                                .form-inner form .field input {
                                    height: 100%;
                                    width: 100%;
                                    outline: none;
                                    padding-left: 15px;
                                    border-radius: 15px;
                                    border: 1px solid lightgrey;
                                    border-bottom-width: 2px;
                                    font-size: 17px;
                                    transition: all 0.3s ease;
                                }

                                .form-inner form .field input:focus {
                                    border-color: #1a75ff;
                                    /* box-shadow: inset 0 0 3px #fb6aae; */
                                }

                                .form-inner form .field input::placeholder {
                                    color: #999;
                                    transition: all 0.3s ease;
                                }

                                form .field input:focus::placeholder {
                                    color: #1a75ff;
                                }

                                .form-inner form .pass-link {
                                    margin-top: 5px;
                                }

                                .form-inner form .signup-link {
                                    text-align: center;
                                    margin-top: 30px;
                                }

                                .form-inner form .pass-link a,
                                .form-inner form .signup-link a {
                                    color: #1a75ff;
                                    text-decoration: none;
                                }

                                .form-inner form .pass-link a:hover,
                                .form-inner form .signup-link a:hover {
                                    text-decoration: underline;
                                }

                                form .btn {
                                    height: 50px;
                                    width: 100%;
                                    border-radius: 15px;
                                    position: relative;
                                    overflow: hidden;
                                }

                                form .btn .btn-layer {
                                    height: 100%;
                                    width: 300%;
                                    position: absolute;
                                    left: -100%;
                                    background: -webkit-linear-gradient(right, #003366, #004080, #0059b3, #0073e6);
                                    border-radius: 15px;
                                    transition: all 0.4s ease;
                                    ;
                                }

                                form .btn:hover .btn-layer {
                                    left: 0;
                                }

                                form .btn input[type="submit"] {
                                    height: 100%;
                                    width: 100%;
                                    z-index: 1;
                                    position: relative;
                                    background: none;
                                    border: none;
                                    color: #fff;
                                    padding-left: 0;
                                    border-radius: 15px;
                                    font-size: 20px;
                                    font-weight: 500;
                                    cursor: pointer;
                                }
                            </style>

                        </head>

                        <body>

                            <div class="wrapper">
                                <div class="title-text">
                                    <div class="title login">Login Form</div>
                                    <div class="title signup">Signup Form</div>
                                </div>
                                <div class="form-container">
                                    <div class="slide-controls">
                                        <input type="radio" name="slide" id="login" checked>
                                        <input type="radio" name="slide" id="signup">
                                        <label for="login" class="slide login">Login</label>
                                        <label for="signup" class="slide signup">Signup</label>
                                        <div class="slider-tab"></div>
                                    </div>
                                    <div class="form-inner">

                                        <form action="" class="login" method="post">
                                            <pre></pre>
                                            <div class="field">
                                                <input type="text" name="email_login" placeholder="Email Address"
                                                    required>
                                            </div>
                                            <div class="field">
                                                <div class="eye" onclick="pass()">
                                                    <i class="fa-solid fa-eye-slash" id="close"></i>
                                                    <i class="fa-solid fa-eye" id="open"></i>
                                                </div>
                                                <input type="password" name="pass_login" id="input"
                                                    placeholder="Password" required>
                                            </div>
                                            <div class="pass-link"><a href="user_forgot_password.php">Forgot
                                                    password?</a></div>
                                            <div class="field btn">

                                            </div>
                                            <div class="field btn">
                                                <div class="btn-layer"></div>
                                                <input type="submit" value="Login" name="btnLogin">
                                            </div>
                                            <div class="signup-link">Create an account <a href="">Signup now</a></div>
                                        </form>

                                        <?php
                                        // Check if the login form is submitted
                                        if (isset($_POST['btnLogin'])) {

                                            $email_login = $_POST['email_login'];
                                            $pass_login = $_POST['pass_login'];

                                            // u_status = 'Active' = if user is not verified via email, otherwise the user cannot login
                                            $email_select_login = mysqli_query($con, "SELECT * FROM `users` WHERE email = '$email_login'");

                                            $email_rows = mysqli_num_rows($email_select_login);

                                            if ($email_rows) {
                                                $data_fetch_login = mysqli_fetch_assoc($email_select_login);

                                                $name_db = $data_fetch_login['name'];

                                                $_SESSION['user_name'] = $name_db;

                                                $email_db = $data_fetch_login['email'];
                                                $pass_db = $data_fetch_login['password'];
                                                $role_db = $data_fetch_login['role_as']; // Assuming role is stored in the 'role' column
                                        
                                                if ($email_db == $email_login && $pass_db == $pass_login) {
                                                    // Successfully logged in
                                        
                                                    $_SESSION['user_id'] = $data_fetch_login['id'];
                                                    $_SESSION['user_name'] = $data_fetch_login['name'];
                                                    $email_fetch = $data_fetch_login['email'];
                                                    $username_fetch = $data_fetch_login['name'];
                                                    $role_fetch = $data_fetch_login['role_as'];

                                                    $_SESSION['loginRole'] = $role_fetch;
                                                    $_SESSION['loginUserName'] = $username_fetch;

                                                    if ($role_db == '1') {
                                                        // Redirect to admin or employee dashboard
                                                        $usr_id = $data_fetch_login['id'];
                                                        $usr_name = $data_fetch_login['name'];
                                                        $usr_email = $email_db;
                                                        $usr_phone = $data_fetch_login['phoneNu'];
                                                        $role_as = $role_db;

                                                        $_SESSION['auth'] = "$role_as";
                                                        $_SESSION['auth-user'] = [
                                                            'usr_id' => $usr_id,
                                                            'usr_name' => $usr_name,
                                                            'usr_email' => $usr_email,
                                                            'usr_phone' => $usr_phone
                                                        ];
                                                        ?>
                                                        <script>
                                                            alert("Login Done Welcome")

                                                            location.replace("Admin/index.php");
                                                        </script>
                                                        <?php
                                                    } else if ($role_db == '2') {


                                                        ?>
                                                            <script>
                                                                alert("Login Done Welcome User");
                                                                location.replace("index.php");
                                                            </script>
                                                        <?php
                                                    } else {
                                                        // Redirect to user dashboard
                                                        ?>
                                                            <script>
                                                                alert("Login Done Welcome")

                                                                location.replace("index.php");
                                                            </script>
                                                        <?php
                                                    }

                                                    exit();
                                                } else {
                                                    ?>

                                                    <script>
                                                        alert("Password incorrect")
                                                    </script>

                                                    <?php
                                                }
                                            } else {
                                                ?>

                                                <script>
                                                    alert("Email incorrect")
                                                </script>

                                                <?php
                                            }
                                        }
                                        ?>

                                        <form action="" class="signup" method="post">
                                            <div class="field">
                                                <input type="text" pattern="[A-Za-z\s]+" placeholder="Name" name="name"
                                                    required>
                                            </div>
                                            <div class="field">
                                                <input type="email" placeholder="Email Address" name="email" required>
                                            </div>
                                            <div class="field">
                                                <input type="password" placeholder="Password" name="pass" required>
                                            </div>
                                            <div class="field">
                                                <input type="password" placeholder="Confirm password" name="cPass"
                                                    required>
                                            </div>
                                            <div class="field">
                                                <input type="text" pattern="[0-9]{11}" placeholder="Mobile Number"
                                                    name="mobile">
                                            </div>
                                            <div class="field btn">
                                                <div class="btn-layer"></div>
                                                <input type="submit" value="Signup" name="btnSubmit">
                                            </div>
                                            <div class="signup-link">Already have an account? <a href="">Login</a></div>
                                        </form>

                                        <!-- php code registration form insert -->

                                        <?php
                                        include 'Connection.php';

                                        if (isset($_POST['btnSubmit'])) {

                                            $name = $_POST['name'];
                                            $email = $_POST['email'];
                                            $pass = $_POST['pass'];
                                            $cPass = $_POST['cPass'];
                                            $mobile = $_POST['mobile'];

                                            $_SESSION['otp_email'] = $email;

                                            $randomBytes = random_bytes(4); // Generate 4 random bytes
                                            $randomNumber = hexdec(bin2hex($randomBytes)); // Convert bytes to a decimal number
                                            $min = 100000; // Minimum value (inclusive)
                                            $max = 999999; // Maximum value (inclusive)
                                            $token = $min + ($randomNumber % ($max - $min + 1)); // Convert to the desired range
                                        
                                            $otp = rand(10000, 99999);

                                            $select_email = mysqli_query($con, " SELECT * FROM `users` WHERE email = '$email' ");

                                            $email_rows = mysqli_num_rows($select_email);

                                            if ($email_rows > 0) {
                                                ?>

                                                <script>
                                                    alert("This Email Already Exist")
                                                </script>

                                                <?php
                                            } else {
                                                if ($pass == $cPass) {

                                                    $insert_query = mysqli_query($con, " INSERT INTO `users`( `name`, `email`, `password`, `phoneNu`, `created_at`) VALUES ( '$name','$email','$pass','$mobile',CURRENT_TIMESTAMP()) ");

                                                    if ($insert_query) {
                                                        // mail otp   
                                        
                                                        $subject = "Account Activation OTP";
                                                        $body = "Hello: $name This is Your OTP Code
                                                    $otp ";
                                                        $sender = "OTPcode999@outlook.com";


                                                        if (mail($email, $sender, $body, $subject)) {
                                                        }

                                                        ?>

                                                        <script>
                                                            alert("Account Created & Please Verify Your Account: Check Your Mail ")

                                                            // location.replace('otp.php');
                                                        </script>

                                                        <?php

                                                    }
                                                } else {
                                                    ?>

                                                    <script>
                                                        alert("Password & Confirm Password Not Match")
                                                    </script>

                                                    <?php
                                                }
                                            }
                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>

                        </body>

                        </html>

                        <!-- js  -->
                        <script>
                            // form anchor 

                            const loginText = document.querySelector(".title-text .login");
                            const loginForm = document.querySelector("form.login");
                            const loginBtn = document.querySelector("label.login");
                            const signupBtn = document.querySelector("label.signup");
                            const signupLink = document.querySelector("form .signup-link a");
                            signupBtn.onclick = (() => {
                                loginForm.style.marginLeft = "-50%";
                                loginText.style.marginLeft = "-50%";
                            });
                            loginBtn.onclick = (() => {
                                loginForm.style.marginLeft = "0%";
                                loginText.style.marginLeft = "0%";
                            });
                            signupLink.onclick = (() => {
                                signupBtn.click();
                                return false;
                            });

                            // form eye 

                            function pass() {

                                let openEye = document.getElementById("open");
                                let closeEye = document.getElementById("close");

                                let input = document.getElementById("input");

                                if (input.type == "password") {
                                    input.type = "text";
                                    openEye.style.display = "block";
                                    openEye.style.color = "red";
                                    openEye.style.marginTop = "17px";
                                    closeEye.style.display = "none";
                                } else {
                                    input.type = "password";
                                    openEye.style.display = "none";
                                    closeEye.style.color = "gray";
                                    closeEye.style.marginTop = "17px";
                                    closeEye.style.display = "block";
                                }

                            }
                        </script>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>