        
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="clearfix"></div>
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="x_panel">
					<div class="x_title">
						<h2>Data 
							<small>Pengguna Alat Kontrasepsi</small>
						</h2>
						<ul class="nav navbar-right panel_toolbox">
							<a href="
								<?php echo base_url('pengguna/create/') ?>" class="btn btn-primary float-right">
								<i class="fa fa-plus-circle"></i> Tambah Data Pengguna
							</a>
							<a href="
								<?php echo base_url('pengguna/report') ?>" class="btn btn-primary float-right">
								<i class="fa fa-bar-chart"></i> Report Data
							</a>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="row">
							<div class="col-sm-12">
								<div class="card-box table-responsive">
									<table id="datatable-fixed-header" class="table table-striped table-bordered" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Provinsi</th>
												<th>Alat Kontrasepsi</th>
												<th>Jumlah Pemakai</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($pengguna_list as $key) { ?>
											<tr>
												<td>
													<?php echo $key->id_list ?>
												</td>
												<td>
													<?php echo $key->nama_provinsi ?>
												</td>
												<td>
													<?php echo $key->nama_kontrasepsi ?>
												</td>
												<td>
													<?php echo $key->jumlah_pemakai ?>
												</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>