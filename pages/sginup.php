<div class="row">
    <div class="col d-felx flex-column justify-content-center align-items-center">
        <img src="https://as1.ftcdn.net/v2/jpg/06/73/86/84/1000_F_673868434_L8scGV3gnlbhAeHgdbKSwQoTF3L0xTtg.jpg" class="d-flex mx-auto rounded w-50 my-3 mx-auto" alt="">
        <div class="card w-50 mx-auto mb-3">
            <div class="card-header text-center fs-2">Sgin Up</div>
            <div class="card-body">
                <form class="w-75 mx-auto" method="POST" id="Check_Ajax" action="./components/process.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Uername</label>
                        <input type="text" class="form-control" name="sgin_username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="sgin_email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="sgin_password_1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password Confirm</label>
                        <input type="password" class="form-control" name="sgin_password_2">
                    </div>
                    <div class="mx-auto text-center">
                        <button type="button" class="btn btn-outline-secondary m-1">Close</button>
                        <button type="submit" class="btn btn-primary m-1">Sgin Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>