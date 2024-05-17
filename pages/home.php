<div class="card mb-2">
    <div class="card-body">
        <?php
            $newalert = '';
            $isnew = 'false';
            $datetime = '';
            $image_1 = '';
            $image_2 = '';
            $image_3 = '';
            $video = '';

            $query = mysqli_query($conn,"SELECT * FROM home");
            while ($row = mysqli_fetch_array($query)) {
                $newalert = $row['new'];
                $datetime = $row['date'];
                $isnew = $row['isnew'];
                $image_1 = $row['image1'];
                $image_2 = $row['image2'];
                $image_3 = $row['image3'];
                $video = $row['video'];
            } 
        ?>
            <?php if ($isnew !== 'false') { ?>
        <div class="alert alert-success" role="alert">
            <i class="fa-solid fa-bullhorn"></i> ประกาศ : <?= $newalert ?>
        </div>
        <?php } ?>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ratio ratio-16x9 rounded ">
                <div class="carousel-item active">
                    <img src="<?= $image_1 ? $image_1 : 'https://as1.ftcdn.net/v2/jpg/03/08/13/12/1000_F_308131267_unLRF2JmPsjjXgrMRaFA3aEnrKa9aUxK.jpg'; ?>"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= $image_2 ? $image_2 : 'https://as1.ftcdn.net/v2/jpg/03/08/13/12/1000_F_308131267_unLRF2JmPsjjXgrMRaFA3aEnrKa9aUxK.jpg'; ?>"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= $image_3 ? $image_3 : 'https://as1.ftcdn.net/v2/jpg/03/08/13/12/1000_F_308131267_unLRF2JmPsjjXgrMRaFA3aEnrKa9aUxK.jpg'; ?>"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<div class="card mb-2">
        <div class="card-header">
         <h1 class="text-center">New Porducts</h1>
        </div>
    <div class="card-body">
        <div class="row row-cols-1 row-cols-md-4 g-1">
            <?php 
                $_query = mysqli_query($conn, "SELECT * FROM products ORDER BY id DESC LIMIT 4");
                while ($_row = mysqli_fetch_assoc($_query)) {
            ?>
          <div class="col">
            <div class="card h-100">
                <div class="ratio ratio-1x1"> 
                    <img src="<?= $_row['image'] ?>" class="card-img-top object-fit-cover" alt="...">
                </div>
              <div class="card-body text-center">
                <h5 class="card-title"><?= $_row['title'] ?></h5>
                <p class="text_desc">
                    <?= $_row['com'] ?>
                    <br>
                    $<?= $_row['price'] ?>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
    </div>
</div>
<div class="card ">
        <div class="card-header"><h1 class="text-center">Video</h1></div>
    <div class="card-body">
        <div class="ratio ratio-16x9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>