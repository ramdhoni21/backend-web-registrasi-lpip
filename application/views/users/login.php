  
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->

    <!-- login area start -->
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box">
                <?= form_open('users/login') ?>
                    <div class="login-form-head">
                        <h4 class="text-primary">The 6rd IRECOMS 2021</h4>
                        <p>Please fill the Email address and Password</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email">
                            <i class="ti-email"></i>
                            <small id="errorEmail" class="text-danger"><?= form_error('email') ?></small>
                        </div>
                        <div class="form-gp">
                            <label for="pass">Password</label>
                            <input type="password" id="pass" name="pass">
                            <i class="ti-lock"></i>
                            <small id="errorPass" class="text-danger">
                                <?= form_error('pass') ?> 
                                <?= $this->session->flashdata('pass') ?>
                            </small>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Login<i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="<?= base_url('Users/register') ?>">Register</a></p>
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