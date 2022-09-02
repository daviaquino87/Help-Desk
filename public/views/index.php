
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <style>

    .main-content{
	width: 50%;
	border-radius: 20px;
	box-shadow: 0 5px 5px rgba(0,0,0,.4);
	margin: 5em auto;
	display: flex;
}
.company__info{
	background-color: #9400D3;
	border-top-left-radius: 20px;
	border-bottom-left-radius: 20px;
	display: flex;
	flex-direction: column;
	justify-content: center;
	color: #fff;
}
.fa-android{
	font-size:3em;
}
@media screen and (max-width: 640px) {
	.main-content{width: 90%;}
	.company__info{
		display: none;
	}
	.login_form{
		border-top-left-radius:20px;
		border-bottom-left-radius:20px;
	}
}
@media screen and (min-width: 642px) and (max-width:800px){
	.main-content{width: 70%;}
}
.row > h2{
	color:#9400D3;
}
.login_form{
	background-color: #fff;
	border-top-right-radius:20px;
	border-bottom-right-radius:20px;
	border-top:1px solid #ccc;
	border-right:1px solid #ccc;
}
form{
	padding: 0 2em;
}
.form__input{
	width: 100%;
	border:0px solid transparent;
	border-radius: 0;
	border-bottom: 1px solid #aaa;
	padding: 1em .5em .5em;
	padding-left: 2em;
	outline:none;
	margin:1.5em auto;
	transition: all .5s ease;
}
.form__input:focus{
	border-bottom-color: #9400D3;
	box-shadow: 0 0 5px #9400D320;
	border-radius: 4px;
}
.btn{
	transition: all .5s ease;
	width: 70%;
	border-radius: 30px;
	color:#9400D3;
	font-weight: 600;
	background-color: #fff;
	border: 1px solid #9400D3;
	margin-top: 1.5em;
	margin-bottom: 1em;
}
.btn:hover, .btn:focus{
	background-color: #9400D3;
	color:#fff;
}
    </style>
  </head>
  <body>
	<!-- Main Content -->
	<div class="container-fluid">
		<div class="row main-content bg-success text-center">
			<div class="col-md-4 text-center company__info">
				<span class="company__logo"><h2><span class="fa fa-android">
                <img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                </span></h2></span>
				<h4 class="company_title">
                    App Help Dask
                </h4>
			</div>

			<div class="col-md-8 col-xs-12 col-sm-12 login_form ">
				<div class="container-fluid">
					<div class="row">
						<h2 class='mt-4 ml-4'>Login</h2>
					</div>
					<div class="row">
						<form method='post' action='http://localhost/php/HelpDask/services/usuario/login.php' class="form-group">
							<div class="row">
								<input type="email" name="email" id="username" class="form__input" placeholder="E-mail">
							</div>
							<div class="row">
								<!-- <span class="fa fa-lock"></span> -->
								<input type="password" name="password" id="password" class="form__input" placeholder="Senha">
							</div>
							<div class="row">
								<?php if (!empty($_GET) && isset($_GET['Error'])) {?>
									<div class="text-danger">
										Usuario ou senha invalido(s)
									</div>
								<?php }?>
								<input type="submit" value="Entrar" class="btn">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container-fluid text-center footer">
		 todos os diretos reservados &#169;
	</div>
</body>
</html>
