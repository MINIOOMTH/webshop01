<div class="card p-2">
    
<div class="row mb-2">
    <div class="col">
    <form class="d-flex w-50" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        <?php if (isset($_SESSION['username'])) {?>
        <button class="btn btn-outline-primary ms-2" type="button" data-bs-toggle="modal"
        data-bs-target="#AddProduct"><i class="fa-solid fa-plus"></i></button>
        <?php } ?>
      </form>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-4 g-1">
    <?php 
        $query = mysqli_query($conn, "SELECT * FROM products ORDER BY id DESC");
        while ($row = mysqli_fetch_assoc($query)) {
    ?>
  <div class="col">
    <div class="card h-100 position-relative">
        <div class="ratio ratio-1x1"> 
            <img src="<?= $row['image'] ?>" class="card-img-top object-fit-cover" alt="...">
        </div>
      <div class="card-body">
            
        <h5 class="card-title ">
            <?= $row['title'] ?>
            <?php if ($row['category'] == 'new') { ?>
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger z-3">New
            <span class="visually-hidden">unread messages</span>
        <?php } ?>
        </h5>
        <p class="text_desc">
            <?= $row['com'] ?>
        </p>
        <!-- <p class="text-secondary" style="font-size: 13px;"><i class="fa-solid fa-clock-rotate-left"></i> <?php echo $row['date_pd'] ?></p> -->
      </div>
      <div class="d-flex m-2">
        <a href="?page=view&id=<?= $row['id'] ?>" class="btn btn-success mx-1">Buy $<?php echo $row['price'] ?></a>
        <a href="?page=view&id=<?= $row['id'] ?>" class="btn btn-outline-primary mx-1">View</a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
</div>