<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
    	<?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
					<h1 class="mt-4">Edit Pegawai</h1>
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>             
                    <?php if ($this->session->flashdata('success')): ?>
				    <div class="alert alert-success" role="alert">
					    <?php echo $this->session->flashdata('success'); ?>
				    </div>
				    <?php endif; ?>
				    <div class="card mb-3">
					    <div class="card-header">
						    <a href="<?php echo site_url('pegawai/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					    </div>
					    <div class="card-body">
						<form action="<?php base_url('pegawai/edit') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $pegawai->id_pegawai?>" />
							<div class="form-group">
								<label for="nama">Nama Pegawai*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama" placeholder="Nama Pegawai" value="<?php echo $pegawai->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="tgl_lahir">Tanggal Lahir*</label>
								<input class="form-control <?php echo form_error('tgl_lahir') ? 'is-invalid':'' ?>"
								 type="date" name="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $pegawai->Tgl_Lahir ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('tgl_lahir') ?>
								</div>
							</div>
                            <div class="form-group">
								<label for="telp">Telepon*</label>
								<input class="form-control <?php echo form_error('telp') ? 'is-invalid':'' ?>"
								 type="text" name="telp" placeholder="Telepon" value="<?php echo $pegawai->telp ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('telp') ?>
								</div>
							</div>

                            <div class="form-group">
								<label for="jenis_kelamin">Jenis Kelamin*</label>
								<input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?php echo $pegawai->Jenis_Kelamin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('jenis_kelamin') ?>
								</div>
							</div>
                            
							<div class="form-group">
								    <label for="agama">Agama*</label>
                                        <select class="form-control" name="agama">    				
                          			    <?php foreach ($agama as $aga) { ?>
                    				    <option value="<?= $aga->id_agama?>"  ><?= $aga->agama?> </option>
              						    <?php } ?>
                  				    </select>
								    
							    </div>
                            <div class="form-group">
								    <label for="bagian">Bagian*</label>
								    <select class="form-control" name="bagian">    				
                          			    <?php foreach ($bagian as $bag) { ?>
                    				    <option value="<?= $bag->id_bagian?>"  ><?= $bag->bagian?> </option>
              						    <?php } ?>
                  				    </select>
							    </div>



							    <input class="btn btn-success" type="submit" name="btn" value="Save" />
						    </form>
					    </div>
                    </div>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>		
		<?php $this->load->view("admin/_partials/jq.php")?>
    </body>
</html>
