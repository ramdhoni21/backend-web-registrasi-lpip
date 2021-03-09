
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">

    <!-- Load view side bar -->
    <?php $this->load->view('presenter/partials/sidebar') ?>

        <!-- main content area start -->
        <div class="main-content">

            <!-- header area start -->
            
            <!-- header area end -->

            <!-- Load view side bar -->
            <?php $this->load->view('presenter/partials/navbar') ?>
            
            <div class="main-content-inner">
                <div class="row">
                    
                    

                </div>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>Copyright © 2021 - <a href="http://lpip.ump.ac.id" target="_blank">LPIP UMP</a></p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->

    <!-- Load view script -->
    <?php $this->load->view('presenter/partials/script') ?>
    

