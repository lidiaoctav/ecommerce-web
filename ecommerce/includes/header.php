<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecommerce Site using PHP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/skin-yellow.min.css">
    <!-- Magnify -->
    <link rel="stylesheet" href="magnify/magnify.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Paypal Express -->
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <!-- Google Recaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- Custom CSS -->
    <style type="text/css">
    /* Navbar height */
    .navbar {
        height: 150px; /* Set your desired height */
        line-height: 125px; /* Vertically center content */
        overflow: hidden; /* Ensures that the hover effect doesn't overflow */
    }

    
    .navbar .navbar-brand {
        height: 75%; /* Ensure the brand/logo stretches to full height */
        line-height: inherit; /* Align with navbar height */
        overflow: hidden; /* Ensures the brand logo's hover effect stays contained */
    }

    .navbar .navbar-nav > li > a {
    padding-top: 15px; /* Adjust this value to move the menu items down */
    padding-bottom: 15px; /* Adjust the bottom padding to balance the design */
    line-height: normal; /* Adjust this if needed */
    height: auto; /* Ensure the height adjusts according to padding */
    display: inline-block; /* Ensure the items are inline */
    }



    /* Adjustments for small devices */
    @media (max-width: 768px) {
        .navbar {
            height: auto; /* Allow automatic height on small screens */
            overflow: visible; /* Allow content to be visible on small screens */
        }

        .navbar .navbar-brand,
        .navbar .navbar-nav > li > a {
            line-height: normal; /* Reset line height */
        }
    }

    /* Existing custom styles */
    .word-wrap {
        overflow-wrap: break-word;
    }
    .prod-body {
        height: 300px;
    }

    /* Basic box styling */
    .box {
        position: relative; /* Ensures that the box's position is used for shadow positioning */
        overflow: hidden; /* Prevents the shadow from overflowing the box */
        transition: box-shadow 0.3s ease; /* Smooth transition for box-shadow */
        z-index: 1; /* Makes sure the box is above other elements */
    }

    .box:hover {
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Smaller and subtler shadow effect */
        z-index: 2; /* Ensures the hover effect doesn't cause the box to be hidden */
    }

    .register-box {
        margin-top: 20px;
    }

    #trending {
        list-style: none;
        padding: 10px 5px 10px 15px;
    }
    #trending li {
        padding-left: 1.3em;
    }
    #trending li:before {
        content: "\f046";
        font-family: FontAwesome;
        display: inline-block;
        margin-left: -1.3em;
        width: 1.3em;
    }

    /* Magnify */
    .magnify > .magnify-lens {
        width: 100px;
        height: 100px;
    }

    /* Custom Header Color */
    .main-header {
        background-color: #ffdf00; /* Replace with your desired color */
    }

    /*
     * Page: Login & Register
     * ----------------------
     */
    .login-logo,
    .register-logo {
        font-size: 35px;
        text-align: center;
        margin-bottom: 25px;
        font-weight: 300;
    }

    .login-logo a,
    .register-logo a {
        color: #444;
    }

    .login-page,
    .register-page {
        background: #f0f0f0; /* Change to desired background color for the login/register page */
    }

    .login-box,
    .register-box {
        width: 360px;
        margin: 7% auto;
    }

    @media (max-width: 768px) { /* Replace @screen-sm with 768px for standard media query */
        .login-box,
        .register-box {
            width: 90%;
            margin-top: 20px;
        }
    }

    .login-box-body,
    .register-box-body {
        background: #ffebcd; /* Change to desired background color for the login/register box */
        padding: 20px;
        border-top: 0;
        color: #666;
    }

    .login-box-body .form-control-feedback,
    .register-box-body .form-control-feedback {
        color: #777;
    }

    .login-box-msg,
    .register-box-msg {
        margin: 0;
        text-align: center;
        padding: 0 20px 20px 20px;
    }

    .social-auth-links {
        margin: 10px 0;
    }
    </style>

</head>
<body class="hold-transition skin-blue layout-top-nav">
    <!-- Your HTML content here -->
</body>
</html>
