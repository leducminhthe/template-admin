<?php
if(isset($_POST["submit"])){
	$mang = $_POST["hoten"];
	for($i=0; $i<count($mang); $i++){
		echo $mang[$i];
	}
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-3.1.0.min.js"></script>
<script>
$(document).ready(function(){
	$("#btnThemFile").click(function(){
		$("#chonFile").append("<br/><input name='hoten[]' type='text' />");	
	});	
});
</script>
</head>

<body>

<form action="" method="post" enctype="multipart/form-data">

<div id="btnThemFile">Thêm file</div>
<div id="chonFile">

<input name="hoten[]" type="text" />
<input name="hoten[]" type="text" />
<input name="hoten[]" type="text" />

</div>

<input name="submit" type="submit" value="Dang ky" />

</form>

</body>
</html>