<div class="modal fade" id="modal-view-pass">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Daftar Penumpang</h4>
			</div>
			<div class="modal-body">
			<center>
				<strong>Nama: </strong><span id="book-by"></span> <br />
				<strong>Tanggal Keberangkatan: </strong><span id="date"></span> <br />
				<strong>No. Telepon: </strong><span id="contact"></span> <br />
				<strong>Alamat: </strong><span id="address"></span><br />
			</center>
				<br />
				<div id="passenger-list">
					
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" onclick="addTransaction();" class="btn btn-success accept-pay"> Terima Pembayaran
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				</button>
			</div>
		</div>
	</div>
</div>