<?php 
	require_once('dbhelp.php');
	if (isset($_POST['manv'])) {
		$manv = $_POST['manv'];
		$sql = 'DELETE FROM NhanVien WHERE MaNV = ' . $manv;
		execute($sql);

		echo "Xoa thanh cong";
	}

	if (isset($_POST['makho'])) {
		$makho = $_POST['makho'];
		$sql = 'DELETE FROM KhoThuoc WHERE MaKho = ' . $makho;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['makhoa'])) {
		$makhoa = $_POST['makhoa'];
		$sql = 'DELETE FROM KhoaDT WHERE MaKhoa = ' . $makhoa;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['mancc'])) {
		$mancc = $_POST['mancc'];
		$sql = 'DELETE FROM NhaCungCap WHERE MaNCC = ' . $mancc;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['mathuoc'])) {
		$mathuoc = $_POST['mathuoc'];
		$sql = 'DELETE FROM Thuoc WHERE MaThuoc = ' . $mathuoc;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['sophieumua'])) {
		$sophieumua = $_POST['sophieumua'];
		$sql = 'DELETE FROM PhieuDatMua WHERE SoPhieuMua = ' . $sophieumua;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['id'])) {
		$id = $_POST['id'];
		$sql = 'DELETE FROM ThuocDatMua WHERE id = ' . $id;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['sophieubaogia'])) {
		$id = $_POST['sophieubaogia'];
		$sql = 'DELETE FROM BangBaoGia WHERE id = ' . $id;
		execute($sql);
		echo "Xoa thanh cong";

	}

	if (isset($_POST['sophieubaogia2'])) {
		$id = $_POST['sophieubaogia2'];
		$sql = 'DELETE FROM ThuocBaoGia WHERE id1 = ' . $id;
		execute($sql);
		echo "Xoa thanh cong";

	}

///
	if (isset($_POST['phieunhap'])) {
		$id = $_POST['phieunhap'];
		$sql = 'DELETE FROM PhieuNhap WHERE id = ' . $id;
		execute($sql);
		echo "Xoa thanh cong";

	}


	if (isset($_POST['thuocnhap'])) {
		$id = $_POST['thuocnhap'];
		$sql = 'DELETE FROM ThuocNhap WHERE id1 = ' . $id;
		execute($sql);
		echo "Xoa thanh cong";

	}

	///
 ?>

