<!-- Login -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2 ms-auto" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- END Login -->
<!-- Add Product -->
<div class="modal fade" id="AddProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2 mx-auto" id="exampleModalLabel">Add Product</h1>
      </div>
      <div class="modal-body">
        <form method="POST" action="./components/process.php" id="Check_Ajax">
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="image_product" placeholder="text" required>
            <label for="floatingPassword">รูป</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="name_product" placeholder="text" required>
            <label for="floatingPassword">ชื่อสินค้า</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="price_product" placeholder="text" required>
            <label for="floatingPassword">ราคา</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="link_product" placeholder="text" required>
            <label for="floatingPassword">ลิ้งค์</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="count_product" placeholder="text" required>
            <label for="floatingPassword">จำนวน</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="com_product" placeholder="text" required>
            <label for="floatingPassword">รายละเอียดหน้าสินค้า</label>
          </div>
          <select class="form-select mb-2" name="category_product" aria-label="Default select example">
            <option selected value="null">เลือกประเภท</option>
            <option value="anime">Anime</option>
            <option value="new">New</option>
            <option value="moive">Moive</option>
            <option value="horror">Horror</option>
          </select>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
              style="height: 200px" name="description_product" required></textarea>
            <label for="floatingTextarea2">รายละเอียด</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Add</button>
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- END Add Product -->
<!-- Edit Product -->
<div class="modal fade" id="EditProduct<?= $row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2 mx-auto" id="exampleModalLabel">Edit Product</h1>
      </div>
      <div class="modal-body">
        <form method="GET" action="">
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="image_product" placeholder="text">
            <label for="floatingPassword">ไอดีสินค้า</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="image_product" placeholder="text">
            <label for="floatingPassword">รูป</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="name_product" placeholder="text">
            <label for="floatingPassword">ชื่อสินค้า</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="price_product" placeholder="text">
            <label for="floatingPassword">ราคา</label>
          </div>
          <div class="form-floating mb-2">
            <input type="text" class="form-control" name="link_product" placeholder="text">
            <label for="floatingPassword">ลิ้งค์</label>
          </div><div class="form-floating mb-2">
            <input type="text" class="form-control" name="com_product" placeholder="text">
            <label for="floatingPassword">รายละเอียดหน้าสินค้า</label>
          </div>
          <select class="form-select mb-2" name="category_product" aria-label="Default select example">
            <option selected value="null">เลือกประเภท</option>
            <option value="anime">Anime</option>
            <option value="moive">Moive</option>
            <option value="horror">Horror</option>
          </select>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
              style="height: 200px" name="description_product"></textarea>
            <label for="floatingTextarea2">รายละเอียด</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="add_product" class="btn btn-success">Add</button>
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>
<!-- END Edit Product -->
<!-- ChangePassWord -->
<div class="modal fade" id="ChangePassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2 mx-auto" id="exampleModalLabel">ChangePassword</h1>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">Old Password</span>
                <input type="text" class="form-control" placeholder="รหัสผ่านเดิม" aria-label="old Password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">New Password</span>
                <input type="text" class="form-control" placeholder="รหัสผ่านใหม่" aria-label="new Password" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">New Password confirm</span>
                <input type="text" class="form-control" placeholder="รหัสผ่านใหม่อีกครั้ง" aria-label="new Password" aria-describedby="basic-addon1">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Change</button>
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END ChangePassWord -->
<!-- Profile -->
<div class="modal fade" id="Profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-2 mx-auto" id="exampleModalLabel">Profile</h1>
      </div>
      <div class="modal-body">
        <?php 
            $n_name = $_SESSION['id'];
            $p_data = mysqli_query($conn, "SELECT * FROM users WHERE id = $n_name ");
            $s_data = mysqli_fetch_assoc($p_data);
         ?>
        <form>
          <div class="row">
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">Username</span>
                <input type="text" class="form-control" placeholder="<?php echo $s_data['username'] ?>" aria-label="Username" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">Role</span>
                <input type="text" class="form-control" placeholder="<?php echo $s_data['role'] ?>" aria-label="Role" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">firstname</span>
                <input type="text" class="form-control" placeholder="<?php echo $s_data['firstname'] ?>" aria-label="firstname" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">lastname</span>
                <input type="text" class="form-control" placeholder="<?php echo $s_data['lastname'] ?>" aria-label="lastname" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">email</span>
                <input type="text" class="form-control" placeholder="<?php echo $s_data['email'] ?>" aria-label="email" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group mb-2">
              <span class="input-group-text text-bg-dark" id="basic-addon1">phone</span>
                <input type="text" class="form-control" placeholder="<?php echo $s_data['phone'] ?>" aria-label="phone" aria-describedby="basic-addon1" disabled>
            </div>
            <div class="input-group">
              <span class="input-group-text text-bg-dark" id="basic-addon1">uid</span>
                <input type="text" class="form-control" placeholder="<?php echo $s_data['uid'] ?>" aria-label="uid" aria-describedby="basic-addon1" disabled>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="submit" class="btn btn-primary">Change</button> -->
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- END Profile -->
