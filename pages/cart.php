<div class="card">
	<div class="card-header">Cart</div>
	<div class="card-body">
		<?php 
			$q_cart = mysqli_query($conn, "SELECT * FROM cart");
			while ($row = mysqli_fetch_assoc($q_cart)) {
				echo $row['user_id'] .'<br>';
				echo $row['product_id'] . '<br>';
			}

		 ?>
	</div>
</div>