<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Latest Products</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="Admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="Admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="Admin/css/vertical-layout-light/style.css">
    <!-- endinject -->

    <!-- icon -->
    <link rel="icon" href="images/logoS.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <style>
        .floating-btn-div {
            position: fixed;
            bottom: 70px;
            right: 20px;
            z-index: 1000;
        }

        .floating-btn {
            color: white !important;
            background-color: rgb(73, 73, 172);
            color: rgb(0, 0, 0);
            border: none;
            border-radius: 50%;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            font-size: 2rem;
            transition: background-color 0.3s ease;
            animation: 1000ms linear 100ms infinite alternate scrollUpDown1;
        }
    </style>
</head>

<body>
    <div class="container-scroller">



        <!-- partial:partials/_navbar.html -->



        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">


            <!-- logo -->
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html">
                    <h3 class="font-bold">SATHI SHOES</h3>
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">
                    <h5 class="font-bold">S-SHOES</h5>
                </a>
            </div>




            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">




                    <!-- logout -->
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('images/empty.jpg')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </form>
                        </div>
                    </li>




                </ul>



                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>




            </div>
        </nav>



































        <!-- Sidebar -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">


                    <!-- dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>


                    <!-- Banners -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Banners</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/big-banner">Big Banner</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/small-banner">Small Banner</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/contact-banner">ContactUs Banner</a></li>
                            </ul>
                        </div>
                    </li>




                    <!-- Main Category -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Categories</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic11">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/main-category">Main Categories</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin-sub-category">Sub Categories</a></li>
                            </ul>
                        </div>
                    </li>




                    <!-- all Products -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1111" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-grid-2 menu-icon"></i>
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1111">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/all-products">All Products</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin-latest-products">Latest Products</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin-featured-products">Featured Products</a></li>
                            </ul>
                        </div>
                    </li>





                    <!-- Fixed Collection -->
                    <li class="nav-item">
                        <a class="nav-link" href="/fixed-collection">
                            <i class="icon-contract menu-icon"></i>
                            <span class="menu-title">Fixed Collection</span>
                        </a>
                    </li>



                    <!-- Customer Support -->
                    <li class="nav-item">
                        <a class="nav-link" href="/customer-support">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Customer Support</span>
                        </a>
                    </li>







                </ul>
            </nav>








            <!-- MAIN CONTENT PART START==================================================================================================================================== -->
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Latest Product Details</h3>
                                </div>





                                <div class="col-lg-12 grid-margin stretch-card mt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Ratio: 535x535</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Images</th>
                                                            <th>Main Category</th>
                                                            <th>Sub Category</th>
                                                            <th>Version Category</th>
                                                            <th>Product Title</th>
                                                            <th>Product Price</th>
                                                            <th>Description</th>
                                                            <th>Color</th>
                                                            <th>SKU Code</th>
                                                            <th>Product Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td><img src="{{asset('images/empty.jpg')}}" alt=""></td>
                                                            <td style="text-transform: uppercase;">Men</td>
                                                            <td style="text-transform: capitalize;">Formal Shoes</td>
                                                            <td style="text-transform: capitalize;">Latest</td>
                                                            <td style="text-transform: capitalize;">xyz shoe</td>
                                                            <td>₹ 999</td>
                                                            <td>desc</td>
                                                            <td>white, black</td>
                                                            <td>SMT-300TP</td>
                                                            <td><a href="">Link</a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>










                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. <a href="" target="_blank">Sathi Shoes</a> All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Easy-To-Access & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Theme distributed by <a href="https://github.com/artic0909" target="_blank">Saklinmustak</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
            <!-- MAIN CONTENT PART END====================================================================================================================================== -->





        </div>











        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="Admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="Admin/vendors/chart.js/Chart.min.js"></script>
    <script src="Admin/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="Admin/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="Admin/js/off-canvas.js"></script>
    <script src="Admin/js/hoverable-collapse.js"></script>
    <script src="Admin/js/template.js"></script>
    <script src="Admin/js/settings.js"></script>
    <script src="Admin/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="Admin/js/dashboard.js"></script>
    <script src="Admin/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>