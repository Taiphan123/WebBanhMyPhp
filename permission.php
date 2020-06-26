<?php
if (isset($_SESSION['id']) == false) {
	// kiem tra nguoi dung da dang nhap chua neu chua chuyen ve lai trang danh nhap
	header('Location: http://localhost/ongrut/bakery/login.php');
}
?>