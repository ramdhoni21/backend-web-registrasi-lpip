			<!-- header area start -->
			<div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left"><?=$page_title?></h4>
                            <!-- <ul class="breadcrumbs pull-left">
                                <li><a href="dashboard-admin.html">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <i class="fa fa-user fa-2x mr-2" alt="avatar"></i>
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('name')?><i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <!-- <a class="dropdown-item" href="#">Settings</a> -->
                                <a class="dropdown-item" href="<?= base_url('users/logout') ?>">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
