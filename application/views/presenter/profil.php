
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

            <!-- Load view navbar -->
            <?php $this->load->view('presenter/partials/navbar') ?>
            
            <div class="main-content-inner">
                <div class="row">
                    
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Name</label>
                                                <input class="form-control" type="text" value="Airi Satou" id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input class="form-control" type="email" value="airi@mail.come" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="afiliasi" class="col-form-label">Afiliasi</label>
                                                <input class="form-control" type="text" value="Universitas 1 Januari" id="afiliasi">
                                            </div>
                                            <div class="form-group">
                                                <label for="telp" class="col-form-label">Telephone</label>
                                                <input class="form-control" type="tel" value="+6212345678567" id="telp">
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4">Save</button>
                                            <a href="" class="btn btn-secondary mt-4 ml-1">Cancel</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Textual inputs end -->
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
    <?php $this->load->view('presenter/partials/script') ?>
    

