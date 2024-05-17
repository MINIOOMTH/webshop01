<div class="card text-center mb-3">
    <div class="card-header">ยินดีต้อนรับคุณ </div>
    <div class="card-body d-flex flex-column flex-fill gap-1 flex-row">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
        data-bs-target="#Profile">คิดไม่ออก</button>
        <?php if (isset($_SESSION['username'])) { ?>
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
        data-bs-target="#ChangePassword">เปลื่ยนรหัสผ่าน</button>
        <a class="btn btn-outline-danger" href="index.php?page=cart">Cart</a>
    <?php } ?>
    </div>
</div>
<?php if ($_GET['page'] == 'product') { ?>
<div class="card mb-3">
    <div class="card-header text-center fs-5">ประเภทต่างๆ</div>
    <div class="card-img">
        <img src="https://as2.ftcdn.net/v2/jpg/02/97/79/83/1000_F_297798377_VB9egqGnRKcZxU53wybEHLRnnTrcvlAH.jpg" class="card-img-top" alt="">
    </div>
    <div class="card-body">
        <label for="customRange1" class="form-label">อะไรไม่รู้ๆใส่ๆไว้ก่อ่น</label>
        <input type="range" class="form-range" min="0" max="5" id="customRange1">
        <div class="text-center">
            <div class="row ">
                <div class="col"><a href="" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">หนัง</a></div>
                <div class="col"><a href="" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">อนิเมะ</a></div>
                <div class="col"><a href="" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">วิดีโอ</a></div>
            </div>
            <div class="row">
                <div class="col"><a href="" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">รายการ</a></div>
                <div class="col"><a href="" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">ดัง</a></div>
                <div class="col"><a href="" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">เพลง</a></div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div class="card mb-3">
    <div class="card-img">
        <img src="https://as2.ftcdn.net/v2/jpg/05/20/21/45/1000_F_520214540_53yUlB0DrgQDvZLKWhLQl6ucFJioclkK.jpg" class="card-img-top" alt="">
    </div>
    <div class="card-body">
        <h2>Status</h2>
        <p>ร้านเปิดครับ</p>
        <p>ร้านเปิดครับ</p>
        <p>ร้านเปิดครับ</p>
        <p>ร้านเปิดครับ</p>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header fs-4 text-center">Top Products</div>
    <div class="card-body">
        <ol>
        <?php $top_products_query = mysqli_query($conn, "SELECT title,count FROM products ORDER BY count DESC LIMIT 10");
        while ($top_row = mysqli_fetch_assoc($top_products_query)) { ?>
            <li><?php echo $top_row['title']?> <div class="vr"></div> <?php echo $top_row['count'] ?> วิว</li>
        <?php } ?>
        </ol>
    </div>
</div>
<div class="card">
    <div class="card-header text-center fs-5">Facebook</div>
    <div class="card-body">
       <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdailykurumi&tabs=timeline&width=270&height=800&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="270" height="800" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
</div>