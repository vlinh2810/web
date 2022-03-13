<?php
	session_start(); 
	if($_GET['X']=="sp"){	
		$conn = mysqli_connect('localhost', 'root', '', 'quanlidathang') or die('Xin lỗi, database không kết nối được.');
		$id = $_GET['MSHH'];
		$sqlSanPham = "select DuongDan from hanghoa WHERE hanghoa.MSHH =$id; ";
        $querySP = mysqli_query($conn,$sqlSanPham);
        $row = mysqli_fetch_array($querySP, MYSQLI_ASSOC);
        $sanpham = $row['DuongDan'];
		unlink($sanpham);
		$sql = "DELETE FROM `hanghoa` WHERE MSHH=$id;";
		mysqli_query($conn, $sql);
		header('location:ql_sanpham.php');
	}
	if($_GET['X']=="kh"){	
		$conn = mysqli_connect('localhost', 'root', '', 'quanlidathang') or die('Xin lỗi, database không kết nối được.');
		$id = $_GET['MSKH'];
		$sql = "DELETE FROM `khachhang` WHERE MSKH=$id;";
		mysqli_query($conn, $sql);
		header('location:ql_khachhang.php');
	}
	
 ?>
