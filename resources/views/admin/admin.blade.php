<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style type="text/css">
        .navbar .btn-success{
            margin: 13px 2px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">

<header class="main-header">
    <a href="http://pharmacyv5.bdtask.com/version7/" class="logo"> <!-- Logo -->
        <span class="logo-mini">
            <!--<b>A</b>BD-->
            <img src="http://pharmacyv5.bdtask.com/version7/my-assets/image/logo/e719ba1827801da0eb2ae44587dbe163.png" alt="">
        </span>

        <span class="logo-lg">
            <!--<b>Admin</b>BD-->
            <img src="http://pharmacyv5.bdtask.com/version7/my-assets/image/logo/c5f8d0d1dca1392833ddf5cfbb63f71b.png" alt="">
        </span>
    </a>
    <!-- Header Navbar -->


    <nav class="navbar navbar-static-top text-center">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
            <span class="sr-only">Toggle navigation</span>

            <span class="pe-7s-keypad"></span>
        </a>

        <a href="http://pharmacyv5.bdtask.com/version7/Cinvoice" class="btn btn-success btn-outline" style=""><i class="ti-layout-accordion-list"></i> Invoice</a>

        <a href="http://pharmacyv5.bdtask.com/version7/Cpayment/receipt_transaction" class="btn btn-success btn-outline" style=""><i class="fa fa-money"></i> Receipt</a>

        <a href="http://pharmacyv5.bdtask.com/version7/Cpayment" class="btn btn-success btn-outline" style=""><i class="fa fa-paypal" aria-hidden="true"></i> Payment</a>

        <a href="http://pharmacyv5.bdtask.com/version7/Cpurchase" class="btn btn-success btn-outline" style=""><i class="ti-shopping-cart"></i> Purchase</a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu">
                    <a href="http://pharmacyv5.bdtask.com/version7/Creport/out_of_date" >
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-danger">4</span>
                    </a>
                </li>
                <li class="dropdown notifications-menu">
                    <a href="http://pharmacyv5.bdtask.com/version7/Creport/out_of_stock" >
                        <i class="pe-7s-attention" title="Out Of Stock"></i>
                        <span class="label label-danger">1</span>
                    </a>
                </li>
                <!-- settings -->
                <li class="dropdown dropdown-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="pe-7s-settings"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://pharmacyv5.bdtask.com/version7/Admin_dashboard/edit_profile"><i class="pe-7s-users"></i>User Profile</a></li>
                        <li><a href="http://pharmacyv5.bdtask.com/version7/Admin_dashboard/change_password_form"><i class="pe-7s-settings"></i>Change Password</a></li>
                        <li><a href="http://pharmacyv5.bdtask.com/version7/Admin_dashboard/logout"><i class="pe-7s-key"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>








<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>





