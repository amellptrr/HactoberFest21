<?php 
require_once('../class/Book.php');

if(isset($_POST['tracker'])){
  $tracker = $_POST['tracker'];
  
  $list = $book->getPassengers($tracker);
  // echo '<pre>';
  // 	print_r($list);
  // echo '</pre>';
?>

<table id="" class="table table-bordered table-hover" cellspacing="0" width="100%">
	<thead>
	    <tr>
	        <th>Nama</th>
	        <th><center>Umur</center></th>
	        <th><center>Jenis Kelamin</center></th>
	        <th><center>Harga</center></th>
	    </tr>
	</thead>
	<tbody>
		<?php
			$i = 0;
			$total = 0; 
			foreach($list as $l):
			$total += $l['acc_price']; 
		?>
			<tr>
				<td>
					<input type="hidden" value="<?= $l['book_id']; ?>" id="name<?= $i; ?>">
					<?= ucwords($l['book_name']); ?>
				</td>
				<td align="center"><?= $l['book_age']; ?></td>
				<td align="center"><?= $l['book_gender']; ?></td>
				<input type="hidden" id="price<?= $i; ?>" value="<?= $l['acc_price']; ?>">
				<td align="center">
					<div id="pri<?= $i; ?>">
						<?= $l['acc_price']; ?>
					</div>
				</td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
			<tr>
				<td>
					<input type="hidden" id="i" value="<?= $i; ?>">
				</td>
				<td></td>
				<td></td>
				<td align="right"><strong>TOTAL:</strong></td>
				<td>
					<center>
						<strong>
							<div id="total">
								<?= $total; ?>	
							</div>
						</strong>
					</center>
				</td>
			</tr>
	</tbody>
</table>

<?php
}//end isset
$book->Disconnect();
 ?>

