        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        2020 © Lunoz.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by Myra
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        </div>
        <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="<?= base_url('public/')?>js/jquery.min.js"></script>
        <script src="<?= base_url('public/')?>js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url('public/')?>js/metismenu.min.js"></script>
        <script src="<?= base_url('public/')?>js/waves.js"></script>
        <script src="<?= base_url('public/')?>js/simplebar.min.js"></script>

        <!-- Morris Js-->
        <script src="<?= base_url('public/')?>plugins/morris-js/morris.min.js"></script>
        <!-- Raphael Js-->
        <script src="<?= base_url('public/')?>plugins/raphael/raphael.min.js"></script>

        <!-- Morris Custom Js-->
        <script src="<?= base_url('public/')?>pages/dashboard-demo.js"></script>

        <!-- App js -->
        <script src="<?= base_url('public/')?>js/theme.js"></script>

        <?php if ($this->uri->segment(1)) { ?>
        <!-- third party js -->
        <script src="<?= base_url('public/')?>plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/dataTables.bootstrap4.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/buttons.flash.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/buttons.print.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/dataTables.select.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/pdfmake.min.js"></script>
        <script src="<?= base_url('public/')?>plugins/datatables/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="<?= base_url('public/')?>pages/datatables-demo.js"></script>
        <?php } ?>

        </body>

        </html>