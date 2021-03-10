  
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box">
                <?= form_open('users/register') ?>
                    <div class="login-form-head">
                        <h4 class="text-primary">Register</h4>
                        <p>Hello there, Register and Join with Us</p>
                    </div>
                    <div class="card-header border-0 bg-white text-center pb-0 pt-4">
                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="alert alert-success">
                                <?= $this->session->flashdata('success') ?>
                            </div>
                        <?php elseif ($this->session->flashdata('failed')) : ?>
                            <div class="alert alert-danger">
                                <?= $this->session->flashdata('failed') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name">
                            <i class="ti-user"></i>
                            <small id="errorName" class="text-danger"><?= form_error('name') ?></small>
                        </div>
                        <div class="form-gp">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email">
                            <i class="ti-email"></i>
                            <small id="errorEmail" class="text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-gp">
                            <label for="pass1">Password</label>
                            <input type="password" id="pass1" name="pass1">
                            <i class="ti-lock"></i>
                            <small id="errorPass1" class="text-danger"><?= form_error('pass1') ?></small>
                        </div>
                        <div class="form-gp">
                            <label for="pass2">Confirm Password</label>
                            <input type="password" id="pass2" name="pass2">
                            <i class="ti-lock"></i>
                            <small id="errorPass2" class="text-danger"><?= form_error('pass2') ?></small>
                        </div>
                        <div class="form-group text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input checked type="radio" id="category1" name="category" value="3" class="custom-control-input">
                                <label class="custom-control-label" for="category1">Participant</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="category2" name="category" value="2" class="custom-control-input">
                                <label class="custom-control-label" for="category2">Presenter</label>
                            </div>
                            <small id="errorCategory" class="text-danger"><?= form_error('category') ?></small>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Register<i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-2">
                            <p class="text-muted">Have an account? <a href="<?= base_url('Users/login') ?>">Login</a></p>
                        </div>
                    </div>
                <?= form_close() ?>
            </div>
            <div>
                <center><p>Copyright © 2021 - <a href="http://lpip.ump.ac.id" target="_blank">LPIP UMP</a></p></center>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- Load view script -->
    <?php $this->load->view('admin/partials/script') ?>