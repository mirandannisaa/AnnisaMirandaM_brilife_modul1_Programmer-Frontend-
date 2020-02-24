<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form Entry Data 
							<small>Pengguna Alat Kontrasepsi</small>
						</h2>
					</div>
					<ul class="nav navbar-right panel_toolbox">
						<a href="<?php echo base_url('pengguna/create/') ?>" class="btn btn-primary float-right">
							<i class="fa fa-plus-circle"></i> Tambah Data Pengguna
						</a>
						<a href="<?php echo base_url('report') ?>" class="btn btn-primary float-right">
							<i class="fa fa-bar-chart"></i> Report Data
						</a>
					</ul>
					<div class="clearfix"></div>
				</div>
				<?php echo form_open_multipart('pengguna/create'); ?>
				<div class="x_content">
					<br />
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_provinsi">Provinsi 
							<span class="required"></span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select id="id_provinsi" name="id_provinsi" class="form-control">
								<?php foreach($provinsi_list as $key){ ?>
								<option value="<?php echo $key->id_provinsi?>">
									<?php echo $key->nama_provinsi ?>
								</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_kontrasepsi">Alat Kontrasepsi 
							<span class="required"></span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select id="id_kontrasepsi" name="id_kontrasepsi" class="form-control">
								<?php foreach($kontrasepsi_list as $key){ ?>
								<option value="
									<?php echo $key->id_kontrasepsi?>">
									<?php echo $key->nama_kontrasepsi ?>
								</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="item form-group">
						<label for="jumlah_pemakai" class="col-form-label col-md-3 col-sm-3 label-align">Jumlah Pemakai 
							<span class="required"></span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input id="jumlah_pemakai" class="form-control" type="text" name="jumlah_pemakai">
							</div>
						</div>
						<div class="ln_solid"></div>
						<div class="item form-group">
							<div class="col-md-6 col-sm-6 offset-md-3">
								<button type="submit" class="btn btn-success">Submit</button>
								<button class="btn btn-primary" type="button">Cancel</button>
							</div>
						</div>	
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>