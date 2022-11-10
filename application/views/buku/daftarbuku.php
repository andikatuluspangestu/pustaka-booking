<?= $this->session->flashdata('pesan'); ?>



<div style="padding: 25px;">

	<div class="x_panel">



		<div class="x_content">



			<!-- Tampilkan semua produk -->

			<div class="row">
				<?php foreach ($buku as $buku) : ?>

					<div class="col-md-2 m-1">
						<div class="card">
							<img src="<?php echo base_url(); ?>assets/img/upload/<?= $buku->image; ?>" class="card-img-top" alt="..." style="max-width:100%; max-height: 100%; height: 200px; width: 180px">
							<div class="card-body">
								<h5 class="card-title"><?= $buku->pengarang ?></h5>
								<p class="card-text">
									<?= substr($buku->tahun_terbit, 0, 4) ?>
								</p>

								<div class="row">
									<div class="col-6">
										<?php
										if ($buku->stok < 1) {
											echo "<i class='btn btn-sm btn-primary'> Booking 0</i>";
										} else {
											echo "<a class='btn btn-sm btn-primary' href='" . base_url('booking/tambahBooking/' . $buku->id) . "'> Booking</a>";
										}
										?>
									</div>
									<div class="col-6">
										<a class="btn btn-warning" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"> Detail</a>
									</div>
								</div>

							</div>
						</div>
					</div>

				<?php endforeach; ?>

				<!-- end looping -->

			</div>

		</div>

	</div>

</div>