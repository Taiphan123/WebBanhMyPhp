<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="css/loginStyle.css">
</head>
<body>

<?php
session_start();

?>
<?php
$_SESSION["id"] = true;
	if($_SESSION["id"]==true){
		unset($_SESSION["id"]);
		unset($_SESSION["name"]);
	}
	
?>

<?php 

	$conn=mysqli_connect("localhost", "root" , "", "banhmy");
      mysqli_set_charset($conn, "UTF-8");
	// Kiem tra nut Login da bam chua
if (isset($_POST["LoginSubmit"])) {
	// lấy thông tin
	$username = $_POST["UsernameLogin"];
	$password = $_POST["PasswordLogin"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from nguoidung where ten = '$username' and mat_khau = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
			
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["id"] = $data["id"];
				$_SESSION['username'] = $data["ten"];
	    	}
			// dang nhap thanh cong goi trang index
			header('Location: index.php');
		}
	}
}
?>
	<form  class="box" action="login.php" method="POST">

		<h1>Login</h1>
		<input type="text" name="UsernameLogin"placeholder="Username">
		<input type="password" name="PasswordLogin" placeholder="Password">
		<input type="submit" name="LoginSubmit" value="Login">		

		<h2 id="Forget_Username_Password__">
			<span>Forget Username/Password?</span><br>
		</h2>

	</form>

</body>
</html>