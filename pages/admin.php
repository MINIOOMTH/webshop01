<?php 
	$sql = "SELECT * FROM home";
	$query = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($query);
 ?>

<div class="card">
	<div class="card-header fs-1 text-center">Admin Page</div>
	<div class="card-body">
		<div class="row gap-2 justify-content-center d-flex">
			<form method="POST" class="form-control">
				<div class="input-group mb-2">
					<label class="input-group-text text-bg-dark">New</label>
					<input type="" class="form-control w-75" value="<?php echo $row['new'] ?>" name="">
					<select class="form-select" aria-label="Default select example">
						  <option value="true" <?php if ($row['isnew'] == 'true') {
						  	echo "selected";
						  } ?>>เปิด</option>
						  <option value="false" <?php if ($row['isnew'] == 'false') {
						  	echo "selected";
						  } ?>>ปิด</option>
					</select>
				</div>
				<div class="input-group mb-2">
					<label class="input-group-text text-bg-dark">Image 1</label>
					<input type="" class="form-control" value="<?php echo $row['image1'] ?>" name="">
				</div>
				<div class="input-group mb-2">
					<label class="input-group-text text-bg-dark">Image 2</label>
					<input type="" class="form-control" value="<?php echo $row['image2'] ?>" name="">
				</div>
				<div class="input-group mb-2">
					<label class="input-group-text text-bg-dark">Image 3</label>
					<input type="" class="form-control" value="<?php echo $row['image3'] ?>" name="">
				</div>
				<div class="input-group">
					<label class="input-group-text text-bg-dark">Video</label>
					<input type="" class="form-control me-2" value="<?php echo $row['video'] ?>" name="">
					<label class="input-group-text text-bg-dark">date</label>
					<input type="" class="form-control" value="<?php echo $row['date'] ?>" name="">
				</div>
			</form>

		</div>
	</div>
</div>
