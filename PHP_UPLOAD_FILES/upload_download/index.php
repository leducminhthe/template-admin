
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cookie</title>
</head>
<body>
	<fieldset>
		<legend>Upload files</legend>
		<form action="" method="POST" enctype="multipart/form-data">
			User: <input type="file" name="uploadFile" multiple=""><br/>
			<input type="submit" name="submit" value="Upload dữ liệu">
		</form>
		<?php
			if (isset($flag)) {
				?>
				<img src="<?php echo $path . $name  ?>">
				<?php
			}
		?>
	</fieldset>
	

	<?php 
		if (isset($_POST['submit'])) {
			if($_FILES['uploadFile']['name'] != NULL){ // Đã chọn file
				//Kiểm tra định dạng tệp tin
				if($_FILES['uploadFile']['type'] == "image/jpeg" || 
					$_FILES['uploadFile']['type'] == "image/png" || 
					$_FILES['uploadFile']['type'] == "image/gif"
				){
					//Tiếp tục kiểm tra dung lượng
					$maxFileSize = 10 * 10000 * 10000; //MB
					if($_FILES['uploadFile']['size'] > ($maxFileSize * 1000 * 1000)){
						echo 'Tập tin không được vượt quá: '.$maxFileSize.' MB';
					} else {
						//Hợp lệ tiếp tục xử lý Upload
						$path = 'upload/'; //Lưu trữ tập tin vào thư mục: images
						$tmp_name = $_FILES['uploadFile']['tmp_name'];
						$name = $_FILES['uploadFile']['name'];
						$type = $_FILES['uploadFile']['type']; 
						$size = $_FILES['uploadFile']['size']; 
						//Upload file
						move_uploaded_file($tmp_name,$path.$name);
						$flag = true;
						echo 'Tải tập tin thành công !<br />';
						echo 'Tên Tập tin: '.$name.'<br />';
						echo 'Định dạng: '.$type.'<br />';
						echo 'Dung lượng: '.$size.'<br />';
					}
				} else {
					echo 'Tập tin phải là hình ảnh';
				}
			} else {
				echo 'Vui lòng chọn tập tin';
			}
		}
	?>

</body>
</html>