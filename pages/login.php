<?php 
    if (isset($_SESSION['username'])) {
        header('location:index.php?page=home');
    } else {
 ?>
 <div class="row">
    <div class="col d-felx flex-column justify-content-center align-items-center">
        <img src="https://as2.ftcdn.net/v2/jpg/05/78/30/37/1000_F_578303738_j637NIZRWlt737PQcNEOmNeWeMAvjkze.jpg" class="d-flex mx-auto rounded w-50 my-3 mx-auto" alt="">
        <div class="card w-50 mx-auto mb-3">
            <div class="card-header text-center fs-2">Login</div>
            <div class="card-body">
                <form class="w-75 mx-auto" method="POST" id="Check_Ajax" action="./components/process.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mx-auto text-center">
                        <button type="button" class="btn btn-outline-secondary m-1">Close</button>
                        <button type="submit" class="btn btn-primary m-1">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php } ?>