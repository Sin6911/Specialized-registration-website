

<?php
    include_once('views/shares/Header.php')
?>

<ul id="danh-sach">

<main id="main" class="main">

    

	<div class="container">

<h1>ĐĂNG KÝ TÀI KHOẢN</h1>

<form method="post" action = "?r=register">

	<div class="form-group">

		<label for="username">Username</label>

		<input type="text" class="form-control" name="username" id="username" placeholder="Tên đăng nhập">

	</div>

	<div class="form-group">

		<label for="password">Password</label>

		<input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu">

	</div>

	<div class="form-group">

		<label for="confirm_password">Confirm Password</label>

		<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu">

	</div>
	<?php
	if(isset($_SESSION['Error'])){
		echo"<p class='muted'>".$_SESSION['error']."</p>";}
	?>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Dang ky</button>
	</div>

</form>

</div>




<!-- Bootstrap JavaScript and jQuery -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNVeG6j" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</main>
</ul>
<?php
    include_once('views/shares/Footer.php')
?>



























