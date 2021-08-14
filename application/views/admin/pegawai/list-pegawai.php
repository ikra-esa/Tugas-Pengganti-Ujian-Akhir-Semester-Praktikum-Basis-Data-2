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
                    <h1 class="mt-4">Data Pegawai</h1>
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
                    <a href="<?php echo site_url('pegawai/add') ?>" class="btn btn-primary mb-2">Tambah Pegawai</a>
                        <div class="row">
                       <div class="col-lg-12">
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Telepon</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Agama</th>
                                                <th>Bagian</th>
                                                <th>Gaji</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php foreach($pegawai as $value) :?>
                                                <tr>
                                                    <td><?= $value->nama; ?></td>
                                                    <td><?= $value->Tgl_Lahir; ?></td>
                                                    <td><?= $value->telp ?></td>
                                                    <td><?= $value->Jenis_Kelamin; ?></td>
                                                    <td><?= $value->agama; ?></td>
                                                    <td><?= $value->bagian ?></td>
                                                    <td><?= $value->gaji; ?></td>
                                                    <td width="250"> 
                                                        <a href="<?php echo site_url ('pegawai/edit/'.$value->id_pegawai) ?>"
                                                         class="btn btn-small"><i class="fas fa-edit"></i> </a>
                                                        <a onclick="deleteConfirm('<?php echo site_url('pegawai/delete/'.$value->id_pegawai) ?>')"
                                                         href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> </a>              
                                                    </td>
                                                </tr>
                                              <?php endforeach;?>
                                        </tbody>
                                    </table>
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
        <script>
            $(document).ready( function () 
            {
                $('#dataTable').DataTable();
            } );
            function deleteConfirm(url)
            {
                $('#btn-delete').attr('href', url);
                $('#deleteModal').modal();
            }
        </script>
    </body>
</html>
