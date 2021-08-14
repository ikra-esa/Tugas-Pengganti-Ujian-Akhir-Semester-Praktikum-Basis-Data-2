<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $this->load->view("admin/_partials/head.php") ?>
    </head>
    <body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <!-- <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"> -->
                	 <!-- $this->load->view("admin/_partials/sidebar.php") ?>                          -->
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
					<h1 class="mt-4">Pegawai</h1>
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>             
                    <?php if ($this->session->flashdata('success')): ?>
				    <div class="alert alert-success" role="alert">
					    <?php echo $this->session->flashdata('success'); ?>
				    </div>
				    <?php endif; ?>
				    <div class="card mb-3">
					    <div class="card-header">
						    <a href="<?php echo site_url('pegawai') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					    </div>
					    <div class="card-body">
						    <form action="<?php echo site_url('pegawai/add') ?>" method="post" enctype="multipart/form-data" >
							    <div class="form-group">
								    <label for="nama">Nama Pegawai</label>
								    <input class="form-control" type="text" name="nama"   />
							    </div>
                                <div class="form-group">
								    <label for="tgl_lahir">Tanggal_Lahir</label>
								    <input class="form-control" type="date" name="tgl_lahir" />
							    </div>
                                <div class="form-group">
								    <label for="telp">Telepon</label>
								    <input class="form-control" type="text" name="telp"  />
							    </div>
                                <div class="form-group">
								    <label for="jenis_kelamin">Jenis Kelamin</label>
								    <input class="form-control" type="text" name="jenis_kelamin" />
							    </div>
                                <div class="form-group">
								    <label for="agama">Agama</label>
                                        <select class="form-control" name="agama">    				
                          			    <?php foreach ($agama as $aga) { ?>
                    				    <option value="<?= $aga->id_agama?>"  ><?= $aga->agama?> </option>
              						    <?php } ?>
                  				    </select>
								    
							    </div>
                                <div class="form-group">
								    <label for="jenjang">Jenjang</label>
								    <input class="form-control" type="text" name="jenjang"  />
							    </div>
                                <div class="form-group">
								    <label for="nama_jenjang">Name Jenjang</label>
								    <input class="form-control" type="text" name="nama_jenjang"  />
							    </div>
                                <div class="form-group">
								    <label for="tahun">Tahun Lulus</label>
								    <input class="form-control" type="text" name="tahun"  />
							    </div>
                                <div class="form-group">
								    <label for="bagian">Bagian</label>
								    <select class="form-control" name="bagian">    				
                          			    <?php foreach ($bagian as $bag) { ?>
                    				    <option value="<?= $bag->id_bagian?>"  ><?= $bag->bagian?> </option>
              						    <?php } ?>
                  				    </select>
							    </div>
                                
								<!-- <div class="form-group">
                          			<label for="idPenjualan" class="active">Product*</label>
                          			<select class="form-control" name="product" id="product">
                            			<option value="" disabled selected>---Pilih Product---</option>
                          				?php foreach ($product as $item) { ?>
                            			<option value="  < ?= $item->product_id?>" data-price="< ?= $item->price?>">< ?= $item->name?> </option>
                          				?php } ?>
                          			</select>
                    			</div>
							    <div class="form-group">
								    <label for="price">Jumlah*</label>
								    <input class="form-control ?php echo form_error('price') ? 'is-invalid':'' ?>"
								    name="jumlah" id="jml" min="0" placeholder="Jumlah" />
								    <div class="invalid-feedback">
									    ?php echo form_error('price') ?>
								    </div>
							    </div> -->
							    
							    <input class="btn btn-success" type="submit" name="btn" value="Save" />
						    </form>
					    </div>
                    </div>
                </main>
                <?php $this->load->view("admin/_partials/footer.php") ?>
            </div>
        </div>
		<?php $this->load->view("admin/_partials/jq.php")?>				
		<script type="text/javascript">
			let harga = 0;
			$("#product").change(function(){
				let elm = $(this).find(':selected');
				harga = elm.data('price');
			})

			$("#jml").on('keyup',function(){
				let jml = $(this).val();
				$("#total").val(jml*harga);
			})
		</script>
    </body>
</html>