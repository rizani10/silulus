</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Muhammad Faisal Rizani <?= date('Y'); ?> </span>
		</div>
	</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->

<script>
	$(document).ready(function() {
		$("#table").dataTable({
			reponsive: true,
			pageLength: 10,
			"lengthMenu": [
				[10, 25, 50, -1],
				[10, 25, 50, "All"]
			],
			"language": {
				url: "https://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json"
			}
		});
	});
</script>

<script>
	$(function() {
		$("#tgl_pengumuman").datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'yy-mm-dd'
		});
	});
</script>

<script>
	$(function() {
		$("#tgl").datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'yy-mm-dd'
		});
	});
</script>

<script>
	$(function() {
		$("#tgl_keluar").datepicker({
			changeMonth: true,
			changeYear: true,
			dateFormat: 'yy-mm-dd'
		});
	});
</script>

<script>
	$('button[id="btnDisable"]').prop('disabled', true);
	$('#btEnable').click(function() {
		$("input").removeAttr('readonly');
		$('button[type="submit"]').removeAttr('disabled');
	})
	$('#tambah').click(function() {
		$('button[type="submit"]').removeAttr('disabled');
	});
</script>


<script>
	$(document).ready(function() { // Ketika halaman sudah siap (sudah selesai di load)
		$("#check-all").click(function() { // Ketika user men-cek checkbox all
			if ($(this).is(":checked")) // Jika checkbox all diceklis
				$(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
			else // Jika checkbox all tidak diceklis
				$(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
		});

		$("#btn-delete").click(function() { // Ketika user mengklik tombol delete
			var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi

			if (confirm) // Jika user mengklik tombol "Ok"
				$("#form-delete").submit(); // Submit form
		});
	});
</script>

</body>

</html>