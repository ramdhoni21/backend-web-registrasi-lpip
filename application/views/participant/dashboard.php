
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- page container area start -->
    <div class="page-container">

    <!-- Load view side bar -->
    <?php $this->load->view('participant/partials/sidebar') ?>

        <!-- main content area start -->
        <div class="main-content">

            <!-- Load view navbar -->
            <?php $this->load->view('participant/partials/navbar') ?>
            
            <div class="main-content-inner">
                <div class="row">

				<div class="col-lg-6 col-ml-12">
                        <div class="row">

							<div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
										
										<h2> Hello <?=$this->session->userdata('name')?>, wellcome back.</h2>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                    
                    

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
    <?php $this->load->view('participant/partials/script') ?>
    

