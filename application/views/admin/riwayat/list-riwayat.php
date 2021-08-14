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
                    <h1 class="mt-4">Riwayat Pendidikan</h1>
                        <div class="row">
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
                                                <th>Name</th>
                                                <th>Jenjang</th>
                                                <th>Nama Jenjang</th>
                                                
                                                <th>Tahun Lulus</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ( $riwayat_pendidikan as $riwayat_pendidikan): ?>
                                                <tr>
                                                    <td width="150"><?php echo $riwayat_pendidikan->nama; ?></td>
                                                    <td><?php echo $riwayat_pendidikan->jenjang ?></td>
                                                    <td><?php echo $riwayat_pendidikan->nama_jenjang ?></td>
                                                    <td><?php echo $riwayat_pendidikan->tahun_lulus ?></td>
                                                    <!-- <td>Rp < ?php echo $product->price ?></td> 
                                                    <td><img src="< ?php echo base_url('upload/product/'.$product->image)  ?>" width="64"></td>
                                                    <td class="small">< ?php echo substr($product->description, 0, 120) ?></td>
                                                    <td width="250"> 
                                                        <a href="< ?php echo site_url ('products/edit/'.$product->product_id) ?>"
                                                         class="btn btn-small"><i class="fas fa-edit"></i> </a>
                                                        <a onclick="deleteConfirm('< ?php echo site_url('products/delete/'.$product->product_id) ?>')"
                                                         href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> </a>              
                                                    </td> -->
                                                </tr>
                                            <?php endforeach; ?>                                            
                                        </tbody>
                                    </table>
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
