<?php
if (session_id() === '') {
    session_start();
}
if(isset($_SESSION['email'])) {
    unset($_SESSION['email']);

    echo'<script>alert("Đăng xuất thành công");</script>';
	echo '<script>location.href = "./index.php";</script>';
}
else {
    echo 'Bạn chưa đăng nhập!'; die;
}
?>