
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

            <!-- header area start -->
            
            <!-- header area end -->

            <!-- Load view side bar -->
            <?php $this->load->view('participant/partials/navbar') ?>
            
            <div class="main-content-inner">
                <div class="row">
                    
                    <div class="col-lg-6 col-ml-12">
                        <div class="row">
                            <!-- Textual inputs start -->
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <form>
                                        <?php foreach($data_user as $data) : ?>
                                            <div class="form-group">
                                                <label for="name" class="col-form-label">Name</label>
                                                <input class="form-control" type="text" value="<?= $data['name']?>" id="name" disabled>
                                                <small id="errorName" class="text-danger"><?= form_error('name') ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input class="form-control" type="email" value="<?= $data['email']?>" id="email" disabled>
                                                <small id="errorEmail" class="text-danger"><?= form_error('email') ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="affiliation" class="col-form-label">Affiliation</label>
                                                <input class="form-control" type="text" value="-" id="affiliation">
                                                <small id="errorAffiliation" class="text-danger"><?= form_error('affiliation') ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="telp" class="col-form-label">Phone</label>
                                                <input class="form-control" type="tel" value="-" id="telp">
                                                <small id="errorTelp" class="text-danger"><?= form_error('telp') ?></small>
                                            </div>
                                            <button type="submit" class="btn btn-primary mt-4">Save</button>
                                            <a href="" class="btn btn-secondary mt-4 ml-1">Cancel</a>
                                        <?php endforeach; ?>
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
    <?php $this->load->view('participant/partials/script') ?>
    

