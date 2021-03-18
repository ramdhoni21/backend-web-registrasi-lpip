        <!-- sidebar menu area start -->
        <div class="sidebar-menu">  
            <div class="sidebar-header">
                <div class="logo">
                    <a href="<?=base_url('/')?>"><img src="<?=base_url('assets/images/icon/logo-sidebar.png')?>" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="<?php if ($this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '') echo 'active'; ?>"><a href="<?= base_url('Admin') ?>"><i class="ti-dashboard"></i> <span>dashboard</span></a></li>
                            <li class="<?php if ($this->uri->segment(2) == 'presenter') echo 'active'; ?>"><a href="<?= base_url('Admin/presenter') ?>"><i class="ti-user"></i> <span>presenter</span></a></li>
                            <li class="<?php if ($this->uri->segment(2) == 'participant') echo 'active'; ?>"><a href="<?= base_url('Admin/participant') ?>"><i class="ti-user"></i> <span>participant</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
