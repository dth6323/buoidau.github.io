<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
	$ma = $_GET['ma'];
	require'conect.php';
	$sql = "select * from tin_tuc where ma = $ma";
	$ket_qua = mysqli_query($ket_noi,$sql);
	$tin_tuc = mysqli_fetch_array($ket_qua);
?>
<form method="post" action="update1.php">
	<input type="hidden" name="ma" value="<?php echo $tin_tuc['ma'] ?>">
	Tiêu đề
	<input type="text" name="tieu_de" value="<?php echo $tin_tuc['tieu_de'] ?>">
	<br>
	Nội dung
	<textarea name="noi_dung" >
		<?php echo $tin_tuc['noi_dung'] ?>
	</textarea>
	<br>
	Ảnh
	<input type="text" name="anh" value="<?php echo $tin_tuc['anh']?>">
	<br>
	<button>Sửa</button>

</form>
	</body>
</html>