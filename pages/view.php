<?php 
	$_pro_id = $_GET['id'];

	if (isset($_GET['id'])) {
		$sql = "SELECT * FROM products WHERE id = $_pro_id";
		$result = mysqli_query($conn,$sql);
	} else {
		echo 'No Product';
	}

	$data = mysqli_fetch_array($result);
 ?>
 <div class="card">
       <div class="card-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-auto">
                <li class="breadcrumb-item"><a href="index.php?page=home">Home</a></li>
                <li class="breadcrumb-item"><a href="index.php?page=product">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $data['title'] ?></li>
            </ol>
        </nav>
    </div>
    <div class="card-body">
        <img src="<?= $data['image'] ?>" class="img-fluid " class="card-img-top" alt="">
        <h1 class="mt-3"><?= $data['title'] ?></h1>
        <p>Price : <?= $data['price'] ?></p>
        <p>Category : <?= $data['category'] ?></p>
        <p>Com : <?= $data['com'] ?></p>
        <p>link : <a href="<?= $data['link'] ?>" target="_blank"><?= $data['link'] ?></a></p>
        <p>count : <?= $data['count'] ?></p>
        <p>Date : <?= $data['date_pd'] ?></p>
        <p>Description</p>
        <p style="overflow: auto;
                                white-space: pre-wrap;
                                white-space: -moz-pre-wrap;
                                white-space: -pre-wrap;
                                white-space: -o-pre-wrap;
                                word-wrap: break-word;
                            "><?= $data['description'] ?></p>
                            <hr>
                            <form method="POST" action="index.php?cart=add&id=<?php echo $date['id'] ?>">
                                
        <button class="btn btn-dark" type="submit" name="updateview?id=<?= $data['id']; ?>">Add to cart(ไม่มีระบบ)</button>
                            </form>
                            <a href="./components/process.php?id=<?= $data['id']; ?>" id="ssss" class="btn btn-dark">Update</a>
        <button class="btn btn-dark btn-sm">Edit(ไม่มีระบบ)</button>
    </div>
</div> 
<?php 
    if (isset($_POST['testersw'])) {
        $title = 'การแสดงผลผิดพลาด!'; $text = 'กรุณาตรวจสอบการเชื่อมโยงข้อมูล...'; $delay = '3000'; $link = 'shop.php';
        msg_error($title,$text,$delay,$link); 
    }

 ?>