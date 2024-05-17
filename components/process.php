<?php 
	session_start();
	include_once '../config.php';

	if (isset($_POST['name_product'])) {
		$image_pd = $_POST['image_product'];
		$name_pd = $_POST['name_product'];
		$price_pd = $_POST['price_product'];
		$link_pd = $_POST['link_product'];
		$com_pd = $_POST['com_product'];
		$count_pd = $_POST['count_product'];
		$category_pd = $_POST['category_product'];
		$description_pd = $_POST['description_product'];
		$date = date("d/m/Y H:i ");

		$sql = "INSERT INTO products (title,price,com,description,category,image,count,date_pd,link) VALUES ('$name_pd','$price_pd','$com_pd','$description_pd','$category_pd','$image_pd','$count_pd','$date','$link_pd')";

			if ($conn->query($sql) === TRUE) {
				echo json_encode(array("status" => "success", "msg" => "เพิ่มสินค้าเรียบร้อย!!"));
			} else {
				echo json_encode(array("status" => "error", "msg" => "ผิดพลาดดด!!"));

		    }
		$conn->close();
	} elseif (isset($_POST['username'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if (!$username) {
                echo json_encode(array("status" => "error", "msg" => "กรุณาใส่ชื่อผู้ใช้")); 
            } else if (empty($password)) {
                echo json_encode(array("status" => "error", "msg" => "กรุณาใส่รหัสผ่าน"));
            } else {
                $inpassword = md5($password);
                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$inpassword'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                if (mysqli_num_rows($result) == 1) {
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['id'] = $row['id'];
                    echo json_encode(array("status" => "success", "msg" => "เข้าสู่ระบบสําเร็จ"));
                } else {
                    echo json_encode(array("status" => "error", "msg" => "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง"));
                }
            }
        $conn->close();
	} elseif (isset($_POST['sgin_username'])) {
		$su_username = $_POST['sgin_username'];
		$su_email = $_POST['sgin_email'];
		$password_1 = $_POST['sgin_password_1'];
		$password_2 = $_POST['sgin_password_2'];

		if (!$su_username) {
            echo json_encode(array("status" => "error", "msg" => "กรุณาใส่ชื่อผู้ใช้"));
        } elseif (empty($su_email)) {
            echo json_encode(array("status" => "error", "msg" => "กรุณาใส่อีเมล")); 
        }elseif (empty($password_1)) {
            echo json_encode(array("status" => "error", "msg" => "กรุณาใส่รหัสผ่าน"));
        } elseif (empty($password_2)) {
            echo json_encode(array("status" => "error", "msg" => "กรุณายืนยันรหัสผ่าน")); 
        } elseif ($password_1 != $password_2) {
            echo json_encode(array("status" => "error", "msg" => "รหัสผ่านไม่ตรงกัน")); 
        } else {
			$user_check_query = "SELECT * FROM users WHERE username = '$su_username' OR email = '$su_email' LIMIT 1";
			$query = mysqli_query($conn,$user_check_query);
			$result = mysqli_fetch_assoc($query);

			if ($result) {
				if ($result['username'] === $su_username) {
					echo json_encode(array("status" => "error", "msg" => "ชื่อผู้ใช้ถูกใช้งานแล้ว!!"));
				} elseif ($result['email'] === $su_email) {
					echo json_encode(array("status" => "error", "msg" => "Email นี้ถูกใช้งานแล้ว!!"));
				}
			} else {
	        	$password = md5($password_1);
				$sql = "INSERT INTO users (username,password,email) VALUES ('$su_username','$password','$su_email')";

				if ($conn->query($sql) == TRUE) {
					echo json_encode(array("status" => "success", "msg" => "สมัครสำเร็จ!!"));
				} else {
					echo json_encode(array("status" => "error", "msg" => "สมัครไม่สำเร็จ!!"));
				}
			}
			$conn->close();
        }
	} elseif (isset($_POST['websave'])) {
		$text_title = $_POST['TEXT_NEW_HOME'];
		$text_new = $_POST['IS_NEW'];
		$image1 = $_POST['TEXT_IMAGE_1'];
		$image2 = $_POST['TEXT_IMAGE_2'];
		$image3 = $_POST['TEXT_IMAGE_3'];

		if (empty($text_title)) {
			echo json_encode(array("status" => "error", "msg" => "ใส่ข่าวด้วย!!"));
		} elseif (empty($text_new)) {
			echo json_encode(array("status" => "error", "msg" => "เปลื่ยนด้วย!!"));
		} elseif (empty($image1)) {
			echo json_encode(array("status" => "error", "msg" => "ใส่รูป1ด้วย!!"));
		} elseif (empty($image2)) {
			echo json_encode(array("status" => "error", "msg" => "ใส่รูป2วด้วย!!"));
		} elseif (empty($image3)) {
			echo json_encode(array("status" => "error", "msg" => "ใส่รูป3ด้วย!!"));
		} else {
			$sql = "UPDATE `home` SET `new` = $text_title ,`isnew` = $text_new, `image1` = $image1, `image2` = $image2, `image3` = $image3 WHERE id = 1";

			if ($conn->query($sql) == TRUE) {
				echo json_encode(array("status" => "success", "msg" => "เปลื่ยนสำเร็จ!!"));
			} else {
				echo json_encode(array("status" => "error", "msg" => "เปลื่ยนข้อมูลไม่สำเร็จนะ!!"));
			}
			$conn->close();
		}
	} elseif (isset($_GET['id'])) {
		$c_id = $_GET['id'];
		$sql = "UPDATE `products` SET `count` = `count` +1 WHERE `products`.`id` = $c_id";
		$conn->query($sql);
		$conn->close();

	}

 ?>	