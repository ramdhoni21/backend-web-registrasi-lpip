  
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
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="name">Full Name</label>
                            <input type="text" id="name" name="name">
                            <i class="ti-user"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="exampleInputEmail1">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword2">Confirm Password</label>
                            <input type="password" id="exampleInputPassword2">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-group text-center">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input checked type="radio" id="category1" name="category" class="custom-control-input">
                                <label class="custom-control-label" for="category1">Participant</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="category2" name="category" class="custom-control-input">
                                <label class="custom-control-label" for="category2">Presenter</label>
                            </div>
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