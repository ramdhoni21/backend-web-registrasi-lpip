
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

    <!-- Load view side bar -->
    <?php $this->load->view('admin/partials/sidebar') ?>

        <!-- main content area start -->
        <div class="main-content">

            <!-- header area start -->
            
            <!-- header area end -->

            <!-- Load view side bar -->
            <?php $this->load->view('admin/partials/navbar') ?>
            
            <div class="main-content-inner">
                <div class="row">
                    
                    <!-- Dark table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">All Partisipant</h4>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Register</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if ($data_partisipant) :
                                                foreach ($data_partisipant as $data) : ?>
                                                    <tr>
                                                        <td><?= $data['name'] ?></td>
                                                        <td><?= $data['email'] ?></td>
                                                        <td><?= $data['date'] ?></td>
                                                        <td>
                                                            <?php if ($data['validasi'] == '0') : ?>
                                                                <span class="badge badge-pill badge-secondary">Unvalidasi</span>
                                                            <?php elseif ($data['validasi'] == '1') : ?>
                                                                <span class="badge badge-pill badge-success">Validasi</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td class="style: text-left">
                                                            <a href="<?= base_url('admin/partisipant/'.$data['id']) ?>"><i class="ti-view-list-alt mr-1"></i>View</a> |
                                                            <?php if ($data['validasi'] == '0') : ?>
                                                                <a href="<?= base_url('admin/validasi/'.$data['id']) ?>"><i class="ti-check-box mr-1"></i>Validasi</a>
                                                            <?php elseif ($data['validasi'] == '1') : ?>
                                                                <a href="<?= base_url('admin/unvalidasi/'.$data['id']) ?>"><i class="ti-na mr-1"></i>Unvalidasi</a>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                            <?php endforeach;
                                            endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dark table end -->

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
    <?php $this->load->view('admin/partials/script') ?>
    

