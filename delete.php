<?php session_start(); ?>
<?php include("permission.php");?>
<?php
	$id_xoa = $_GET["id"];
	//mở kết nối CSDL
	$conn = mysqli_connect("localhost","root","","banhmy");
	//require("lib/connect.php");
	$result = mysqli_query($conn,"delete from table_banhmy
						where id = $id_xoa");
	if ($result)
	{
		//xóa thành công
		header("location:about.php");

	}
	else
	{
		echo "xóa thất bại";
	}
?>