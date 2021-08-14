<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <?php $this->load->view("admin/_partials/sidebar.php") ?>                                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Data Pegawai</div>
                                    <h3 class="text-center">
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('pegawai');
                                        echo $this->db->count_all_results();
                                        ?>
                                    </h3>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo site_url ('products') ?> ">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>       
                            </div>
                        </div>                        
                    </div>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
        <?php $this->load->view("admin/_partials/jq.php")?>
        <?php $this->load->view("admin/_partials/modal.php")?>
    </body>
</html>