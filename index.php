<?php 
    session_start();
    include_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $config['title'] ?> | <?php echo ucfirst($_GET['page']) ?></title>
    <?php include_once './components/head.php';include_once ('./components/massage.php'); ?>
                    
</head>
<body>
    <?php include_once './components/navbar.php'?>
    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-9">
                <?php 
                    if ($_GET['page']) {
                        if ($_GET['page'] == 'home') {
                            include_once './pages/home.php';
                        } elseif ($_GET['page'] == 'product') {
                            include_once './pages/product.php';
                        } elseif ($_GET['page'] == 'about') {
                            include_once './pages/about.php';
                        } elseif ($_GET['page'] == 'login') {
                            include_once './pages/login.php';
                        } elseif ($_GET['page'] == 'sginup') {
                            include_once './pages/sginup.php';
                        } elseif ($_GET['page'] == 'admin') {
                            include_once './pages/admin.php';
                        } elseif ($_GET['page'] == 'logout') {
                            include_once './pages/logout.php';
                        } elseif ($_GET['page'] == 'view') {
                            include_once './pages/view.php';
                        } elseif ($_GET['page'] == 'post') {
                            include_once './pages/post.php';
                        } elseif ($_GET['page'] == 'cart') {
                            include_once './pages/cart.php';
                        }
                    } else {header('location:./pages/home.php');}?>
            </div>
            <div class="col-lg-3">
                <?php include_once './components/sidebar.php' ?>
            </div>
        </div>
    </div>
    <?php include_once './components/footer.php';include_once './components/modal.php'; mysqli_close($conn);?>
</body>
</html>