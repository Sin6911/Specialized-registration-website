<?php
    include_once('views/shares/Header.php')
?>
	<div id="main" class="main">
		<form method = "post" action="?r=add">
			<div class="form-group">
				<label for="hoten">Họ tên:</label>
				<input type="text" class="form-control" name="hoten" placeholder="Nhập họ tên">
			</div>
			<div class="form-group">
				<label for="lop">Lớp:</label>
				<input type="text" class="form-control" name="lop" placeholder="Nhập lớp">
			</div>
			<div class="form-group">
				<label for="chuyennganh">Chuyên ngành:</label>
				<input type="text" class="form-control" name="chuyennganh" placeholder="Nhập chuyên ngành">
			</div>
			<div class="form-group">
				<label for="mssv">MSSV:</label>
				<input type="text" class="form-control" name="mssv" placeholder="Nhập MSSV">
			</div>
			<button type="submit" class="btn btn-primary">Dang Ky</button>
		</form>
	</div>
	<?php
    include_once('views/shares/Footer.php')
?>
